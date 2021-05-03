<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function edit(Service $id){
        $services = $id;
        return view('backoffice/pages/editservice', compact('services')); 
    }
    public function update(Request $request, Service $id){
        request()->validate([
            "icon"=> ["required", "min:3"],
            "titre" => ["required", "min:3"],
            "texte" => ["required", "min:3"]
        ]);
        $services = $id;
        $services->icon = $request->icon;
        $services->titre = $request->titre;
        $services->texte = $request->texte;        
        $services->save();
        return redirect()->route('back.portfolio')->with("success", "La modification a bien été éxécuté");
    }
    public function destroy(Service $id){
        $id->delete();
        return redirect()->back();
    }
    public function create(){
        return view('backoffice/pages/createservice');
    }
    public function store(Request $request){
        $services = new Service();
        $services->icon =  $request->icon;
        $services->titre =  $request->titre;
        $services->texte =  $request->texte;
        $services->save();
        return redirect()->route('back.portfolio');
    }
}
