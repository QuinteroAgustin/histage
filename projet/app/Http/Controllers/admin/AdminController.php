<?php

namespace App\Http\Controllers\admin;

use App\Models\Role;
use App\Models\User;
use App\Models\Section;
use App\Models\Anneescolaire;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function pannel() {

        $users=User::all();
        $roles=Role::all();
        $annees=Anneescolaire::all();
        $sections=Section::all();
        return view('admin.pannel', ['users'=>$users,'roles'=>$roles,'annees'=>$annees,'sections'=>$sections]);
    }
}
