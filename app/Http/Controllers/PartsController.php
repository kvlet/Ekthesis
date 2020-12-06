<?php

namespace App\Http\Controllers;

use App\Ergasies;
use App\Parts;
use Illuminate\Http\Request;

class PartsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
        $parts = Parts::where([['Mark_del','Όχι'],['id_parts','>','1']])->get();
        return  view('parts.create',compact(['parts']));
    }

    /**
     * @param PartsRequest $request
     */
    public function store(Request $request){

        $request->Mark_del='Όχι';
        $request->flag='1';
        $parts = new Parts();
        $parts->part = $request->part;
        $parts->Mark_del = $request->Mark_del;
        $parts->flag = $request->flag;
        $parts->save();

        return redirect('parts/'.$parts->id_parts);
    }

    public function store_ajax(Request $request){

        $request->Mark_del='Όχι';
        $request->flag='1';
        $parts = new Parts();
        $parts->part = $request->part;
        $parts->Mark_del = $request->Mark_del;
        $parts->flag = $request->flag;
        $parts->save();

        return $parts;
    }

    public function edit($id_parts){
        $part = Parts::with('parts_in_ergasies')->findOrFail($id_parts);
        $part->flag='2';
        $part->update();
        $parts = Parts::where([['Mark_del','Όχι'],['id_parts','>','1']])->get();
        $ergasies = Ergasies::where([['Mark_del','Όχι']])->get();
        return view('parts.edit',compact(['parts','part','ergasies']));
    }

    public function update(Request $request,$id_parts){
        $part = Parts::findOrFail($id_parts);
        $request->flag='1';
        $part->part = $request->part;
        $part->Mark_del = $request->Mark_del;
        $part->flag = $request->flag;
        $part->update();

        $parts = Parts::where([['Mark_del','Όχι'],['id_parts','>','1']])->get();
        return  view('parts.create',compact(['parts']));

    }

    public  function opensearch(){
        $parts= Parts::where([['Mark_del','Όχι'],['part','LIKE','%'],['id_parts','>','1']])->orderBy('part')->get();

        return view('parts.search',compact([
            'parts'
        ]));
    }

    public function search(Request $request){
        $part= $request->part;
        if ($part == null){
            $parts= Parts::where([['Mark_del','Όχι'],['part','LIKE','%'],['id_parts','>','1']])->orderBy('part')->get();
        }else{
            $parts= Parts::where([['Mark_del','Όχι'],['part','LIKE','%'.$part.'%'],['id_parts','>','1']])->orderBy('part')->get();
        }

        return view('parts.search',compact([
            'parts'
        ]));
    }

    // manage ergasies of parts
    public function create_part_ergasia($id_parts){
        $part = Parts::findOrFail($id_parts);
        $ergasies = Ergasies::where([['Mark_del','Όχι']])->get();
        return view('parts.create_part_ergasia',compact(['part','ergasies']));
    }

    public function store_part_ergasia(Request $request,$id_parts){
        $part = Parts::findOrFail($id_parts);
        $ergasia=$part->parts_in_ergasies()->attach($request->id_ergasies);
        $ergasies = Ergasies::where([['Mark_del','Όχι']])->get();
        return redirect('parts/'.$part->id_parts)->with(['ergasies','ergasia','id_parts']);
    }

    public function delete_part_ergasia($id_parts,$id_ergasies){
        $part=Parts::with('parts_in_ergasies')->findOrFail($id_parts);
        $ergasia=$part->parts_in_ergasies()->wherePivot('id_ergasies',$id_ergasies)->first();
        $ergasies = Ergasies::where([['Mark_del','Όχι']])->get();

        return view('parts.delete_part_ergasia',compact(['ergasia','id_parts','ergasies','part']));

    }

    public function destroy_part_ergasia(Request $request){
        $id_parts=$request->id_parts;
        $part=Parts::with('parts_in_ergasies')->findOrFail($id_parts);
        $ergasia=$part->parts_in_ergasies()->wherePivot('id_ergasies',$request->id_ergasies)->first();
        $part->parts_in_ergasies()->detach($request->id_ergasies);
        return redirect('parts/'.$part->id_parts);
    }
    // end manage ergasies of parts
}
