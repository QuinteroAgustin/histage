<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function pannel() {

        $users=User::all();
        return view('admin.pannel', ['users'=>$users]);
    }

    public function editUser(Request $request) {
        $user= User::where('id', '=', $request->id)->firstOrFail();
        return view('admin.editUser', ['user' => $user]);
    }

    public function editUserPost(Request $request){
        echo $request->nom;
        echo $request->prenom;
    }
}
