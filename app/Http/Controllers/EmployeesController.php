<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Item;

class EmployeesController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        $items = Item::all();
        $employee = new Employee();
        return view('employees.create', compact('items', 'employee'));
    }

    public function store()
    {
        Employee::create($this->validateRequest());
        
        return redirect('employees');
    }

    public function show(Employee $employee)
    {
        //$employee = Employee::where('id', $employee)->firstOrFail();

        return view('employees.show', compact('employee'));
    }

    public function edit(Employee $employee)
    {
        $items = Item::all();

        return view('employees.edit', compact('employee','items'));
    }

    public function update(Employee $employee)
    {
        $employee->update($this->validateRequest());

        return redirect('employees' . $employee->id);
    }

    private function validateRequest() {
        return request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required',
            'item_id' => 'nullable',
        ]);
    }

    public function destroy(Employee $employee) {
        $employee->delete();
        return redirect('employees');
    }
}
