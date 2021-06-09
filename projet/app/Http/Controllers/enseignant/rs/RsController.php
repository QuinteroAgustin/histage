<?php

namespace App\Http\Controllers\enseignant\rs;

use App\Http\Controllers\enseignant\EnseignantController;

class RsController extends EnseignantController
{
    public function pannel() {
        return view('enseignants.rs.pannel');
    }
}
