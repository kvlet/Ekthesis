<?php

namespace App\Http\Controllers;

use App\CarType;
use App\Marka;
use App\Paint;
use App\Xrisi;
use App\Xromata;
use Illuminate\Http\Request;

class OximataController extends Controller
{
    public function create(){

        $markes = Marka::where([['Mark_del','Όχι']])->get();
        $xrisis = Xrisi::where([['Mark_del','Όχι']])->get();
        $xromata = Xromata::where([['Mark_del','Όχι']])->get();
        $cartype = CarType::where([['Mark_del','Όχι']])->get();
        $paint = Paint::where([['Mark_del','Όχι']])->get();

        return view('oximata.create',compact([
            'markes',
            'xrisis',
            'xromata',
            'cartype',
            'paint'
        ]));
    }
}
