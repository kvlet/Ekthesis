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

//        if($request->expectsJson()){
//            $data = $request->all();
//            $value = Nomos::create($data);
//            return response()->json([
//                'data' => $value
//            ],200);
//        }
        $request->Mark_del='Όχι';
        $nomos = new Nomos();
        $nomos->Nomos = $request->Nomos;
        $nomos->Mark_del = $request->Mark_del;
        $nomos->save();
        return redirect('nomoi/'.$nomos->id_nomoi);
    }

    public function edit($id_nomoi){

        $nomos = Nomos::findOrFail($id_nomoi);
        $nomos->update();
        $nomoi = Nomos::where([['Mark_del','Όχι']])->get();
        return view('nomoi.edit',compact(['nomos','nomoi']));
    }

    public function update(Request $request,$id_nomoi){
        $nomos = Nomos::findOrFail($id_nomoi);


        $nomos->Nomos = $request->Nomos;
        $nomos->Mark_del = $request->Mark_del;
        $nomos->update();

        $nomoi = Nomos::where([['Mark_del','Όχι']])->get();
        return view('nomoi.create',compact('nomoi'));

    }
}
