@extends('layout')

@section('title')
    Items
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <h1> Items </h1>
            <p><a href="/items/create">Add New Item</a></p>
        </div>
    </div>

    @foreach($items as $item)
        <div class="row">
            <!-- Display ID Temporary -->
            <div class="col-2">
                {{ $item->id }}
            </div>

            <!-- Display Item -->
            <div class="col-4">
                {{ $item->name }}
            </div>

            <!-- Display Item -->
            <div class="col-4">
                <a href="/items/{{ $item->id }}">Edit</a>
            </div>
        </div>
    @endforeach
@endsection