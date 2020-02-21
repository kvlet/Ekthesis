<?php

namespace App\Http\Controllers;

use App\Http\Requests\NomoiRequest;
use App\Nomos;
use Illuminate\Http\Request;

class NomoiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){

        $nomoi = Nomos::where([['Mark_del','Όχι']])->get();

        return view('nomoi.create',compact('nomoi'));
    }
    /**
     * @param NomoiRequest $request
     */
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
