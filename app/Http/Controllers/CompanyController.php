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
        dd($request);

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

        return redirect('company/'.$company->id_company);
    }

    public function edit($id_company){

        $company = Company::find($id_company);
        return view('company.edit');

    }

    public function update(Request $request, $id_company)
    {
        $company = Company::find($id_company);

        $company = $request->all();
        $company->update();

        return redirect('company/'.$company->$id_company);
    }
}
