<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleCadena extends Model
{
    use HasFactory;
    protected $table = 'detalle_cadenas';
    protected $fillable = [
        'id_cadena',
        'id_coro',
        'numero'
    ];
}
