<?php

namespace App\Http\Controllers;

use App\Company;
use App\Department;
use App\Http\Requests\CompanyRequest;
use App\Oxima;
use App\Person;
use App\Pragmatognomosini;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){

        return view('company.create');
    }
    /**
     * @param CompanyRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request){


        $company = new Company();
        $request->Flag='2';
        $request->Mark_del='Όχι';

        $company->comp_name = $request->comp_name;
        $company->afm = $request->afm;
        $company->address = $request->address;
        $company->tk = $request->tk;
        $company->Fax = $request->Fax;
        $company->Email = $request->Email;
        $company->Flag = $request->Flag;
        $company->Mark_del = $request->Mark_del;

        $company->save();
        if (\Request::is('pragmatognomosines/*')) {
            dd($request);
        }elseif (\Request::is('ereunes/*')){
           return back();
        }else{
            return redirect('company/'.$company->id_company);
        }

    }

    public function edit($id_company){

        $company = Company::with('departments')->findOrFail($id_company);
//        $pragma =  Company::findOrFail($id_company)->pragmatognomosini;
//        dd($pragma->id_company);

        // ekthesis etaireias
            $pragma = (new Pragmatognomosini)->newQuery();
            $idcomp = $company->id_company;
            if ($id_company != null){
                $pragma->where('id_company_pathon','=',$id_company)->get();
            }
            $pragmatognomosines = $pragma->get();
            $companies = Company::where('Mark_del', 'Όχι')->get();
            $pathontes = Person::where([['Mark_del','Όχι'],['id_person','>','1']])->get();
            $oximata_pathon = Oxima::where([['Mark_del','Όχι'],['id_oximata','>','1']])->get();
            $pragmatognomones = User::where([['thesi','LIKE','ΠΡΑΓ%'],['Active','Ναι']])->get();
            $department = Department::where([['Mark_del','Όχι']])->get();
            foreach ($pragmatognomosines as $pragm){
                $dateAtiximatos = Carbon::createFromFormat('Y-m-d', $pragm->Date_atiximatos)->format('d-m-Y');
                $pragm->Date_atiximatos = $dateAtiximatos;
                if ($pragm->Date_dikasimou != null){
                    $dateDikasimou = Carbon::createFromFormat('Y-m-d', $pragm->Date_dikasimou)->format('d-m-Y');
                    $pragm->Date_dikasimou = $dateDikasimou;
                }
            }
        // end ekthesis etaireias

        return view('company.edit',compact([
            'company',
            'pragmatognomosines',
            'companies',
            'pathontes',
            'oximata_pathon',
            'pragmatognomones',
            'department'
        ]));

    }

    public function update(Request $request, $id_company)
    {
        $company = Company::findOrFail($id_company);

        $request->Flag='2';
        $request->Mark_del='Όχι';

        $company->comp_name = $request->comp_name;
        $company->afm = $request->afm;
        $company->address = $request->address;
        $company->tk = $request->tk;
        $company->Fax = $request->Fax;
        $company->Email = $request->Email;
        $company->Flag = $request->Flag;
        $company->Mark_del = $request->Mark_del;
        $company->update();

        return redirect('company/'.$company->id_company);
    }

    public  function opensearch(){
        $companys= Company::where([['Mark_del','Όχι'],['comp_name','LIKE','%']])->orderBy('comp_name')->get();

        return view('company.search',compact([
            'companys'
        ]));
    }

    public function search(Request $request){
        $comp= $request->compName;
        if ($comp == null){
            $companys= Company::where([['Mark_del','Όχι'],['comp_name','LIKE','%']])->orderBy('comp_name')->get();
        }else{
            $companys= Company::where([['Mark_del','Όχι'],['comp_name','LIKE','%'.$comp.'%']])->orderBy('comp_name')->get();
        }

        return view('company.search',compact([
            'companys'
        ]));
    }

   //mange company department
    public function create_company_dept($id_company){

        $company = Company::findOrFail($id_company);
        $department = Department::where([['Mark_del','Όχι']])->get();
        return view('company.create_company_dept',compact(['department','company']));
    }

    public function store_company_dept(Request $request,$id_company){

        $company = Company::findOrFail($id_company);
        $company->departments()->attach($request->id_department,['phone'=>$request->phone,'Fax'=>$request->Fax,'Email'=>$request->Email,'Respon'=>$request->Respon]);
        $department = Department::where([['Mark_del','Όχι']])->get();
        return redirect('company/'.$company->id_company)->with(['department','company','id_company']);
    }

    public function edit_company_dept($id_company,$id_department){
        $company=Company::with('departments')->findOrFail($id_company);
        $department=$company->departments()->wherePivot('id_department',$id_department)->first();
        $departments = Department::where([['Mark_del','Όχι']])->get();
        return view('company.edit_company_dept',compact(['department','id_company','departments','company']));
    }

    public function update_company_dept(Request $request){
        $id_company=$request->id_company;
        $company=Company::with('departments')->findOrFail($id_company);
        $department=$company->departments()->wherePivot('id_department',$request->id_department)->first();

        $department->pivot->phone=$request->phone;
        $department->pivot->Fax=$request->Fax;
        $department->pivot->Email=$request->Email;
        $department->pivot->Respon=$request->Respon;

        $department->pivot->save();

        return redirect('company/'.$company->id_company);
    }

    public function delete_company_dept($id_company,$id_department){
        $company=Company::with('departments')->findOrFail($id_company);
        $department=$company->departments()->wherePivot('id_department',$id_department)->first();
        $departments = Department::where([['Mark_del','Όχι']])->get();
        return view('company.delete_company_dept',compact(['department','id_company','departments','company']));
    }

    public function destroy_company_dept(Request $request){
        $id_company=$request->id_company;
        $company=Company::with('departments')->findOrFail($id_company);
        $department=$company->departments()->wherePivot('id_department',$request->id_department)->first();
        $company->departments()->detach($request->id_department);

        return redirect('company/'.$company->id_company);
    }
  //end manage company department
}
