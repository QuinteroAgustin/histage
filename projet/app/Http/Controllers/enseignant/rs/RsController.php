<?php

namespace App\Http\Controllers\enseignant\rs;

use App\Http\Controllers\enseignant\EnseignantController;
use App\Models\Enseignant;

class RsController extends EnseignantController
{
    public function pannel() {
        $enseignant = Enseignant::find(session()->get('user')->id);
        $isSectionsRs = $enseignant->sections;
        $sectionsTab=array();
        foreach($isSectionsRs as $section){
            if($section->pivot->isRs == 1){
                $sectionsTab+=[$section->id => $section->libSection];
            }
        }
        return view('enseignants.rs.pannel', ['sectionsTab' => $sectionsTab]);
    }
}
