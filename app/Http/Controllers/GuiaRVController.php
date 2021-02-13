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
        $antiguedad = \Carbon\Carbon::parse($edades->F_INGRESO)->diffForHumans();

        if($antiguedad < 1 ){
            $antiguedad = 1;

        }elseif($antiguedad == 1 ){
            $antiguedad = 2;

        }elseif($antiguedad > 1 && $antiguedad <= 4){
            $antiguedad = 3;

        }elseif($antiguedad >= 5 && $antiguedad <= 9){
            $antiguedad = 4;

        }elseif($antiguedad >= 10 && $antiguedad <= 14){
            $antiguedad = 5;

        }
        elseif($antiguedad >= 15 && $antiguedad <= 19){
            $antiguedad = 6;

        }elseif($antiguedad >= 20 && $antiguedad <= 24){
            $antiguedad = 7;

        }else{
            $antiguedad = 8;
        }
        return view('Rhumanos/guiaVdatos',  compact('empleados','lguia','cEstados','edad','antiguedad'));

    }
}
