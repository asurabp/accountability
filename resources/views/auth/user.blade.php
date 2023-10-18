@extends('layout')
@section('title')
    User
@endsection

@section('content')
    <table id="itemTable" class="display table table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email Address</th>
            </tr>
        </thead>

        <tbody>

                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email}}</td>
                </tr>
                @endforeach
        </tbody>
@endsection
