<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
    {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}
    <style>
        .active{
            color:red;
            font-weight: bold;
        }
    </style>
</head>
<body class="bg-blue-900">
    @include('layouts.partials.header')
    <div class="container bg-blue-600">
        @yield('content')
    </div>

    @include('layouts.partials.footer')
    
</body>
</html>