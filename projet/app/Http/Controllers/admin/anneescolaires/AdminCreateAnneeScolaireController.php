<?php

namespace App\Http\Controllers\admin\anneescolaires;

use Illuminate\Http\Request;
use App\Models\Anneescolaire;

class AdminCreateAnneeScolaireController extends AdminAnneeScolaireController
{
    public function createAnneeScolaire(){
        return view('admin.anneescolaires.createAnneeScolaire');
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
}
