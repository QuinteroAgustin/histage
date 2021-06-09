<?php

namespace App\Http\Controllers\enseignant;

use App\Http\Controllers\Controller;

class EnseignantController extends Controller
{
    public function pannel() {
        return view('enseignants.pannel');
    }
}
