<?php

namespace App\Http\Controllers\admin\sections;

use App\Models\Section;
use Illuminate\Http\Request;


class AdminEditSectionController extends AdminSectionController
{
    public function editSection(Request $request){
        $section = Section::find($request->id);
        return view('admin.sections.editSection', ['section' => $section]);
    }

    public function editSectionPost(Request $request){
        $section= Section::find($request->id);
        if(strlen($request->libSection)>1){
            if(count(Section::where('libSection', '=', $request->libSection)->get()) < 1){
                $section->libSection = $request->libSection;
                $section->save();
                $request->session()->put('messages', ['Succes'=>'La section '.$request->libSection.' a été modifier avec succès.']);
                return redirect()->route('pannelAdmin');
            }else{
                $request->session()->put('messages', ['Erreur'=>'La section '.$request->libSection.' existe déjà.']);
            }
        }else{
            $request->session()->put('messages', ['Erreur'=>'La section est trop courte.']);
        }
        return redirect()->route('editSection',['id'=>$section->id]);
    }
}
