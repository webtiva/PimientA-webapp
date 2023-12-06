<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('seeker');
});

Route::get('programa-analitico', function() {
    return view('programas-analiticos.list');
});

Route::get('programa-analitico/create', function() {
    return view('programas-analiticos.create');
});