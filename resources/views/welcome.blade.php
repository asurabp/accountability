@extends('layout')
@section('title')
    Testing Hello World
@endsection
@section('content')
<html>
    <head>
        <title>Welcome to my website</title>
    </head>
    <body>
        <h1>Hello, Laravel!</h1>

        @guest
            Welcome Guest!
        @else
            Welcome {{ Auth::user()->name }}
        @endguest
    </body>
</html>
@endsection
