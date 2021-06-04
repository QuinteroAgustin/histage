<?php

namespace App\Http\Controllers\admin\roles;

use App\Models\Role;
use Illuminate\Http\Request;

class AdminCreateRoleController extends AdminRoleController
{
    public function createRole(){
        return view('admin.roles.createRole');
    }

    public function createRolePost(Request $request){
        if(strlen($request->libRole)>2){
            if(count(Role::where('libRole', '=', $request->libRole)->get()) < 1){
                $role=new Role;
                $role->libRole = $request->libRole;
                $role->save();
                $request->session()->put('messages', ['Succes'=>'Le role '.$request->libRole.' a été créer avec succès.']);
            }else{
                $request->session()->put('messages', ['Erreur'=>'Le role '.$request->libRole.' existe déjà.']);
            }
        }else{
            $request->session()->put('messages', ['Erreur'=>'Nom du role trop court.']);
        }
        return redirect()->route('pannelAdmin');
    }
}
