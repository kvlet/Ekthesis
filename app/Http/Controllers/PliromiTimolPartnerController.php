<?php

namespace App\Http\Controllers;

use App\Company;
use App\Grafeio;
use App\Oxima;
use App\Person;
use App\PliromiTimolPartner;
use App\Pragmatognomosini;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Tameio;

class PliromiTimolPartnerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
        $grafeia = Grafeio::where('Mark_del', 'Όχι')->orderBy('Name')->get();
        $pragmatognomones = User::where([['thesi', 'LIKE', 'ΠΡΑΓ%'], ['Active', 'Ναι']])->get();

        return view('pliromi_tim_partner.create',compact([
            'grafeia',
            'pragmatognomones'
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
        $tameio = new Tameio();
        $pliromiTimolPartner = new PliromiTimolPartner();
        $pragmatognomonas = User::where([['id', $request->id_partner]])->first();

        $request->Valid='true';
        $request->Flag='1';
        $dateTimol = Carbon::createFromFormat('d-m-Y',  $request->Date_timol)->format('Y-m-d');
        $request->Date_timol = $dateTimol;

        $pliromiTimolPartner->Ar_timologio_partner=$request->Ar_timologio_partner;
        $pliromiTimolPartner->id_partner=$request->id_partner;
        $pliromiTimolPartner->id_grafeio=$request->id_grafeio;
        $pliromiTimolPartner->Date_timol=$request->Date_timol;
        $pliromiTimolPartner->Value=$request->Value;
        $pliromiTimolPartner->Notes=$request->Notes;
        $pliromiTimolPartner->Valid=$request->Valid;
        $pliromiTimolPartner->Parakratisi=$request->Parakratisi;
        $pliromiTimolPartner->Pososto_parakr=$request->Pososto_parakr;
        $pliromiTimolPartner->Poso_parakr=$request->Poso_parakr;
        $pliromiTimolPartner->Value_me_fpa=$request->Value_me_fpa;
        $pliromiTimolPartner->fpa=$request->fpa;
        $pliromiTimolPartner->Flag=$request->Flag;
        $pliromiTimolPartner->save();


        $tameio->id_grafeio=$request->id_grafeio;
        $tameio->Trans_date=$request->Date_timol;
        $tameio->Date_pliromis=$request->Date_timol;
        $tameio->Value=$request->Value_me_fpa;
        $tameio->Valid=$request->Valid;
        $tameio->X_P='X';
        $tameio->id_expenses=47;
        $tameio->Pay_meth=1;
        $tameio->Document_num=$request->Ar_timologio_partner;
        $tameio->id_timologio=$request->id_partner;
        $tameio->Notes = $request->Note;
        $tameio->save();

        $pragmatognomonas->Ypoloipo= $pragmatognomonas->Ypoloipo - $request->Value_me_fpa;
        $pragmatognomonas->save();

        return redirect('timol_partner/update_ekth'.'/'.$request->Ar_timologio_partner.'/'.$request->id_partner);
    }

    public function create_ekth_to_update($arTimol,$idPartner){
        $pliromiTimolPartner = PliromiTimolPartner::where([['Ar_timologio_partner',$arTimol],['id_partner',$idPartner]])->first();
        $pragma = Pragmatognomosini::where([['Ekkatharistike','Όχι'],['id',$idPartner]])->get();
        $companies = Company::where('Mark_del', 'Όχι')->get();
        $pathontes = Person::where([['Mark_del', 'Όχι'], ['id_person', '>', '1']])->get();
        $oximata = Oxima::where([['Mark_del', 'Όχι'], ['id_oximata', '>', '1']])->get();
        $grafeia = Grafeio::where('Mark_del', 'Όχι')->orderBy('Name')->get();
        $pragmatognomones = User::where([['thesi', 'LIKE', 'ΠΡΑΓ%'], ['Active', 'Ναι']])->get();
        $pliromiTimolPartner->Date_timol=Carbon::createFromFormat('Y-m-d', $pliromiTimolPartner->Date_timol)->format('d-m-Y');
        foreach ($pragma as $prag) {
            $prag->Date_atiximatos = Carbon::createFromFormat('Y-m-d', $prag->Date_atiximatos)->format('d-m-Y');
        }
        return view('pliromi_tim_partner.update_ekth',compact([
            'pliromiTimolPartner',
            'pragma',
            'companies',
            'pathontes',
            'oximata',
            'grafeia',
            'pragmatognomones'
        ]));
    }

    public function store_ekth(Request $request,$idPartner){
        $pragma = Pragmatognomosini::where([['Ekkatharistike','Όχι'],['id',$idPartner]])->get();
//        dd($request,$pragma);
        if ($request->choice_all == null){
            foreach ($pragma as $prag){
                foreach ($request->input('choice') as $ekth => $value) {
                    if ($prag->id_ekthesis == $ekth){
                        $prag->Ekkatharistike='Ναι';
                        $prag->Ar_timologio_partner=$request->Ar_timologio_partner;
                        $prag->save();
                    }
                }
            }
        }else{
            foreach ($pragma as $prag){
                $prag->Ekkatharistike='Ναι';
                $prag->Ar_timologio_partner=$request->Ar_timologio_partner;
                $prag->save();
            }
        }

        return redirect('timol_partner/search');
    }

    public function edit($arTimol,$idPartner){
        $pliromiTimolPartner = PliromiTimolPartner::where([['Ar_timologio_partner',$arTimol],['id_partner',$idPartner]])->first();
        $grafeia = Grafeio::where('Mark_del', 'Όχι')->orderBy('Name')->get();
        $pragmatognomones = User::where([['thesi', 'LIKE', 'ΠΡΑΓ%'], ['Active', 'Ναι']])->get();
        $pliromiTimolPartner->Date_timol=Carbon::createFromFormat('Y-m-d', $pliromiTimolPartner->Date_timol)->format('d-m-Y');
        $pragma = Pragmatognomosini::where([['Ar_timologio_partner',$arTimol],['id',$idPartner]])->get();
        $companies = Company::where('Mark_del', 'Όχι')->get();
        $pathontes = Person::where([['Mark_del', 'Όχι'], ['id_person', '>', '1']])->get();
        $oximata = Oxima::where([['Mark_del', 'Όχι'], ['id_oximata', '>', '1']])->get();
        foreach ($pragma as $prag) {
            $prag->Date_atiximatos = Carbon::createFromFormat('Y-m-d', $prag->Date_atiximatos)->format('d-m-Y');
        }

        return view('pliromi_tim_partner.edit',compact([
            'pliromiTimolPartner',
            'grafeia',
            'pragmatognomones',
            'pragma',
            'companies',
            'pathontes',
            'oximata'
        ]));

    }

    public function update(Request $request){
        if ($request->Valid == 'false'){
            $pliromiTimolPartner = PliromiTimolPartner::where([['Ar_timologio_partner',$request->Ar_timologio_partner],['id_partner',$request->id_partner]])->first();
            $tameio = Tameio::where([['id_timologio',$request->id_partner],['Document_num',$request->Ar_timologio_partner]])->first();
            $pragma = Pragmatognomosini::where([['Ekkatharistike','Ναι'],['id',$request->id_partner]])->get();
            $pragmatognomones = User::where([['id', $request->id_partner]])->first();

            $pliromiTimolPartner->Valid = $request->Valid;
            $pliromiTimolPartner->save();
            $tameio->Valid = $request->Valid;
            $tameio->save();

            foreach ($pragma as $prag){
                foreach ($request->input('ekthesis') as $ekth => $value) {
                    if ($prag->id_ekthesis == $ekth){
                        $prag->Ekkatharistike='Όχι';
                        $prag->Ar_timologio_partner=' ';
                        $prag->save();
                    }
                }
            }
            $pragmatognomones->Ypoloipo = $pragmatognomones->Ypoloipo + $request->Value_me_fpa;
            $pragmatognomones->save();
        }

        $pliromiTimolPartner = PliromiTimolPartner::orderBy('Date_timol')->get();
        $grafeia = Grafeio::where('Mark_del', 'Όχι')->orderBy('Name')->get();
        $pragmatognomones = User::where([['thesi', 'LIKE', 'ΠΡΑΓ%'], ['Active', 'Ναι']])->get();
        foreach ($pliromiTimolPartner as $pliTimol) {
            $pliTimol->Date_timol = Carbon::createFromFormat('Y-m-d', $pliTimol->Date_timol)->format('d-m-Y');
        }
        return view('pliromi_tim_partner.search',compact([
            'pliromiTimolPartner',
            'grafeia',
            'pragmatognomones'
        ]));

    }

    public function opensearch(){
        $pliromiTimolPartner = PliromiTimolPartner::orderBy('Date_timol')->get();
        $grafeia = Grafeio::where('Mark_del', 'Όχι')->orderBy('Name')->get();
        $pragmatognomones = User::where([['thesi', 'LIKE', 'ΠΡΑΓ%'], ['Active', 'Ναι']])->get();
        foreach ($pliromiTimolPartner as $pliTimol){
            $pliTimol->Date_timol = Carbon::createFromFormat('Y-m-d', $pliTimol->Date_timol)->format('d-m-Y');
        }
        return view('pliromi_tim_partner.search',compact([
            'pliromiTimolPartner',
            'grafeia',
            'pragmatognomones'
        ]));
    }

    public function search(Request $request){
        $grafeia = Grafeio::where('Mark_del', 'Όχι')->orderBy('Name')->get();
        $pragmatognomones = User::where([['thesi', 'LIKE', 'ΠΡΑΓ%'], ['Active', 'Ναι']])->get();
        if ($request->stimol_date == null && $request->ftimol_date == null){
            $pliromiTimolPartner = PliromiTimolPartner::orderBy('Date_timol')->get();
        }elseif($request->ftimol_date == null){
            $sdate = Carbon::createFromFormat('d-m-Y', $request->stimol_date)->format('Y-m-d');
            $pliromiTimolPartner = PliromiTimolPartner::where([['Date_timol','>=',$sdate]])->orderBy('Date_timol')->get();
        }elseif ($request->stimol_date == null){
            $fdate = Carbon::createFromFormat('d-m-Y', $request->ftimol_date)->format('Y-m-d');
            $pliromiTimolPartner = PliromiTimolPartner::where([['Date_timol','<=',$fdate]])->orderBy('Date_timol')->get();
        }else{
            $sdate = Carbon::createFromFormat('d-m-Y', $request->stimol_date)->format('Y-m-d');
            $fdate = Carbon::createFromFormat('d-m-Y', $request->ftimol_date)->format('Y-m-d');
            $pliromiTimolPartner = PliromiTimolPartner::where([['Date_timol','>=',$sdate],['Date_timol','<=',$fdate]])->orderBy('Date_timol')->get();
        }
        foreach ($pliromiTimolPartner as $pliTimol){
            $pliTimol->Date_timol = Carbon::createFromFormat('Y-m-d', $pliTimol->Date_timol)->format('d-m-Y');
        }
        return view('pliromi_tim_partner.search',compact([
            'pliromiTimolPartner',
            'grafeia',
            'pragmatognomones'
        ]));
    }
}
