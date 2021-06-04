<?php

namespace App\Http\Controllers\admin\sections;

use App\Models\Section;
use Illuminate\Http\Request;


class AdminCreateSectionController extends AdminSectionController
{
    public function createSection(){
        return view('admin.sections.createSection');
    }

    public function createSectionPost(Request $request){
        if(strlen($request->libSection)>1){
            if(count(Section::where('libSection', '=', $request->libSection)->get()) < 1){
                $section=new Section;
                $section->libSection = $request->libSection;
                $section->save();
                $request->session()->put('messages', ['Succes'=>'La section '.$request->libSection.' a été créer avec succès.']);
            }else{
                $request->session()->put('messages', ['Erreur'=>'La section '.$request->libSection.' existe déjà.']);
            }
        }else{
            $request->session()->put('messages', ['Erreur'=>'Nom de la section est trop courte.']);
        }
        return redirect()->route('pannelAdmin');
    }
}
