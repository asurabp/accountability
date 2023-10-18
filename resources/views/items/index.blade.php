@extends('layout')
@section('title')
    Items
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <h1> Items </h1>
            <!--<p><a href="/items/create">Add New Item</a></p> -->
            <a class="btn btn-success btn-sm mb-3" href="/items/create">Add New Item</a>
            <br>
        </div>
    </div>

    <table id="itemTable" class="display table table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Item</th>
                <th scope="col">Encoded</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <tbody>
        @foreach($items as $item)
            <tr>
                <td scope="col"> {{ $item->id }}</td> <!-- Display ID Temporary -->
                <td scope="col"> {{ $item->name }}</td> <!-- Display Item -->
                <td scope="col"> {{ $item->created_at->format('M. d, Y'); }}</td> <!-- Display Item -->
                <td scope="col">
                    <a class="btn btn-success btn-sm" href='/items/{{ $item->id }}'>View</a>
                    <a class="btn btn-primary btn-sm" href="/items/{{ $item->id }}/edit">Edit</a>
                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#itemModal{{ $item->id }}">Delete</button> <!-- Button -->
                </td>

                <!-- Start Modal -->
                <div class="modal fade" id="itemModal{{ $item->id }}" tabindex="-1" aria-labelledby="itemModalLabel{{ $item->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="itemModalLabel{{ $item->id }}">Delete {{ $item->name }}?</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Do you want to delete the item?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <form action="/items/{{ $item->id }}" method="POST">
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
            new DataTable('#itemTable');
        </script>
    @endsection
@endsection
