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
<body class="bg-gray-700">
    
    @include('layouts.partials.header')
    
    <div class="container bg-gray-600 mt-5">
        @yield('content')
    </div>

    @include('layouts.partials.footer')
</body>
<script src="{{ asset('js/app.js') }}" defer></script>
</html>