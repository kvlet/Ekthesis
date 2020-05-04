<?php

namespace App\Http\Controllers;

use App\Praktoreio;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class PraktoreioController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('praktoreio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Praktoreio $request)
    {
        $praktoreio = new Praktoreio();
        $request->Mark_del='Όχι';
        $request->Flag='2';

        $praktoreio->eponymia = $request->eponymia;
        $praktoreio->address = $request->address;
        $praktoreio->tel = $request->tel;
        $praktoreio->kinito = $request->kinito;
        $praktoreio->fax = $request->fax;
        $praktoreio->email = $request->email;
        $praktoreio->mark_del = $request->mark_del;
        $praktoreio->note = $request->note;
        $praktoreio->flag = $request->flag;

        $praktoreio->save();

        return redirect('praktoreiο/'.$praktoreio->id_praktoreio);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Praktoreio  $praktoreio
     * @return \Illuminate\Http\Response
     */
    public function show(Praktoreio $praktoreio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Praktoreio  $praktoreio
     * @return \Illuminate\Http\Response
     */
    public function edit($id_praktoreio)
    {
       $praktoreio = Praktoreio::find($id_praktoreio);
       $praktoreio->update();
       return view('praktoreio.edit',compact(['praktoreio']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Praktoreio  $praktoreio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_praktoreio)
    {
        $praktoreio = Praktoreio::find($id_praktoreio);
        $request->Mark_del='Όχι';
        $request->Flag='2';

        $praktoreio->eponymia = $request->eponymia;
        $praktoreio->address = $request->address;
        $praktoreio->tel = $request->tel;
        $praktoreio->kinito = $request->kinito;
        $praktoreio->fax = $request->fax;
        $praktoreio->email = $request->email;
        $praktoreio->mark_del = $request->mark_del;
        $praktoreio->note = $request->note;
        $praktoreio->flag = $request->flag;

        $praktoreio->update();
        return redirect('praktoreiο/'.$praktoreio->id_praktoreio);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Praktoreio  $praktoreio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Praktoreio $praktoreio)
    {
        //
    }
}
