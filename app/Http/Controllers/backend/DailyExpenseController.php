<?php

namespace App\Http\Controllers\backend;
use App\Warehouse;
use Auth;
use App\DailyExpense;
use App\Expense;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DailyExpenseController extends Controller
{
    public function index(){
        $this->checkpermission('ExpenseManagement/daily-expenses');
        $dailyexpense=DailyExpense::all();
        $warehouse=Warehouse::pluck('name','id');
        $expenses=Expense::pluck('name','id');
        return view('admin.expense.daily-expenses',compact('dailyexpense','expenses','warehouse'));
    }
    public function store(Request $request){
        $this->checkpermission('ExpenseManagement/daily-expenses');
        $request->validate([
            'title' => 'required|unique:daily_expenses'

        ]);
        $user_id = Auth::user()->id;
        $warehouse_id = Auth::user()->warehouse_id;
        $input=new DailyExpense();
        $input->title=$request->title;
        $input->price=$request->price;
        $input->details=$request->details;
        $input->user_id=$user_id;
        $input->warehouse_id=$warehouse_id;
        $input->expenses_id=$request->expenses;
        $input->save();
        session()->flash('success','Store Successfully');
        return redirect()->route('daily-expenses.add');
    }

    public function show($id)
    {
        $expense=Expense::pluck('name','id');
        $dailyexpense = DailyExpense::find($id);
        return view('admin.expense.edit-daily-expenses',compact('dailyexpense','expense'));
    }

    public function update(Request $request)
    {
        $role = DailyExpense::find($request->id);
        $role->name = $request->name;
        $role->update();
        session()->flash('success', 'Updated successfully');
        return redirect()->route('daily-expenses.add');
    }

    public function destroy(Request $request)
    {
        $delete = DailyExpense::find($request->id);
        $delete->delete();
    }
}
