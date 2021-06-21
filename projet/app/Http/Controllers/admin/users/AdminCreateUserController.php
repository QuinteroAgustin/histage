<?php

namespace App\Http\Controllers\admin\users;

use App\Models\Contact;
use App\Models\Eleve;
use App\Models\Enseignant;
use App\Models\Entreprise;
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
                $request->session()->put('messages', ['Succes'=>'L\'utilisateur '.$request->email.' a été créer avec succès.']);
                return redirect()->route('createUserEnseignant', ['id' => $id_user]);
            }elseif($request->role == 3){//Eleve
                $request->session()->put('messages', ['Succes'=>'L\'utilisateur '.$request->email.' a été créer avec succès.']);
                return redirect()->route('createUserEleve', ['id' => $id_user]);
            }elseif($request->role == 4){//contact
                $request->session()->put('messages', ['Succes'=>'L\'utilisateur '.$request->email.' a été créer avec succès.']);
                return redirect()->route('createUserContact', ['id' => $id_user]);
            }else{
                User::find($id_user)->delete();//si aucun role existe l'user et supprimé
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
    /*
    / Creation d'un élève :
    */
    public function createUserEleve(Request $request){
        $user=User::find($request->id);
        $sections = Section::all();
        return view('admin.users.createUserEleve', ['user' => $user, 'sections' => $sections]);
    }
    /*
    / Creation d'un élève retour du formulaire ( le post ) :
    */
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

    /*
    / Creation d'un enseignant :
    */
    public function createUserEnseignant(Request $request){
        $user=User::find($request->id);
        $sections = Section::all();
        return view('admin.users.createUserEnseignant', ['user' => $user, 'sections' => $sections]);
    }

    /*
    / Creation d'un enseignant retour du formulaire ( post ) :
    */
    public function createUserEnseignantPost(Request $request){
        $enseignant = New Enseignant;
        $enseignant->id = $request->id;
        $enseignant->libMetierEnseignant = $request->ligMetier;
        $enseignant->save();
        $user = Enseignant::find($request->id);
        $user->sections()->attach($request->section, ['isRs' => $request->isRs]);
        $user->save();
        $request->session()->put('messages', ['Succes'=>'L\'enseignant a été créer avec succès.']);
        return redirect()->route('pannelAdmin');
    }

    /*
    / Creation d'un contact retour du formulaire :
    */
    public function createUserContact(Request $request){
        $user=User::find($request->id);
        $entreprises = Entreprise::all();
        return view('admin.users.createUserContact', ['user' => $user, 'entreprises' => $entreprises]);
    }

    /*
    / Creation d'un contact retour du formulaire ( post ) :
    */
    public function createUserContactPost(Request $request){
        $contact = New Contact;
        $contact->id = $request->id;
        $contact->statusContact = $request->statusContact;
        $contact->fonctionContact = $request->fonctionContact;
        $contact->entreprise_id = $request->entreprise_id;
        $contact->save();
        $request->session()->put('messages', ['Succes'=>'Le Contact a été créer avec succès.']);
        return redirect()->route('pannelAdmin');
    }
}
 /**
         *$user= Enseignant::find(11);
         *$user->sections()->attach(3, ['isRs' => 0]);
         *$user->save();
         */
