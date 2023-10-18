@extends('layout')

@section('title')
    Add New Item
@endsection

@section('content')
    <div class="row">
        <div class="col-6-md-6 mb-3">
            <h1> Add New Item </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-6-md-6">
            <form action="{{ route('items.store') }}" method="POST">
                @include('items.form')
                <div class="mb-3"></div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <div>
        </div>
    </div>
@endsection
