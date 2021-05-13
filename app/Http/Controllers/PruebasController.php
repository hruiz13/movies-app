<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Movies;

class PruebasController extends Controller
{
    //
    // public function testOrm{

    //     $movies = Movies::all();
    //     var_dump($movies)

    //     die();
    // }

    public function index()
    {
        $movies = Movie::orderBy('id', 'desc')->paginate();
        return view('movies.index', compact('movies'));
    }

    public function create()
    {
        //$movies = Movie::paginate();
        return view('movies.create');
    }

    public function store(Request $request)
    {
        $movie = new Movie();
        $movie->title = $request->title;
        $movie->year = $request->year;
        $movie->type = $request->type;
        $movie->poster = $request->poster;
        $movie->runtime = $request->runtime;
        $movie->language = $request->language;
        $movie->actors = $request->actors;
        $movie->description = $request->description;
        $movie->save();

        return redirect()->route('movies.show', $movie->id);
    }

    public function show($movie)
    {
        $mov = Movie::find($movie);
        return view('movies.show', compact('mov'));
    }



    //Route default
    // public function __invoke(){
    //     return 'Bienvenidos aca !';
    // }
}
