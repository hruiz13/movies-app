@extends('layouts.plantilla')

@section('title', 'Add Movie')    

@section('content')
     <h1>Add movie</h1>
     <form action="{{route('movies.store')}}" method="POST">
          @csrf
          <label>
               Title:
               <input type="text" name="title">
          </label>
          <label>
               Year:
               <input type="text" name="year">
          </label>
          <label>
               Type:
               <input type="text" name="type">
          </label>
          <label>
               Poster:
               <input type="text" name="poster">
          </label>
          <label>
               Runtime:
               <input type="text" name="runtime">
          </label>
          <label>
               Language:
               <input type="text" name="language">
          </label>
          <label>
               Actors:
               <input type="text" name="actors">
          </label>
          <label>
               Description:
               <textarea name="description"></textarea>
          </label>
          <button type="submit">Guardar</button>
          
     </form>
@endsection