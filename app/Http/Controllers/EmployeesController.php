<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Item;
use App\Http\Requests\EmployeeRequest;

class EmployeesController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }



    public function index()
    {

        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        $employee = new Employee();
        return view('employees.create', compact('employee'));
    }

    public function store(EmployeeRequest $request)
    {
        Employee::create($request->validated());
        return redirect('employees')->with('success','Employee created successfully!');
    }

    public function show(Employee $employee)
    {
        return view('employees.show')->with('employee', $employee->load('issuances.item'));
    }

    public function edit(Employee $employee)
    {
        $items = Item::all();
        return view('employees.edit', compact('employee','items'));
    }

    public function update(Employee $employee, EmployeeRequest $request)
    {
        $employee->update($request->validated());
        return redirect('employees/' . $employee->id)->with('success','Employee edited successfully!');
    }

    public function destroy(Employee $employee) {

        //dd($employee->issuances()->count());

        if ($employee->issuances()->count() > 0) {
            return redirect('employees')->with('error', 'Cannot delete Employee ' . $employee->name);
        } else {
            $employee->delete();
            return redirect('employees')->with('success', 'Employee deleted successfully!');
        }
    }
}
