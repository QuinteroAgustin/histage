<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function inscription()
    {
        return view('users.inscription');
    }

    public function connexion()
    {
        return view('users.connexion');
    }

    public function connexionPost(Request $request)
    {
        if(User::where('emailUser','=', $request->email)->exists())
        {
            $password = User::where('emailUser','=', $request->email)->firstOrFail('passwordUser')->passwordUser;
            if(password_verify($request->password, $password)){
                $credentials = User::where('emailUser', '=', $request->email)->firstOrFail();
                $request->session()->put('user', $credentials);
                $request->session()->put('messages', ['Success'=>'Connexion réussi avec succès.']);
                return redirect()->route('profil');
            }else{
                $request->session()->put('messages', ['Erreur'=>'Votre mot de passe est incorrect.']);
            }
        }else{
            $request->session()->put('messages', ['Erreur'=>'Votre adresse mail est incorrect.']);
        }
        return redirect()->route('connexion');
        
    }

    public function profil(Request $request)
    {
        $user = $request->session()->get('user');
        return view('users.profil', ['user' => $user]);
    }

    public function editpassword(Request $request)
    {
        return view('users.editpassword');
    }
    
    public function editpasswordPost(Request $request)
    {
        $id = $request->session()->get('user')->id;
        if(password_verify($request->lastpassword, User::where('id','=',$id)->firstOrFail()->passwordUser)){
            if($request->password === $request->repassword){
                if(strlen($request->password) > 8 ){
                    $password = password_hash($request->password, PASSWORD_BCRYPT);
                    $user = User::find($id);
                    $user->passwordUser = $password;
                    $user->save();
                    $request->session()->put('messages', ['Succes'=>'Mot de passe moddifié avec succès.']);
                    return redirect()->route('profil');
                }else{
                    $request->session()->put('messages', ['Erreur'=>'Mot de passe trop court.']);
                }
            }else{
                $request->session()->put('messages', ['Erreur'=>'Vos deux nouveaux mots de passe ne correspondent pas.']);
            }
        }else{
            $request->session()->put('messages', ['Erreur'=>'Votre ancien mot de passe est incorrect.']);
        }
        return redirect()->route('editpassword');
    }

    public function deconnexion(Request $request)
    {
        $request->session()->forget('user');
        $request->session()->put('messages', ['Succes'=>'Déconnexion avec succès.']);
        return redirect()->route('home');
    }
}
