<?php

namespace App\Http\Controllers;

use App\Models\TransactionModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function display()
    {
        return view('app.expense.create');
    }

    public function store(Request $request)
    {
        $userData = new TransactionModel();
        $userData->fill($request->all());
        $userData->type = $request->input('type');
        $userData->save();
        return redirect()->route('transaction.display')->with('success', 'New Transaction added successfully!');
    }

    public function list()
    {
        $userData = TransactionModel::all();
        return view('app.expense.list', compact('userData'));
    }

    public function edit($id)
    {
        $userData = TransactionModel::find($id);
        return view('app.expense.update', compact('userData'));
    }

    public function update(Request $request, $id)
    {
        $userData = TransactionModel::find($id);
        $userData->description = $request->description;
        $userData->amount = $request->amount;
        $userData->type = $request->type;
        $userData->transaction_date = $request->transaction_date;
        $userData->save();
        return redirect()->route('transaction.list')->with('success', 'Transaction updated successfully!');
    }
}
