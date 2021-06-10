<?php

namespace App\Http\Controllers\enseignant;

use App\Models\User;
use App\Http\Controllers\Controller;

class EnseignantController extends Controller
{
    public function pannel() {
        $stages = User::find(session()->get('user')->id)->stages()->get();
        
        return view('enseignants.pannel', ['stages'=>$stages]);
    }
}
