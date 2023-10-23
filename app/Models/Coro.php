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
        'slug',
        'id_autor',
        'letra',
        'nota',
        'estado',
        'tipo_video',
        'url_video',
    ];
}
