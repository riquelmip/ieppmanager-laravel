<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadena extends Model
{
    use HasFactory;
    protected $table = 'cadenas';
    protected $fillable = [
        'tipo_cadena',
        'nombre',
        'nota',
        'id_usuario',
        'estado',
    ];
}
