<?php

use Illuminate\Support\Facades\Route;

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
    return redirect('/refacciones');
});

Route::resource('refacciones', 'RefaccionController');
Route::post('refacciones/actualiza', 'RefaccionController@update');
Route::get('refacciones/elimina/{id}', 'RefaccionController@destroy');
