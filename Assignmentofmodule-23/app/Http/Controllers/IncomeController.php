<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Controller\Incom;

class IncomeController extends Controller
{
            public function create()
        {
            return view('incomes.create');
        }

        public function store(Request $request)
        {
            $validatedData = $request->validate([
                'amount' => 'required|numeric',
                'description' => 'required|string',
                'date' => 'required|date',
            ]);

            // Create and save the income record
            // ...
        }

        public function index()
        {
            $incomes = Income::where('user_id', auth()->user()->id)->paginate(10);
            $totalIncome = Income::where('user_id', auth()->user()->id)->sum('amount');
            $totalExpenses = Expense::where('user_id', auth()->user()->id)->sum('amount');
            $netIncome = $totalIncome - $totalExpenses;

            return view('incomes.index', compact('incomes', 'totalIncome', 'totalExpenses', 'netIncome'));
        }

        // app/Http/Controllers/IncomeController.php
public function edit($id)
{
    $income = Income::findOrFail($id);
    return view('incomes.edit', compact('income'));
}

public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'amount' => 'required|numeric',
        'description' => 'required|string',
        'date' => 'required|date',
    ]);

    
    $income->update($validatedData);

    return redirect()->route('incomes.index')->with('success', 'Income updated successfully.');
}

// app/Http/Controllers/IncomeController.php
public function destroy($id)
{
    $income = Income::findOrFail($id);
    $income->delete();

    return redirect()->route('incomes.index')->with('success', 'Income deleted successfully.');
}

  

}
