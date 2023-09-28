@extends('layout')

@section('title', 'Details for') 
    

@section('content')
    <div class="row">
        <div class="col-12">
            <h1> {{ $item->name }}</h1>
            <p><a href="/items/{{ $item->id }}/edit">Edit</a></p>
            
            <form action="/itemss/{{ $item->id }}" method="POST">
                @method('DELETE')
                @csrf

                <button class="btn btn-danger" type="submit">Erase</button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p><strong>Name</strong> {{ $item->name }} </p>
        </div>
    </div>
@endsection