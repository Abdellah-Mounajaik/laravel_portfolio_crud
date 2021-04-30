<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contact = Contact::all();
        return view('backoffice/pages/contact', compact('contact'));
    }
    public function edit(Contact $id){
        $contact = $id;
        return view('backoffice/pages/editcontact', compact('contact'));
    }
    public function update(Contact $id, Request $request){
        request()->validate([
            "location"=> ["required", "min:3"],
            "email" => ["required", "min:3"],
            "call"=> ["required", "numeric"],
        ]);
        $contact = $id;
        $contact->location = $request->location;
        $contact->email = $request->email;
        $contact->call = $request->call;
        $contact->save();
        return redirect()->route('back.contact')->with("success", "La modification a bien été éxécuté");

    }
}
