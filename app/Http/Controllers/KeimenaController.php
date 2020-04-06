<?php

namespace App\Http\Controllers;

use App\Http\Kernel;
use App\Http\Requests\KeimenaRequest;
use App\Keimena;
use Illuminate\Http\Request;

class KeimenaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){

        $keimena = Keimena::where([['Mark_del','Όχι']])->get();

        return view('keimena.create',compact('keimena'));
    }

    public function store(KeimenaRequest $request){

        $keimena = new Keimena();

        $request->Mark_del='Όχι';

        $keimena->id_keimena = $request->id_keimena;
        $keimena->Sort_descr = $request->Sort_descr;
        $keimena->Note = $request->Note;
        $keimena->Mark_del = $request->Mark_del;

        $keimena->save();

        return redirect('manage_keimena/'.$keimena->id_keimena);


    }

    public function edit($id_keimena){

        $keimena = Keimena::find($id_keimena);

        $keimena->update();

        return view('keimena.edit');
    }

    public function update(Request $request,$id_keimena){
        $keimena = Keimena::find($id_keimena);
        $keimena = $request->all();
        $keimena->update();
        return redirect('manage_keimena/'.$keimena->id_keimena);
    }
}
