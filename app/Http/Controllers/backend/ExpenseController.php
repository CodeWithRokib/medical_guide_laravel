<?php

namespace App\Http\Controllers\backend;

use App\Expense;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExpenseController extends Controller
{
    public function index(){
        $this->checkpermission('ExpenseManagement/expense-management');
        $expenses = Expense::all();
        return view('admin.expense.add-expense',compact('expenses'));
    }

    public function store(Request $request)
    {
        $this->checkpermission('ExpenseManagement/expense-management');
        $request->validate([
            'name' => 'required|unique:expenses|max:255',
        ]);
        Expense::create($request->all());
        session()->flash('success','Store Successfully');
        return redirect()->route('expense.add');
    }

    public function show($id)
    {
        $expenses = Expense::find($id);
        return view('admin.expense.edit-expense',compact('expenses'));
    }

    public function update(Request $request)
    {
        $role = Expense::find($request->id);
        $role->name = $request->name;
        $role->update();
        session()->flash('success', 'Updated successfully');
        return redirect()->route('expense.add');
    }

    public function destroy(Request $request)
    {
        $delete = Expense::find($request->id);
        $delete->delete();
    }


}
