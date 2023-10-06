<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Predica extends Model
{
    use HasFactory;
    protected $table = 'predicas';
    protected $fillable = [
        'nombre',
        'descripcion_corta',
        'descripcion_larga',
        'id_usuario',
        'estado',
    ];
}
