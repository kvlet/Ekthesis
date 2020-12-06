<?php

namespace App\Http\Controllers;

use App\Ergasies;
use App\Parts;
use Illuminate\Http\Request;

class ErgasiesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
        $ergasies = Ergasies::where([['Mark_del','Όχι']])->get();
        return  view('ergasies.create',compact(['ergasies']));
    }

    /**
     * @param ErgasiesRequest $request
     */
    public function store(Request $request){

        $request->Mark_del='Όχι';
        $request->flag='1';
        $ergasies = new Ergasies();
        $ergasies->ergasia = $request->ergasia;
        $ergasies->Print_sort = $request->Print_sort;
        $ergasies->Mark_del = $request->Mark_del;
        $ergasies->flag = $request->flag;
        $ergasies->save();

        return redirect('ergasies/'.$ergasies->id_ergasies);
    }

    public function store_ajax(Request $request){

        $request->Mark_del='Όχι';
        $request->flag='1';
        $ergasies = new Ergasies();
        $ergasies->ergasia = $request->ergasia;
        $ergasies->Print_sort = $request->Print_sort;
        $ergasies->Mark_del = $request->Mark_del;
        $ergasies->flag = $request->flag;
        $ergasies->save();

        return $ergasies;
    }

    public function edit($id_ergasies){
        $ergasia = Ergasies::with('ergasies_in_parts')->findOrFail($id_ergasies);
        $ergasia->flag='2';
        $ergasia->update();
        $ergasies = Ergasies::where([['Mark_del','Όχι']])->get();
        $parts = Parts::where([['Mark_del','Όχι'],['id_parts','>','1']])->orderBy('part')->get();
        return view('ergasies.edit',compact(['ergasies','ergasia','parts']));
    }

    public function update(Request $request,$id_ergasies){
        $ergasia = Ergasies::findOrFail($id_ergasies);
        $request->flag='1';
        $ergasia->ergasia = $request->ergasia;
        $ergasia->Print_sort = $request->Print_sort;
        $ergasia->Mark_del = $request->Mark_del;
        $ergasia->flag = $request->flag;
        $ergasia->update();

        $ergasies = Ergasies::where([['Mark_del','Όχι']])->get();
        return  view('ergasies.create',compact(['ergasies']));

    }

    public  function opensearch(){
        $ergasies= Ergasies::where([['Mark_del','Όχι'],['ergasia','LIKE','%']])->orderBy('ergasia')->get();

        return view('ergasies.search',compact([
            'ergasies'
        ]));
    }

    public function search(Request $request){
        $ergasia= $request->ergasia;
        if ($ergasia == null){
            $ergasies= Ergasies::where([['Mark_del','Όχι'],['ergasia','LIKE','%']])->orderBy('ergasia')->get();
        }else{
            $ergasies= Ergasies::where([['Mark_del','Όχι'],['ergasia','LIKE','%'.$ergasia.'%']])->orderBy('ergasia')->get();
        }

        return view('ergasies.search',compact([
            'ergasies'
        ]));
    }
// manage parts of ergasies
    public function create_ergasia_part($id_ergasies){
        $ergasia = Ergasies::findOrFail($id_ergasies);
        $parts = Parts::where([['Mark_del','Όχι'],['id_parts','>','1']])->get();
        return view('ergasies.create_ergasia_part',compact(['parts','ergasia']));
    }

    public function store_ergasia_part(Request $request,$id_ergasies){
        $ergasia = Ergasies::findOrFail($id_ergasies);
        $part=$ergasia->ergasies_in_parts()->attach($request->id_parts);
        $parts = Parts::where([['Mark_del','Όχι'],['id_parts','>','1']])->get();
        return redirect('ergasies/'.$ergasia->id_ergasies)->with(['parts','part','id_ergasies']);
    }

    public function delete_ergasia_part($id_ergasies,$id_parts){
        $ergasia=Ergasies::with('ergasies_in_parts')->findOrFail($id_ergasies);
        $part=$ergasia->ergasies_in_parts()->wherePivot('id_parts',$id_parts)->first();
        $parts = Parts::where([['Mark_del','Όχι'],['id_parts','>','1']])->get();

        return view('ergasies.delete_ergasia_part',compact(['part','id_ergasies','parts','ergasia']));

    }

    public function destroy_ergasia_part(Request $request){
        $id_ergasies=$request->id_ergasies;
        $ergasia=Ergasies::with('ergasies_in_parts')->findOrFail($id_ergasies);
        $part=$ergasia->ergasies_in_parts()->wherePivot('id_parts',$request->id_parts)->first();
        $ergasia->ergasies_in_parts()->detach($request->id_parts);
        return redirect('ergasies/'.$ergasia->id_ergasies);
    }
    // end manage parts of ergasies
}
