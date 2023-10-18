@extends('layout')
@section('title')
    Edit Issuance
@endsection

@section('content')
    <h1>Edit</h1>
    <div class="mb-3"></div>
    <form action="{{ route('issuances.update', ['issuance' => $issuance])}}" method="POST" enctype="multipart/form-data">
        @method('patch')
        @include('issuances.form')
        <div class="mb-3"></div>
        <a href="{{ route('issuances.index') }}" class="btn btn-secondary">Cancel</a>
        <button type="submit" class="btn btn-primary">Update</button>

    </form>
@endsection

