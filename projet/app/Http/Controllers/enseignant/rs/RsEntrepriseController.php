<?php

namespace App\Http\Controllers\enseignant\rs;

use App\Http\Controllers\enseignant\rs\RsController;


class RsEntrepriseController extends RsController
{
    public function createEntreprise() {
        return view('enseignants.rs.entreprise.createEntreprise');
    }

    public function createEntreprisePost() {
        return route('pannelRs');
    }
}
