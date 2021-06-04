<?php

namespace App\Http\Controllers\admin\roles;

use App\Models\Role;
use Illuminate\Http\Request;

class AdminEditRoleController extends AdminRoleController
{
    public function editRole(Request $request){
        $role= Role::find($request->id);
        return view('admin.roles.editRole',['role'=>$role]);
    }

    public function editRolePost(Request $request){
        $role= Role::find($request->id);
        if(strlen($request->libRole)>2){
            if(count(Role::where('libRole', '=', $request->libRole)->get()) < 1){
                $role->libRole = $request->libRole;
                $role->save();
                $request->session()->put('messages', ['Succes'=>'Le role '.$request->libRole.' a été modifier avec succès.']);
                return redirect()->route('pannelAdmin');
            }else{
                $request->session()->put('messages', ['Erreur'=>'Le role '.$request->libRole.' existe déjà.']);
            }
        }else{
            $request->session()->put('messages', ['Erreur'=>'Nom du role trop court.']);
        }
        return redirect()->route('editRole',['id'=>$role->id]);
    }
}
