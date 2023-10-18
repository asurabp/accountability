@extends('layout')
@section('title')
    Issue Item to Employee
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <h1> Item Issuance to Employee </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="/issuances" method="POST">
                @include('issuances.form')
                <div class="mb-3"></div>
                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
            </form>
            <div>
        </div>
    </div>
@endsection
