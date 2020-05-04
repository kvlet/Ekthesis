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
    public function store(Request $request)
    {
        //
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
    public function edit(Praktoreio $praktoreio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Praktoreio  $praktoreio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Praktoreio $praktoreio)
    {
        //
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
