@extends('layout')
@section('title')
    Issuances
@endsection

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <h3>Issuance Details</h3>
                <p><strong>Quantity:</strong> {{ $issuance->quantity }}</p>
                <p><strong>Item Name:</strong> {{ $issuance->item->name ?? 'Error Here' }}</p>
                <p><strong>Amount:</strong> {{ $issuance->amount }}</p>
                <p><strong>Employee Name:</strong> {{ $issuance->employee->name ?? 'Error Here' }}</p>
                <p><strong>Issuance Date:</strong> {{ $issuance->created_at->format('M. d, Y - h:i A') }}</p>
                <p><strong>Remark:</strong> {{ $issuance->remark }}</p>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-auto">
                <a href="{{ route('issuances.index') }}" class="btn btn-secondary d-inline">Back</a>
                <a href="/issuances/{{ $issuance->id }}/edit" class="btn btn-primary d-inline">Edit</a>
                <form action="{{ route('issuances.destroy', ['issuance' => $issuance->id]) }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </div>
        </div>

</div>









@endsection

