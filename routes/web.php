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

/*
|--------------------------------------------------------------------------
| Route TEST
|--------------------------------------------------------------------------
*/

Route::get('/welcome', function () {
    return view('welcome');
});



/*
|--------------------------------------------------------------------------
| Route pages principales
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('accueil');
});

Route::get('/aPropos', function () {
    return view('aPropos');
});

Route::get('/activites', function () {
    return view('activites');
});

Route::get('/exposants', function () {
    return view('exposants');
});

Route::get('/horaire', function () {
    return view('horaire');
});

Route::get('/horaire', function () {
    return view('horaire');
});

Route::get('/gallerie', function () {
    return view('gallerie');
});

Route::get('/partenaires', function () {
    return view('partenaires');
});
Route::get('/contact', function () {
    return view('contact');
});