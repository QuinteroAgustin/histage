<?php

namespace App\Http\Controllers\eleve;

use App\Http\Controllers\Controller;
use App\Models\User;

class EleveController extends Controller
{
    public function pannel(){
        $stages = User::find(session()->get('user')->id)->stages()->get();
        //demandez si on affiche le nom de l'√©valuateur
        return view('eleves.pannel', ['stages' => $stages]);
    }
}
