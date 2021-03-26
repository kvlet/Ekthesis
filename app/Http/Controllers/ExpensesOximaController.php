<?php

namespace App\Http\Controllers;

use App\ExpenOxima;
use App\ExpensesOxima;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ExpensesOximaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
        $expen = ExpenOxima::where([['mark_del','Όχι']])->get();
        return  view('expenses_oxima.create',compact('expen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $expen_oxima = new ExpensesOxima();

        $request->mark_del='Όχι';
        $expenDate = Carbon::createFromFormat('d-m-Y',  $request->expen_date)->format('Y-m-d');
        $request->expen_date = $expenDate;

        $expen_oxima->expen_date = $request->expen_date;
        $expen_oxima->id_expen_oxima = $request->id_expen_oxima;
        $expen_oxima->km = $request->km;
        $expen_oxima->lt = $request->lt;
        $expen_oxima->value = $request->value;
        $expen_oxima->note = $request->note;
        $expen_oxima->save();

        return redirect('car_expen/search');
    }
    public function edit($id_expenses_oxima){
        $expen_oxima=ExpensesOxima::findOrFail($id_expenses_oxima);
        $expen = ExpenOxima::where([['mark_del','Όχι']])->get();
        $expen_oxima->expen_date = Carbon::createFromFormat('Y-m-d', $expen_oxima->expen_date)->format('d-m-Y');
        return view('expenses_oxima.edit',compact(['expen_oxima','expen']));

    }

    public function update(Request $request,$id_expenses_oxima)
    {
        $expen_oxima=ExpensesOxima::findOrFail($id_expenses_oxima);


        $expenDate = Carbon::createFromFormat('d-m-Y',  $request->expen_date)->format('Y-m-d');
        $request->expen_date = $expenDate;

        $expen_oxima->expen_date = $request->expen_date;
        $expen_oxima->id_expen_oxima = $request->id_expen_oxima;
        $expen_oxima->km = $request->km;
        $expen_oxima->lt = $request->lt;
        $expen_oxima->value = $request->value;
        $expen_oxima->note = $request->note;
        $expen_oxima->mark_del = $request->mark_del;
        $expen_oxima->save();

        return redirect('car_expen/search');
    }

    public  function opensearch(){
        $expen = ExpenOxima::where([['mark_del','Όχι']])->get();
        $expens_oxima = ExpensesOxima::where([['mark_del','Όχι']])->orderBy('expen_date')->get();
//        dd($expens_oxima);
        foreach ($expens_oxima as $expenox){
            $expenox->expen_date = Carbon::createFromFormat('Y-m-d', $expenox->expen_date)->format('d-m-Y');
        }


        return view('expenses_oxima.search',compact([
            'expens_oxima',
            'expen'
        ]));
    }

    public function search(Request $request){
        $expen = ExpenOxima::where([['mark_del','Όχι']])->get();
//        dd($request);
        if ($request->sexpen_date == null && $request->fexpen_date == null){
            $expens_oxima = ExpensesOxima::where([['mark_del','Όχι']])->orderBy('expen_date')->get();
        }else{
            $sdate = Carbon::createFromFormat('d-m-Y', $request->sexpen_date)->format('Y-m-d');
            $edate = Carbon::createFromFormat('d-m-Y', $request->fexpen_date)->format('Y-m-d');
            $expens_oxima = ExpensesOxima::where([['mark_del','Όχι'],['expen_date','>=',$sdate],['expen_date','<=',$edate]])->orderBy('expen_date')->get();
        }
        foreach ($expens_oxima as $expenox){
            $expenox->expen_date = Carbon::createFromFormat('Y-m-d', $expenox->expen_date)->format('d-m-Y');
        }
        return view('expenses_oxima.search',compact([
            'expens_oxima',
            'expen'
        ]));
    }
}
