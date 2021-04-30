<?php

namespace App\Http\Controllers;

use App\Models\Port;
use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        $portfolios = Portfolio::all() ;
        $ports = Port::all();
        $services = Service::all();
        return view('backoffice/pages/portfolio', compact("portfolios", "ports", "services"));
    }
    public function create(){
        return view('backoffice/pages/createportfolio');
    }
    public function store(Request $request){
        $ports = new Port();
        $ports->image =  $request->image;
        $ports->save();
        return redirect()->route('back.portfolio');
    }
    public function destroy(Portfolio $id){
        $id->delete();
        return redirect()->route('back.portfolio');
    }
    public function destroyy(Port $id){
        $id->delete();
        return redirect()->route('back.portfolio');
    }
    public function show(Portfolio $id){
        $portfolios = $id;
        return view('backoffice/pages/showportfolio', compact('portfolios'));
    }
    public function showw(Port $id){
        $ports = $id;
        return view('backoffice/pages/showwportfolio', compact('ports'));
    }
}
