<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Indicateur;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function pannel() {

        $users=User::all();
        return view('admin.pannel', ['users'=>$users]);
    }

    public function editUser(Request $request) {
        $user= User::where('id', '=', $request->id)->firstOrFail();
        return view('admin.editUser', ['user' => $user]);
    }

    public function editUserPost(Request $request){
        $user= User::find($request->id);
        if($request->email != $user->emailUser){
            if(count(User::where('emailUser', '=', $request->email)->get()) < 1){
                $user->emailUser = $request->email;
            }else{
                $request->session()->put('messages', ['Erreur'=>'L\'email '.$request->email.' existe déjà.']);
            }
        }
        $user->nomUser = $request->nom;
        $user->prenomUser = $request->prenom;
        $user->telephoneUser = $request->telephone;
        $user->mobileUser = $request->mobile;
        $user->titreUser = $request->titre;
        $user->updated_at = now();
        $user->save();
        $request->session()->put('messages', ['Succes'=>'Utilisateur '.$request->email.' édité avec succès.']);
        return redirect()->route('pannelAdmin');
    }

    public function editUserPasswordPost(Request $request){
        $user= User::find($request->id);
        if($request->password === $request->repassword){
            if(strlen($request->password) > 8 ){
                $password = password_hash($request->password, PASSWORD_BCRYPT);
                $user->passwordUser = $password;
                $user->save();
                $request->session()->put('messages', ['Succes'=>'Mot de passe de '.$user->emailUser.' moddifié avec succès.']);
                return redirect()->route('pannelAdmin');
            }else{
                $request->session()->put('messages', ['Erreur'=>'Mot de passe trop court.']);
            }
        }else{
            $request->session()->put('messages', ['Erreur'=>'Les deux nouveaux mots de passe ne correspondent pas.']);
        }
        return redirect()->route('editUser', ['id' => $user->id]);
    }

    public function createUser(){
        $roles = Role::all();
        return view('admin.createUser', ['roles' => $roles]);
    }

    public function createUserPost(Request $request){
        if(isset($request->nom) && isset($request->prenom) && isset($request->email) && isset($request->titre) && isset($request->role)){
            $user = new User;
            $user->nomUser = $request->nom;
            $user->prenomUser = $request->prenom;
            if(count(User::where('emailUser', '=', $request->email)->get()) < 1){
                $user->emailUser = $request->email;
            }else{
                $request->session()->put('messages', ['Erreur'=>'L\'email '.$request->email.' existe déjà.']);
                return redirect()->route('createUser');
            }
            $user->passwordUser = password_hash('abcd1234*', PASSWORD_BCRYPT);;
            $user->titreUser = $request->titre;
            $user->role_id = $request->role;
            if(isset($request->telephone)){
                $user->telephoneUser = $request->telephone;
            }
            if(isset($request->mobile)){
                $user->mobileUser = $request->mobile;
            }
            $user->save();
            $request->session()->put('messages', ['Succes'=>'L\'utilisateur '.$request->email.' à été créer avec succès.']);
            return redirect()->route('pannelAdmin');
        }else{
            $request->session()->put('messages', ['Erreur'=>'Tous les champs obligatoires n\'ont pas été remplis.']);
        }
        return redirect()->route('createUser');
    }
}
