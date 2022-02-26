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
    return view('pages.welcome');
})->name('home');

Route::get('/outil/{id}', function ($id) {
    return view('pages.outils', ['ido' => $id]);
})->name('outil');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/offre', function () {
    return view('pages.offres');
})->name('offre');

Route::get('/projet/{id}', function ($id) {
    return view('pages.projets', ['idp' => $id]);
})->name('projet');


Route::get('/detail-actu/{id}', function ($id) {
    return view('pages.d-actu', ['ida'=>$id]);
})->name('dact');

Route::get('/detail-apropos', function () {
    return view('pages.d-apropos');
})->name('dap');

Route::get('/type-part/{type}', function ($type) {
    return view('pages.partenaire', ['type' => $type]);
})->name('ty_part');

Route::get('/media/{type}', function ($type) {
    return view('pages.media', ['type'=>$type]);
})->name('media');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
