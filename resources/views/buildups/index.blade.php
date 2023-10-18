@extends('layout')
@section('title')
    Item Build Up
@endsection
@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Item Build Up</h1>
        </div>
    </div>

    <p><a class="btn btn-primary btn-sm" href="buildups/create">Add New Item Build Up</a></p>

    <table id="buildUpTable" class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Item Code</th>
                <th scope="col">Description</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="col">1</td>
                <td scope="col">2004102922200103000000</td>
                <td scope="col">THHN/THWN 600MCM TYPE-UL WP- GN</td>
                <td scope="col">Encoded</td>
                <td scope="col">
                    <a class="btn btn-primary btn-sm" href="">View daw</a>
                    <button type="button" class="btn btn-outline-primary btn-sm">Edit daw</button>
                    <button type="button" class="btn btn-outline-danger btn-sm">Delete daw</button>
                </td>
            </tr>
        </tbody>
    </table>

    @section('script')
        <script>
            new DataTable('#buildUpTable');
        </script>
    @endsection
@endsection
