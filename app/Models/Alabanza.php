<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alabanza extends Model
{
    use HasFactory;
    protected $table = 'alabanzas';
    protected $fillable = [
        'tipo_alabanza',
        'numero_himnario',
        'nombre',
        'slug',
        'id_autor',
        'letra',
        'nota',
        'id_usuario',
        'estado',
    ];
}
