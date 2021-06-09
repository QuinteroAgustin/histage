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
        /**
         *$user= Enseignant::find(11);
         *$user->sections()->attach(3, ['isRs' => 0]);
         *$user->save();
         */
        return view('home.accueil');
    }
}
