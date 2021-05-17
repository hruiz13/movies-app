@extends('layouts.plantilla')

@section('title', 'Add Movie')    

@section('content')
     <h1 class="text-center text-pink-300 font-bold">Add movie</h1>
     <span id="search">sea</span>

     {{-- <form action="{{route('movies.store')}}" method="POST">
          @csrf
          <label>
               Title:
               <input type="text" name="title" value="{{old('title')}}">
          </label>
          @error('title')
               <br>
               <small>*{{$message}}</small>
               <br>              
          @enderror
          <label>
               Year:
               <input type="text" name="year" value="{{old('year')}}">
          </label>
          <label>
               Type:
               <input type="text" name="type" value="{{old('type')}}">
          </label>
          <label>
               Poster:
               <input type="text" name="poster" value="{{old('poster')}}">
          </label>
          <label>
               Runtime:
               <input type="text" name="runtime" value="{{old('runtime')}}">
          </label>
          <label>
               Language:
               <input type="text" name="language" value="{{old('language')}}">
          </label>
          <label>
               Actors:
               <input type="text" name="actors" value="{{old('actors')}}">
          </label>
          <label>
               Description:
               <textarea name="description"> {{old('description')}}</textarea>
          </label>
          <button type="submit">Guardar</button>
          
     </form> --}}
     <br>
@endsection