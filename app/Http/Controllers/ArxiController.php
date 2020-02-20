<?php

namespace App\Http\Controllers;

use App\Arxi_ekdosis_eggrafon;
use Illuminate\Http\Request;

class ArxiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){

        $arxes_ekdosis_eggrafon = Arxi_ekdosis_eggrafon::where('Mark_del', 'Όχι')->get();

        return view('arxi_eggrafon.create',compact('arxes_ekdosis_eggrafon'));
    }

    /**
     * @param Arxi_ekdosis_eggrafon $request
     */
    public function store(Request $request){

        if($request->expectsJson()){
            $data = $request->all();
            $value = Arxi_ekdosis_eggrafon::create($data);
            return response()->json([
                'data' => $value
            ],200);
        }

    }
}
