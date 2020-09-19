<?php

namespace App\Http\Controllers;

use App\Paint;
use Illuminate\Http\Request;

class PaintController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){

        $paint = Paint::where([['Mark_del','Όχι']])->get();
        return view('paint.create',compact('paint'));
    }

    /**
     * @param PaintRequest $request
     */
    public function store(Request $request){

        $request->Mark_del='Όχι';
        $paint = new Paint();
        $paint->paint_type = $request->paint_type;
        $paint->Mark_del = $request->Mark_del;
        $paint->save();

        return redirect('paint/'.$paint->id_paint_type);
    }

    /**
     * @param CarTypeRequest $request
     */
    public function store_ajax(Request $request){

        $request->Mark_del='Όχι';
        $paint = new Paint();
        $paint->paint_type = $request->paint_type;
        $paint->Mark_del = $request->Mark_del;
        $paint->save();

        return $paint;
    }

    public function edit($id_paint_type){

        $pain = Paint::findOrFail($id_paint_type);
        $pain->update();
        $paint = Paint::where([['Mark_del','Όχι']])->get();
        return view('paint.edit',compact(['pain','paint']));
    }

    public function update(Request $request,$id_paint_type){
        $pain = Paint::findOrFail($id_paint_type);


        $pain->paint_type = $request->paint_type;
        $pain->Mark_del = $request->Mark_del;
        $pain->update();

        $paint = Paint::where([['Mark_del','Όχι']])->get();
        return view('paint.create',compact('paint'));

    }
}
