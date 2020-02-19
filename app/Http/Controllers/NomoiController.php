<?php

namespace App\Http\Controllers;

use App\Nomos;
use Illuminate\Http\Request;

class NomoiController extends Controller
{
    public function create(){

        $nomoi = Nomos::all('id_nomoi', 'Nomos');

        return view('nomoi.create',compact('nomoi'));
    }

    public function store(Request $request){

        if($request->expectsJson()){
            $data = $request->all();
            $value = Nomos::create($data);
            return response()->json([
                'data' => $value
            ],200);
        }

    }
}
