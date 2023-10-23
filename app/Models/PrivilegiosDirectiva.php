<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrivilegiosDirectiva extends Model
{
    use HasFactory;
    protected $table = 'privilegios_directivas';
    protected $fillable = [
        'dia',
        'fecha',
        'id_directiva',
        'inicio',
        'alabanzas',
        'coros',
        'presentacion',
        'ofrenda',
        'talento',
        'alabanza_especial',
        'adoracion',
        'mensaje',
        'aseo',
        'anuncios',
    ];
}
