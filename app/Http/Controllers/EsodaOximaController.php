<?php

namespace App\Http\Controllers;

use App\Accedent_place;
use App\Company;
use App\EsodaOxima;
use App\Pragmatognomosini;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EsodaOximaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
        $accedent_places = Accedent_place::where('Mark_del', 'Όχι')->orderBy('Place')->get();
        $companies = Company::where('Mark_del', 'Όχι')->orderBy('comp_name')->get();
        $ekthesis = Pragmatognomosini::where('Valid','true')->get();
        return  view('esoda_oxima.create',compact([
            'accedent_places',
            'companies',
            'ekthesis'
        ]));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $esoda_oxima = new EsodaOxima();

        $request->mark_del='Όχι';
        $esodoDate = Carbon::createFromFormat('d-m-Y',  $request->date_esoda)->format('Y-m-d');
        $request->date_esoda = $esodoDate;

        $esoda_oxima->date_esoda = $request->date_esoda;
        $esoda_oxima->id_accident_place = $request->id_accident_place;
        $esoda_oxima->km = $request->km;
        $esoda_oxima->id_company = $request->id_company;
        $esoda_oxima->value = $request->value;
        $esoda_oxima->notes = $request->notes;
        $esoda_oxima->id_ekthesis = $request->id_ekthesis;
        $esoda_oxima->save();

        return redirect('car_income/search');
    }

    public function edit($id_esoda_oximatos){
        $esodo_oxima=EsodaOxima::findOrFail($id_esoda_oximatos);
        $esodo_oxima->date_esoda = Carbon::createFromFormat('Y-m-d', $esodo_oxima->date_esoda)->format('d-m-Y');
        $accedent_places = Accedent_place::where('Mark_del', 'Όχι')->orderBy('Place')->get();
        $companies = Company::where('Mark_del', 'Όχι')->orderBy('comp_name')->get();
        $ekthesis = Pragmatognomosini::where('Valid','true')->get();

        return view('esoda_oxima.edit',compact([
            'esodo_oxima',
            'accedent_places',
            'companies',
            'ekthesis'
        ]));
    }

    public function update(Request $request,$id_esoda_oximatos){

        $esodo_oxima=EsodaOxima::findOrFail($id_esoda_oximatos);
        $esodoDate = Carbon::createFromFormat('d-m-Y',  $request->date_esoda)->format('Y-m-d');
        $request->date_esoda = $esodoDate;

        $esodo_oxima->date_esoda = $request->date_esoda;
        $esodo_oxima->id_accident_place = $request->id_accident_place;
        $esodo_oxima->km = $request->km;
        $esodo_oxima->id_company = $request->id_company;
        $esodo_oxima->value = $request->value;
        $esodo_oxima->notes = $request->notes;
        $esodo_oxima->id_ekthesis = $request->id_ekthesis;
        $esodo_oxima->mark_del=$request->mark_del;
        $esodo_oxima->save();

        return redirect('car_income/search');
    }

    public function opensearch(){
        $accedent_places = Accedent_place::where('Mark_del', 'Όχι')->orderBy('Place')->get();
        $companies = Company::where('Mark_del', 'Όχι')->orderBy('comp_name')->get();
        $esoda_oximatos=EsodaOxima::where('mark_del', 'Όχι')->orderBy('date_esoda')->get();

        foreach ($esoda_oximatos as $esodox){
            $esodox->date_esoda = Carbon::createFromFormat('Y-m-d', $esodox->date_esoda)->format('d-m-Y');
        }

        return view('esoda_oxima.search',compact([
            'accedent_places',
            'companies',
            'esoda_oximatos'
        ]));
    }

    public function search(Request $request){
        $accedent_places = Accedent_place::where('Mark_del', 'Όχι')->orderBy('Place')->get();
        $companies = Company::where('Mark_del', 'Όχι')->orderBy('comp_name')->get();

        if ($request->sesod_date == null && $request->fesod_date == null){
            $esoda_oximatos=EsodaOxima::where('mark_del', 'Όχι')->orderBy('date_esoda')->get();
        }elseif($request->sesod_date == null){
            $fdate = Carbon::createFromFormat('d-m-Y', $request->fesod_date)->format('Y-m-d');
            $esoda_oximatos = EsodaOxima::where([['mark_del','Όχι'],['date_esoda','<=',$fdate]])->orderBy('date_esoda')->get();
        }elseif ($request->fesod_date == null){
            $sdate = Carbon::createFromFormat('d-m-Y', $request->sesod_date)->format('Y-m-d');
            $esoda_oximatos = EsodaOxima::where([['mark_del','Όχι'],['date_esoda','>=',$sdate]])->orderBy('date_esoda')->get();
        }else{
            $sdate = Carbon::createFromFormat('d-m-Y', $request->sesod_date)->format('Y-m-d');
            $fdate = Carbon::createFromFormat('d-m-Y', $request->fesod_date)->format('Y-m-d');
            $esoda_oximatos = EsodaOxima::where([['mark_del','Όχι'],['date_esoda','>=',$sdate],['date_esoda','<=',$fdate]])->orderBy('date_esoda')->get();
        }
        foreach ($esoda_oximatos as $esodox){
            $esodox->date_esoda = Carbon::createFromFormat('Y-m-d', $esodox->date_esoda)->format('d-m-Y');
        }
        return view('esoda_oxima.search',compact([
            'esoda_oximatos',
            'accedent_places',
            'companies'
        ]));

    }

}
