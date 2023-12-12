<?php

use App\Models\EmisionPA;
use App\Models\Page;
use Illuminate\Support\Facades\Route;

use App\Models\ProgramaAnalitico;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

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

Route::post('/programa-analitico/store', function(Request $request) {
    //Falta validación

    $pa = new ProgramaAnalitico();
    $pa->codigo = $request->input('codigo');
    $pa->materia = $request->input('materia');
    $pa->save();

    foreach($request->pages as $url) {
        $page = new Page();
        $page->programa_analitico_id = $pa->id;
        $page->url = $url;
        $page->save();
    }
    
    return redirect('/')
            ->with('status', '¡El programa analítico: "'.$pa->materia.'", se guardó con éxitoso!');

});

Route::post('/programa-analitico/pages', function(Request $request) {
    $input = $request->all();
    $rules = array(
        'file' => 'image|max:5000',
    );
    $messages = [
        'file.image' => 'Solo se permite imágenes jpg y png.',
        'file.max'   => "Tamaño máximo de archivo es 5MB."
    ];

    Validator::validate($input, $rules, $messages);

    $file = $request->file('file');
    $directory = 'pages';
    
    $path = Storage::disk('public')->put($directory, $file);

    return response()->json([
        'url' => "/storage/".$path,
    ]);

});

Route::get('/programa-analitico/emision', function(Request $request) {
    $emision_pa = new EmisionPA;
    $emision_pa->nombre_solicitante = $request->input('solicitante');
    $emision_pa->carrera_solicitante = $request->input('carrera_sol');
    $emision_pa->fecha_emision = Carbon::createFromFormat('d/m/Y', $request->input('fecha'));
    $emision_pa->programa_analitico_id = $request->input('programa_analitico_id');
    $emision_pa->save();

    $date = $emision_pa->fecha_emision;

    $data = [
        'solicitante' => $emision_pa->nombre_solicitante,
        'materia'     => $emision_pa->programa_analitico->materia,
        'codigo'      => $emision_pa->programa_analitico->codigo,
        'fecha'       => $date->day." de ".$date->monthName." de ".$date->year,
        'pages'       => $emision_pa->programa_analitico->pages,
        'n_pages'     => $emision_pa->programa_analitico->pages->count(),
        'carrera_sol' => $emision_pa->carrera_solicitante,
    ];

    $pdf = Pdf::loadView('doc-pdf-pa', $data)->setPaper('letter');
    return $pdf->stream($data['solicitante']."_".$data['materia']."_".$date->toDateString().'.pdf');

    // return redirect('/')->with('status', '¡Emisión del programa analítico exitoso!');
});
