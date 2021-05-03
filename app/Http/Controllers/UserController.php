<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function edit(Profil $id){
        $profil = $id;
        return view('backoffice/pages/editnav', compact('profil'));
    }
    public function update(Profil $id, Request $request){
        if ($request->file('image') != null) {
            $profil = $id;
            Storage::disk('public')->delete('img/' . $id->image);
            $request->file('image')->storePublicly('img/','public');
            $profil->image =  $request->file('image')->hashName();
            $profil->save();
        }
        return redirect()->route('back.about');
    }
}
