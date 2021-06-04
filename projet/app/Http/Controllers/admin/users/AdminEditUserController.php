<?php

namespace App\Http\Controllers\admin\users;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class AdminEditUserController extends AdminUsersController
{
    public function editUser(Request $request) {
        $user= User::where('id', '=', $request->id)->firstOrFail();
        $roles= Role::all();
        return view('admin.users.editUser', ['user' => $user, 'roles'=> $roles]);
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
        $user->role_id = $request->role;
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
}
