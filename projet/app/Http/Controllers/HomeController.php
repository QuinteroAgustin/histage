<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

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

    public function test()
    {
        $id=["aa", "bb", "cc"];
        return view('home.accueil', ["test" => $id]);
    }
}