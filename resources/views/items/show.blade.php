@extends('layout')

@section('title', 'Details for')


@section('content')
    <h1> View </h1>
    <div class="row">
        <div class="col-12">

            <p><strong>Name</strong> {{ $item->name }} </p>
            <p><strong>Date Encoded</strong> {{ $item->created_at->format('M. d, Y') }}</p>

            <a href="{{ route('items.index') }}" class="btn btn-secondary">Back</a>
            <a class="btn btn-primary btn" href="/items/{{ $item->id }}/edit">Edit</a>
            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#employeeModal">Erase</button>

            <hr>
            <h2>Issued Items to Employee</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Date Issued</th>
                    </tr>
                </thead>1
                <tbody>
                    @foreach ($item->issuances as $issuance)
                        <tr>
                            <td>{{ $issuance->employee->name }}</td>
                            <td>{{ $issuance->created_at->format('M. d, Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
