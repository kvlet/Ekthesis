<?php

namespace App\Http\Controllers;

use App\Company;
use App\Oxima;
use App\Person;
use App\Pragmatognomosini;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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
    public function index()
    {
        $pragmatognomosines = Pragmatognomosini::where([['Valid','true']])->get();
        $companies = Company::where('Mark_del', 'Όχι')->get();
        $pathontes = Person::where([['Mark_del','Όχι'],['id_person','>','1']])->get();
        $oximata_pathon = Oxima::where([['Mark_del','Όχι'],['id_oximata','>','1']])->get();
        $pragmatognomones = User::where([['thesi','LIKE','ΠΡΑΓ%'],['Active','Ναι']])->get();
        foreach ($pragmatognomosines as $pragm){
            $dateAtiximatos = Carbon::createFromFormat('Y-m-d', $pragm->Date_atiximatos)->format('d-m-Y');
            $pragm->Date_atiximatos = $dateAtiximatos;
        }
        $status = DB::select('select * from db_status_ekthesis where Valid = ?', ['Ναι']);

        return view('home',compact([
            'pragmatognomosines',
            'companies',
            'pathontes',
            'oximata_pathon',
            'pragmatognomones',
            'status'
        ]));
    }
    public function search(Request $request){
        $pragm = (new Pragmatognomosini)->newQuery();

        if ($request->id_ekthesis != null){
            $pragm->where('id_ekthesis','LIKE','%'.$request->id_ekthesis.'%');
        }else{
            $pragm->get()->all();
        }

        if ($request->Prot_bibliou != null){
            $pragm->where('Prot_bibliou','LIKE','%'.$request->Prot_bibliou.'%');
        }else{
            $pragm->get()->all();
        }
        if ($request->company != null){
            $companies= Company::where([['Mark_del','Όχι'],['comp_name','LIKE','%'.$request->company.'%']])->get('id_company');
            $pragm->whereIn('id_company_pathon',$companies)->get();
        }else{
            $pragm->get()->all();
        }
        if ($request->user != null){
            $users= User::where([['Active','Ναι'],['L_name','LIKE','%'.$request->user.'%']])->get('id');
            $pragm->whereIn('id_company_pathon',$users)->get();
        }else{
            $pragm->get()->all();
        }
        if ($request->Ar_kyklo_p != null){
            $oximata = Oxima::where([['Mark_del','Όχι'],['id_oximata','>','1'],['Ar_kyklo','LIKE','%'.$request->Ar_kyklo_p.'%']])->get('id_oximata');
            $pragm->whereIn('id_oximatos_pathon',$oximata)->get();
//            dd($oximata);
        }else{
            $pragm->get()->all();
        }
        if ($request->pathon != null){
            $persons=Person::where([['Mark_del','Όχι'],['id_person','>','1'],['L_name','LIKE','%'.$request->pathon.'%']])->get('id_person');
            $pragm->whereIn('id_pathon',$persons)->get();
        }else{
            $pragm->get()->all();
        }
        if ($request->Ar_kyklo_y != null){
            $oximata = Oxima::where([['Mark_del','Όχι'],['id_oximata','>','1'],['Ar_kyklo','LIKE','%'.$request->Ar_kyklo_y.'%']])->get('id_oximata');
            $pragm->whereIn('id_oximatos_ypaitiou',$oximata)->get();
//            dd($oximata);
        }else{
            $pragm->get()->all();
        }
        if ($request->ypaitios != null){
            $persons=Person::where([['Mark_del','Όχι'],['id_person','>','1'],['L_name','LIKE','%'.$request->ypaitios.'%']])->get('id_person');
            $pragm->whereIn('id_ypaitiou',$persons)->get();
        }else{
            $pragm->get()->all();
        }
        if ($request->sDate_atiximatos !=null && $request->eDate_atiximatos !=null){
            $sdate=Carbon::createFromFormat('d-m-Y',$request->sDate_atiximatos)->format('Y-m-d');
            $edate=Carbon::createFromFormat('d-m-Y',$request->eDate_atiximatos)->format('Y-m-d');
            $pragm->whereBetween('Date_atiximatos',[$sdate,$edate])->get();
        }elseif ($request->sDate_atiximatos !=null){
            $sdate=Carbon::createFromFormat('d-m-Y',$request->sDate_atiximatos)->format('Y-m-d');
            $pragm->where('Date_atiximatos','>=',$sdate)->get();
        }elseif ($request->eDate_atiximatos !=null){
            $edate=Carbon::createFromFormat('d-m-Y',$request->eDate_atiximatos)->format('Y-m-d');
            $pragm->where('Date_atiximatos','=',$edate)->get();
        }else{
            $pragm->get()->all();
        }

        $pragmatognomosines= $pragm->get();

        $companies = Company::where('Mark_del', 'Όχι')->get();
        $pathontes = Person::where([['Mark_del','Όχι'],['id_person','>','1']])->get();
        $oximata_pathon = Oxima::where([['Mark_del','Όχι'],['id_oximata','>','1']])->get();
        $pragmatognomones = User::where([['thesi','LIKE','ΠΡΑΓ%'],['Active','Ναι']])->get();
        foreach ($pragmatognomosines as $pragm){
            $dateAtiximatos = Carbon::createFromFormat('Y-m-d', $pragm->Date_atiximatos)->format('d-m-Y');
            $pragm->Date_atiximatos = $dateAtiximatos;
        }
        $status = DB::select('select * from db_status_ekthesis where Valid = ?', ['Ναι']);
        return view('home',compact([
            'pragmatognomosines',
            'companies',
            'pathontes',
            'oximata_pathon',
            'pragmatognomones',
            'status'
        ]));
    }
}
