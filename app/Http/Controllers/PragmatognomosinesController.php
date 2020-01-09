<?php

namespace App\Http\Controllers;

use App\Accident_place;
use App\Arxi_ekdosis_eggrafon;
use App\Company;
use App\Diakrisi;
use App\Grafeio;
use App\Nomoi;
use App\Pragmatognomosini;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\PragmatognomosiniRequest;

class PragmatognomosinesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
    	$grafeia = Grafeio::all('id_grafeio','Name');
    	$nomoi = Nomoi::all('id_nomoi','Nomos');
    	$diakrisis = Diakrisi::where([['Group_diakr','<','3'],['Mark_del','Όχι']])->get();
    	$accident_places=Accident_place::where('Mark_del','Όχι')->get();
    	$arxes_ekdosis_eggrafon = Arxi_ekdosis_eggrafon::where('Mark_del','Όχι')->get();
        $prag = User::where([['thesi','LIKE','ΠΡΑΓ%'],['Active','Ναι']])->get();
        $companies = Company::where('Mark_del','Όχι')->get();


        return view('pragmatognomosines.create', compact(['grafeia','nomoi','diakrisis','accident_places','arxes_ekdosis_eggrafon']));
    }

    public function store(PragmatognomosiniRequest $request)
    {
        $pragmatognomosini = new Pragmatognomosini();

        $pragmatognomosini->grafeio = $request->grafeio;
        $pragmatognomosini->save();

        return redirect('pragmatognomosines/'.$pragmatognomosini->id);
    }

    public function edit($id)
    {
        $pragmatognomosini = Pragmatognomosini::find($id);

        return view('pragmatognomosines.edit', compact('pragmatognomosini'));
    }

    public function update(Request $request, $id) {

        $pragmatognomosini = Pragmatognomosini::find($id);

        $pragmatognomosini->grafeio = $request->grafeio;
        $pragmatognomosini->update();

        return redirect('pragmatognomosines/'.$pragmatognomosini->id);
    }
}
