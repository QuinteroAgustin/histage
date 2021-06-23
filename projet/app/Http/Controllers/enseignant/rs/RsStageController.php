<?php

namespace App\Http\Controllers\enseignant\rs;

use App\Models\Anneescolaire;
use App\Models\Contact;
use App\Models\Eleve;
use App\Models\Enseignant;
use App\Models\Stage;
use App\Models\User;
use Illuminate\Http\Request;

class RsStageController extends RsController
{
    public function createStage(){
        $anneesScolaires = Anneescolaire::all();
        $users=User::all();
        $eleves = Eleve::all();
        $enseignants = Enseignant::all();
        $contacts = Contact::all();
        return view('enseignants.rs.stage.createStage', ['anneesScolaires' => $anneesScolaires, 'users'=>$users, "eleves"=>$eleves, "enseignants"=>$enseignants, "contacts"=> $contacts]);
    }

    public function createStagePost(Request $request){
        if(strlen($request->titreStage) > 3){
            if(strlen($request->descriptionStage) > 3){
                if(isset($request->dateDebutStage)){
                    if(isset($request->dateFinStage)){
                        if(strlen($request->dureeStage) > 0){
                            $stage = new Stage();
                            $stage->titreStage = $request->titreStage;
                            $stage->descriptifStage = $request->descriptionStage;
                            $stage->dateDebutStage = $request->dateDebutStage;
                            $stage->dateFinStage = $request->dateFinStage;
                            $stage->dureeHebdoStage = $request->dureeStage;
                            $stage->anneescolaire_id = $request->anneeScolaire_id;
                            $contact = Contact::find($request->contact_id);
                            $stage->entreprise_id = $contact->entreprise->id;
                            $stage->save();
                            $stage = Stage::find($stage->id);;
                            $stage->users()->attach($request->contact_id);
                            $stage->users()->attach($request->eleve_id);
                            $stage->users()->attach($request->enseignant_id);
                            $stage->save();
                            $request->session()->put('messages', ['Succes'=>'Le Stage a été créer avec succès.']);
                            return redirect()->route('pannelRs');
                        }
                    }
                }
            }
        }
        $request->session()->put('messages', ['Erreur'=>'Le Stage manque d\'informations.']);
        return redirect()->route('createStage');
    }
}
