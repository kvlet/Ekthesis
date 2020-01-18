<?php

namespace App\Http\Controllers;

use App\Accident_place;
use App\Arxi_ekdosis_eggrafon;
use App\Company;
use App\Diakrisi;
use App\Grafeio;
use App\Nomos;
use App\Oxima;
use App\Person;
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
    	$nomoi = Nomos::all('id_nomoi','Nomos');
    	$diakrisis = Diakrisi::where([['Group_diakr','<','3'],['Mark_del','Όχι']])->get();
    	$accident_places=Accident_place::where('Mark_del','Όχι')->get();
    	$arxes_ekdosis_eggrafon = Arxi_ekdosis_eggrafon::where('Mark_del','Όχι')->get();
        $pragmatognomones = User::where([['thesi','LIKE','ΠΡΑΓ%'],['Active','Ναι']])->get();
        $companies = Company::where('Mark_del','Όχι')->get();
        $pathontes = Person::where([['Mark_del','Όχι'],['id_person','>','1']])->get();
        $oximata_pathon = Oxima::where([['Mark_del','Όχι'],['id_oximata','>','1']])->get();

        return view('pragmatognomosines.create', compact([
            'grafeia',
            'nomoi',
            'diakrisis',
            'accident_places',
            'arxes_ekdosis_eggrafon',
            'pragmatognomones',
            'companies',
            'pathontes',
            'oximata_pathon'
            ]));
    }

    public function store(PragmatognomosiniRequest $request)
    {

        $pragmatognomosini = new Pragmatognomosini();

        $pragmatognomosini->Date_atiximatos = $request->Date_atiximatos;
        dd($pragmatognomosini);
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

        $pragmatognomosini = $request->all();
        $pragmatognomosini->update();

        return redirect('pragmatognomosines/'.$pragmatognomosini->id);
    }
}
