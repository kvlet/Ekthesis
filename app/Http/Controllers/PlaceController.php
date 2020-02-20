<?php

namespace App\Http\Controllers;

use App\Accident_place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){

        $accident_places=Accident_place::where('Mark_del', 'Όχι')->get();

        return view('accident_place.create',compact('accident_places'));
    }
    /**
     * @param PlaceRequest $request
     */
    public function store(Request $request){

        if($request->expectsJson()){
            $data = $request->all();
            $value = Accident_place::create($data);
            return response()->json([
                'data' => $value
            ],200);
        }

    }
}
