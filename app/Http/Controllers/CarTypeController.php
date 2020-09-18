<?php

namespace App\Http\Controllers;

use App\CarType;
use App\Http\Requests\CarTypeRequest;
use Illuminate\Http\Request;

class CarTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){

        $cartype = CarType::where([['Mark_del','Όχι']])->get();
        return view('cartype.create',compact('cartype'));
    }

    /**
     * @param CarTypeRequest $request
     */
    public function store(Request $request){

        $request->Mark_del='Όχι';
        $cartype = new CarType();
        $cartype->Typos = $request->Typos;
        $cartype->Mark_del = $request->Mark_del;
        $cartype->save();

        return redirect('cartype/'.$cartype->id_car_type);
    }

    /**
     * @param CarTypeRequest $request
     */
    public function store_ajax(Request $request){

        $request->Mark_del='Όχι';
        $cartype = new CarType();
        $cartype->Typos = $request->Typos;
        $cartype->Mark_del = $request->Mark_del;
        $cartype->save();

        return $cartype;
    }

    public function edit($id_car_type){

        $cart = CarType::findOrFail($id_car_type);
        $cart->update();
        $cartype = CarType::where([['Mark_del','Όχι']])->get();
        return view('cartype.edit',compact(['cart','cartype']));
    }

    public function update(Request $request,$id_car_type){
        $cart = CarType::findOrFail($id_car_type);


        $cart->Typos = $request->Typos;
        $cart->Mark_del = $request->Mark_del;
        $cart->update();

        $cartype = CarType::where([['Mark_del','Όχι']])->get();
        return view('cartype.create',compact('cartype'));

    }
}
