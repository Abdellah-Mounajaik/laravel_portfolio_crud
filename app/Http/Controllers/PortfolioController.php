<?php

namespace App\Http\Controllers;

use App\Models\Port;
use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index(){
        $portfolios = Portfolio::all() ;
        $services = Service::all();
        return view('backoffice/pages/portfolio', compact("portfolios", "services"));
    }
    public function create(){
        return view('backoffice/pages/createportfolio');
    }
    public function store(Request $request){
        $request->file('img')->storePublicly('img/portfolio/','public');

        $portfolios = new Portfolio();
        $portfolios->img =  $request->file('img')->hashName();
        $portfolios->filter =  $request->filter;
        $portfolios->title =  $request->title;
        $portfolios->save();
        return redirect()->route('back.portfolio');
    }
    public function destroy(Portfolio $id){
        Storage::disk('public')->delete('img/' . $id->img);
        $id->delete();
        return redirect()->route('back.portfolio');
    }
    public function show(Portfolio $id){
        $portfolios = $id;
        return view('backoffice/pages/showportfolio', compact('portfolios'));
    }
    public function edit(Portfolio $id){
        $portfolios = $id;
        return view('backoffice/pages/editportfolio', compact('portfolios'));
    }
    public function update(Portfolio $id, Request $request){
        if ($request->file('image') != null) {
            $portfolios = $id;
            Storage::disk('public')->delete('img/' . $id->img);
            $request->file('image')->storePublicly('img/portfolio/','public');
            $portfolios->img =  $request->file('image')->hashName();
            $portfolios->save();
        }
        return redirect()->route('back.portfolio');
    }
  
}
