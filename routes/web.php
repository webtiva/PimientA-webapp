<?php

use App\Models\EmisionPA;
use Illuminate\Support\Facades\Route;

use App\Models\ProgramaAnalitico;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

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

Route::post('/programa-analitico/emision', function(Request $request) {
    $emision_pa = new EmisionPA;
    $emision_pa->nombre_solicitante = $request->input('solicitante');
    $emision_pa->fecha_emision = Carbon::create($request->input('fecha'));
    $emision_pa->programa_analitico_id = $request->input('programa_analitico_id');
    $emision_pa->save();
    return redirect('/')->with('status', '¡Emisión del programa analítico exitoso!');
});