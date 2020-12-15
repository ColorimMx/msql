<?php

namespace App\Http\Controllers;
use App\Models\Referencia_Guia;

use Illuminate\Http\Request;

class Nom35Controller extends Controller
{
    //
    public function home(){
        $lguia = Referencia_Guia::all();
        return view('Rhumanos/nom35', compact('lguia'));
    }

}
