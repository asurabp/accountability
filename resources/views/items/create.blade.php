@extends('layout')

@section('title')
    Add New Item
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <h1> Add New Item </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-10">
            <form action="/items" method="POST" class="pb-2">
                @include('items.form')
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <div>
        </div>
    </div>
@endsection