@extends('layouts.plantilla')

@section('title', 'Movies')    

@section('content')
     <div class="mt-5">
          <br>
          <h1 class="text-center text-pink-300 font-bold">Your watched movies</h1>
          <div class="m-5">
               <a href="{{route('movies.create')}}">
               <button type="button" class="py-2 px-4  bg-purple-600 hover:bg-purple-700 focus:ring-purple-600 focus:ring-offset-purple-300 text-white transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 ">
                    Add Movie
               </button>
               </a>
          </div>
          <ul class="list-disc list-inside ml-5">
               @foreach ($movies as $movie)
               <li>
                    <a href="{{route('movies.show',$movie)}}">{{$movie->title}}</a>
                    <br>
               </li>
               @endforeach
          </ul>
          {{$movies->links()}}
     </div>
@endsection