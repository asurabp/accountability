@extends('layout')

@section('title')
    Employee
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <h1> Employees </h1>
            <p><a href="employees/create">Add New Employee</a></p>
        </div>
    </div>

    @foreach($employees as $employee)
        <div class="row">
            <div class="col-2">
                {{ $employee->id }}
            </div>
        <div class="col-4">{{ $employee->name }}</div>
        <div class="col-2"> {{ $employee->item->name }}</div>
        <div class="col-2"> {{ $employee->active }}</div>
        <div class="col-2">
            <a href="/employees/{{ $employee->id }}">Edit</a>
        </div>
        </div>
    @endforeach
@endsection