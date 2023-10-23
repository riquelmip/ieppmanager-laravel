<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Directiva extends Model
{
    use HasFactory;
    protected $table = 'directiva';
    protected $fillable = [
        'nombre',
        'anio',
        'pastor',
        'id_tipo_directiva',
        'presidente',
        'vicepresidente',
        'secretario',
        'tesorero',
        'vocal1',
        'vocal2',
        'vocal3',
        'directiva_actual',
        'estado',
    ];
}
