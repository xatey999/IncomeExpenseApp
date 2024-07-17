<?php

namespace App\Http\Controllers;

use App\Models\TransactionModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    //for simply displaying the page after login
    public function display()
    {
        return view('app.expense.create');
    }

    //for saving the data in database
    public function store(Request $request)
    {
        $userData = new TransactionModel();
        $userData->fill($request->all());
        $userData->type = $request->input('type');
        $userData->save();
        return redirect()->route('transaction.display')->with('success', 'New Transaction added successfully!');
    }

    //for listing the data
    public function list()
    {
        $userData = TransactionModel::all();
        return view('app.expense.list', compact('userData'));
    }

    //for handling the edit button
    public function edit($id)
    {
        $userData = TransactionModel::find($id);
        return view('app.expense.update', compact('userData'));
    }

    //for updating
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

    //for deleting
    public function delete($id)
    {
        $userData = TransactionModel::find($id);
        $userData->delete();
        return redirect()->route('transaction.list')->with('message', 'Transaction deleted successfully!!');
    }
}
