@extends('layout')

@section('title', 'Edit' . $employee->name)
@section('content')
    <div class="row">
        <div class="col-12">
            <h1> Edit {{ $employee->name }} </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-10">
            <form action="/employees/{{ $employee->id }}" method="POST"">
                @method('PATCH')
                @include('employees.form')
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <div>
        </div>
    </div>
@endsection