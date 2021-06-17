<?php

namespace App\Http\Controllers\enseignant\rs;

use App\Http\Controllers\enseignant\rs\RsController;
use App\Models\Anneescolaire;
use App\Models\Entreprise;
use App\Models\User;

class RsStageController extends RsController
{
    public function createStage(){
        $anneesScolaire = Anneescolaire::all();
        $users=User::all();
        $entreprises=Entreprise::all();

        return view('enseignants.rs.stage.createStage', ['anneesScolaire' => $anneesScolaire, 'users'=>$users, 'entreprises'=>$entreprises]);
    }

    public function createStagePost(){

    }
}
