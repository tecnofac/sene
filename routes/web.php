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

Route::get('/outil', function () {
    return view('pages.outils');
})->name('outil');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/offre', function () {
    return view('pages.offres');
})->name('offre');

Route::get('/projet', function () {
    return view('pages.projets');
})->name('projet');


Route::get('/detail-actu', function () {
    return view('pages.d-actu');
})->name('dact');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
