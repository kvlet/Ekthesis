<?php

namespace App\Http\Controllers;

use App\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
        $expenses=Expense::where([['Mark_del','Όχι']])->get();
        return view('expense.create',compact(['expenses']));
    }

    /**
     * @param ExpenseRequest $request
     */
    public function store(Request $request){

        $request->Mark_del='Όχι';
        $request->flag='1';
        $expense = new Expense();
        $expense->eksodo = $request->eksodo;
        $expense->type_eksodo = $request->type_eksodo;
        $expense->Where_use = $request->Where_use;
        $expense->Mark_del = $request->Mark_del;
        $expense->flag = $request->flag;
        $expense->save();

        return redirect('expense/'.$expense->id_expenses);
    }

    /**
     * @param ExpenseRequest $request
     */
    public function store_ajax(Request $request){

        $request->Mark_del='Όχι';
        $request->flag='1';
        $expense = new Expense();
        $expense->eksodo = $request->eksodo;
        $expense->type_eksodo = $request->type_eksodo;
        $expense->Where_use = $request->Where_use;
        $expense->Mark_del = $request->Mark_del;
        $expense->flag = $request->flag;
        $expense->save();

        return $expense;
    }

    public function edit($id_expenses){
        $expense=Expense::findOrFail($id_expenses);
        $expense->flag=2;
        $expense->update();
        $expenses=Expense::where([['Mark_del','Όχι']])->get();
        return view('expense.edit',compact(['expense','expenses']));
    }

    public function update(Request $request,$id_expenses){
        $expense=Expense::findOrFail($id_expenses);
        $request->flag=1;
        $expense->eksodo = $request->eksodo;
        $expense->type_eksodo = $request->type_eksodo;
        $expense->Where_use = $request->Where_use;
        $expense->Mark_del = $request->Mark_del;
        $expense->flag = $request->flag;
        $expense->update();
        $expenses=Expense::where([['Mark_del','Όχι']])->get();
        return view('expense.create',compact('expenses'));
    }
}
