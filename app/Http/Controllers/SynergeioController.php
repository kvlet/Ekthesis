<?php

namespace App\Http\Controllers;

use App\Synergeio;
use Illuminate\Http\Request;

class SynergeioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function index()
//    {
//        //
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $synergeia = Synergeio::where([['Mark_del','Όχι']])->get();
        return view('synergeio.create',compact(['synergeia']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $synergeio = new Synergeio();

        $request->Mark_del='Όχι';

        $synergeio->Name_syner = $request->Name_syner;
        $synergeio->Addres = $request->Addres;
        $synergeio->Phone = $request->Phone;
        $synergeio->Kinito = $request->Kinito;
        $synergeio->Fax = $request->Fax;
        $synergeio->Email = $request->Email;
        $synergeio->Respon = $request->Respon;
        $synergeio->Note = $request->Note;
        $synergeio->id_typos_synergeiou = $request->id_typos_synergeiou;
        $synergeio->Mark_del = $request->Mark_del;

        $synergeio->save();

        return redirect('synergeio/search');
    }

    /**
//     * Display the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function show($id)
//    {
//        //
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_synergeia)
    {
        $synergeio=Synergeio::findOrFail($id_synergeia);
        $synergeio->update();
        $synergeia = Synergeio::where([['Mark_del','Όχι']])->get();
        return view('synergeio.edit',compact(['synergeio','synergeia']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_synergeia)
    {
        $synergeio=Synergeio::findOrFail($id_synergeia);



        $synergeio->Name_syner = $request->Name_syner;
        $synergeio->Addres = $request->Addres;
        $synergeio->Phone = $request->Phone;
        $synergeio->Kinito = $request->Kinito;
        $synergeio->Fax = $request->Fax;
        $synergeio->Email = $request->Email;
        $synergeio->Respon = $request->Respon;
        $synergeio->Note = $request->Note;
        $synergeio->id_typos_synergeiou = $request->id_typos_synergeiou;
        $synergeio->Mark_del = $request->Mark_del;

        $synergeio->update();
        return redirect('synergeio/search');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_synergeia)
    {
        if ($synerEkth = Synergeio::findOrFail($id_synergeia)->pragmatognomosini->isEmpty()){
            $synergeio=Synergeio::findOrFail($id_synergeia);
            $synergeio->delete();
            $synergeia = Synergeio::where([['Mark_del','Όχι']])->get();
            return redirect('synergeio/');
//            return view('synergeio.create',compact(['synergeia']));
        }else{
            return back()->with('error','Το συνεργείο δεν γίνεται να διαγραφεί συμμετέχει σε εκθέσεις');
        }
    }

    public  function opensearch(){
        $synergeia= Synergeio::where([['Mark_del','Όχι'],['Name_syner','LIKE','%']])->orderBy('Name_syner')->get();

        return view('synergeio.search',compact([
            'synergeia'
        ]));
    }

    public function search(Request $request){
        $syner= $request->Name_syner;
        if ($syner == null){
            $synergeia= Synergeio::where([['Mark_del','Όχι'],['Name_syner','LIKE','%']])->orderBy('Name_syner')->get();
        }else{
            $synergeia= Synergeio::where([['Mark_del','Όχι'],['Name_syner','LIKE','%'.$syner.'%']])->orderBy('Name_syner')->get();
        }

        return view('synergeio.search',compact([
            'synergeia'
        ]));
    }
}
