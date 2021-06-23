<?php

namespace App\Http\Controllers\eleve;

use App\Models\User;
use Faker\Provider\Image;
use Illuminate\Support\Facades\Storage;

class EleveRenseignamentController extends EleveController
{
    public function test(){
        return view('eleves.renseignement');
    }
}
