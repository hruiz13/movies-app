<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PruebasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('movies', [PruebasController::class, 'index'])->name('movies.index');
Route::get('movies/create', [PruebasController::class, 'create'])->name('movies.create');
Route::post('movies/create', [PruebasController::class, 'store'])->name('movies.store');
Route::get('movies/{movie}', [PruebasController::class, 'show'])->name('movies.show');

// Route::get('/', function(){
//     // $movie = App\Movies::findOrFail(1);
//     // return $movie;
//     $user = App\Movies::findOrFail(1);
//     return $user;
// });
