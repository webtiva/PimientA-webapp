<?php

use Illuminate\Support\Facades\Route;

use App\Models\ProgramaAnalitico;

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
    $programas_analiticos = ProgramaAnalitico::all();
    return view('seeker', compact('programas_analiticos'));
});

Route::get('programa-analitico', function() {
    $programas_analiticos = ProgramaAnalitico::all();
    return view('programas-analiticos.list', 
                 compact('programas_analiticos'));
});

Route::get('programa-analitico/create', function() {
    return view('programas-analiticos.create');
});