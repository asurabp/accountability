@extends('layout')

@section('title', 'Edit' . $employee->name)
@section('content')
    <div class="row">
        <div class="col-12">
            <h1> Edit </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-10">

            <form action="{{ route('employees.update', ['employee' => $employee])}}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                @include('employees.form')
                <div class="mb-3"></div>
                <a href="{{ route('employees.index') }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <div>
        </div>
    </div>
@endsection
