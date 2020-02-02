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
use App\Http\Requests\PragmRequest;
use \Carbon\Carbon;

/**
 * Class PragmController
 * @package App\Http\Controllers
 */
class PragmController extends Controller
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
        $grafeia = Grafeio::all('id_grafeio', 'Name');
        $nomoi = Nomos::all('id_nomoi', 'Nomos');
        $diakrisis = Diakrisi::where([['Group_diakr','<','3'],['Mark_del','Όχι']])->get();
        $accident_places=Accident_place::where('Mark_del', 'Όχι')->get();
        $arxes_ekdosis_eggrafon = Arxi_ekdosis_eggrafon::where('Mark_del', 'Όχι')->get();
        $pragmatognomones = User::where([['thesi','LIKE','ΠΡΑΓ%'],['Active','Ναι']])->get();
        $companies = Company::where('Mark_del', 'Όχι')->get();
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

    /**
     * @param PragmRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(PragmRequest $request)
    {
        $pragmatognomosini = new Pragmatognomosini();

        $request->partially_lock = 'Όχι';
        $request->total_lock = 'Όχι';
        $request->Amibi_partner='0';
        $request->Flag='2';

        //$dateAtiximatos = Carbon::createFromFormat('d/m/Y', $request->Date_atiximatos)->format('Y-m-d');
        //dd($dateAtiximatos);

        $pragmatognomosini->id = auth()->user()->id;
        //$pragmatognomosini->Date_atiximatos = $dateAtiximatos;
        $pragmatognomosini->Date_atiximatos = $request->Date_atiximatos;
        $pragmatognomosini->Date_dikasimou = $request->Date_dikasimou;
        $pragmatognomosini->Date_eksetasis = $request->Date_eksetasis;
        $pragmatognomosini->id_accedent_place = $request->id_accedent_place;
        $pragmatognomosini->id_ypaitiou = $request->id_ypaitiou;
        $pragmatognomosini->id_oximatos_ypaitiou = $request->id_oximatos_ypaitiou;
        $pragmatognomosini->id_pathon = $request->id_pathon;
        $pragmatognomosini->id_oximatos_pathon = $request->id_oximatos_pathon;
        $pragmatognomosini->Xiliometra = $request->Xiliometra;
        $pragmatognomosini->id_company_ypaitiou = $request->id_company_ypaitiou;
        $pragmatognomosini->id_company_pathon = $request->id_company_pathon;
        $pragmatognomosini->id_company_pathon_real = $request->id_company_pathon_real;
        $pragmatognomosini->id_grafeio = $request->id_grafeio;
        $pragmatognomosini->Valid = $request->Valid;
        $pragmatognomosini->Simpliromatiki = $request->Simpliromatiki;
        $pragmatognomosini->Entoleas = $request->Entoleas;
        $pragmatognomosini->Prot_bibliou = $request->Prot_bibliou;
        $pragmatognomosini->Sap = $request->Sap;
        $pragmatognomosini->id_diakrisi = $request->id_diakrisi;
        $pragmatognomosini->Ekpt_parts = $request->Ekpt_parts;
        $pragmatognomosini->Ekpt_jobs = $request->Ekpt_jobs;
        $pragmatognomosini->Date_paradosis = $request->Date_paradosis;
        $pragmatognomosini->Object = $request->Object;
        $pragmatognomosini->id_arxi_ekdosis_eggrafon = $request->id_arxi_ekdosis_eggrafon;
        $pragmatognomosini->Fpa = $request->Fpa;
        $pragmatognomosini->partially_lock = $request->partially_lock;
        $pragmatognomosini->total_lock = $request->total_lock;
        $pragmatognomosini->Notes = $request->Notes;
        $pragmatognomosini->id_nomoi = $request->id_nomoi;
        $pragmatognomosini->Driver_ypaitiou = $request->Driver_ypaitiou;
        $pragmatognomosini->value_car_pathon = $request->value_car_pathon;
        $pragmatognomosini->billing_notes = $request->billing_notes;
        $pragmatognomosini->driver_pathon = $request->driver_pathon;
        $pragmatognomosini->Amibi_partner =$request->Amibi_partner;
        $pragmatognomosini->Flag = $request->Flag;

        $pragmatognomosini->save();


        return redirect('pragmatognomosines/'.$pragmatognomosini->id_ekthesis);
    }

    public function edit($id_ekthesis)
    {
        $grafeia = Grafeio::all('id_grafeio', 'Name');
        $nomoi = Nomos::all('id_nomoi', 'Nomos');
        $diakrisis = Diakrisi::where([['Group_diakr','<','3'],['Mark_del','Όχι']])->get();
        $accident_places=Accident_place::where('Mark_del', 'Όχι')->get();
        $arxes_ekdosis_eggrafon = Arxi_ekdosis_eggrafon::where('Mark_del', 'Όχι')->get();
        $pragmatognomones = User::where([['thesi','LIKE','ΠΡΑΓ%'],['Active','Ναι']])->get();
        $companies = Company::where('Mark_del', 'Όχι')->get();
        $pathontes = Person::where([['Mark_del','Όχι'],['id_person','>','1']])->get();
        $oximata_pathon = Oxima::where([['Mark_del','Όχι'],['id_oximata','>','1']])->get();

        $pragmatognomosini = Pragmatognomosini::find($id_ekthesis);
        return view('pragmatognomosines.edit', compact([
            'pragmatognomosini',
            'grafeia',
            'nomoi',
            'diakrisis',
            'accident_places',
            'arxes_ekdosis_eggrafon',
            'pragmatognomones',
            'companies',
            'pathontes',
            'oximata_pathon']));
    }

    public function update(Request $request, $id_ekthesis)
    {
        $pragmatognomosini = Pragmatognomosini::find($id_ekthesis);

        $pragmatognomosini = $request->all();
        $pragmatognomosini->update();

        return redirect('pragmatognomosines/'.$pragmatognomosini->id_ekthesis);
    }
}
