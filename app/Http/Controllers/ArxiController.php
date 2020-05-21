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

//        if($request->expectsJson()){
//            $data = $request->all();
//            $value = Arxi_ekdosis_eggrafon::create($data);
//            return response()->json([
//                'data' => $value
//            ],200);
//        }
        $request->Mark_del='Όχι';
        $arxi = new Arxi_ekdosis_eggrafon();
        $arxi->Arxi = $request->Arxi;
        $arxi->Tel1 = $request->Tel1;
        $arxi->Tel2 = $request->Tel2;
        $arxi->Mark_del = $request->Mark_del;
        $arxi->save();
        return redirect('arxi/'.$arxi->id_Arxi_ekdosis_eggrafon);
    }
    public function edit($id_Arxi_ekdosis_eggrafon){
        $arxi = Arxi_ekdosis_eggrafon::findOrFail($id_Arxi_ekdosis_eggrafon);
        $arxi->update();
        $arxes_ekdosis_eggrafon = Arxi_ekdosis_eggrafon::where('Mark_del', 'Όχι')->get();
        return view('arxi_eggrafon.edit',compact(['arxi','arxes_ekdosis_eggrafon']));
    }

    public function update(Request $request,$id_Arxi_ekdosis_eggrafon){
        $arxi = Arxi_ekdosis_eggrafon::findOrFail($id_Arxi_ekdosis_eggrafon);


        $arxi->Arxi = $request->Arxi;
        $arxi->Tel1 = $request->Tel1;
        $arxi->Tel2 = $request->Tel2;
        $arxi->Mark_del = $request->Mark_del;
        $arxi->update();
        $arxes_ekdosis_eggrafon = Arxi_ekdosis_eggrafon::where('Mark_del', 'Όχι')->get();

        return view('arxi_eggrafon.create',compact('arxes_ekdosis_eggrafon'));
    }
}
