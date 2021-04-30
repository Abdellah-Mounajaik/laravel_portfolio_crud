<?php

namespace App\Http\Controllers;

use App\Models\Skills;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index(){
        $skills = Skills::all();
        return view('backoffice/pages/skills', compact('skills'));
    }
    public function edit(Skills $id){
        $skills = $id;
        return view("backoffice/pages/editskills", compact('skills'));
    }
    public function update(Skills $id, Request $request){
        request()->validate([
            "competence"=> ["required", "min:1"],
            "niveau" => ["required", "numeric"],
        ]);
        $skills = $id;
        $skills->competence = $request->competence;
        $skills->niveau = $request->niveau;
        $skills->save();
        return redirect()->route('back.skills')->with("success", "La modification a bien été éxécuté");
    }
}
