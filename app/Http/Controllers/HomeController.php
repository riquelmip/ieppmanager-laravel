<?php

namespace App\Http\Controllers;

use App\Models\Alabanza;
use App\Models\Cadena;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function inicio()
    {
        $num_himnario = Alabanza::where('tipo_alabanza', false)->orderBy('numero_himnario')->count();
        $num_cancionero = Alabanza::where('tipo_alabanza', true)->orderBy('id')->count();
        $num_cadenas_avivamiento = Cadena::where('tipo_cadena', false)->count();
        $num_cadenas_adoracion = Cadena::where('tipo_cadena', true)->count();
        return view('inicio', compact('num_himnario', 'num_cancionero', 'num_cadenas_avivamiento', 'num_cadenas_adoracion'));
    }
}
