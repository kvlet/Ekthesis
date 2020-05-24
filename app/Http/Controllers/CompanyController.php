<?php

namespace App\Http\Controllers;

use App\Company;
use App\Http\Requests\CompanyRequest;
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

        $company = Company::findOrFail($id_company);
//        $pragma =  Company::findOrFail($id_company)->pragmatognomosini;
//        dd($pragma->id_company);
        return view('company.edit',compact(['company']));

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
}
