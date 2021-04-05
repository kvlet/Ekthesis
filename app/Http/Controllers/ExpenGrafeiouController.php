<?php

namespace App\Http\Controllers;

use App\ExpenGrafeiou;
use App\Expense;
use App\Grafeio;
use App\Tameio;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ExpenGrafeiouController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
       $grafeia = Grafeio::where('Mark_del', 'Όχι')->orderBy('Name')->get();
       $expenses = Expense::where([['Mark_del', 'Όχι'],['Where_use', '=', 'Γ']])->orderBy('eksodo')->get();

       return view('expenses_grafeiou.create',compact([
           'grafeia',
           'expenses'
       ]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $expen_graf = new ExpenGrafeiou();
        $tameio = new Tameio();

        $request->Valid='true';
        $request->Flag='1';
        $eksodoDate = Carbon::createFromFormat('d-m-Y',  $request->Date_expen)->format('Y-m-d');
        $request->Date_expen = $eksodoDate;

        $expen_graf->Date_expen = $request->Date_expen;
        $expen_graf->id_grafeio = $request->id_grafeio;
        $expen_graf->id_expenses = $request->id_expenses;
        $expen_graf->Value_expen = $request->Value_expen;
        $expen_graf->Note = $request->Note;
        $expen_graf->Valid = $request->Valid;
        $expen_graf->Flag = $request->Flag;
        $expen_graf->save();

        $tameio->id_grafeio=$request->id_grafeio;
        $tameio->Trans_date=$request->Date_expen;
        $tameio->Value=$request->Value_expen;
        $tameio->Valid=$request->Valid;
        $tameio->X_P='X';
        $tameio->id_expenses=$request->id_expenses;
        $tameio->Notes = $request->Note;
        $tameio->save();

        return redirect('graf_expen/search');
    }

    public function edit($id_grafeio,$id_expenses,$Date_expen){
        $grafeia = Grafeio::where('Mark_del', 'Όχι')->orderBy('Name')->get();
        $expenses = Expense::where([['Mark_del', 'Όχι'],['Where_use', '=', 'Γ']])->orderBy('eksodo')->get();
        $dateExpen = Carbon::createFromFormat('d-m-Y',  $Date_expen    )->format('Y-m-d');

        $expen_graf = ExpenGrafeiou::where([['id_grafeio', $id_grafeio], ['id_expenses', $id_expenses], ['Date_expen', $dateExpen]])->first();

        $expen_graf->Flag=2;
        $expen_graf->save();
        $expen_graf->Date_expen = Carbon::createFromFormat('Y-m-d', $expen_graf->Date_expen)->format('d-m-Y');

        return view('expenses_grafeiou.edit',compact([
            'grafeia',
            'expenses',
            'expen_graf'
        ]));
    }

    public function update(Request $request)
    {
        $request->Date_expen = Carbon::createFromFormat('d-m-Y',  $request->Date_expen)->format('Y-m-d');

        $expen_graf = ExpenGrafeiou::where([['id_grafeio', $request->id_grafeio], ['id_expenses', $request->id_expenses], ['Date_expen', $request->Date_expen]])->first();
        $tameio = Tameio::where([['id_grafeio', $request->id_grafeio], ['id_expenses', $request->id_expenses], ['Trans_date', $request->Date_expen]])->first();
//        dd($expen_graf);
        $request->Flag='1';

        $expen_graf->Date_expen = $request->Date_expen;
        $expen_graf->id_grafeio = $request->id_grafeio;
        $expen_graf->id_expenses = $request->id_expenses;
        $expen_graf->Value_expen = $request->Value_expen;
        $expen_graf->Note = $request->Note;
        $expen_graf->Valid = $request->Valid;
        $expen_graf->Flag = $request->Flag;
        $expen_graf->save();

        $tameio->id_grafeio=$request->id_grafeio;
        $tameio->Trans_date=$request->Date_expen;
        $tameio->Value=$request->Value_expen;
        $tameio->Valid=$request->Valid;
        $tameio->X_P='X';
        $tameio->id_expenses=$request->id_expenses;
        $tameio->Notes = $request->Note;
        $tameio->save();

        return redirect('graf_expen/search');
    }

    public function opensearch(){
        $grafeia = Grafeio::where('Mark_del', 'Όχι')->orderBy('Name')->get();
        $expenses = Expense::where([['Mark_del', 'Όχι'],['Where_use', '=', 'Γ']])->orderBy('eksodo')->get();
        $expen_graf=ExpenGrafeiou::orderBy('Date_expen')->get();

        foreach ($expen_graf as $eksodgr){
            $eksodgr->Date_expen = Carbon::createFromFormat('Y-m-d', $eksodgr->Date_expen)->format('d-m-Y');
        }

        return view('expenses_grafeiou.search',compact([
            'grafeia',
            'expenses',
            'expen_graf'
        ]));
    }

    public function search(Request $request){
        $grafeia = Grafeio::where('Mark_del', 'Όχι')->orderBy('Name')->get();
        $expenses = Expense::where([['Mark_del', 'Όχι'],['Where_use', '=', 'Γ']])->orderBy('eksodo')->get();

        if ($request->sexpen_date == null && $request->fexpen_date == null){
            $expen_graf=ExpenGrafeiou::orderBy('Date_expen')->get();
        }else{
            $sdate = Carbon::createFromFormat('d-m-Y', $request->sexpen_date)->format('Y-m-d');
            $edate = Carbon::createFromFormat('d-m-Y', $request->fexpen_date)->format('Y-m-d');
            $expen_graf = ExpenGrafeiou::where([['Date_expen','>=',$sdate],['Date_expen','<=',$edate]])->orderBy('Date_expen')->get();
        }
        foreach ($expen_graf as $eksodgr){
            $eksodgr->Date_expen = Carbon::createFromFormat('Y-m-d', $eksodgr->Date_expen)->format('d-m-Y');
        }
        return view('expenses_grafeiou.search',compact([
            'grafeia',
            'expenses',
            'expen_graf'
        ]));

    }

}
