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
        <div class="col-12">
            <form action="{{ route('employees.store')}}" method="POST" >
                @include('employees.form')
                <div class="mb-3"></div>
                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
            </form>
            <div>
        </div>
    </div>
@endsection
