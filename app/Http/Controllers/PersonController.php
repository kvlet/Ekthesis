<?php

namespace App\Http\Controllers;

use App\Person;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PersonController extends Controller
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
        return view('person.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $person = new Person();
        $request->Mark_del='Όχι';
        $request->Flag='2';
        if ($request->Hm_gen != null){
            $hm_gen = Carbon::createFromFormat('d-m-Y', $request->Hm_gen)->format('Y-m-d');
            $request->Hm_gen = $hm_gen;
        }

        $person->L_name = $request->L_name;
        $person->F_name = $request->F_name;
        $person->Phone = $request->Phone;
        $person->Kinito = $request->Kinito;
        $person->Address = $request->Address;
        $person->Tautotita = $request->Tautotita;
        $person->AFM = $request->AFM;
        $person->Father_name = $request->Father_name;
        $person->Mother_name = $request->Mother_name;
        $person->Tameio = $request->Tameio;
        $person->Amka = $request->Amka;
        $person->Job = $request->Job;
        $person->Filo = $request->Filo;
        $person->Baros = $request->Baros;
        $person->Ypsos = $request->Ypsos;
        $person->Age = $request->Age;
        $person->Hm_gen = $request->Hm_gen;
        $person->Mark_del = $request->Mark_del;
        $person->Flag = $request->Flag;

        $person->save();

        return redirect('person/'.$person->id_person);
    }

//    /**
//     * Display the specified resource.
//     *
//     * @param  \App\Person  $person
//     * @return \Illuminate\Http\Response
//     */
//    public function show(Person $person)
//    {
//        //
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit($id_person)
    {
        $person=Person::find($id_person);
        $person->update();
        return view('person.edit',compact(['person']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id_person)
    {
        $person=Person::find($id_person);
        $request->Mark_del='Όχι';
        $request->Flag='2';
        if ($request->Hm_gen != null){
            $hm_gen = Carbon::createFromFormat('d-m-Y', $request->Hm_gen)->format('Y-m-d');
            $request->Hm_gen = $hm_gen;
        }
        $person->L_name = $request->L_name;
        $person->F_name = $request->F_name;
        $person->Phone = $request->Phone;
        $person->Kinito = $request->Kinito;
        $person->Address = $request->Address;
        $person->Tautotita = $request->Tautotita;
        $person->AFM = $request->AFM;
        $person->Father_name = $request->Father_name;
        $person->Mother_name = $request->Mother_name;
        $person->Tameio = $request->Tameio;
        $person->Amka = $request->Amka;
        $person->Job = $request->Job;
        $person->Filo = $request->Filo;
        $person->Baros = $request->Baros;
        $person->Ypsos = $request->Ypsos;
        $person->Age = $request->Age;
        $person->Hm_gen = $request->Hm_gen;
        $person->Mark_del = $request->Mark_del;
        $person->Flag = $request->Flag;

        $person->update();

        return redirect('person/'.$person->id_person);
    }


}
