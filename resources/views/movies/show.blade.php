@extends('layouts.plantilla')

@section('title', 'Movie details '.$movie->title)    

@section('content')
     <h1>Movie title</h1>
     <a href="{{route('movies.index')}}">Back to Movies</a>
     <br>
     <a href="{{route('movies.edit',$movie)}}">Edit Movie</a>
     <h3>{{$movie}}</h3>

     <form action="{{route('movies.destroy',$movie)}}" method="POST">
          @csrf
          @method('delete')
          <button type="submit">Delete</button>
     </form>
    
@endsection