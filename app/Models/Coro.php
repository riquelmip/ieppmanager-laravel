<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coro extends Model
{
    use HasFactory;
    protected $table = 'coros';
    protected $fillable = [
        'tipo_coro',
        'nombre',
        'id_autor',
        'letra',
        'nota',
        'estado',
    ];
}