@extends('layout')

@section('title')
    New Item Build Up
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <h1> New Item Build Up </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="{{ route('buildups.index')}}" method="POST" >
                @include('buildups.form')
                <div class="mb-3"></div>
                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
            </form>
            <div>
        </div>
    </div>
@endsection
