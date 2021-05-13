@extends('layouts.plantilla')

@section('title', 'Movies')    

@section('content')
     <h1>Your movies</h1>
     <a href="{{route('movies.create')}}">Add Movie</a>
     <ul>
          @foreach ($movies as $movie)
              <li>
                   <a href="{{route('movies.show',$movie->id)}}">{{$movie->title}}</a>
                   
              </li>
          @endforeach
     </ul>
     {{$movies->links()}}
@endsection