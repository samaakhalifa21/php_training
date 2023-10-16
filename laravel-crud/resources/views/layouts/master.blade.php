<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    
    @include('includes.navbar')
    @section('main')
    @show
    @include('includes.footer')
</body>
</html>