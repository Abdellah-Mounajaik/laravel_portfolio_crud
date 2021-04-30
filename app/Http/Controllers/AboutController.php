<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Fact;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $about = About::all();
        $facts = Fact::all();
        return view('backoffice/pages/about', compact('about', 'facts'));
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
        $about = $id;
        $about->birthday = $request->birthday;
        $about->website = $request->website;
        $about->phone = $request->phone;
        $about->city = $request->city;
        $about->age = $request->age;
        $about->degree = $request->degree;
        $about->PhEmailone = $request->PhEmailone;
        $about->Freelance = $request->Freelance;
        $about->save();
        return redirect()->route('back.about')->with('success', "La modification a bien été éxécuté");
    }
    
}
