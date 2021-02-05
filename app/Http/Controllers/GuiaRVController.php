<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Referencia_Guia;
use App\Models\Civil_Estado;
use Carbon\Carbon;

use Illuminate\Http\Request;

class GuiaRVController extends Controller
{
    public function index()
    {
        $empleados = Empleado::All();
        $lguia = Referencia_Guia::all();

        return view('Rhumanos/guiaVindex', compact('empleados','lguia'));
    }

    public function create()
    {

    }

    public function show($ID_EMPLEADO)
    {

        $empleados = Empleado::where('ID_EMPLEADO', '=', $ID_EMPLEADO)->get();
        $lguia = Referencia_Guia::all();
        $cEstados = Civil_Estado::all();
        $edades = Empleado::where('ID_EMPLEADO', '=', $ID_EMPLEADO)->first();

        $edad = \Carbon\Carbon::parse($edades->F_NACIMIENTO)->diffForHumans();

        if($edad >= 15 && $edad <= 19){
            $edad = 1;
        }elseif($edad >= 20 && $edad <= 24){
            $edad = 2;

        }elseif($edad >= 25 && $edad <= 29){
            $edad = 3;

        }elseif($edad >= 30 && $edad <= 34){
            $edad = 4;

        }elseif($edad >= 35 && $edad <= 39){
            $edad = 5;

        }
        elseif($edad >= 40 && $edad <= 44){
            $edad = 6;

        }elseif($edad >= 45 && $edad <= 49){
            $edad = 7;

        }
        elseif($edad >= 50 && $edad <= 54){
            $edad = 8;

        }elseif($edad >= 55 && $edad <= 59){
            $edad = 9;

        }
        elseif($edad >= 60 && $edad <= 64){
            $edad = 10;

        }elseif($edad >= 65 && $edad <= 69){
            $edad = 11;

        }
        else{
            $edad = 12;
        }
        return view('Rhumanos/guiaVdatos',  compact('empleados','lguia','cEstados','edad'));

    }
}
