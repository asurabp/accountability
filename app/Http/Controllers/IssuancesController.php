<?php

namespace App\Http\Controllers;

use App\Models\Issuance;
use App\Models\Item;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Requests\IssuanceRequest;

class IssuancesController extends Controller
{
    public function index()
    {

        if (auth()->check()) {
            $user = auth()->check();
            // $issuances = Issuance:where('employee_id');
        } else {
            $issuances = Issuance::with(['item','employee'])->get();
            return view('issuances.index', compact('issuances'));
        }

    }

    public function create()
    {
        $items = Item::all();
        $employees = Employee::all();
        $issuance = new Issuance();
        return view('issuances.create', compact('issuance', 'items', 'employees'));
    }

    public function store(IssuanceRequest $request)
    {
        Issuance::create($request->validated());
        return redirect('issuances')->with('success', 'Accountability has been created');
    }

    private function validateRequest()
    {
        return request()->validate([
            'item_id' => 'required|int',
            'employee_id' => 'required|int',
            'quantity' => 'required|numeric',
            'amount' => 'nullable',
            'remark' => 'nullable',
        ]);
    }

    public function show(Issuance $issuance, Item $items, Employee $employees)
    {
        return view('issuances.show', compact('issuance', 'items', 'employees'));
    }

    public function edit(Issuance $issuance)
    {
        $employees = Employee::all();
        $items = Item::all();
        return view('issuances.edit', compact('issuance', 'items', 'employees'));
    }

    public function update(Request $request, Issuance $issuance)
    {
        $issuance->update($this->validateRequest());
        return redirect('issuances/' .$issuance->id)->with('success', 'Accountability has been updated');
    }

    public function destroy(Issuance $issuance)
    {
        $issuance->delete();
        return redirect('issuances/')->with('success', 'Accountability has been deleted');
    }


}
