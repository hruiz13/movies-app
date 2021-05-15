@extends('layouts.plantilla')

@section('title', 'Home')    

@section('content')
    <div class="m-6">

        <h1>Welcome to movies page</h1>
        <h2>My last viewed movies!</h2>
        <div class="grid md:grid-cols-4 sm:grid-cols-2 gap-4">
            <div class="bg-blue-300 col-span-2">A</div>
            <div class="bg-blue-300">B</div>
            <div class="bg-blue-300">C</div>
            <div class="bg-blue-300">D</div>
            <div class="bg-blue-300">E</div>
            <div class="bg-blue-300">F</div>
            <div class="bg-blue-300">G</div>
        </div>
        
    </div>

@endsection