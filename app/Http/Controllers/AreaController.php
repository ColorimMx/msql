<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{

    public function index(){

        $areas = Area::all();
        return view('areas', compact('areas'));
    }

    public function create(){
        return "Crear un área";
    }

    public function show($area){
        return "Consultar el área de $area";
    }
}
