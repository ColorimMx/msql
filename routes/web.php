<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AreaController;
use \App\Http\Controllers\EmpleadoController;
use \App\Http\Controllers\GuiaController;
use \App\Http\Controllers\Nom35Controller;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\GuiaRVController;

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

/*Route::get('/', function () {
    return view('home');
});*/
Route::get('/',[HomeController::class, 'index']);
Route::get('guias',[GuiaController::class, 'index']);
Route::get('nom35',[Nom35Controller::class, 'home']);
Route::get('cues1',[GuiaController::class, 'gric1',]);
Route::get('cues2',[GuiaController::class, 'gric2',]);
Route::get('cues3',[GuiaController::class, 'gric3',]);
/*Route::get('nom35', function () {
    return view('Rhumanos/nom35');
});*/

Route::get('guia2', function () {
    return view('Rhumanos/guiaR2');
});
Route::get('guia3', function () {
    return view('Rhumanos/guiaR3');
});
Route::get('guia4', function () {
    return view('Rhumanos/guiaR4');
});

//Cuestionarios


//Areas
Route::get('areas',[AreaController::class, 'index']);
Route::get('area/create',[AreaController::class, 'create']);
Route::get('area/{area}',[AreaController::class,'show']);


//Empleados

Route::get('empleados',[EmpleadoController::class, 'index']);
Route::get('empleado/create',[EmpleadoController::class, 'create']);
Route::get('empleado/{empleado}',[EmpleadoController::class,'show']);

//Guia de Referencias

//Guia de Referencia I
Route::get('guia1', function () {
    return view('Rhumanos/guiaR1');
});

Route::post('guiaI/create/{empleado}',[GuiaController::class,'storeGrI'])->name('guiaref1.storeGrI');

//Guia de Referencia II

//Guia de Referencia III

//Guia de Referencia IV

//Guia de Referencia V

Route::get('guia5', function () {
    return view('Rhumanos/guiaR5');
});
Route::get('guia5/datos',[GuiaRVController::class, 'index'])->name('guiaV.index');
Route::get('guia5/create',[GuiaRVController::class, 'create'])->name('guiaV.create');
Route::get('guia5/{empleado}',[GuiaRVController::class,'show'])->name('guiaV.show');

