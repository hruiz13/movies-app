<?php

namespace App\Http\Controllers;

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
        return view('movies.index');
    }

    //Route default
    // public function __invoke(){
    //     return 'Bienvenidos aca !';
    // }
}
