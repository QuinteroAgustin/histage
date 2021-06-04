<?php

namespace App\Http\Controllers\admin\anneescolaires;

use Illuminate\Http\Request;
use App\Models\Anneescolaire;

class AdminEditAnneeScolaireController extends AdminAnneeScolaireController
{
    public function editAnneeScolaire(Request $request){
        $annee = Anneescolaire::find($request->id);
        return view('admin.anneescolaires.editAnneeScolaire', ['annee' => $annee]);
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

}
