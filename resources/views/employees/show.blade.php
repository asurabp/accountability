@extends('layout')

@section('title', 'Details for ' . $employee->name) 
    

@section('content')
    <div class="row">
        <div class="col-12">
            <h1> {{ $employee->name }}</h1>
            <p><a href="/employees/{{ $employee->id }}/edit">Edit</a></p>
            
            <form action="/employees/{{ $employee->id }}" method="POST">
                @method('DELETE')
                @csrf

                <button class="btn btn-danger" type="submit">Erase</button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p><strong>Name</strong> {{ $employee->name }} </p>
            <p><strong>Email</strong> {{ $employee->email }}</p>
            <p><strong>Item Issued</strong> {{ $employee->item->name }}</p> 
        </div>
    </div>
@endsection