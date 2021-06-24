<?php

namespace App\Http\Controllers\enseignant;

use App\Models\Stage;
use App\Models\Typeindicateur;
use Illuminate\Http\Request;
use Dompdf\Dompdf;

class NotationEnseignantController extends EnseignantController
{
    public function notation(Request $request) {
        $stage = Stage::find($request->id);
        if($stage->dateEvalStage == null){
            foreach($stage->users as $user){
                if($user->id == $request->session()->get('user')->id && $request->session()->get('user')->role_id == 2){
                    $typeindicateurs = Typeindicateur::all();
                    return view('enseignants.notation', ['stage' => $stage, 'typeindicateurs' => $typeindicateurs]);
                }
            }
            $request->session()->put('messages', ['Erreur'=>'Vous n\'êtes pas l\'enseignant en charge de se stage.']);
            return redirect()->route('pannelEnseignant');
        }
        $request->session()->put('messages', ['Erreur'=>'Le stage à déjè été noté.']);
        return redirect()->route('pannelEnseignant');
    }

    public function notationPost(Request $request) {
        $typeindicateurs = Typeindicateur::all();
        $stage = Stage::find($request->stage_id);
        $stage->dateEvalStage=now();
        $stage->commentaireEvalStage=$request->commentaire;
        $stage->updated_at->now();

        foreach($request->all() as $key=>$val){
            foreach($typeindicateurs as $typeindicateur){
                foreach($typeindicateur->indicateurs as $indicateur){
                    if($key == 'notation_'.$typeindicateur->id.'_'.$indicateur->id){
                        $stage->indicateurs()->attach($indicateur->id, ['repCategorieIndicateur' => $val, 'typeindicateur_id' => $typeindicateur->id]);
                    }
                }
            }
        }
        $stage->save();
        $request->session()->put('messages', ['Succes'=>'Le stage à été noté avec succès.']);
        return redirect()->route('pannelEnseignant');
    }

    public function notationPDF(Request $request){
        $stage = Stage::find($request->id);
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('enseignants.notationPDF', ['stage' => $stage]));

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
    }
}
