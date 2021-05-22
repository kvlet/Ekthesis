<?php

namespace App\Http\Controllers;

use App\Company;
use App\Grafeio;
use App\Oxima;
use App\Person;
use App\Pragmatognomosini;
use App\TimologioCompany;
use App\User;
use Carbon\Carbon;
use App\Tameio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TimologioCompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
        $grafeia = Grafeio::where('Mark_del', 'Όχι')->orderBy('Name')->get();
        $companies = Company::where('Mark_del', 'Όχι')->orderBy('comp_name')->get();

        return view('timologio_comp.create',compact([
            'grafeia',
            'companies'
        ]));
    }

    public function store(Request $request){
        $tameio = new Tameio();
        $timologio = new TimologioCompany();
        $company = Company::where('id_company', $request->id_company)->first();

        $request->Valid='Ναι';
        $request->Flag='1';
        $dateEkdosis = Carbon::createFromFormat('d-m-Y',  $request->Date_ekdosis)->format('Y-m-d');
        $request->Date_ekdosis = $dateEkdosis;
        if ($request->fpa == null){
            $request->fpa = 24;
        }

        $timologio->Ar_timologiou = $request->Ar_timologiou;
        $timologio->Date_ekdosis = $request->Date_ekdosis;
        $timologio->Geniko_synolo = $request->Geniko_synolo;
        $timologio->Ypoloipo = $request->Merikos_pliroteo + $request->Eksoda_timologion;
        $timologio->id_company = $request->id_company;
        $timologio->id_grafeio = $request->id_grafeio;
        $timologio->Valid = $request->Valid;
        $timologio->Pososto_parakr = $request->Pososto_parakr;
        $timologio->Parakratisi = $request->Parakratisi;
        $timologio->Poso_parakr = $request->Poso_parakr;
        $timologio->Merikos_pliroteo = $request->Merikos_pliroteo;
        $timologio->Eksoda_timologion = $request->Eksoda_timologion;
        $timologio->fpa = $request->fpa;
        $timologio->Flag = $request->Flag;
        $timologio->save();

        $tameio->id_grafeio = $request->id_grafeio;
        $tameio->Trans_date = $request->Date_ekdosis;
        $tameio->Value = $request->Merikos_pliroteo + $request->Eksoda_timologion;
        $tameio->Valid = 'true';
        $tameio->X_P = 'P';
        $tameio->id_timologio = $timologio->id_timologio;
        $tameio->Date_pliromis = $request->Date_ekdosis;
        $tameio->Pay_meth = 2;
        $tameio->Document_num = $request->Ar_timologiou;
        $tameio->Notes = $company->comp_name;
        $tameio->save();

        $company->Ypoloipo = $company->Ypoloipo + $request->Merikos_pliroteo + $request->Eksoda_timologion;
        $company->save();

        return redirect('timol_compl/update_ekth'.'/'.$timologio->id_timologio);
    }

    public function create_ekth_to_update($idTimol){
        $timologio = TimologioCompany::where([['id_timologio',$idTimol]])->first();
        $grafeia = Grafeio::where('Mark_del', 'Όχι')->orderBy('Name')->get();
        $companies = Company::where('Mark_del', 'Όχι')->orderBy('comp_name')->get();
        $pathontes = Person::where([['Mark_del', 'Όχι'], ['id_person', '>', '1']])->get();
        $oximata = Oxima::where([['Mark_del', 'Όχι'], ['id_oximata', '>', '1']])->get();
//        dd($timologio);
//        $pragm = (new Pragmatognomosini)->newQuery();
        $pragma = Pragmatognomosini::where([['id_company_pathon','=',$timologio->id_company] , ['id_timologio_etaireias','=',null]])->get();
//        dd($pragmatognomosini);
//        $status = $status = DB::select('select * from db_status_ekthesis where Valid = ?  id_status = ?', ['Ναι'] ,[5]);
        $status = DB::table('db_status_ekthesis')->where('Valid','=','Ναι')->where('id_status','=','5')->get();
//        dd($status);
//        foreach ($status as $stat) {
//            if ($stat->pivot->id_status == 5) {
//                $next_status = $stat->pivot->id_status + 1;
//            }
//        }

        $timologio->Date_ekdosis=Carbon::createFromFormat('Y-m-d', $timologio->Date_ekdosis)->format('d-m-Y');

        return view('timologio_comp.update_ekth',compact([
            'timologio',
            'pragma',
            'companies',
            'pathontes',
            'oximata',
            'grafeia',
            'status'
        ]));
    }

    public function store_ekth(Request $request,$idTimologio){

        $pragma = Pragmatognomosini::where([['id_company_pathon','=',$request->id_company] , ['id_timologio_etaireias','=',null]])->get();
        $date_ekdosis = Carbon::createFromFormat('d-m-Y',  $request->Date_ekdosis)->format('Y-m-d');
//        dd($request);
        if ($request->choice_all == null){
            foreach ($pragma as $prag){
                foreach ($request->input('choice') as $ekth => $value) {
                    if ($prag->id_ekthesis == $ekth){
                        $prag->id_timologio_etaireias = $request->id_timologio;
                        $prag->save();
                        $idStatus=6;
                        $prag->status_of_ekth()->attach($idStatus, ['Status_date' => $date_ekdosis], ['Valid' => 'Ναι'], ['Process_date' => $date_ekdosis], ['Notes' => '']);
                        $status = $prag->status_of_ekth()->get();
                        foreach ($status as $stat) {
                            if ($stat->pivot->id_status < $idStatus) {
                                $stat->pivot->Valid = 'Όχι';
                                $stat->pivot->save();
                            }
                            if ($stat->pivot->id_status == $idStatus) {
                                $stat->pivot->Process_date = $date_ekdosis;
                                $stat->pivot->Notes ='';
                                $stat->pivot->save();
                            }
                        }
                    }
                }
            }
        }else{
            foreach ($pragma as $prag) {
                foreach ($request->input('id_ekthesis') as $ekth => $value){
//                    dd($ekth);
                    if ($prag->id_ekthesis == $ekth) {
                        $prag->id_timologio_etaireias = $request->id_timologio;
                        $prag->save();
                        $idStatus = 6;
                        $prag->status_of_ekth()->attach($idStatus, ['Status_date' => $date_ekdosis], ['Valid' => 'Ναι'], ['Process_date' => $date_ekdosis], ['Notes' => '']);
                        $status = $prag->status_of_ekth()->get();
                        foreach ($status as $stat) {
                            if ($stat->pivot->id_status < $idStatus) {
                                $stat->pivot->Valid = 'Όχι';
                                $stat->pivot->save();
                            }
                            if ($stat->pivot->id_status == $idStatus) {
                                $stat->pivot->Process_date = $date_ekdosis;
                                $stat->pivot->Notes = '';
                                $stat->pivot->save();
                            }
                        }
                    }
                }
            }
        }
        return redirect('timol_compl/search');
    }

    public function edit($idTimol){
        $timologio = TimologioCompany::where([['id_timologio',$idTimol]])->first();
        $grafeia = Grafeio::where('Mark_del', 'Όχι')->orderBy('Name')->get();
        $companies = Company::where('Mark_del', 'Όχι')->orderBy('comp_name')->get();
        $pathontes = Person::where([['Mark_del', 'Όχι'], ['id_person', '>', '1']])->get();
        $oximata = Oxima::where([['Mark_del', 'Όχι'], ['id_oximata', '>', '1']])->get();
        $pragma = Pragmatognomosini::where([['id_timologio_etaireias','=',$idTimol]])->get();
        $timologio->Date_ekdosis=Carbon::createFromFormat('Y-m-d', $timologio->Date_ekdosis)->format('d-m-Y');
        foreach ($pragma as $prag) {
            $prag->Date_atiximatos = Carbon::createFromFormat('Y-m-d', $prag->Date_atiximatos)->format('d-m-Y');
        }

        return view('timologio_comp.edit',compact([
            'timologio',
            'pragma',
            'companies',
            'pathontes',
            'oximata',
            'grafeia'
        ]));
    }

    public function update(Request $request){
        if ($request->Valid == 'Όχι') {
            $timologio = TimologioCompany::where([['id_timologio', $request->id_timologio]])->first();
            $company = Company::where('id_company', $request->id_company)->orderBy('comp_name')->first();
            $pragma = Pragmatognomosini::where([['id_timologio_etaireias','=',$request->id_timologio]])->get();
            $tameio = Tameio::where([['id_timologio',$request->id_timologio]])->first();
//            $status = DB::table('db_status_ekthesis')->where('id_status','>=','5')->get();


            foreach ($pragma as $prag){
                $prag->id_timologio_etaireias=null;
                $prag->save();
                $status = $prag->status_of_ekth()->wherePivot('id_status','>=','5')->where('id_ekthesis','=',$prag->id_ekthesis)->get();
//                dd($status);
                foreach ($status as $stat){
                    if (($stat->pivot->id_ekthesis == $prag->id_ekthesis) && ($stat->id_status ==6)){
                        $prag->status_of_ekth()->detach($stat->pivot->id_status);
                    }elseif (($stat->pivot->id_ekthesis == $prag->id_ekthesis) && ($stat->pivot->id_status ==5)){
                        $stat->pivot->Valid = 'Ναι';
//                            dd($stat);
                        $stat->pivot->save();
                    }
                }
            }

            $timologio->Valid = $request->Valid;
            $timologio->save();
            $tameio->Valid ='false';
            $tameio->save();

            $company->Ypoloipo = $company->Ypoloipo + $request->Merikos_pliroteo + $request->Eksoda_timologion;
            $company->save();
        }
        $timologio = TimologioCompany::orderBy('Date_ekdosis')->get();
        $company = Company::where('Mark_del', 'Όχι')->orderBy('comp_name')->get();
        $grafeia = Grafeio::where('Mark_del', 'Όχι')->orderBy('Name')->get();
        foreach ($timologio as $timol) {
            $timol->Date_ekdosis = Carbon::createFromFormat('Y-m-d', $timol->Date_ekdosis)->format('d-m-Y');
        }

        return view('timologio_comp.search',compact([
            'timologio',
            'company',
            'grafeia'
        ]));

    }

    public function opensearch(){
        $timologio = TimologioCompany::orderBy('Date_ekdosis')->get();
        $company = Company::where('Mark_del', 'Όχι')->orderBy('comp_name')->get();
        $grafeia = Grafeio::where('Mark_del', 'Όχι')->orderBy('Name')->get();
        foreach ($timologio as $timol) {
            $timol->Date_ekdosis = Carbon::createFromFormat('Y-m-d', $timol->Date_ekdosis)->format('d-m-Y');
        }

        return view('timologio_comp.search',compact([
            'timologio',
            'company',
            'grafeia'
        ]));
    }

    public function search(Request $request){
        $timologio = TimologioCompany::orderBy('Date_ekdosis')->get();
        $company = Company::where('Mark_del', 'Όχι')->orderBy('comp_name')->get();
        $grafeia = Grafeio::where('Mark_del', 'Όχι')->orderBy('Name')->get();

        if ($request->sdate_ekd == null && $request->fdate_ekd == null){
            $timologio = TimologioCompany::orderBy('Date_ekdosis')->get();
        }elseif($request->fdate_ekd == null){
            $sdate = Carbon::createFromFormat('d-m-Y', $request->sdate_ekd)->format('Y-m-d');
            $timologio = TimologioCompany::where([['Date_ekdosis','>=',$sdate]])->orderBy('Date_ekdosis')->get();
        }elseif ($request->sdate_ekd == null){
            $fdate = Carbon::createFromFormat('d-m-Y', $request->fdate_ekd)->format('Y-m-d');
            $timologio = TimologioCompany::where([['Date_ekdosis','<=',$fdate]])->orderBy('Date_ekdosis')->get();
        }else{
            $sdate = Carbon::createFromFormat('d-m-Y', $request->sdate_ekd)->format('Y-m-d');
            $fdate = Carbon::createFromFormat('d-m-Y', $request->fdate_ekd)->format('Y-m-d');
            $timologio = TimologioCompany::where([['Date_ekdosis','>=',$sdate],['Date_ekdosis','<=',$fdate]])->orderBy('Date_ekdosis')->get();
        }

        foreach ($timologio as $timol) {
            $timol->Date_ekdosis = Carbon::createFromFormat('Y-m-d', $timol->Date_ekdosis)->format('d-m-Y');
        }

        return view('timologio_comp.search',compact([
            'timologio',
            'company',
            'grafeia'
        ]));
    }
}
