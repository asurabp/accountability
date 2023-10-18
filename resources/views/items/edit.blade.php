@extends('layout')

@section('title', 'Edit')
@section('content')
    <div class="row">
        <div class="col-12">
            <h1> Edit</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-10">
            <form action="{{ route('items.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                @include('items.form')
                <div class="mb-3"></div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <div>
        </div>
    </div>
@endsection
