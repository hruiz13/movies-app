<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PruebasController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
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
    return view('home');
})->name('home');

/*
Route::get('movies', [PruebasController::class, 'index'])->name('movies.index');
Route::get('movies/create', [PruebasController::class, 'create'])->name('movies.create');
Route::post('movies', [PruebasController::class, 'store'])->name('movies.store');
Route::get('movies/{movie}', [PruebasController::class, 'show'])->name('movies.show');
Route::get('movies/{movie}/edit', [PruebasController::class, 'edit'])->name('movies.edit');
Route::put('movies/{movie}', [PruebasController::class, 'update'])->name('movies.update');
Route::delete('movies/{movie}', [PruebasController::class, 'destroy'])->name('movies.destroy');
*/
//reducing methods
Route::resource('movies', PruebasController::class);

Route::view('about', 'about')->name('about');

Route::get('contactanos', function () {
    $correo = new ContactanosMailable;
    Mail::to('hruiz13@hotmail.com')->send($correo);
    return 'Mensaje enviado.';
});
