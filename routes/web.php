<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controlviews;
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

Route::get('articulos', [controlviews::class, 'verArts'])->name('arts');
Route::get('promo', [controlviews::class,'verPromos'])->name('promo');
Route::get('reseñas', [controlviews::class,'verReseñas'])->name('reseñas');

Route::post('enviarReseña', [controlviews::class, 'recibeReseña'])->name('GuardarReseña');