<?php

namespace App\Http\Controllers;

use App\Http\Requests\XrisiRequest;
use App\Xrisi;
use Illuminate\Http\Request;

class XrisiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){

        $xrisi = Xrisi::where([['Mark_del','Όχι']])->get();

        return view('xrisi.create',compact('xrisi'));
    }

    /**
     * @param MarkaRequest $request
     */
    public function store(Request $request){

        $request->Mark_del='Όχι';
        $xrisi = new Xrisi();
        $xrisi->xrisi = $request->xrisi;
        $xrisi->Mark_del = $request->Mark_del;
        $xrisi->save();

        return redirect('xrisi/'.$xrisi->id_xrisi);
    }

    /**
     * @param XrisiRequest $request
     */
    public function store_ajax(Request $request){


        $request->Mark_del='Όχι';
        $xrisi = new Xrisi();
        $xrisi->xrisi = $request->xrisi;
        $xrisi->Mark_del = $request->Mark_del;
        $xrisi->save();

        return $xrisi;
    }

    public function edit($id_xrisi){

        $xrisi = Xrisi::findOrFail($id_xrisi);
        $xrisi->update();
        $xrisis = Xrisi::where([['Mark_del','Όχι']])->get();
        return view('xrisi.edit',compact(['xrisi','xrisis']));
    }

    public function update(Request $request,$id_xrisi){
        $xrisi = Xrisi::findOrFail($id_xrisi);


        $xrisi->xrisi = $request->xrisi;
        $xrisi->Mark_del = $request->Mark_del;
        $xrisi->update();

        $xrisi = Xrisi::where([['Mark_del','Όχι']])->get();
        return view('xrisi.create',compact('xrisi'));

    }
}
