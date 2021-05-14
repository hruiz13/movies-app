@extends('layouts.plantilla')

@section('title', 'Edit Movie')    

@section('content')
     <h1>Edit movie</h1>
     <form action="{{route('movies.update',$movie)}}" method="POST">
          @csrf
          @method('put')
          <label>
               Title:
               <input type="text" name="title" value={{old('title',$movie->title)}}>
          </label>
          @error('title')
               <br>
               <small>*{{$message}}</small>
               <br>              
          @enderror
          <label>
               Year:
               <input type="text" name="year" value={{old('year',$movie->year)}}>
          </label>
          <label>
               Type:
               <input type="text" name="type" value={{old('type',$movie->type)}}>
          </label>
          <label>
               Poster:
               <input type="text" name="poster" value={{old('poster',$movie->poster)}}>
          </label>
          <label>
               Runtime:
               <input type="text" name="runtime" value={{old('runtime',$movie->runtime)}}>
          </label>
          <label>
               Language:
               <input type="text" name="language" value={{old('language',$movie->language)}}>
          </label>
          <label>
               Actors:
               <input type="text" name="actors" value={{old('actors',$movie->actors)}}>
          </label>
          <label>
               Description:
               <textarea name="description">{{old('description',$movie->description)}}</textarea>
          </label>
          <button type="submit">Update movie</button>
          
     </form>
@endsection