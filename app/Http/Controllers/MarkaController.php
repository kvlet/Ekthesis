<?php

namespace App\Http\Controllers;

use App\Http\Requests\MarkaRequest;
use App\Marka;
use Illuminate\Http\Request;

class MarkaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){

        $markes = Marka::where([['Mark_del','Όχι']])->get();

        return view('markes.create',compact('markes'));
    }

    /**
     * @param MarkaRequest $request
     */
    public function store(Request $request){

        $request->Mark_del='Όχι';
        $marka = new Marka();
        $marka->marka = $request->marka;
        $marka->Mark_del = $request->Mark_del;
        $marka->save();

        return redirect('markes/'.$marka->id_markes);
    }

    /**
     * @param MarkaRequest $request
     */
    public function store_ajax(Request $request){


        $request->Mark_del='Όχι';
        $marka = new Marka();
        $marka->marka = $request->marka;
        $marka->Mark_del = $request->Mark_del;
        $marka->save();

        return $marka;
    }

    public function edit($id_markes){

        $marka = Marka::findOrFail($id_markes);
        $marka->update();
        $markes = Marka::where([['Mark_del','Όχι']])->get();
        return view('markes.edit',compact(['marka','markes']));
    }

    public function update(Request $request,$id_markes){
        $marka = Marka::findOrFail($id_markes);


        $marka->marka = $request->marka;
        $marka->Mark_del = $request->Mark_del;
        $marka->update();

        $markes = Marka::where([['Mark_del','Όχι']])->get();
        return view('markes.create',compact('markes'));

    }
}
