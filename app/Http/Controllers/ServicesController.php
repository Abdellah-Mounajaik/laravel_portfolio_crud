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
        $services = $id;
        $services->icon = $request->icon;
        $services->titre = $request->titre;
        $services->texte = $request->texte;        
        $services->save();
        return redirect()->route('back.portfolio');
    }
}
