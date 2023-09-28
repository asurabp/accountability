@extends('layout')

@section('title')
    Add New Employee
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <h1> Add New Employee </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-10">
            <form action="/employees" method="POST" class="pb-2">
                @include('employees.form')
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <div>
        <hr>

        </div>
    </div>
@endsection