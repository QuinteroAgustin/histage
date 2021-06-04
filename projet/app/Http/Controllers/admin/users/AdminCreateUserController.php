<?php

namespace App\Http\Controllers\admin\users;

use App\Models\Contact;
use App\Models\Eleve;
use App\Models\Enseignant;
use App\Models\Role;
use App\Models\User;
use App\Models\Section;
use Illuminate\Http\Request;

class AdminCreateUserController extends AdminUsersController
{
    public function createUser(){
        $roles = Role::all();
        return view('admin.users.createUser', ['roles' => $roles]);
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
            $id_user= User::where('emailUser', $request->email)->first()->id;
            if($request->role == 1){//admin
                $request->session()->put('messages', ['Succes'=>'']);
            }elseif($request->role == 2){//enseignant
                $props = New Enseignant;
                $props->id = $id_user;
                $props->save();
            }elseif($request->role == 3){//Eleve
                $request->session()->put('messages', ['Succes'=>'L\'utilisateur '.$request->email.' a été créer avec succès.']);
                return redirect()->route('createUserEleve', ['id' => $id_user]);
            }elseif($request->role == 4){//contact
                $props = New Contact;
                $props->id = $id_user;
                $props->save();
            }else{
                User::find($id_user)->delete();
                $request->session()->put('messages', ['Erreur'=>'Le rôle n\'existe pas.']);
                return redirect()->route('createUser');
            }
            $request->session()->put('messages', ['Succes'=>'L\'utilisateur '.$request->email.' a été créer avec succès.']);
            return redirect()->route('pannelAdmin');
        }else{
            $request->session()->put('messages', ['Erreur'=>'Tous les champs obligatoires n\'ont pas été remplis.']);
        }
        return redirect()->route('createUser');
    }

    public function createUserEleve(Request $request){
        $user=User::find($request->id);
        $sections = Section::all();
        return view('admin.users.createUserEleve', ['user' => $user, 'sections' => $sections]);
    }

    public function createUserElevePost(Request $request){
        $eleve = new Eleve;
        $eleve->id = $request->id;
        $eleve->dateNaissanceEleve = $request->datenaissance;
        $eleve->dateRentreeEleve = $request->daterentree;
        $eleve->numAdrEleve = $request->numAdr;
        $eleve->villeAdrEleve = $request->villeAdr;
        $eleve->libAdrEleve = $request->libAdr;
        $eleve->codePostalAdrEleve = $request->codePostalAdr;
        $eleve->section_id = $request->section;
        $eleve->save();
        $request->session()->put('messages', ['Succes'=>'L\'élève a été créer avec succès.']);
        return redirect()->route('pannelAdmin');
    }
}
