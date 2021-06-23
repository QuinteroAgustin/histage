<?php

namespace App\Http\Controllers\eleve;

use App\Models\User;

class EleveEvaluationController extends EleveController
{
    public function test(){
        return view('eleves.evaluation');
    }
}
