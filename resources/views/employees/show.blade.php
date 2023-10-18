@extends('layout')
@section('title', 'Details for ' . $employee->name)
@section('content')
    <div class="row">
        <div class="col-12">
            <h1> View</h1>


            <!-- Modal -->
            <div class="modal fade" id="employeeModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="employeeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="employeeModalLabel">Delete {{ $employee->name }} ?</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <!-- Body -->
                        <div class="modal-body">
                            Do you want to continue?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <form action="/employees/{{ $employee->id }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p><strong>Name</strong> {{ $employee->name }} </p>
            <p><strong>Email</strong> {{ $employee->email }}</p>
            <p><strong>Status</strong> {{ $employee->active }}</p>

            <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back</a>
            <a class="btn btn-primary btn" href="/employees/{{ $employee->id }}/edit">Edit</a>
            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#employeeModal">Erase</button>

            <hr>
            <h2>Issued Items</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Date Issued</th>
                        <th>Remarks</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employee->issuances as $issuance)
                        <tr>
                            <td>{{ $issuance->item->name }}</td>
                            <td>{{ $issuance->created_at->format('M. d, Y') }}</td>
                            <td>{{ $issuance->remark }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection


