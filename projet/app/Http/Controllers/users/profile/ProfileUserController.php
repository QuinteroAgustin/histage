<?php

namespace App\Http\Controllers\users\profile;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\users\UserController;


class ProfileUserController extends UserController
{
    public function profil(Request $request)
    {
        $user = $request->session()->get('user');
        return view('users.profil', ['user' => $user]);
    }

    public function editpassword()
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
}
