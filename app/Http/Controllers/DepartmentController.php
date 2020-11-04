<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
        $departments = Department::where([['Mark_del','Όχι']])->get();
        return view('department.create',compact('departments'));
    }

    /**
     * @param DepartmentRequest $request
     */
    public function store(Request $request){

        $request->Mark_del='Όχι';
        $department = new Department();
        $department->dept = $request->dept;
        $department->Mark_del = $request->Mark_del;
        $department->save();

        return redirect('department/'.$department->id_department);
    }

    /**
     * @param DepartmentRequest $request
     */
    public function store_ajax(Request $request){

        $request->Mark_del='Όχι';
        $department = new Department();
        $department->dept = $request->dept;
        $department->Mark_del = $request->Mark_del;
        $department->save();

        return $department;
    }

    public function edit($id_department){

        $department = Department::findOrFail($id_department);
        $department->update();
        $departments = Department::where([['Mark_del','Όχι']])->get();

        return view('department.edit',compact(['department','departments']));
    }

    public function update(Request $request,$id_department){

        $department = Department::findOrFail($id_department);
        $department->dept = $request->dept;
        $department->Mark_del = $request->Mark_del;
        $department->update();
        $departments = Department::where([['Mark_del','Όχι']])->get();
        return view('department.create',compact('departments'));
    }
}
