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
                return redirect()->route('profil');
            }else{
                $request->session()->put('messages', ['Mot de passe'=>'Votre mot de passe est incorrect.']);
            }
        }else{
            $request->session()->put('messages', ['Email'=>'Votre adresse mail est incorrect.']);
        }
        return redirect()->route('connexion');
        
    }

    public function profil(Request $request)
    {
        $user = $request->session()->get('user');
        return view('users.profil', ['user' => $user]);
    }

    public function deconnexion(Request $request)
    {
        $request->session()->forget('user');
        return redirect()->route('home');
    }
}
