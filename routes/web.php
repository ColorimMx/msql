<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AreaController;
use \App\Http\Controllers\EmpleadoController;
use \App\Http\Controllers\GuiaController;
use \App\Http\Controllers\Nom35Controller;
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
    return view('home');
});
Route::get('guias',[GuiaController::class, 'index']);
Route::get('nom35',[Nom35Controller::class, 'home']);
Route::get('cues1',[GuiaController::class, 'gric1',]);
Route::get('cues2',[GuiaController::class, 'gric2',]);
/*Route::get('nom35', function () {
    return view('Rhumanos/nom35');
});*/
Route::get('guiaref1', function () {
    return view('Rhumanos/guiaR1');
});
Route::get('guiaref2', function () {
    return view('Rhumanos/guiaR2');
});
Route::get('guiaref3', function () {
    return view('Rhumanos/guiaR3');
});
Route::get('guiaref4', function () {
    return view('Rhumanos/guiaR4');
});
Route::get('guiaref5', function () {
    return view('Rhumanos/guiaR5');
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
