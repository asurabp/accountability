<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-sacale=1">
    <title> @yield('title') </title>

    <link rel="shortcut icon" href="https://www.favicon-generator.org/download/2023-10-16/6ba95471d713bad854416dfcf5032ee7.ico" type="image/x-icon">
    <link rel="icon" href="https://www.favicon-generator.org/download/2023-10-16/6ba95471d713bad854416dfcf5032ee7.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" /> --}}
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.6/datatables.min.css" rel="stylesheet">

</head>
<body>

    @include('nav')
    <div class="mb-3"></div>
    <div class="container">
        @include('flash-message')
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    {{-- <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script> --}}
    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.6/datatables.min.js"></script>

    @yield('script')

</body>
</html>
