<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformationsController;
use App\Http\Controllers\PartenairesController;

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

Route::get('/', [InformationsController::class, 'accueil']);

Route::get('/footer', function () {
    return view('partials.footer');
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

Route::get('/galerie', function () {
    return view('galerie');
});

Route::get('/partenaires', function () {
    return view('partenaires');
});
Route::get('/contact', function () {
    return view('contact');
});


/*
|--------------------------------------------------------------------------
| Route pages administrations
|--------------------------------------------------------------------------
*/

Route::get('/admin/articles', function () {
    return view('admin/arcticles');
});

Route::get('/admin/modifierInfo', function () {
    return view('admin/modifier-information');
});

Route::get('/admin/ajouterPartenaire', function () {
    return view('admin/ajouter-partenaire');
});
Route::get('/admin/listerPartenaires', [PartenairesController::class, 'lister']);




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| Route Login | Register | Verify
|--------------------------------------------------------------------------
*/

Auth::routes();

