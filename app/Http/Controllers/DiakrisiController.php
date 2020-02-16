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

        $diakrisis = Diakrisi::where([['Group_diakr','<','3'],['Mark_del','Όχι']])->get();

        return view('diakrisis.create',compact('diakrisis'));
    }

    /**
     * @param DiakrisiRequest $request
     */
    public function store(Request $request){

        if($request->expectsJson()){
            $data = $request->all();
            $value = Diakrisi::create($data);
            return response()->json([
                'data' => $value
            ],200);
        }

    }
}
