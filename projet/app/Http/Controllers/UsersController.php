<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function inscription()
    {
        return view('users.inscription');
    }

    public function connexion()
    {
        return view('users.connexion');
    }
}
