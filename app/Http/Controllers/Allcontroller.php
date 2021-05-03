<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Fact;
use App\Models\Port;
use App\Models\Portfolio;
use App\Models\Profil;
use App\Models\Service;
use App\Models\Skills;
use Database\Seeders\AboutSeeder;
use Illuminate\Http\Request;

class Allcontroller extends Controller
{
    public function index(){
        $about = About::all();
        $facts = Fact::all();
        $skills = Skills::all();
        $portfolios = Portfolio::all();
        $services = Service::paginate(4)->fragment('services');
        $contacts = Contact::all();
        $profils = Profil::all();
        return view('home', compact("about", "facts", "services", "skills", "portfolios", "contacts", "profils"));
    }
}
