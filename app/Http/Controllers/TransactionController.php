<?php

namespace App\Http\Controllers;

use App\Models\TransactionModel;
use Illuminate\Http\Request;

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
}
