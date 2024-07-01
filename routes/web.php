<?php

use App\Http\Controllers\CondonacionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormularioController;

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
    return view('home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('formulario', [FormularioController::class, 'store'])->name('formulario.store');

Route::resource('solicitudes', FormularioController::class)
->middleware('auth.admin');

//Route::get('seguimiento', FormularioController::class,'')
//->middleware('auth.admin');

Route::get('/mostrar/{id}',[App\Http\Controllers\FormularioController::class, 'show'])
->middleware('auth.admin');

Route::get('seguimiento',[FormularioController::class,'SeguimientoSolicitudes'])
->middleware('auth.admin');


//rutas para aceptar y rechazar solicitudes
Route::get('/aceptar_solicitud/{id}/{correo}',[FormularioController::class,'aceptar_solicitud']);
Route::get('/rechazar_solicitud/{id}/{correo}',[FormularioController::class,'rechazar_solicitud']);

//rutas para descargar los datos tipo excel
Route::get('descargarexcel',[FormularioController::class,'descargarexcel']);
Route::get('DescargarExcelSeguimiento',[FormularioController::class,'DescargarExcelSeguimiento']);

Route::get('/mostrar/{id}',[App\Http\Controllers\FormularioController::class, 'show'])->name('mostrar');
Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'show'])->name('welcome');

//condonacion
Route::get('condonaciones', [App\Http\Controllers\HomeController::class, 'condonaciones'])->name('home-condonacion');
Route::post('condonaciones-guardar', [CondonacionController::class, 'store'])->name('condonaciones.store');

Route::resource('condonaciones-enviadas', CondonacionController::class)
->middleware('auth.admin');

Route::get('/mostrar-condonaciones/{id}',[App\Http\Controllers\CondonacionController::class, 'show'])
->middleware('auth.admin');

Route::get('seguimiento-condonaciones',[CondonacionController::class,'SeguimientoSolicitudes'])
->middleware('auth.admin');

Route::get('/aceptar_solicitud/{id}',[CondonacionController::class,'aceptar_solicitud']);
Route::get('/rechazar_solicitud/{id}',[CondonacionController::class,'rechazar_solicitud']);

Route::get('descargarexcel',[CondonacionController::class,'descargarexcel']);
Route::get('DescargarExcelSeguimiento',[CondonacionController::class,'DescargarExcelSeguimiento']);







