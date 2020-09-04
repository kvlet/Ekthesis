<?php

namespace App\Http\Controllers;

use App\Accedent_place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){

        $accident_places=Accedent_place::where('Mark_del', 'Όχι')->get();

        return view('accedent_place.create',compact('accident_places'));
    }
    /**
     * @param PlaceRequest $request
     */
    public function store(Request $request){

//        if($request->expectsJson()){
//            $data = $request->all();
//            $value = Accedent_place::create($data);
//            return response()->json([
//                'data' => $value
//            ],200);
//        }
        $request->Mark_del='Όχι';

        $place = new Accedent_place();

        $place->Place = $request->Place;
        $place->Mark_del = $request->Mark_del;

        $place->save();

        return redirect('place/'.$place->id_accident_place);
    }
    public function store_ajax(Request $request){


        $request->Mark_del='Όχι';

        $place = new Accedent_place();

        $place->Place = $request->Place;
        $place->Mark_del = $request->Mark_del;

        $place->save();
        return $place;

    }
    public  function edit($id_accident_place){

        $place = Accedent_place::findOrFail($id_accident_place);
        $place->update();
        $accident_places=Accedent_place::where('Mark_del', 'Όχι')->get();
        return view('accedent_place.edit',compact(['place','accident_places']));
    }

    public function update(Request $request,$id_accident_place){
        $place = Accedent_place::findOrFail($id_accident_place);

        $place->Place = $request->Place;
        $place->Mark_del = $request->Mark_del;
        $place->update();
        $accident_places=Accedent_place::where('Mark_del', 'Όχι')->get();
        return view('accedent_place.create',compact('accident_places'));

    }
}
