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
        $facts = $id;
        $facts->icon = $request->icon;
        $facts->nom = $request->nom;
        $facts->chiffre = $request->chiffre;
        $facts->save();
        return redirect()->route('back.about');
    }
}
