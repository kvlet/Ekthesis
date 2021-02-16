<?php

namespace App\Http\Controllers;

use App\Accedent_place;
use App\Arxi_ekdosis_eggrafon;
use App\Company;
use App\DetailPrag;
use App\Diakrisi;
use App\Ergasies;
use App\Grafeio;
use App\Keimena;
use App\Nomos;
use App\Oxima;
use App\Parts;
use App\Person;
use App\Pragmatognomosini;
use App\Praktoreio;
use App\Proiparxousa;
use App\Status;
use App\Synergeio;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\PragmRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Filesystem\Filesystem;
use \Carbon\Carbon;
use File;
use DateTime;
use DateInterval;
use Illuminate\Support\Facades\DB;


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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */



    public function create()
    {
        $grafeia = Grafeio::all('id_grafeio', 'Name');
        $nomoi = Nomos::where([['Mark_del','Όχι']])->get();
        if (\Request::is('pragmatognomosines')) {
            $diakrisis = Diakrisi::where([['Group_diakr','<','3'],['Mark_del','Όχι']])->get();
        }elseif (\Request::is('ereunes')){
            $diakrisis = Diakrisi::where([['Group_diakr','>=','3'],['Mark_del','Όχι']])->get();
        }else{
            $diakrisis = Diakrisi::where([['Mark_del','Όχι']])->get();
        }

        $accedent_places=Accedent_place::where('Mark_del', 'Όχι')->get();
        $arxes_ekdosis_eggrafon = Arxi_ekdosis_eggrafon::where('Mark_del', 'Όχι')->get();
        $pragmatognomones = User::where([['thesi','LIKE','ΠΡΑΓ%'],['Active','Ναι']])->get();
        $companies = Company::where('Mark_del', 'Όχι')->get();
        $pathontes = Person::where([['Mark_del','Όχι'],['id_person','>','1']])->get();
        $oximata_pathon = Oxima::where([['Mark_del','Όχι'],['id_oximata','>','1']])->get();

        return view('pragmatognomosines.create', compact([
            'grafeia',
            'nomoi',
            'diakrisis',
            'accedent_places',
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

        if ($request->Object != null){
            $request->id_oximatos_pathon='1';
        }

//        fix date format for DB
        $dateAtiximatos = Carbon::createFromFormat('d-m-Y', $request->Date_atiximatos)->format('Y-m-d');
        $request->Date_atiximatos = $dateAtiximatos;
        if ($request->Date_dikasimou != null){
            $dateDikasimou = Carbon::createFromFormat('d-m-Y', $request->Date_dikasimou)->format('Y-m-d');
            $request->Date_dikasimou = $dateDikasimou;
        }
        if ($request->Date_eksetasis != null){
            $dateEksetasis = Carbon::createFromFormat('d-m-Y', $request->Date_eksetasis)->format('Y-m-d');
            $request->Date_eksetasis = $dateEksetasis;
        }
        if ($request->Date_paradosis != null){
            $dateParadosis = Carbon::createFromFormat('d-m-Y', $request->Date_paradosis)->format('Y-m-d');
            $request->Date_paradosis = $dateParadosis;
        }
//        end fix date format for DB

        $pragmatognomosini->id = $request->id;
        $pragmatognomosini->Date_atiximatos = $request->Date_atiximatos;
        $pragmatognomosini->Date_dikasimou = $request->Date_dikasimou;
        $pragmatognomosini->Date_eksetasis = $request->Date_eksetasis;
        $pragmatognomosini->id_accedent_place = $request->id_accedent_place;
        $pragmatognomosini->id_ypaitiou = $request->id_ypaitiou;
        $pragmatognomosini->id_oximatos_ypaitiou = $request->id_oximatos_ypaitiou;
        $pragmatognomosini->id_pathon = $request->id_pathon;
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
        $pragmatognomosini->Ekpt_parts = $request->Ekpt_parts ?? '0.0';
        $pragmatognomosini->Ekpt_jobs = $request->Ekpt_jobs ?? '0.0';
        $pragmatognomosini->Date_paradosis = $request->Date_paradosis;
        $pragmatognomosini->Object = $request->Object;
        $pragmatognomosini->id_arxi_ekdosis_eggrafon = $request->id_arxi_ekdosis_eggrafon;
        $pragmatognomosini->Fpa = $request->Fpa ?? '24.0';
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


        if ($request->id_oximatos_pathon != null){
            $pragmatognomosini->id_oximatos_pathon = $request->id_oximatos_pathon;
        }else{
            $pragmatognomosini->id_oximatos_pathon=1;
        }
        $pragmatognomosini->save();

        // insert to table status ekthesis
            $procDate = new DateTime(date('Y-m-d'));
            $procDate->add(new DateInterval('P2D'));
            $query = array(['id_status' => 1, 'id_ekthesis' => $pragmatognomosini->id_ekthesis, 'Status_date' => date('Y-m-d'), 'Valid' => 'Ναι','Process_date'=>$procDate]);
            DB::table('db_status_ekthesis')->insert($query);
            //$procDate = new DateTime(date('Y-m-d'));
            //$procDate->add(new DateInterval('P2D'));
            //$procDate=Carbon::createFromFormat('Y-m-d',date('Y-m-d'));
            //$daysToAdd =3;
            //$procDate = $procDate->addDays($daysToAdd);
            //dd($procDate) ;
            //$val='Ναι';
            //$pragmatognomosini->status_ek()->attach('1',['Status_date'=>date('Y-m-d')],['Valid'=>$val],['Process_date'=>date('Y-m-d')]);
        // end insert to to table status ekthesis

        if ($request->id_diakrisi=='Π' || $request->id_diakrisi=='ΠΕ'){
            return redirect('pragmatognomosines/'.$pragmatognomosini->id_ekthesis);
        }else{
            return redirect('ereunes/'.$pragmatognomosini->id_ekthesis);
        }
    }

    public function edit($id_ekthesis)
    {

        $grafeia = Grafeio::all('id_grafeio', 'Name');
        $nomoi = Nomos::where([['Mark_del','Όχι']])->get();
        if (\Request::is('pragmatognomosines/*')) {
            $diakrisis = Diakrisi::where([['Group_diakr','<','3'],['Mark_del','Όχι']])->get();
        }elseif (\Request::is('ereunes/*')){
            $diakrisis = Diakrisi::where([['Group_diakr','>=','3'],['Mark_del','Όχι']])->get();
        }else{
            $diakrisis = Diakrisi::where([['Mark_del','Όχι']])->get();
        }
        $accedent_places=Accedent_place::where('Mark_del', 'Όχι')->get();
        $arxes_ekdosis_eggrafon = Arxi_ekdosis_eggrafon::where('Mark_del', 'Όχι')->get();
        $pragmatognomones = User::where([['thesi','LIKE','ΠΡΑΓ%'],['Active','Ναι']])->get();
        $companies = Company::where('Mark_del', 'Όχι')->get();
        $pathontes = Person::where([['Mark_del','Όχι'],['id_person','>','1']])->get();
        $oximata_pathon = Oxima::where([['Mark_del','Όχι'],['id_oximata','>','1']])->get();
        $keimena = Keimena::where([['Mark_del','Όχι']])->get();
        $praktoreia = Praktoreio::where([['mark_del','Όχι']])->get();
        $synergeia = Synergeio::where([['Mark_del','Όχι']])->get();
        $parts = Parts::where([['Mark_del','Όχι'],['id_parts','>','1']])->get();
        $ergasies = Ergasies::where([['Mark_del','Όχι']])->get();
        $status = Status::where([['Mark_del','Όχι']])->get();

        // many to many for pragmatognomosini
        $pragmatognomosini = Pragmatognomosini::with('keimena','praktoreia','synergeia','parts_of_ergasies','proiparxouses','status_of_ekth')->findOrFail($id_ekthesis);
        // end many to many for pragmatognomosini

        // calculate file position
        if ($pragmatognomosini->id_oximatos_pathon != 1){
            foreach ($oximata_pathon as $oxima){
                if($pragmatognomosini->id_oximatos_pathon == $oxima->id_oximata){
                     $pinakida=$oxima->Ar_kyklo;
                }
            }
        }
        if ($pragmatognomosini->Object == null){
            $pragmatognomosini->File_position = 'oximata\\'.$pinakida.'\\'.$pragmatognomosini->id_ekthesis;
        }else{
            $pragmatognomosini->File_position = 'oximata\\'.'object'.'\\'.$pragmatognomosini->id_ekthesis;
        }
        // create folder
        $dir='X:'.'\\'.$pragmatognomosini->File_position;
        if( is_dir($dir) === false )
        {
            File::makeDirectory($dir,$mode = 0777, true, true);
        }
        //end create folder , end calculate file position
        $pragmatognomosini->update();
        //end calculate file position

        ///make windows dir

        $newdir = new Filesystem();
        $path='X:\\'.$pragmatognomosini->File_position;
        if ( !$newdir->isDirectory(storage_path($path)) )
        {
            $newdir->makeDirectory(storage_path($path), 755, true, true);
        }

        // end make windows dir

        //        fix date format for display in form
            $dateAtiximatos = Carbon::createFromFormat('Y-m-d', $pragmatognomosini->Date_atiximatos)->format('d-m-Y');
            $pragmatognomosini->Date_atiximatos = $dateAtiximatos;
            if ($pragmatognomosini->Date_dikasimou != null){
                $dateDikasimou = Carbon::createFromFormat('Y-m-d', $pragmatognomosini->Date_dikasimou)->format('d-m-Y');
                $pragmatognomosini->Date_dikasimou = $dateDikasimou;
            }
            if ($pragmatognomosini->Date_eksetasis != null){
                $dateEksetasis = Carbon::createFromFormat('Y-m-d', $pragmatognomosini->Date_eksetasis)->format('d-m-Y');
                $pragmatognomosini->Date_eksetasis = $dateEksetasis;
            }
            if ($pragmatognomosini->Date_paradosis != null){
                $dateParadosis = Carbon::createFromFormat('Y-m-d', $pragmatognomosini->Date_paradosis)->format('d-m-Y');
                $pragmatognomosini->Date_paradosis = $dateParadosis;
            }
            foreach ($pragmatognomosini->synergeia as $synergeio){
                $synergeio->pivot->Date_episkepsis=Carbon::createFromFormat('Y-m-d', $synergeio->pivot->Date_episkepsis)->format('d-m-Y');
                if ($synergeio->pivot->Date_episkepsis2 != null){
                    $synergeio->pivot->Date_episkepsis2=Carbon::createFromFormat('Y-m-d', $synergeio->pivot->Date_episkepsis2)->format('d-m-Y');
                }
                if ($synergeio->pivot->Date_episkepsis3 != null){
                    $synergeio->pivot->Date_episkepsis3=Carbon::createFromFormat('Y-m-d', $synergeio->pivot->Date_episkepsis3)->format('d-m-Y');
                }
            }
            foreach ($pragmatognomosini->status_of_ekth as $stat){
                $stat->pivot->Status_date=Carbon::createFromFormat('Y-m-d', $stat->pivot->Status_date)->format('d-m-Y');
                if ($stat->pivot->Process_date !=null){
                    $stat->pivot->Process_date=Carbon::createFromFormat('Y-m-d', $stat->pivot->Process_date)->format('d-m-Y');
                }
            }
       //      end fix date format for display in form

       // calculate ekthesi details costs

            $costPart=0;$costJob=0;
            $costPart3=0;$costJob3=0;$fpaPart3=0;$fpaJob3=0;
            $costPart4=0;$costJob4=0;$fpaPart4=0;$fpaJob4=0;
            $costPart5=0;$costJob5=0;$fpaPart5=0;$fpaJob5=0;
            $costPart6=0;$costJob6=0;$fpaPart6=0;$fpaJob6=0;
            $costJobNoPart=0;$fpaJobNoPart=0;
            foreach ($pragmatognomosini->parts_of_ergasies as $ergasia) {
//                dd($ergasia);
                if ($ergasia->pivot->fpa_part == 1){
                    $costPart=$ergasia->pivot->Cost_part / (1+($ergasia->pivot->sint_fpa_part/100));
                }else{
                    $costPart=$ergasia->pivot->Cost_part;
                }

                if ($ergasia->pivot->fpa_job == 1){
                    $costJob=$ergasia->pivot->Cost_job / (1+($ergasia->pivot->sint_fpa_job/100));
                }else{
                    $costJob=$ergasia->pivot->Cost_job;
                }

                if ($ergasia->pivot->id_ergasies == 3) {
                    $costPart3 += $costPart;
                    $costJob3 += $costJob;
                    $fpaPart3 += $costPart * $ergasia->pivot->sint_fpa_part/100;
                    $fpaJob3 += $costJob * $ergasia->pivot->sint_fpa_job/100;
                }
                if ($ergasia->pivot->id_ergasies == 4) {
                    $costPart4 += $costPart;
                    $costJob4 += $costJob;
                    $fpaPart4 += $costPart * $ergasia->pivot->sint_fpa_part/100;
                    $fpaJob4 += $costJob * $ergasia->pivot->sint_fpa_job/100;
                }
                if ($ergasia->pivot->id_ergasies == 5) {
                    $costPart5 += $costPart;
                    $costJob5 += $costJob;
                    $fpaPart5 += $costPart * $ergasia->pivot->sint_fpa_part/100;
                    $fpaJob5 += $costJob * $ergasia->pivot->sint_fpa_job/100;
                }
                if ($ergasia->pivot->id_ergasies == 6) {
                    $costPart6 += $costPart;
                    $costJob6 += $costJob;
                    $fpaPart6 += $costPart * $ergasia->pivot->sint_fpa_part/100;
                    $fpaJob6 += $costJob * $ergasia->pivot->sint_fpa_job/100;
                }
                if (($ergasia->pivot->id_ergasies != 3) && ($ergasia->pivot->id_ergasies != 4) && ($ergasia->pivot->id_ergasies != 5) && ($ergasia->pivot->id_ergasies != 6) && ($ergasia->pivot->id_ergasies != 55)) {
                    $costJobNoPart += $costJob;
                    $fpaJobNoPart += $costJob * $ergasia->pivot->sint_fpa_job/100;
                }
            }
       // end calculate ekthesi details costs

       // calculate proiparxouses costs
        $costProiparx=0;$fpaProiparx=0;
        foreach ($pragmatognomosini->proiparxouses as $proip){
            if ($proip->pivot->fpa_job == 1){
                $cost=$proip->pivot->value / (1+($proip->pivot->sint_fpa_job/100));
            }else{
                $cost=$proip->pivot->value;
            }
            $costProiparx +=$cost;
            $fpaProiparx += $cost*$proip->pivot->sint_fpa_job/100;
        }
      // end calculate proiparxouses costs


        return view('pragmatognomosines.edit', compact([
            'pragmatognomosini',
            'grafeia',
            'nomoi',
            'diakrisis',
            'accedent_places',
            'arxes_ekdosis_eggrafon',
            'pragmatognomones',
            'companies',
            'pathontes',
            'oximata_pathon',
            'keimena',
            'praktoreia',
            'synergeia',
            'parts',
            'ergasies',
            'costPart3',
            'costJob3',
            'fpaPart3',
            'fpaJob3',
            'costPart4',
            'costJob4',
            'fpaPart4',
            'fpaJob4',
            'costPart5',
            'costJob5',
            'fpaPart5',
            'fpaJob5',
            'costPart6',
            'costJob6',
            'fpaPart6',
            'fpaJob6',
            'costJobNoPart',
            'fpaJobNoPart',
            'costProiparx',
            'fpaProiparx',
            'status'
        ]));
    }

    public function update(Request $request, $id_ekthesis)
    {
        $pragmatognomosini = Pragmatognomosini::findOrFail($id_ekthesis);
        $request->partially_lock = 'Όχι';
        $request->total_lock = 'Όχι';
        $request->Amibi_partner='0';
        $request->Flag='1';

        if ($request->Object != null){
            $request->id_oximatos_pathon='1';
        }

        //        fix date format for DB
        if( $request->Date_atiximatos != null){
            $dateAtiximatos = Carbon::createFromFormat('d-m-Y', $request->Date_atiximatos)->format('Y-m-d');
            $request->Date_atiximatos = $dateAtiximatos;
        }
        if ($request->Date_dikasimou != null){
            $dateDikasimou = Carbon::createFromFormat('d-m-Y', $request->Date_dikasimou)->format('Y-m-d');
            $request->Date_dikasimou = $dateDikasimou;
        }
        if ($request->Date_eksetasis != null){
            $dateEksetasis = Carbon::createFromFormat('d-m-Y', $request->Date_eksetasis)->format('Y-m-d');
            $request->Date_eksetasis = $dateEksetasis;
        }
        if ($request->Date_paradosis != null){
            $dateParadosis = Carbon::createFromFormat('d-m-Y', $request->Date_paradosis)->format('Y-m-d');
            $request->Date_paradosis = $dateParadosis;
        }
//        end fix date format for DB
        $pragmatognomosini->id = $request->id;
        $pragmatognomosini->Date_atiximatos = $request->Date_atiximatos;
        $pragmatognomosini->Date_dikasimou = $request->Date_dikasimou;
        $pragmatognomosini->Date_eksetasis = $request->Date_eksetasis;
        $pragmatognomosini->id_accedent_place = $request->id_accedent_place;
        $pragmatognomosini->id_ypaitiou = $request->id_ypaitiou;
        $pragmatognomosini->id_oximatos_ypaitiou = $request->id_oximatos_ypaitiou;
        $pragmatognomosini->id_pathon = $request->id_pathon;
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
        $pragmatognomosini->Ekpt_parts = $request->Ekpt_parts ?? '0.0';
        $pragmatognomosini->Ekpt_jobs = $request->Ekpt_jobs ?? '0.0';
        $pragmatognomosini->Date_paradosis = $request->Date_paradosis;
        $pragmatognomosini->Object = $request->Object;
        $pragmatognomosini->id_arxi_ekdosis_eggrafon = $request->id_arxi_ekdosis_eggrafon;
        $pragmatognomosini->Fpa = $request->Fpa ?? '24.0';
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

        if ($request->id_oximatos_pathon != null){
            $pragmatognomosini->id_oximatos_pathon = $request->id_oximatos_pathon;
        }else{
            $pragmatognomosini->id_oximatos_pathon=1;
        }

        $pragmatognomosini->update();
        if ($request->id_diakrisi=='Π' || $request->id_diakrisi=='ΠΕ'){
            return redirect('pragmatognomosines/'.$pragmatognomosini->id_ekthesis);
        }else{
            return redirect('ereunes/'.$pragmatognomosini->id_ekthesis);
        }

    }

    public function show($id_ekthesis)
    {
        $pragmatognomosini = Pragmatognomosini::findOrFail($id_ekthesis);

        return redirect('pragmatognomosines/'.$pragmatognomosini->id_ekthesis);
    }

    public function opensearch(){
        $pragmatognomosines = Pragmatognomosini::where([['Valid','true']])->get();
        $companies = Company::where('Mark_del', 'Όχι')->get();
        $pathontes = Person::where([['Mark_del','Όχι'],['id_person','>','1']])->get();
        $oximata_pathon = Oxima::where([['Mark_del','Όχι'],['id_oximata','>','1']])->get();
        $pragmatognomones = User::where([['thesi','LIKE','ΠΡΑΓ%'],['Active','Ναι']])->get();
        foreach ($pragmatognomosines as $pragm){
            $dateAtiximatos = Carbon::createFromFormat('Y-m-d', $pragm->Date_atiximatos)->format('d-m-Y');
            $pragm->Date_atiximatos = $dateAtiximatos;
        }
        // αυτό θα πρέπει να αλλάξει και να αντικατασταθεί απο την συσχέτηση με το μοντέλο
            $status = DB::select('select * from db_status_ekthesis where Valid = ?', ['Ναι']);
        // αυτό θα πρέπει να αλλάξει και να αντικατασταθεί απο την συσχέτηση με το μοντέλο


        return view('pragmatognomosines.search',compact([
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
//        $status = $pragmatognomosines->status_of_ekth()->wherePivot()->where('Valid','=','Ναι')->get();
//        dd($status);
        foreach ($pragmatognomosines as $pragm){
            $dateAtiximatos = Carbon::createFromFormat('Y-m-d', $pragm->Date_atiximatos)->format('d-m-Y');
            $pragm->Date_atiximatos = $dateAtiximatos;
            if ($pragm->Date_dikasimou != null){
                $dateDikasimou = Carbon::createFromFormat('Y-m-d', $pragm->Date_dikasimou)->format('d-m-Y');
                $pragm->Date_dikasimou = $dateDikasimou;
            }
        }
        // αυτό θα πρέπει να αλλάξει και να αντικατασταθεί απο την συσχέτηση με το μοντέλο
            $status = DB::select('select * from db_status_ekthesis where Valid = ?', ['Ναι']);
        // αυτό θα πρέπει να αλλάξει και να αντικατασταθεί απο την συσχέτηση με το μοντέλο

        return view('pragmatognomosines.search',compact([
            'pragmatognomosines',
            'companies',
            'pathontes',
            'oximata_pathon',
            'pragmatognomones',
            'status'
        ]));
    }
    public function update_note(Request $request, $id_ekthesis)
    {

        $pragmatognomosini = Pragmatognomosini::findOrFail($id_ekthesis);

        $pragmatognomosini->Notes = $request->Notes;


        $pragmatognomosini->save();
        if ($pragmatognomosini->id_diakrisi=='Π' || $pragmatognomosini->id_diakrisi=='ΠΕ'){
            return redirect('pragmatognomosines/'.$pragmatognomosini->id_ekthesis);
        }else{
            return redirect('ereunes/'.$pragmatognomosini->id_ekthesis);
        }
    }
    //  manage keimena ekthesis
    public function create_keimena_ekth($id_ekthesis){

        $keimena = Keimena::where([['Mark_del','Όχι']])->get();
        return view('pragmatognomosines.create_keimena_ekth',compact(['keimena','id_ekthesis']));
    }

    public function store_keimena_ekth(Request $request,$id_ekthesis){

        $pragmatognomosini = Pragmatognomosini::findOrFail($id_ekthesis);
        $keimena_note=Keimena::where([['Mark_del','Όχι'],['id_keimena','=',$request->id_keimena]])->pluck('Note');
        $request->Note = $keimena_note[0];
        $pragmatognomosini->keimena()->attach($request->id_keimena, ['Note'=>  $request->Note ],['Print'=>$request->Print],['print_group'=>$request->print_group]);
//        $pragmatognomosini->keimena()->sync([$request->id_keimena]);
//        return back();
        $keimena = Keimena::where([['Mark_del','Όχι']])->get();

//        return redirect('ereunes/'.$pragmatognomosini->id_ekthesis)->with(['keimena','id_ekthesis']);
        if ($pragmatognomosini->id_diakrisi=='Π' || $pragmatognomosini->id_diakrisi=='ΠΕ'){
            return redirect('pragmatognomosines/'.$pragmatognomosini->id_ekthesis)->with(['keimena','id_ekthesis']);
        }else{
            return redirect('ereunes/'.$pragmatognomosini->id_ekthesis)->with(['keimena','id_ekthesis']);
        }
    }

    public function edit_keimena_ekth($id_ekthesis,$id_keimena){

        $pragmatognomosini = Pragmatognomosini::with('keimena')->findOrFail($id_ekthesis);
        $keimeno = $pragmatognomosini->keimena()->wherePivot('id_keimena',$id_keimena)->first();

        $keimena = Keimena::where([['Mark_del','Όχι']])->get();

        return view('pragmatognomosines.edit_keimena_ekth',compact(['keimeno','id_ekthesis','keimena']));


    }

    public function update_keimena_ekth(Request $request){
        $id_ekthesis = $request->id_ekthesis;
        $pragmatognomosini = Pragmatognomosini::with('keimena')->findOrFail($id_ekthesis);
        $keimeno = $pragmatognomosini->keimena()->wherePivot('id_keimena',$request->id_keimena)->first();

        $keimeno->pivot->Note = $request->Note;
        $keimeno->pivot->Print = $request->Print;
        $keimeno->pivot->print_group = $request->print_group;

        $keimeno->pivot->save();
        if ($pragmatognomosini->id_diakrisi=='Π' || $pragmatognomosini->id_diakrisi=='ΠΕ'){
            return redirect('pragmatognomosines/'.$pragmatognomosini->id_ekthesis);
        }else{
            return redirect('ereunes/'.$pragmatognomosini->id_ekthesis);
        }

    }
    public function delete_keimena_ekth($id_ekthesis,$id_keimena){

        $pragmatognomosini = Pragmatognomosini::with('keimena')->findOrFail($id_ekthesis);
        $keimeno = $pragmatognomosini->keimena()->wherePivot('id_keimena',$id_keimena)->first();
        $keimena = Keimena::where([['Mark_del','Όχι']])->get();

        return view('pragmatognomosines.delete_keimena_ekth',compact(['keimeno','id_ekthesis','keimena']));
    }

    public function destroy_keimena_ekth(Request $request){
        $id_ekthesis = $request->id_ekthesis;
        $pragmatognomosini = Pragmatognomosini::with('keimena')->findOrFail($id_ekthesis);
        $keimeno = $pragmatognomosini->keimena()->wherePivot('id_keimena',$request->id_keimena)->first();
        $pragmatognomosini->keimena()->detach($request->id_keimena);

        if ($pragmatognomosini->id_diakrisi=='Π' || $pragmatognomosini->id_diakrisi=='ΠΕ'){
            return redirect('pragmatognomosines/'.$pragmatognomosini->id_ekthesis);
        }else{
            return redirect('ereunes/'.$pragmatognomosini->id_ekthesis);
        }
    }
    //  end manage keimena ekthesis

    // manage praktoreia ekthesis
    public function create_praktoreia_ekth($id_ekthesis){

        $praktoreia = Praktoreio::where([['mark_del','Όχι']])->get();
        return view('pragmatognomosines.create_praktoreia_ekth',compact(['praktoreia','id_ekthesis']));
    }

    public function store_praktoreia_ekth(Request $request,$id_ekthesis){

        $pragmatognomosini = Pragmatognomosini::findOrFail($id_ekthesis);

        $pragmatognomosini->praktoreia()->attach($request->id_praktoreio);

        $praktoreia = Praktoreio::where([['mark_del','Όχι']])->get();
        if ($pragmatognomosini->id_diakrisi=='Π' || $pragmatognomosini->id_diakrisi=='ΠΕ'){
            return redirect('pragmatognomosines/'.$pragmatognomosini->id_ekthesis)->with(['praktoreia','id_ekthesis']);
        }else{
            return redirect('ereunes/'.$pragmatognomosini->id_ekthesis)->with(['praktoreia','id_ekthesis']);
        }
    }
    public function edit_praktoreia_ekth($id_ekthesis,$id_praktoreio){

        $pragmatognomosini = Pragmatognomosini::with('praktoreia')->findOrFail($id_ekthesis);

        $praktoreio = $pragmatognomosini->praktoreia()->wherePivot('id_praktoreio', $id_praktoreio)->first();
        $praktoreia = Praktoreio::where([['mark_del','Όχι']])->get();

        return view('pragmatognomosines.edit_praktoreia_ekth',compact(['praktoreio','id_ekthesis','praktoreia']));
    }
    public function update_praktoreia_ekth(Request $request)
    {
        $id_ekthesis = $request->id_ekthesis;

        $pragmatognomosini = Pragmatognomosini::with('praktoreia')->findOrFail($id_ekthesis);

        $praktoreio = $pragmatognomosini->praktoreia()->wherePivot('id_praktoreio', $request->id_praktoreio)->first();

        $praktoreio->pivot->note = $request->Note;
        $praktoreio->pivot->save();
        if ($pragmatognomosini->id_diakrisi=='Π' || $pragmatognomosini->id_diakrisi=='ΠΕ'){
            return redirect('pragmatognomosines/'.$pragmatognomosini->id_ekthesis);
        }else{
            return redirect('ereunes/'.$pragmatognomosini->id_ekthesis);
        }
//
    }
    public function delete_praktoreia_ekth($id_ekthesis,$id_praktoreio){

        $pragmatognomosini = Pragmatognomosini::with('praktoreia')->findOrFail($id_ekthesis);

        $praktoreio = $pragmatognomosini->praktoreia()->wherePivot('id_praktoreio', $id_praktoreio)->first();
        $praktoreia = Praktoreio::where([['mark_del','Όχι']])->get();

        return view('pragmatognomosines.delete_praktoreia_ekth',compact(['praktoreio','id_ekthesis','praktoreia']));
    }
    public function destroy_praktoreia_ekth(Request $request)
    {
        $id_ekthesis = $request->id_ekthesis;

        $pragmatognomosini = Pragmatognomosini::with('praktoreia')->findOrFail($id_ekthesis);

        $praktoreio = $pragmatognomosini->praktoreia()->wherePivot('id_praktoreio', $request->id_praktoreio)->first();
        $pragmatognomosini->praktoreia()->detach($request->id_praktoreio);

        if ($pragmatognomosini->id_diakrisi=='Π' || $pragmatognomosini->id_diakrisi=='ΠΕ'){
            return redirect('pragmatognomosines/'.$pragmatognomosini->id_ekthesis);
        }else{
            return redirect('ereunes/'.$pragmatognomosini->id_ekthesis);
        }
    }
    //  end manage praktoreia ekthesis

    //  manage synergeia ekthesis
    public function create_synergeia_ekth($id_ekthesis){

        $synergeia = Synergeio::where([['Mark_del','Όχι']])->get();
        return view('pragmatognomosines.create_synergeia_ekth',compact(['synergeia','id_ekthesis']));
    }

    public function store_synergeia_ekth(Request $request,$id_ekthesis){

        $pragmatognomosini = Pragmatognomosini::findOrFail($id_ekthesis);

        if ($request->Date_episkepsis != null){
            $date_ep = Carbon::createFromFormat('d-m-Y', $request->Date_episkepsis)->format('Y-m-d');
            $request->Date_episkepsis = $date_ep;
        }
        if ($request->Date_episkepsis2 != null){
            $date_ep2 = Carbon::createFromFormat('d-m-Y', $request->Date_episkepsis2)->format('Y-m-d');
            $request->Date_episkepsis2 = $date_ep2;
        }
        if ($request->Date_episkepsis3 != null){
            $date_ep3 = Carbon::createFromFormat('d-m-Y', $request->Date_episkepsis3)->format('Y-m-d');
            $request->Date_episkepsis3 = $date_ep3;
        }
        $pragmatognomosini->synergeia()->attach($request->id_synergeia,['Date_episkepsis'=>  $request->Date_episkepsis ],['Date_episkepsis2'=>  $request->Date_episkepsis2 ],['Date_episkepsis3'=>  $request->Date_episkepsis3 ]);

        $synergeia = Synergeio::where([['Mark_del','Όχι']])->get();
        if ($pragmatognomosini->id_diakrisi=='Π' || $pragmatognomosini->id_diakrisi=='ΠΕ'){
            return redirect('pragmatognomosines/'.$pragmatognomosini->id_ekthesis)->with(['synergeia','id_ekthesis']);
        }else{
            return redirect('ereunes/'.$pragmatognomosini->id_ekthesis)->with(['synergeia','id_ekthesis']);
        }
    }
    public function edit_synergeia_ekth($id_ekthesis,$id_synergeia){

        $pragmatognomosini = Pragmatognomosini::with('synergeia')->findOrFail($id_ekthesis);
        $synergeio = $pragmatognomosini->synergeia()->wherePivot('id_synergeia', $id_synergeia)->first();

        $synergeio->pivot->Date_episkepsis=Carbon::createFromFormat('Y-m-d',$synergeio->pivot->Date_episkepsis)->format('d-m-Y');
        if ($synergeio->pivot->Date_episkepsis2 != null){
            $synergeio->pivot->Date_episkepsis2=Carbon::createFromFormat('Y-m-d', $synergeio->pivot->Date_episkepsis2)->format('d-m-Y');
        }
        if ($synergeio->pivot->Date_episkepsis3 != null){
            $synergeio->pivot->Date_episkepsis3=Carbon::createFromFormat('Y-m-d', $synergeio->pivot->Date_episkepsis3)->format('d-m-Y');
        }


        $synergeia = Synergeio::where([['Mark_del','Όχι']])->get();
        return view('pragmatognomosines.edit_synergeia_ekth',compact(['synergeio','id_ekthesis','synergeia']));
    }

    public function update_synergeia_ekth(Request $request)
    {

        $id_ekthesis = $request->id_ekthesis;
        $pragmatognomosini = Pragmatognomosini::with('synergeia')->findOrFail($id_ekthesis);
        $synergeio = $pragmatognomosini->synergeia()->wherePivot('id_synergeia', $request->id_synergeia)->first();


        $date_ep = Carbon::createFromFormat('d-m-Y', $request->Date_episkepsis)->format('Y-m-d');
        $request->Date_episkepsis = $date_ep;
        if ($request->Date_episkepsis2 != null){
            $date_ep2 = Carbon::createFromFormat('d-m-Y', $request->Date_episkepsis2)->format('Y-m-d');
            $request->Date_episkepsis2 = $date_ep2;
        }
        if ($request->Date_episkepsis3 != null){
            $date_ep3 = Carbon::createFromFormat('d-m-Y', $request->Date_episkepsis3)->format('Y-m-d');
            $request->Date_episkepsis3 = $date_ep3;
        }

        $synergeio->pivot->Date_episkepsis = $request->Date_episkepsis;
        $synergeio->pivot->Date_episkepsis2 = $request->Date_episkepsis2;
        $synergeio->pivot->Date_episkepsis3 = $request->Date_episkepsis3;
        $synergeio->pivot->Note = $request->Note;

        $synergeio->pivot->save();
        if ($pragmatognomosini->id_diakrisi=='Π' || $pragmatognomosini->id_diakrisi=='ΠΕ'){
            return redirect('pragmatognomosines/'.$pragmatognomosini->id_ekthesis);
        }else{
            return redirect('ereunes/'.$pragmatognomosini->id_ekthesis);
        }
//
    }
    public function delete_synergeia_ekth($id_ekthesis,$id_synergeia){

        $pragmatognomosini = Pragmatognomosini::with('synergeia')->findOrFail($id_ekthesis);
        $synergeio = $pragmatognomosini->synergeia()->wherePivot('id_synergeia', $id_synergeia)->first();

        $synergeio->pivot->Date_episkepsis=Carbon::createFromFormat('Y-m-d',$synergeio->pivot->Date_episkepsis)->format('d-m-Y');
        if ($synergeio->pivot->Date_episkepsis2 != null){
            $synergeio->pivot->Date_episkepsis2=Carbon::createFromFormat('Y-m-d', $synergeio->pivot->Date_episkepsis2)->format('d-m-Y');
        }
        if ($synergeio->pivot->Date_episkepsis3 != null){
            $synergeio->pivot->Date_episkepsis3=Carbon::createFromFormat('Y-m-d', $synergeio->pivot->Date_episkepsis3)->format('d-m-Y');
        }


        $synergeia = Synergeio::where([['Mark_del','Όχι']])->get();
        return view('pragmatognomosines.delete_synergeia_ekth',compact(['synergeio','id_ekthesis','synergeia']));
    }
    public function destroy_synergeia_ekth(Request $request)
    {

        $id_ekthesis = $request->id_ekthesis;
        $pragmatognomosini = Pragmatognomosini::with('synergeia')->findOrFail($id_ekthesis);
        $synergeio = $pragmatognomosini->synergeia()->wherePivot('id_synergeia', $request->id_synergeia)->first();


        $date_ep = Carbon::createFromFormat('d-m-Y', $request->Date_episkepsis)->format('Y-m-d');
        $request->Date_episkepsis = $date_ep;
        if ($request->Date_episkepsis2 != null) {
            $date_ep2 = Carbon::createFromFormat('d-m-Y', $request->Date_episkepsis2)->format('Y-m-d');
            $request->Date_episkepsis2 = $date_ep2;
        }
        if ($request->Date_episkepsis3 != null) {
            $date_ep3 = Carbon::createFromFormat('d-m-Y', $request->Date_episkepsis3)->format('Y-m-d');
            $request->Date_episkepsis3 = $date_ep3;
        }
        $pragmatognomosini->synergeia()->detach($request->id_synergeia);

        if ($pragmatognomosini->id_diakrisi=='Π' || $pragmatognomosini->id_diakrisi=='ΠΕ'){
            return redirect('pragmatognomosines/'.$pragmatognomosini->id_ekthesis);
        }else{
            return redirect('ereunes/'.$pragmatognomosini->id_ekthesis);
        }
    }
    //  end manage synergeia ekthesis

    // manage details ekthesis
    public function create_details_ekth($id_ekthesis,$id_ergasia){

        $parts = Parts::where([['Mark_del','Όχι'],['id_parts','>','1']])->orderBy('part')->get();
        $ergasia = Ergasies::where([['Mark_del','Όχι'],['id_ergasies','=',$id_ergasia]])->get();
        $ergasies = Ergasies::where([['Mark_del','Όχι']])->get();

        return view('pragmatognomosines.create_details_ekth',compact([
            'parts',
            'ergasia',
            'id_ergasia',
            'id_ekthesis',
            'ergasies'
//            'part_erg'
        ]));
    }
    public function create_details_ekth_nop($id_ekthesis,$id_part){
        $ergasies = Ergasies::where([['Mark_del','Όχι']])->get();

        return view('pragmatognomosines.create_details_ekth_nop',compact([
            'id_part',
            'id_ekthesis',
            'ergasies'
        ]));
    }

    public function store_details_ekth(Request $request){
//        $pragmatognomosini = Pragmatognomosini::with('parts_of_ergasies')->findOrFail($request->id_ekthesis);
        //dd($pragmatognomosini);
        if ($request->quan == null){
            $request->quan=1;
        }
        if ($request->sint_fpa_part == null){
            $request->sint_fpa_part=24.00;
        }
        if ($request->sint_fpa_job == null){
            $request->sint_fpa_job=24.00;
        }
//        dd($request);
        $detail = new DetailPrag();
        $detail->id_ekthesis = $request->id_ekthesis;
        $detail->id_ergasies = $request->id_ergasies;
        $detail->id_parts = $request->id_parts;
        $detail->Cost_part = $request->Cost_part;
        $detail->Cost_job = $request->Cost_job;
        $detail->Type = $request->Type;
        $detail->quan = $request->quan;
        $detail->fpa_part = $request->fpa_part;
        $detail->fpa_job = $request->fpa_job;
        $detail->diax_fr_b = $request->diax_fr_b;
        $detail->prod_code = $request->prod_code;
        $detail->sint_fpa_part = $request->sint_fpa_part;
        $detail->sint_fpa_job = $request->sint_fpa_job;
        $detail->save();

        $id_ergasia=$request->id_ergasia;
        $parts = Parts::where([['Mark_del','Όχι'],['id_parts','>','1']])->get();
        $ergasia = Ergasies::where([['Mark_del','Όχι'],['id_ergasies','=',$id_ergasia]])->get();

        return redirect('pragmatognomosines/'.$request->id_ekthesis)->with(['parts','ergasia','id_ergasia','id_ekthesis']);

    }

    public function edit_details_ekth($id_ekthesis,$id_ergasia,$id_part){
        $pragmatognomosini = Pragmatognomosini::with('parts_of_ergasies')->findOrFail($id_ekthesis);
        $detail = $pragmatognomosini->parts_of_ergasies()->wherePivot('id_ergasies', $id_ergasia)->where('id_parts','=',$id_part)->first();
        $ergasia = Ergasies::where([['Mark_del','Όχι'],['id_ergasies','=',$id_ergasia]])->get();
        $parts = Parts::where([['Mark_del','Όχι'],['id_parts','>','1']])->orderBy('part')->get();
//        dd($detail);

        return view('pragmatognomosines.edit_details_ekth',compact([
            'detail',
            'id_ekthesis',
            'id_ergasia',
            'id_part',
            'ergasia',
            'parts'
        ]));
    }
    public function edit_details_ekth_nop($id_ekthesis,$id_ergasies,$id_part){
//        dd($id_ergasies,$id_part);
        $pragmatognomosini = Pragmatognomosini::with('parts_of_ergasies')->findOrFail($id_ekthesis);
        $detail = $pragmatognomosini->parts_of_ergasies()->wherePivot('id_ergasies', $id_ergasies)->where('id_parts','=',$id_part)->first();
        $ergasies = Ergasies::where([['Mark_del','Όχι']])->get();
        $parts = Parts::where([['Mark_del','Όχι'],['id_parts','>','1']])->orderBy('part')->get();
//        dd($detail);

        return view('pragmatognomosines.edit_details_ekth_nop',compact([
            'detail',
            'id_ekthesis',
            'id_ergasies',
            'id_part',
            'ergasies',
            'parts'
        ]));
    }
    public function update_details_ekth(Request $request){

        if ($request->quan == null){
            $request->quan=1;
        }
        if ($request->sint_fpa_part == null){
            $request->sint_fpa_part=24.00;
        }
        if ($request->sint_fpa_job == null){
            $request->sint_fpa_job=24.00;
        }
//        dd($request);
        $detail = DetailPrag::where([['id_ekthesis',$request->id_ekthesis],['id_ergasies',$request->id_ergasies],['id_parts',$request->id_parts]])->update($request->except(['_token']));

        return redirect('pragmatognomosines/'.$request->id_ekthesis);

    }

    public function delete_details_ekth($id_ekthesis,$id_ergasia,$id_part){
        $pragmatognomosini = Pragmatognomosini::with('parts_of_ergasies')->findOrFail($id_ekthesis);
        $detail = $pragmatognomosini->parts_of_ergasies()->wherePivot('id_ergasies', $id_ergasia)->where('id_parts','=',$id_part)->first();
        $ergasia = Ergasies::where([['Mark_del','Όχι'],['id_ergasies','=',$id_ergasia]])->get();
        $parts = Parts::where([['Mark_del','Όχι'],['id_parts','>','1']])->orderBy('part')->get();
//        dd($detail);

        return view('pragmatognomosines.delete_details_ekth',compact([
            'detail',
            'id_ekthesis',
            'id_ergasia',
            'id_part',
            'ergasia',
            'parts'
        ]));
    }

    public function delete_details_ekth_nop($id_ekthesis,$id_ergasies,$id_part){
        $pragmatognomosini = Pragmatognomosini::with('parts_of_ergasies')->findOrFail($id_ekthesis);
        $detail = $pragmatognomosini->parts_of_ergasies()->wherePivot('id_ergasies', $id_ergasies)->where('id_parts','=',$id_part)->first();
        $ergasies = Ergasies::where([['Mark_del','Όχι']])->get();
        $parts = Parts::where([['Mark_del','Όχι'],['id_parts','>','1']])->orderBy('part')->get();
//        dd($detail);

        return view('pragmatognomosines.delete_details_ekth_nop',compact([
            'detail',
            'id_ekthesis',
            'id_ergasies',
            'id_part',
            'ergasies',
            'parts'
        ]));
    }
    public function destroy_details_ekth(Request $request){

        if ($request->quan == " "){
            $request->quan=1;
        }
        $detail = DetailPrag::where([['id_ekthesis',$request->id_ekthesis],['id_ergasies',$request->id_ergasies],['id_parts',$request->id_parts]])->delete($request->except(['_token']));

        return redirect('pragmatognomosines/'.$request->id_ekthesis);

    }
    // end manage details ekthesis

    // manage proiparxouses ekthesis
    public function create_proiparxouses($id_ekthesis){
        $parts = Parts::where([['Mark_del','Όχι'],['id_parts','>','1']])->orderBy('part')->get();
        $ergasia = Ergasies::where([['Mark_del','Όχι'],['id_ergasies','!=',55]])->get();
        return view('pragmatognomosines.create_proiparx_ekth',compact([
            'parts',
            'id_ekthesis',
            'ergasia'
        ]));
    }

    public function store_proiparxouses(Request $request){

        if ($request->quan == null){
            $request->quan=1;
        }

        if ($request->sint_fpa_job == null){
            $request->sint_fpa_job=24.00;
        }
//        dd($request);
        $proiparx = new Proiparxousa();
        $proiparx->id_ekthesis = $request->id_ekthesis;
        $proiparx->id_parts = $request->id_parts;
        $proiparx->quan = $request->quan;
        $proiparx->id_categ = $request->id_categ;
        $proiparx->value = $request->value;
        $proiparx->fpa_job = $request->fpa_job;
        $proiparx->sint_fpa_job = $request->sint_fpa_job;
        $proiparx->diax_fr_b = $request->diax_fr_b;
        $proiparx->save();

        return redirect('pragmatognomosines/'.$request->id_ekthesis);
    }

    public function edit_proiparxouses($id_ekthesis,$id_parts,$id_categ,$diax_fr_b){
        $pragmatognomosini = Pragmatognomosini::with('proiparxouses')->findOrFail($id_ekthesis);
//        dd($pragmatognomosini);
        $proiparx = $pragmatognomosini->proiparxouses()->wherePivot('id_parts', $id_parts)->where([['id_categ','=',$id_categ],['diax_fr_b','=',$diax_fr_b]])->first();
        $parts = Parts::where([['Mark_del','Όχι'],['id_parts','>','1']])->orderBy('part')->get();
//        dd($proiparx);

        return view('pragmatognomosines.edit_proiparx_ekth',compact([
            'proiparx',
            'id_ekthesis',
            'id_categ',
            'id_parts',
            'diax_fr_b',
            'parts'
        ]));
    }
    public function update_proiparxouses(Request $request){

        if ($request->quan == null){
            $request->quan=1;
        }

        if ($request->sint_fpa_job == null){
            $request->sint_fpa_job=24.00;
        }
//        dd($request);
        $proiparx = Proiparxousa::where([['id_ekthesis',$request->id_ekthesis],['id_parts',$request->id_parts],['id_categ',$request->id_categ],['diax_fr_b',$request->diax_fr_b]])->update($request->except(['_token']));

        return redirect('pragmatognomosines/'.$request->id_ekthesis);

    }

    public function delete_proiparxouses($id_ekthesis,$id_parts,$id_categ,$diax_fr_b){
        $pragmatognomosini = Pragmatognomosini::with('proiparxouses')->findOrFail($id_ekthesis);
//        dd($pragmatognomosini);
        $proiparx = $pragmatognomosini->proiparxouses()->wherePivot('id_parts', $id_parts)->where([['id_categ','=',$id_categ],['diax_fr_b','=',$diax_fr_b]])->first();
        $parts = Parts::where([['Mark_del','Όχι'],['id_parts','>','1']])->orderBy('part')->get();
//        dd($proiparx);

        return view('pragmatognomosines.delete_proiparx_ekth',compact([
            'proiparx',
            'id_ekthesis',
            'id_categ',
            'id_parts',
            'diax_fr_b',
            'parts'
        ]));
    }

    public function destroy_proiparxouses(Request $request){

        if ($request->quan == null){
            $request->quan=1;
        }

        if ($request->sint_fpa_job == null){
            $request->sint_fpa_job=24.00;
        }
//        dd($request);
        $proiparx = Proiparxousa::where([['id_ekthesis',$request->id_ekthesis],['id_parts',$request->id_parts],['id_categ',$request->id_categ],['diax_fr_b',$request->diax_fr_b]])->delete($request->except(['_token']));

        return redirect('pragmatognomosines/'.$request->id_ekthesis);
    }
    // end manage proiparxouses ekthesis

    // manage katastasi ekthesis
    public function create_status_ekth($id_ekthesis){
        $pragmatognomosini = Pragmatognomosini::with('status_of_ekth')->findOrFail($id_ekthesis);
        $status = $pragmatognomosini->status_of_ekth()->get();
        foreach ($status as $stat){
            if($stat->pivot->Valid == 'Ναι'){
                $next_status = $stat->pivot->id_status+1;
            }
        }
        $status_to_view = Status::where([['id_status',$next_status]])->get();
        return view('pragmatognomosines.create_status_ekth',compact(['status_to_view','id_ekthesis']));
    }

    public function store_status_ekth(Request $request,$id_ekthesis){
        $pragmatognomosini = Pragmatognomosini::findOrFail($id_ekthesis);

        $request->Valid='Ναι';
        $Status_date = Carbon::createFromFormat('d-m-Y', $request->Status_date)->format('Y-m-d');
        $request->Status_date = $Status_date;
        $Pdate = Carbon::now();


        if ($request->id_status==1 ){
            $Pdate=Carbon::parse($Status_date)->addDays(2)->format('Y-m-d');
        }elseif ($request->id_status==2){
            $Pdate=Carbon::parse($Status_date)->addDays(3)->format('Y-m-d');
        }elseif ($request->id_status==3){
            $Pdate=Carbon::parse($Status_date)->addDays(2)->format('Y-m-d');
        }elseif ($request->id_status==4){
            $Pdate=Carbon::parse($Status_date)->addDays(1)->format('Y-m-d');
        }elseif ($request->id_status==5){
            $Pdate=Carbon::parse($Status_date)->addDays(1)->format('Y-m-d');
        }
//        $request->Process_date = $Pdate;
//        dd($request->Process_date,$request->Status_date,$Pdate,$request);

        $pragmatognomosini->status_of_ekth()->attach($request->id_status,['Status_date'=>  $request->Status_date ],['Valid'=>  $request->Valid ],['Process_date'=>  $Pdate ],['Notes'=>  $request->Notes ]);
        $status = $pragmatognomosini->status_of_ekth()->get();
        foreach ($status as $stat){
            if ($stat->pivot->id_status < $request->id_status ){
                $stat->pivot->Valid = 'Όχι';
                $stat->pivot->save();
            }
            if ($stat->pivot->id_status == $request->id_status ){
                $stat->pivot->Process_date = $Pdate;
                $stat->pivot->Notes =  $request->Notes;
                $stat->pivot->save();
            }
        }
        if ($pragmatognomosini->id_diakrisi=='Π' || $pragmatognomosini->id_diakrisi=='ΠΕ'){
            return redirect('pragmatognomosines/'.$pragmatognomosini->id_ekthesis);
        }else{
            return redirect('ereunes/'.$pragmatognomosini->id_ekthesis);
        }
    }

    public function edit_status_ekth($id_ekthesis,$id_status){
        $pragmatognomosini = Pragmatognomosini::with('status_of_ekth')->findOrFail($id_ekthesis);
        $status_ekth = $pragmatognomosini->status_of_ekth()->wherePivot('id_status', $id_status)->first();
        $status_ekth->pivot->Status_date=Carbon::createFromFormat('Y-m-d',$status_ekth->pivot->Status_date)->format('d-m-Y');
        $status_ekth->pivot->Process_date=Carbon::createFromFormat('Y-m-d',$status_ekth->pivot->Process_date)->format('d-m-Y');
        $status = Status::where([['Mark_del','Όχι'],['id_status',$id_status]])->get();
//        dd($status);
        return view('pragmatognomosines.edit_status_ekth',compact(['status_ekth','id_ekthesis','status']));
    }

    public function update_status_ekth(Request $request){
        $id_ekthesis = $request->id_ekthesis;
        $pragmatognomosini = Pragmatognomosini::with('status_of_ekth')->findOrFail($id_ekthesis);
        $status_ekth = $pragmatognomosini->status_of_ekth()->wherePivot('id_status', $request->id_status)->first();

        $sDate=Carbon::createFromFormat('d-m-Y',$request->Status_date)->format('Y-m-d');
        $pdate=Carbon::createFromFormat('d-m-Y',$request->Process_date)->format('Y-m-d');

        $request->Status_date = $sDate;
        $request->Process_date=$pdate;
        $status_ekth->pivot->Status_date=$request->Status_date;
        $status_ekth->pivot->Process_date=$request->Process_date;
        $status_ekth->pivot->Valid=$request->Valid;
        $status_ekth->pivot->Notes=$request->Notes;
        $status_ekth->pivot->save();

//        dd($status);
        if ($pragmatognomosini->id_diakrisi=='Π' || $pragmatognomosini->id_diakrisi=='ΠΕ'){
            return redirect('pragmatognomosines/'.$pragmatognomosini->id_ekthesis);
        }else{
            return redirect('ereunes/'.$pragmatognomosini->id_ekthesis);
        }
    }

    public function delete_status_ekth($id_ekthesis,$id_status){
        $pragmatognomosini = Pragmatognomosini::with('status_of_ekth')->findOrFail($id_ekthesis);
        $status_ekth = $pragmatognomosini->status_of_ekth()->wherePivot('id_status', $id_status)->first();
        $status_ekth->pivot->Status_date=Carbon::createFromFormat('Y-m-d',$status_ekth->pivot->Status_date)->format('d-m-Y');
        $status_ekth->pivot->Process_date=Carbon::createFromFormat('Y-m-d',$status_ekth->pivot->Process_date)->format('d-m-Y');
        $status = Status::where([['Mark_del','Όχι'],['id_status',$id_status]])->get();
//        dd($status);
        return view('pragmatognomosines.delete_status_ekth',compact(['status_ekth','id_ekthesis','status']));
    }

    public function destroy_status_ekth(Request $request){
        $id_ekthesis = $request->id_ekthesis;
        $pragmatognomosini = Pragmatognomosini::with('status_of_ekth')->findOrFail($id_ekthesis);
        $status_ekth = $pragmatognomosini->status_of_ekth()->wherePivot('id_status', $request->id_status)->first();

        $sDate=Carbon::createFromFormat('d-m-Y',$request->Status_date)->format('Y-m-d');
        $pdate=Carbon::createFromFormat('d-m-Y',$request->Process_date)->format('Y-m-d');

        $request->Status_date = $sDate;
        $request->Process_date=$pdate;
        $prevStat = $request->id_status -1;
        $status = $pragmatognomosini->status_of_ekth()->wherePivot('id_status', $prevStat )->first();
//        dd($status);

        $status->pivot->Valid = 'Ναι';
        $status->pivot->update();


        $pragmatognomosini->status_of_ekth()->detach($request->id_status);
//        dd($request->id_status);

//        dd($status);
        if ($pragmatognomosini->id_diakrisi=='Π' || $pragmatognomosini->id_diakrisi=='ΠΕ'){
            return redirect('pragmatognomosines/'.$pragmatognomosini->id_ekthesis);
        }else{
            return redirect('ereunes/'.$pragmatognomosini->id_ekthesis);
        }
    }
    // end manage katastasi ekthesis
}
