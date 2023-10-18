@extends('layout')
@section('title')
    Issuances
@endsection

@section('content')
    <div class="row">
        <div class="col-6">
            <h1>Issuance</h1>
            <a class="btn btn-success btn-sm mb-3" href="/issuances/create">Add New Issuance</a>
        </div>
    </div>

    <table id="issuanceTable" class="display table table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Qty</th>
                <th scope="col">Item</th>
                <th scope="col">Amount</th>
                <th scope="col">Employee</th>
                <th scope="col">Date Issued</th>
                <th scope="col">Remarks</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($issuances as $issuance)
                <tr>
                    <td scope="col">{{ $issuance->id }}</td>
                    <td scope="col">{{ $issuance->quantity }}</td>
                    <td scope="col">{{ $issuance->item->name ?? '' }}</td>
                    <td scope="col">{{ $issuance->amount }}</td>
                    <td scope="col">{{ $issuance->employee->name ?? '' }}</td>
                    <td scope="col">{{ $issuance->created_at->format('M. d, Y') }}</td>
                    <td scope="col">{{ $issuance->remark }}</td>
                    {{-- <td scope="col">{{ $issuance->status }}</td> --}}
                    <td scope="col">Random stuff</td>
                    <td scope="col">
                        <a class="btn btn-success btn-sm" href="/issuances/{{ $issuance->id }}">View</a>
                        {{-- <a class="btn btn-primary btn-sm" href="/issuances/{{ $issuance->id }}">Edit</a> --}}
                        <a href="{{ route('issuances.edit', ['issuance' => $issuance->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#issuanceModal{{ $issuance->id }}">Delete</button>
                    </td>
                    <!-- Start Modal -->
                    <div class="modal fade" id="issuanceModal{{ $issuance->id }}" tabindex="-1" aria-labelledby="issuanceModalLabel{{ $issuance->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="issuanceModalLabel{{ $issuance->id }}">Delete ?</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Do you want to delete the item?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <form action="/issuances/{{ $issuance->id }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Modal -->
                </tr>
            @endforeach
        </tbody>
    </table>

    @section('script')
        <script>
            new DataTable('#issuanceTable');
        </script>
    @endsection
@endsection
