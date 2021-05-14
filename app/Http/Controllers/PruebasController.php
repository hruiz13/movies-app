<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovie;
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
        return view('movies.create');
    }

    public function store(StoreMovie $request)
    {
        //validation
        //se pasa al make:request
        // $request->validate([
        //     'title' => 'required' //'required|min:5'
        // ]);

        /*
        //saving db Option 1
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
        */

        /*
        //saving db Option 2
        $movie = Movie::create([
            'title'=> $request->title,
            'year'=> $request->year,
            'type'=> $request->type,
            'poster'=> $request->poster,
            'runtime'=> $request->runtime,
            'language'=> $request->language,
            'actors'=> $request->actors,
            'description'=> $request->description
        ]);
        */

        //saving db option 2 resume but not secure
        $movie = Movie::create($request->all());

        return redirect()->route('movies.show', $movie->id);
    }

    public function show(Movie $movie)
    {
        //$movie = Movie::find($movie);
        return view('movies.show', compact('movie'));
    }

    public function edit(Movie $movie)
    {
        return view('movies.edit', compact('movie'));
    }

    public function update(Request $request, Movie $movie)
    {
        //validation
        $request->validate([
            'title' => 'required'
        ]);
        //update db
        $movie->title = $request->title;
        $movie->year = $request->year;
        $movie->type = $request->type;
        $movie->poster = $request->poster;
        $movie->runtime = $request->runtime;
        $movie->language = $request->language;
        $movie->actors = $request->actors;
        $movie->description = $request->description;
        $movie->save();
        return view('movies.show', compact('movie'));
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movies.index');
    }



    //Route default
    // public function __invoke(){
    //     return 'Bienvenidos aca !';
    // }
}
