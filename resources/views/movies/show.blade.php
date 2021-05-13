@extends('layouts.plantilla')

@section('title', 'Movie details '.$mov->title)    

@section('content')
     <h1>Movie title</h1>
     <a href="{{route('movies.index')}}">Back to Movies</a>
     <h3>{{$mov}}</h3>
    
@endsection