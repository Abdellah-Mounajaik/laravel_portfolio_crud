<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use Illuminate\Http\Request;

class FactsController extends Controller
{
    public function edit(Fact $id){
        $facts = $id;
        return view('backoffice/pages/editfact', compact('facts')); 
    }
    public function update(Request $request, Fact $id){
        request()->validate([
            "icon"=> ["required", "min:3"],
            "nom" => ["required", "min:3"],
            "chiffre" => ["required", "numeric"]
        ]);
        $facts = $id;
        $facts->icon = $request->icon;
        $facts->nom = $request->nom;
        $facts->chiffre = $request->chiffre;
        $facts->save();
        return redirect()->route('back.about')->with("success", "La modification a bien été éxécuté");
    }
    public function destroy(Fact $id){
        $id->delete();
        return redirect()->back();
    }
    public function create(){
        return view('backoffice/pages/createfact');
    }
    public function store(Request $request){
        $facts = new Fact();
        $facts->icon =  $request->icon;
        $facts->nom =  $request->nom;
        $facts->chiffre =  $request->chiffre;
        $facts->save();
        return redirect()->route('back.about');
    }
}
