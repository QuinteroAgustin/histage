<?php

namespace App\Http\Controllers;

use App\Models\Anneescolaire;
use App\Models\Contact;
use App\Models\Eleve;
use App\Models\Enseignant;
use App\Models\Role;
use App\Models\User;
use App\Models\Indicateur;
use App\Models\Section;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function pannel() {

        $users=User::all();
        $roles=Role::all();
        $annees=Anneescolaire::all();
        $sections=Section::all();
        return view('admin.pannel', ['users'=>$users,'roles'=>$roles,'annees'=>$annees,'sections'=>$sections]);
    }

    public function editUser(Request $request) {
        $user= User::where('id', '=', $request->id)->firstOrFail();
        $roles= Role::all();
        return view('admin.editUser', ['user' => $user, 'roles'=> $roles]);
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
        return view('admin.createUserEleve', ['user' => $user, 'sections' => $sections]);
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

    public function createRole(){
        return view('admin.createRole');
    }

    public function createRolePost(Request $request){
        if(strlen($request->libRole)>2){
            if(count(Role::where('libRole', '=', $request->libRole)->get()) < 1){
                $role=new Role;
                $role->libRole = $request->libRole;
                $role->save();
                $request->session()->put('messages', ['Succes'=>'Le role '.$request->libRole.' a été créer avec succès.']);
            }else{
                $request->session()->put('messages', ['Erreur'=>'Le role '.$request->libRole.' existe déjà.']);
            }
        }else{
            $request->session()->put('messages', ['Erreur'=>'Nom du role trop court.']);
        }
        return redirect()->route('pannelAdmin');
    }

    public function editRole(Request $request){
        $role= Role::find($request->id);
        return view('admin.editRole',['role'=>$role]);
    }

    public function editRolePost(Request $request){
        $role= Role::find($request->id);
        if(strlen($request->libRole)>2){
            if(count(Role::where('libRole', '=', $request->libRole)->get()) < 1){
                $role->libRole = $request->libRole;
                $role->save();
                $request->session()->put('messages', ['Succes'=>'Le role '.$request->libRole.' a été modifier avec succès.']);
                return redirect()->route('pannelAdmin');
            }else{
                $request->session()->put('messages', ['Erreur'=>'Le role '.$request->libRole.' existe déjà.']);
            }
        }else{
            $request->session()->put('messages', ['Erreur'=>'Nom du role trop court.']);
        }
        return redirect()->route('editRole',['id'=>$role->id]);
    }

    public function createAnneeScolaire(){
        return view('admin.createAnneeScolaire');
    }

    public function createAnneeScolairePost(Request $request){
        if(strlen($request->libAnneeScolaire)>2){
            if(count(Anneescolaire::where('libAnneeScolaire', '=', $request->libAnneeScolaire)->get()) < 1){
                $annee=new Anneescolaire;
                $annee->libAnneeScolaire = $request->libAnneeScolaire;
                $annee->save();
                $request->session()->put('messages', ['Succes'=>'L\'année '.$request->libAnneeScolaire.' a été créer avec succès.']);
            }else{
                $request->session()->put('messages', ['Erreur'=>'L\'année '.$request->libAnneeScolaire.' existe déjà.']);
            }
        }else{
            $request->session()->put('messages', ['Erreur'=>'Nom de l\'année est trop court.']);
        }
        return redirect()->route('pannelAdmin');
    }

    public function editAnneeScolaire(Request $request){
        $annee = Anneescolaire::find($request->id);
        return view('admin.editAnneeScolaire', ['annee' => $annee]);
    }

    public function editAnneeScolairePost(Request $request){
        $annee= Anneescolaire::find($request->id);
        if(strlen($request->libAnneeScolaire)>8){
            if(count(Anneescolaire::where('libAnneeScolaire', '=', $request->libAnneeScolaire)->get()) < 1){
                $annee->libAnneeScolaire = $request->libAnneeScolaire;
                $annee->save();
                $request->session()->put('messages', ['Succes'=>'L\'année '.$request->libAnneeScolaire.' a été modifier avec succès.']);
                return redirect()->route('pannelAdmin');
            }else{
                $request->session()->put('messages', ['Erreur'=>'L\'année '.$request->libAnneeScolaire.' existe déjà.']);
            }
        }else{
            $request->session()->put('messages', ['Erreur'=>'La date est trop courte.']);
        }
        return redirect()->route('editAnneeScolaire',['id'=>$annee->id]);
    }

    public function createSection(){
        return view('admin.createSection');
    }

    public function createSectionPost(Request $request){
        if(strlen($request->libSection)>1){
            if(count(Section::where('libSection', '=', $request->libSection)->get()) < 1){
                $section=new Section;
                $section->libSection = $request->libSection;
                $section->save();
                $request->session()->put('messages', ['Succes'=>'La section '.$request->libSection.' a été créer avec succès.']);
            }else{
                $request->session()->put('messages', ['Erreur'=>'La section '.$request->libSection.' existe déjà.']);
            }
        }else{
            $request->session()->put('messages', ['Erreur'=>'Nom de la section est trop courte.']);
        }
        return redirect()->route('pannelAdmin');
    }

    public function editSection(Request $request){
        $section = Section::find($request->id);
        return view('admin.editSection', ['section' => $section]);
    }

    public function editSectionPost(Request $request){
        $section= Section::find($request->id);
        if(strlen($request->libSection)>1){
            if(count(Section::where('libSection', '=', $request->libSection)->get()) < 1){
                $section->libSection = $request->libSection;
                $section->save();
                $request->session()->put('messages', ['Succes'=>'La section '.$request->libSection.' a été modifier avec succès.']);
                return redirect()->route('pannelAdmin');
            }else{
                $request->session()->put('messages', ['Erreur'=>'La section '.$request->libSection.' existe déjà.']);
            }
        }else{
            $request->session()->put('messages', ['Erreur'=>'La section est trop courte.']);
        }
        return redirect()->route('editSection',['id'=>$section->id]);
    }
}
