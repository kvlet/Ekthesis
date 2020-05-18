<?php

namespace App\Http\Controllers;

use App\Accedent_place;
use App\Arxi_ekdosis_eggrafon;
use App\Company;
use App\Diakrisi;
use App\Grafeio;
use App\Keimena;
use App\Nomos;
use App\Oxima;
use App\Person;
use App\Pragmatognomosini;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\PragmRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Filesystem\Filesystem;
use \Carbon\Carbon;
use File;


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

        $pragmatognomosini = Pragmatognomosini::with('keimena')->findOrFail($id_ekthesis);

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
        //end create folder
        $pragmatognomosini->update();
        //end calculate file position


        // make windows dir
/*        $path='X:\\'.$pragmatognomosini->File_position;
        if(!Storage::exists($path)) {

            Storage::makeDirectory($path, 0775, true); //creates directory

        }*/
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
//        end fix date format for display in form



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

        ]));
    }

    public function update(Request $request, $id_ekthesis)
    {
        $pragmatognomosini = Pragmatognomosini::FailOrFail($id_ekthesis);
        $request->partially_lock = 'Όχι';
        $request->total_lock = 'Όχι';
        $request->Amibi_partner='0';
        $request->Flag='1';

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
        return view('pragmatognomosines.create_keimena_ekth',compact(['keimena','id_ekthesis']));
    }

    public function destroy_keimena_ekth($id_ekthesis,$id_keimena){
        $pragmatognomosini = Pragmatognomosini::findOrFail($id_ekthesis);
        $pragmatognomosini->keimena()->detach($id_keimena);
    }
}
