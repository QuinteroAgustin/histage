<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function accueil()
    {
        return view('home.accueil');
    }
}
