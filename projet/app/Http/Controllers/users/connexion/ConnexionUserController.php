<?php

namespace App\Http\Controllers\users\connexion;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\users\UserController;


class ConnexionUserController extends UserController
{
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

    public function deconnexion(Request $request)
    {
        $request->session()->forget('user');
        $request->session()->put('messages', ['Succes'=>'Déconnexion avec succès.']);
        return redirect()->route('home');
    }
}
