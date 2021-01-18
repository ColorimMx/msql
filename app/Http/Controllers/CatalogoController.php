<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    public function index(){
        $catalogos = Catalogo::all();
        return view('', compact('catalogos'));

    }

    public function create(){

    }

    public function show(){

    }
}
