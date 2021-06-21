<?php

namespace App\Http\Controllers\admin\users;

use App\Models\Contact;
use App\Models\Eleve;
use App\Models\Enseignant;
use App\Models\Entreprise;
use App\Models\Role;
use App\Models\Section;
use App\Models\User;
use Illuminate\Http\Request;

class AdminEditUserController extends AdminUsersController
{
    public function editUser(Request $request) {
        $user= User::where('id', '=', $request->id)->firstOrFail();
        if($user->role_id == 2){
            if(Enseignant::where('id','=', $user->id)->first() == null){
                return redirect()->route('createUserEnseignant', ['id' => $user->id]);
            }
        }elseif($user->role_id == 3){
            if(Eleve::where('id','=', $user->id)->first() == null){
                return redirect()->route('createUserEleve', ['id' => $user->id]);
            }
        }elseif($user->role_id == 4){
            if(Contact::where('id','=', $user->id)->first() == null){
                return redirect()->route('createUserContact', ['id' => $user->id]);
            }
        }
        $roles= Role::all();
        return view('admin.users.editUser', ['user' => $user, 'roles'=> $roles]);
    }

    public function editUserPost(Request $request){
        $user= User::find($request->id);
        $user_save = $user->role_id;
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
        $id_user=$user->id;
        if($request->role == 1){//admin
            if($user_save == $request->role){
                $request->session()->put('messages', ['Succes'=>'']);
            }else{
                if($user_save->role_id == 2){
                    Enseignant::find($id_user)->delete();
                }elseif($user_save->role_id == 3){
                    Eleve::find($id_user)->delete();
                }elseif($user_save->role_id == 4){
                    Contact::find($id_user)->delete();
                }else{
                    $request->session()->put('messages', ['Erreur'=>'Le rôle n\'existe pas.']);
                    return redirect()->route('editUser', ['id'=>$id_user]);
                }
            }
        }elseif($request->role == 2){//enseignant
            if($user_save == $request->role){
                $request->session()->put('messages', ['Succes'=>'L\'utilisateur '.$request->email.' a été édité avec succès.']);
                return redirect()->route('editUserEnseignant', ['id' => $id_user]);
            }else{
                $request->session()->put('messages', ['Succes'=>'L\'utilisateur '.$request->email.' a été édité avec succès.']);
                if($user_save == 2){
                    Enseignant::find($id_user)->delete();
                }elseif($user_save == 3){
                    Eleve::find($id_user)->delete();
                }elseif($user_save == 4){
                    Contact::find($id_user)->delete();
                }else{
                    $request->session()->put('messages', ['Erreur'=>'Le rôle n\'existe pas.']);
                    return redirect()->route('editUser', ['id'=>$id_user]);
                }
                return redirect()->route('createUserEnseignant', ['id' => $id_user]);
            }
        }elseif($request->role == 3){//Eleve
            if($user_save == $request->role){
                $request->session()->put('messages', ['Succes'=>'L\'utilisateur '.$request->email.' a été édité avec succès.']);
                return redirect()->route('editUserEleve', ['id' => $id_user]);
            }else{
                $request->session()->put('messages', ['Succes'=>'L\'utilisateur '.$request->email.' a été édité avec succès.']);
                if($user_save == 2){
                    Enseignant::find($id_user)->delete();
                }elseif($user_save == 3){
                    Eleve::find($id_user)->delete();
                }elseif($user_save == 4){
                    Contact::find($id_user)->delete();
                }else{
                    $request->session()->put('messages', ['Erreur'=>'Le rôle n\'existe pas.']);
                    return redirect()->route('editUser', ['id'=>$id_user]);
                }
                return redirect()->route('createUserEleve', ['id' => $id_user]);
            }
        }elseif($request->role == $request->role){//contact
            if($user_save == 4){
                $request->session()->put('messages', ['Succes'=>'L\'utilisateur '.$request->email.' a été édité avec succès.']);
                return redirect()->route('editUserContact', ['id' => $id_user]);
            }else{
                $request->session()->put('messages', ['Succes'=>'L\'utilisateur '.$request->email.' a été édité avec succès.']);
                if($user_save == 2){
                    Enseignant::find($id_user)->delete();
                }elseif($user_save == 3){
                    Eleve::find($id_user)->delete();
                }elseif($user_save == 4){
                    Contact::find($id_user)->delete();
                }else{
                    $request->session()->put('messages', ['Erreur'=>'Le rôle n\'existe pas.']);
                    return redirect()->route('editUser', ['id'=>$id_user]);
                }
                return redirect()->route('createUserContact', ['id' => $id_user]);
            }
        }else{
            User::find($id_user)->delete();//si aucun role existe l'user et supprimé
            $request->session()->put('messages', ['Erreur'=>'Le rôle n\'existe pas.']);
            return redirect()->route('editUser', ['id'=>$id_user]);
        }
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

    public function editUserEleve(Request $request){
        $user = User::find($request->id);
        $eleve = Eleve::find($request->id);
        $sections = Section::all();
        return view('admin.users.editUserEleve', ['user' => $user, 'eleve'=> $eleve, 'sections' => $sections]);

    }
    public function editUserElevePost(Request $request){

    }

    public function editUserEnseignant(Request $request){
        $user = User::find($request->id);
        $enseignant = Enseignant::find($request->id);
        $sections = Section::all();
        return view('admin.users.editUserEnseignant', ['user' => $user, 'enseignant'=> $enseignant, 'sections' => $sections]);
    }
    public function editUserEnseignantPost(Request $request){
        $enseignant = Enseignant::find($request->id);
        $enseignant->libMetierEnseignant = $request->ligMetier;
        foreach($enseignant->sections as $item){
            foreach($request->all() as $key=>$val){
                if($key == 'section_'.$item->pivot->id){
                    $item->pivot->section_id = $val;
                }
            }
            foreach($request->all() as $key=>$val){
                if($key == 'isRs_'.$item->pivot->id){
                    $item->pivot->isRs = $val;
                }
            }
            $item->push();
        }
        $enseignant->save();
        $request->session()->put('messages', ['Succes'=>'L\'enseignant à été modifier avec succès.']);
        return redirect()->route('pannelAdmin');
    }

    public function editUserContact(Request $request){
        $user = User::find($request->id);
        $contact = Contact::find($request->id);
        $entreprises = Entreprise::all();
        return view('admin.users.editUserContact', ['user' => $user, 'contact'=> $contact, 'entreprises' => $entreprises]);
    }
    public function editUserContactPost(Request $request){

    }
}
