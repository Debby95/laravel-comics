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
    return view('home');
});

Route::get('/comics', function () {
    $comics = config("comic");
    return view("comics.index", [
        "comics" => $comics
    ]);
})->name("comics");

Route::get("/comics/{id}", function ($id) {
    $comics = config("comics");

    $foundComics = array_filter($comics, function ($comic) use ($id) {
        return $comic["id"] == intval($id);
    });

    //dump($foundComics);
    return view("comics", $foundComics);
});

