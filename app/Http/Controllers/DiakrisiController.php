<?php

namespace App\Http\Controllers;

use App\Diakrisi;
use App\Http\Requests\DiakrisiRequest;
use Illuminate\Http\Request;

class DiakrisiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){

        $diakrisis = Diakrisi::where([['Mark_del','Όχι']])->get();

        return view('diakrisis.create',compact('diakrisis'));
    }

    /**
     * @param DiakrisiRequest $request
     */
    public function store(Request $request){

//        if($request->expectsJson()){
//            $data = $request->all();
//            $value = Diakrisi::create($data);
//            return response()->json([
//                'data' => $value
//            ],200);
//        }
        $request->Mark_del='Όχι';

        $diakrisi = new Diakrisi();
        $diakrisi->id_diakrisi = $request->id_diakrisi;
        $diakrisi->Diakrisi = $request->Diakrisi;
        $diakrisi->Mark_del = $request->Mark_del;
        $diakrisi->Group_diakr = $request->Group_diakr;

        $diakrisi->save();

        return redirect('diakrisis/'.$diakrisi->id_diakrisi);

    }

    public  function edit($id_diakrisi){

        $diakrisi = Diakrisi::findOrFail($id_diakrisi);


        $diakrisi->update();
        $diakrisis = Diakrisi::where([['Mark_del','Όχι']])->get();
        return view('diakrisis.edit',compact(['diakrisi','diakrisis']));
    }

    public function update(Request $request, $id_diakrisi){

        $diakrisi = Diakrisi::findOrFail($id_diakrisi);

        $request->Mark_del='Όχι';
        $diakrisi->id_diakrisi = $request->id_diakrisi;
        $diakrisi->Diakrisi = $request->Diakrisi;
        $diakrisi->Mark_del = $request->Mark_del;
        $diakrisi->Group_diakr = $request->Group_diakr;
        $diakrisi->update();

        $diakrisis = Diakrisi::where([['Mark_del','Όχι']])->get();

        return view('diakrisis.create',compact('diakrisis'));


    }
}
