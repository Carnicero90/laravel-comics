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
    $data = ['comics' => config('comics')];
    return view('home', $data);
})->name('home');

Route::get('comic/{id}', function ($id) {
    $comic_index = array_search($id, array_column(config('comics'), "id"));
    if ($comic_index === false) {
        return 'errore!';
    }
    $data = ['comic_details' => config('comics')[$comic_index]];
    return view('comic', $data);
})->name('comic');

Route::get('movies', function () {
    return view('movies');
})->name('movies');
