<?php

namespace App\Http\Controllers\eleve;

use App\Http\Controllers\Controller;
use App\Models\User;

class EleveController extends Controller
{
    public function pannel(){
        $stages = User::find(session()->get('user')->id)->stages()->get();
        return view('eleves.pannel', ['stages' => $stages]);
    }
}
