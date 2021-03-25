<?php

namespace App\Http\Controllers;

use App\ExpenOxima;
use Illuminate\Http\Request;
use App\Http\Requests\ExpenOximaRequest;

class ExpenOximaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){

        $expens_oxima = ExpenOxima::where([['mark_del','Όχι']])->get();

        return view('expense_oxima.create',compact('expens_oxima'));
    }

    /**
     * @param ExpenOximaRequest $request
     */
    public function store(Request $request){

        $request->mark_del='Όχι';
        $expen_oxima = new ExpenOxima();
        $expen_oxima->expen_oxima = $request->expen_oxima;
        $expen_oxima->mark_del = $request->mark_del;
        $expen_oxima->save();

        return redirect('expen_manage/'.$expen_oxima->id_expen_oxima);
    }

    /**
     * @param ExpenOximaRequest $request
     */
    public function store_ajax(Request $request){

        $request->mark_del='Όχι';
        $expen_oxima = new ExpenOxima();
        $expen_oxima->expen_oxima = $request->expen_oxima;
        $expen_oxima->mark_del = $request->mark_del;
        $expen_oxima->save();

        return $expen_oxima;
    }

    public function edit($id_expen_oxima){

        $expen_oxima = ExpenOxima::findOrFail($id_expen_oxima);
        $expen_oxima->update();
        $expens_oxima = ExpenOxima::where([['mark_del','Όχι']])->get();
        return view('expense_oxima.edit',compact(['expen_oxima','expens_oxima']));
    }

    public function update(Request $request,$id_expen_oxima){

        $expen_oxima = ExpenOxima::findOrFail($id_expen_oxima);
//        dd($request);
        $expen_oxima->expen_oxima = $request->expen_oxima;
        $expen_oxima->mark_del = $request->mark_del;
        $expen_oxima->update();

        $expens_oxima = ExpenOxima::where([['mark_del','Όχι']])->get();

        return view('expense_oxima.create',compact('expens_oxima'));

    }
}
