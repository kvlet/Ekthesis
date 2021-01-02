<?php

namespace App\Http\Controllers;

use App\CarType;
use App\Company;
use App\Http\Requests\OximataRequest;
use App\Http\Requests\PragmRequest;
use App\Marka;
use App\Owner;
use App\Oxima;
use App\Paint;
use App\Person;
use App\Pragmatognomosini;
use App\Specifications;
use App\User;
use App\Xrisi;
use App\Xromata;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OximataController extends Controller
{
    public function create(){

        $markes = Marka::where([['Mark_del','Όχι']])->orderBy('marka')->get();
        $xrisis = Xrisi::where([['Mark_del','Όχι']])->orderBy('xrisi')->get();
        $xromata = Xromata::where([['Mark_del','Όχι']])->orderBy('color')->get();
        $cartype = CarType::where([['Mark_del','Όχι']])->orderBy('Typos')->get();
        $paint = Paint::where([['Mark_del','Όχι']])->orderBy('paint_type')->get();
        $oximata = Oxima::where([['Mark_del','Όχι'],['Ar_kyklo','LIKE','%'],['Ar_kyklo','!=','@@']])->orderBy('Ar_kyklo')->get();

        return view('oximata.create',compact([
            'markes',
            'xrisis',
            'xromata',
            'cartype',
            'paint',
            'oximata'
        ]));
    }

    /**
     * @param PragmRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

    public function store(OximataRequest $request){

        $oxima = new Oxima();

        $request->Mark_del='Όχι';
        $request->Flag=1;
        //        fix date format for DB
            if ($request->Hm_first_kykl != null){
                $dateFirstKyk = Carbon::createFromFormat('d-m-Y', $request->Hm_first_kykl)->format('Y-m-d');
                $request->Hm_first_kykl = $dateFirstKyk;
            }
        //        end fix date format for DB

        $oxima->Ar_kyklo = $request->Ar_kyklo;
        $oxima->Ar_plasiou = $request->Ar_plasiou;
        $oxima->Ar_plasiou = $request->Ar_plasiou;
        $oxima->id_markes = $request->id_markes;
        $oxima->modelo = $request->modelo;
        $oxima->id_xrisi = $request->id_xrisi;
        $oxima->Hm_first_kykl = $request->Hm_first_kykl;
        $oxima->id_xromata = $request->id_xromata;
        $oxima->Thesis = $request->Thesis;
        $oxima->Ippoi = $request->Ippoi;
        $oxima->id_car_type = $request->id_car_type;
        $oxima->kibika = $request->kibika;
        $oxima->id_paint = $request->id_paint;
        $oxima->manuf_year = $request->manuf_year;
        $oxima->Mark_del = $request->Mark_del;
        $oxima->Flag = $request->Flag;

        $oxima->save();

        return redirect('oximata/'.$oxima->id_oximata);
    }

    public function edit($id_oximata){
        $markes = Marka::where([['Mark_del','Όχι']])->orderBy('marka')->get();
        $xrisis = Xrisi::where([['Mark_del','Όχι']])->orderBy('xrisi')->get();
        $xromata = Xromata::where([['Mark_del','Όχι']])->orderBy('color')->get();
        $cartype = CarType::where([['Mark_del','Όχι']])->orderBy('Typos')->get();
        $paint = Paint::where([['Mark_del','Όχι']])->orderBy('paint_type')->get();
        $owners = Owner::where([['id_oximata','=',$id_oximata]])->orderBy('Own_name')->get();
        $specifications= Specifications::where([['id_oximata','=',$id_oximata]])->first();

        $oxima = Oxima::findOrFail($id_oximata);
        //        fix date format for display in form
            if ($oxima->Hm_first_kykl != null){
                $dateFirstKyk = Carbon::createFromFormat('Y-m-d', $oxima->Hm_first_kykl)->format('d-m-Y');
                $oxima->Hm_first_kykl = $dateFirstKyk;
            }
        //        end fix date format for display in form
        // ekthesis oximatos
            $pragma = (new Pragmatognomosini)->newQuery();
            $idoxima=$oxima->id_oximata;
            if ($id_oximata !=null){
                $pragma->where('id_oximatos_pathon','=',$id_oximata)
                        ->orwhere('id_oximatos_ypaitiou','=',$id_oximata)->get();
            }
            $pragmatognomosines = $pragma->get();

            $companies = Company::where('Mark_del', 'Όχι')->get();
            $pathontes = Person::where([['Mark_del','Όχι'],['id_person','>','1']])->get();
            $oximata_pathon = Oxima::where([['Mark_del','Όχι'],['id_oximata','>','1']])->get();
            $pragmatognomones = User::where([['thesi','LIKE','ΠΡΑΓ%'],['Active','Ναι']])->get();
            foreach ($pragmatognomosines as $pragm){
                $dateAtiximatos = Carbon::createFromFormat('Y-m-d', $pragm->Date_atiximatos)->format('d-m-Y');
                $pragm->Date_atiximatos = $dateAtiximatos;
                if ($pragm->Date_dikasimou != null){
                    $dateDikasimou = Carbon::createFromFormat('Y-m-d', $pragm->Date_dikasimou)->format('d-m-Y');
                    $pragm->Date_dikasimou = $dateDikasimou;
                }
            }
        // end ekthesis oximatos
        // idioktites oximatos
            foreach ($owners as $own){
                $transferDate=Carbon::createFromFormat('Y-m-d', $own->Transfer_date)->format('d-m-Y');
                $own->Transfer_date=$transferDate;
            }
        //end idioktites oximatos



        return view('oximata.edit',compact([
            'oxima',
            'markes',
            'xrisis',
            'xromata',
            'cartype',
            'paint',
            'pragmatognomosines',
            'companies',
            'pathontes',
            'oximata_pathon',
            'pragmatognomones',
            'owners',
            'specifications'
        ]));
    }

    public function update(Request $request,$id_oximata){
        $oxima = Oxima::findOrFail($id_oximata);

        $request->Mark_del='Όχι';
        $request->Flag=1;
        //        fix date format for DB
        if ($request->Hm_first_kykl != null){
            $dateFirstKyk = Carbon::createFromFormat('d-m-Y', $request->Hm_first_kykl)->format('Y-m-d');
            $request->Hm_first_kykl = $dateFirstKyk;
        }
        //        end fix date format for DB

        $oxima->Ar_kyklo = $request->Ar_kyklo;
        $oxima->Ar_plasiou = $request->Ar_plasiou;
        $oxima->Ar_plasiou = $request->Ar_plasiou;
        $oxima->id_markes = $request->id_markes;
        $oxima->modelo = $request->modelo;
        $oxima->id_xrisi = $request->id_xrisi;
        $oxima->Hm_first_kykl = $request->Hm_first_kykl;
        $oxima->id_xromata = $request->id_xromata;
        $oxima->Thesis = $request->Thesis;
        $oxima->Ippoi = $request->Ippoi;
        $oxima->id_car_type = $request->id_car_type;
        $oxima->kibika = $request->kibika;
        $oxima->id_paint = $request->id_paint;
        $oxima->manuf_year = $request->manuf_year;
        $oxima->Mark_del = $request->Mark_del;
        $oxima->Flag = $request->Flag;

        $oxima->update();

        return redirect('oximata/'.$oxima->id_oximata);

    }
    public function opensearch(){

        $oximata = Oxima::where([['Mark_del','Όχι'],['Ar_kyklo','LIKE','%'],['Ar_kyklo','!=','@@']])->orderBy('Ar_kyklo')->get();
        $markes = Marka::where([['Mark_del','Όχι']])->orderBy('marka')->get();
        $xromata = Xromata::where([['Mark_del','Όχι']])->orderBy('color')->get();
        return view('oximata.search',compact([
            'oximata',
            'markes',
            'xromata'
        ]));
    }

    public function search(Request $request){

        $markes = Marka::where([['Mark_del','Όχι']])->orderBy('marka')->get();
        $xromata = Xromata::where([['Mark_del','Όχι']])->orderBy('color')->get();
        $pin= $request->pinakida;

        if ($pin == null){
            $oximata = Oxima::where([['Mark_del','Όχι'],['Ar_kyklo','LIKE','%'],['Ar_kyklo','!=','@@']])->orderBy('Ar_kyklo')->get();
        }else{
            $oximata = Oxima::where([['Mark_del','Όχι'],['Ar_kyklo','LIKE','%'.$pin.'%'],['Ar_kyklo','!=','@@']])->orderBy('Ar_kyklo')->get();
        }
//        return redirect()->back()->with(compact('oximata'));
        return view('oximata.search',compact([
            'oximata',
            'markes',
            'xromata'
        ]));
    }

    // manage owner
    public function create_owner($id_oximata){
        $oxima = Oxima::findOrFail($id_oximata);
        $owners = Owner::where([['id_oximata','=',$id_oximata]])->orderBy('Own_name')->get();
        return view('oximata.create_owner',compact([
            'oxima',
            'owners'
        ]));
    }

    public function edit_owner($id_oximata,$Own_name,$Transfer_date){
        $oxima = Oxima::findOrFail($id_oximata);

        //        fix date format for DB
            $dateTransDate = Carbon::createFromFormat('d-m-Y',  $Transfer_date)->format('Y-m-d');
            $Transfer_date = $dateTransDate;
        //        end fix date format for DB
        $owner = Owner::where([['id_oximata','=',$id_oximata],['Own_name','=',$Own_name],['Transfer_date','=',$Transfer_date]])->orderBy('Own_name')->first();
//        dd($owner);

        $owners = Owner::where([['id_oximata','=',$id_oximata]])->orderBy('Own_name')->get();
        return view('oximata.edit_owner',compact([
            'oxima',
            'owners',
            'owner'
        ]));
    }

    public function store_owner(Request $request){
        $owner = new Owner();
        //        fix date format for DB
            $dateTransDate = Carbon::createFromFormat('d-m-Y', $request->Transfer_date)->format('Y-m-d');
            $request->Transfer_date = $dateTransDate;
        //        end fix date format for DB

        $owner->id_oximata=$request->id_oximata;
        $owner->Own_name=$request->Own_name;
        $owner->Transfer_date=$request->Transfer_date;
        $owner->Active=$request->Active;
        $owner->save();

        return redirect('oximata/'.$owner->id_oximata);
    }

    public function update_owner(Request $request){

        $oxima = Oxima::findOrFail($request->id_oximata);
        //        fix date format for DB
//        $dateTransDate = Carbon::createFromFormat('d-m-Y',  $request->Transfer_date)->format('Y-m-d');
//        $request->Transfer_date = $dateTransDate;
        //        end fix date format for DB
        $owner = Owner::where([['id_oximata','=',$request->id_oximata],['Own_name','=',$request->Own_name],['Transfer_date','=',$request->Transfer_date]])->orderBy('Own_name')->first();
//        dd( $owner );
        $owners = Owner::where([['id_oximata','=',$request->id_oximata]])->orderBy('Own_name')->get();
//        dd($owner,$request);
        $owner->id_oximata=$request->id_oximata;
        $owner->Own_name=$request->Own_name;
        $owner->Transfer_date=$request->Transfer_date;
        $owner->Active=$request->Active;

        $owner->update();

        return redirect('oximata/'.$owner->id_oximata);
    }
    // end manage owner

    // manage specifications
    public function create_spec($id_oximata){
        $oxima = Oxima::findOrFail($id_oximata);
        $specifications = Specifications::where([['id_oximata','=',$id_oximata]])->get();
        return view('oximata.create_spec',compact([
            'oxima',
            'specifications'
        ]));
    }

    public function edit_spec($id_oximata){
        $oxima = Oxima::findOrFail($id_oximata);
        $specifications = Specifications::where([['id_oximata','=',$id_oximata]])->first();


        return view('oximata.edit_spec',compact([
            'oxima',
            'specifications'
        ]));
    }

    public function store_spec(Request $request){
        $specifications = new Specifications();


        $specifications->id_oximata=$request->id_oximata;
        $specifications->amaxoma=$request->amaxoma;
        $specifications->doors=$request->doors;
        $specifications->metaxonio=$request->metaxonio;
        $specifications->mikos=$request->mikos;
        $specifications->platos=$request->platos;
        $specifications->ypsos=$request->ypsos;
        $specifications->apobaro=$request->apobaro;
        $specifications->tepozito=$request->tepozito;
        $specifications->gas=$request->gas;
        $specifications->num_kilin=$request->num_kilin;
        $specifications->num_valv=$request->num_valv;
        $specifications->max_power=$request->max_power;
        $specifications->strofes=$request->strofes;
        $specifications->ropi=$request->ropi;
        $specifications->ropi_strofes=$request->ropi_strofes;
        $specifications->epitax=$request->epitax;
        $specifications->taxitita=$request->taxitita;
        $specifications->num_gear=$request->num_gear;
        $specifications->gear=$request->gear;
        $specifications->kinisi=$request->kinisi;
        $specifications->fr_anartisi=$request->fr_anartisi;
        $specifications->b_anart=$request->b_anart;
        $specifications->fr_frena=$request->fr_frena;
        $specifications->b_frena=$request->b_frena;
        $specifications->abs=$request->abs;
        $specifications->notes=$request->notes;
        $specifications->save();

        return redirect('oximata/'.$specifications->id_oximata);
    }

    public function update_spec(Request $request,$id_oximata){

        $oxima = Oxima::findOrFail($id_oximata);
        $specifications = Specifications::where([['id_oximata','=',$id_oximata]])->first();

//        $specifications->id_oximata=$request->id_oximata;
        $specifications->amaxoma=$request->amaxoma;
        $specifications->doors=$request->doors;
        $specifications->metaxonio=$request->metaxonio;
        $specifications->mikos=$request->mikos;
        $specifications->platos=$request->platos;
        $specifications->ypsos=$request->ypsos;
        $specifications->apobaro=$request->apobaro;
        $specifications->tepozito=$request->tepozito;
        $specifications->gas=$request->gas;
        $specifications->num_kilin=$request->num_kilin;
        $specifications->num_valv=$request->num_valv;
        $specifications->max_power=$request->max_power;
        $specifications->strofes=$request->strofes;
        $specifications->ropi=$request->ropi;
        $specifications->ropi_strofes=$request->ropi_strofes;
        $specifications->epitax=$request->epitax;
        $specifications->taxitita=$request->taxitita;
        $specifications->num_gear=$request->num_gear;
        $specifications->gear=$request->gear;
        $specifications->kinisi=$request->kinisi;
        $specifications->fr_anartisi=$request->fr_anartisi;
        $specifications->b_anart=$request->b_anart;
        $specifications->fr_frena=$request->fr_frena;
        $specifications->b_frena=$request->b_frena;
        $specifications->abs=$request->abs;
        $specifications->notes=$request->notes;

        $specifications->update();

        return redirect('oximata/'.$specifications->id_oximata);
    }
    // end manage specifications
}
