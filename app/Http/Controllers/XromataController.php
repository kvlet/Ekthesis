<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Xromata;
use App\Http\Requests\XromataRequest;

class XromataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){

        $xromata = Xromata::where([['Mark_del','Όχι']])->get();
        return view('xromata.create',compact('xromata'));
    }

    /**
     * @param XromataRequest $request
     */
    public function store(Request $request){

        $request->Mark_del='Όχι';
        $xromata = new Xromata();
        $xromata->color = $request->color;
        $xromata->Mark_del = $request->Mark_del;
        $xromata->save();

        return redirect('xromata/'.$xromata->id_xromata);
    }

    /**
     * @param XromataRequest $request
     */
    public function store_ajax(Request $request){


        $request->Mark_del='Όχι';
        $xromata = new Xromata();
        $xromata->color = $request->color;
        $xromata->Mark_del = $request->Mark_del;
        $xromata->save();

        return $xromata;
    }

    public function edit($id_xromata){

        $xroma = Xromata::findOrFail($id_xromata);
        $xroma->update();
        $xromata = Xromata::where([['Mark_del','Όχι']])->get();
        return view('xromata.edit',compact(['xroma','xromata']));
    }

    public function update(Request $request,$id_xromata){
        $xroma = Xromata::findOrFail($id_xromata);


        $xroma->color = $request->color;
        $xroma->Mark_del = $request->Mark_del;
        $xroma->update();

        $xromata = Xromata::where([['Mark_del','Όχι']])->get();
        return view('xromata.create',compact('xromata'));

    }
}
