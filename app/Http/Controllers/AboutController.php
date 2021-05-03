<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Fact;
use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index(){
        $about = About::all();
        $profils = Profil::all();
        $facts = Fact::all();
        return view('backoffice/pages/about', compact('about', 'facts', "profils"));
    }
    public function show(){
        $about = About::all();
        return view('backoffice/pages/showabout', compact('about'));
    }
    public function edit(About $id){
        $about = $id;
        return view('backoffice/pages/editabout', compact('about')); 
    }
    public function update(Request $request, About $id){
        request()->validate([
            "birthday"=> ["required", "min:3"],
            "website" => ["required", "min:3"],
            "phone"=> ["required", "numeric"],
            "city"=> ["required", "min:3"],
            "age"=> ["required", "numeric"],
            "degree"=> ["required", "min:3"],
            "PhEmailone"=> ["required", "min:3"],
            "Freelance"=> ["required", "min:3"],
        ]);
        if ($request->file('img') != null) {
            $about = $id;
            Storage::disk('public')->delete('img/' . $id->image);
            $request->file('img')->storePublicly('img/','public');
            $about->image =  $request->file('img')->hashName();
            $about->birthday = $request->birthday;
            $about->website = $request->website;
            $about->phone = $request->phone;
            $about->city = $request->city;
            $about->age = $request->age;
            $about->degree = $request->degree;
            $about->PhEmailone = $request->PhEmailone;
            $about->Freelance = $request->Freelance;
            $about->save();
        }
        // $about->image = $request->image;
        
        return redirect()->route('back.about')->with('success', "La modification a bien été éxécuté");
    }
    
}
