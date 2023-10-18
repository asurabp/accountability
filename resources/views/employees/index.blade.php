@extends('layout')
@section('title')
    Employee
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <h1> Employees </h1>
            <p><a class="btn btn-success btn-sm" href="employees/create">Add New Employee</a></p>
        </div>
    </div>

    <table id="employeeTable" class="display table table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Employee</th>
                <th scope="col">Email Address</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th> <!-- Edit Button -->
            </tr>
        </thead>

        <tbody>
        @foreach($employees as $employee)
            <tr>
                <td scope="col">{{ $employee->id }}</th>
                <td scope="col">{{ $employee->name }}</th>
                <td scope="col">{{ $employee->email }}</th>
                <td scope="col">{{ $employee->active }}</th>
                <td scope="col">
                    <a class="btn btn-success btn-sm" href="/employees/{{ $employee->id }}">View</a>
                    <a class="btn btn-primary btn-sm" href="{{ route('employees.edit', ['employee' => $employee->id]) }}">Edit</a>
                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#employeeModal{{ $employee->id }}">Delete</button> <!-- Button -->
                </td>

                <!-- Delete Modal -->
                <div class="modal fade" id="employeeModal{{ $employee->id }}" tabindex="-1" aria-labelledby="employeeModalLabel{{ $employee->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="employeeModalLabel{{ $employee->id }}">Delete {{ $employee->name }}?</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Do you want to delete the employee?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <form action="/employees/{{ $employee->id }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Delete Modal -->
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection

@section('script')
    <script>
        new DataTable('#employeeTable');
    </script>
@endsection
