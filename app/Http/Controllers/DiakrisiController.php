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

        return view('diakrisis.create',compact([
            'diakrisis'
        ]));
    }

    /**
     * @param DiakrisiRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(DiakrisiRequest $request){

        $diakrisi = new Diakrisi();

        $diakrisis = Diakrisi::where([['Group_diakr','<','3'],['Mark_del','Όχι']])->get();

/*        return view('diakrisis.create',compact([
            'diakrisis'
        ]));*/
    }
}
