<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preguntas_Detalle_Guia extends Model
{
    use HasFactory;
    protected $table = "PREGUNTAS_DETALLE_GUIAS";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';
}
