<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Alabanza;
use App\Models\Cadena;
use App\Models\DetalleCadena;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CadenaWebController extends Controller
{

    public function avivamiento()
    {
        try {
            $autores = Autor::inRandomOrder()->limit(10)->get();

            return view('content.cadenas-web.avivamiento', compact('autores'));
        } catch (Exception $e) {
            return view('content.error.404');
        }
    }

    public function adoracion()
    {
        try {
            $autores = Autor::inRandomOrder()->limit(10)->get();

            return view('content.cadenas-web.adoracion', compact('autores'));
        } catch (Exception $e) {
            return view('content.error.404');
        }
    }

    public function cargarTabla($tipo)
    {
        try {
            //HAGO EL SELECT A LA BASE DE DATOS PARA PODER MOSTRAR LOS REGISTROS
            $cadenas = Cadena::where('tipo_cadena', $tipo)->orderBy('id')->get(); //Solo los que son de avivamiento
            $tablaHTML = '';
            $contadorPagina = 1; // Inicializa un contador de página
            foreach ($cadenas as $cadena) {
                $btnVer = '';

                if ($tipo == 0) {
                    $btnVer .= '<a href="' . url("/public/cadenas/ver-cadena-avivamiento?page={$contadorPagina}") . '" class="btn btn-icon btn-primary"><i class="fa fa-eye"></i></a>';

                    $numLink = '<a href="' . url("/public/cadenas/ver-cadena-avivamiento?page={$contadorPagina}") . '">' . $contadorPagina . '</a>';

                    $nombreLink = '<a href="' . url("/public/cadenas/ver-cadena-avivamiento?page={$contadorPagina}") . '">' . $cadena['nombre'] . '</a>';
                } else if ($tipo == 1) {
                    $btnVer .= '<a href="' . url("/public/cadenas/ver-cadena-adoracion?page={$contadorPagina}") . '" class="btn btn-icon btn-primary"><i class="fa fa-eye"></i></a>';

                    $numLink = '<a href="' . url("/public/cadenas/ver-cadena-adoracion?page={$contadorPagina}") . '">' . $contadorPagina . '</a>';

                    $nombreLink = '<a href="' . url("/public/cadenas/ver-cadena-adoracion?page={$contadorPagina}") . '">' . $cadena['nombre'] . '</a>';
                }

                $tablaHTML .=  '<tr>' .
                    '<td>' .
                    $numLink .
                    '</td>' .
                    '<td>' .
                    $nombreLink .
                    '</td>' .
                    '<td class="text-center">' .
                    $btnVer .
                    '</td>' .
                    '</tr>';
                $contadorPagina++; // Incrementa el contador de página
            }

            return response()->json(
                [
                    'estado' => true,
                    'titulo' => 'Éxito',
                    'msg' => 'Datos obtenidos correctamente',
                    'datos' => $tablaHTML
                ]
            );
        } catch (Exception $e) {
            return response()->json(
                [
                    'estado' => false,
                    'titulo' => 'Error',
                    'msg' => 'Ocurrió un error al obtener la información',
                    'errors' => $e->getMessage()
                ]
            );
        }
    }

    public function verCadenaAvivamiento()
    {
        try {
            $cadenasPaginadas = Cadena::where('tipo_cadena', false)
                ->orderBy('id')
                ->paginate(1); // Paginar de 1 en 1 (una cadena por página)

            foreach ($cadenasPaginadas as $cadena) {
                $detalles = DetalleCadena::select(
                    'detalle_cadenas.id',
                    'detalle_cadenas.id_cadena',
                    'detalle_cadenas.numero',
                    'detalle_cadenas.id_coro',
                    'coros.tipo_coro',
                    'coros.id_autor',
                    'coros.nombre',
                    'coros.nota',
                    'coros.letra',
                    'autor.nombre AS nombre_autor'
                )
                    ->leftJoin('coros', 'detalle_cadenas.id_coro', '=', 'coros.id')
                    ->leftJoin('autor', 'coros.id_autor', '=', 'autor.id')
                    ->where('detalle_cadenas.id_cadena', $cadena->id)
                    ->get();

                // Agrega los detalles a la cadena actual
                $cadena->detalles = $detalles;
            }

            return view('content.cadenas-web.verAvivamiento', compact('cadenasPaginadas'));
        } catch (Exception $e) {
            return view('content.error.404');
        }
    }

    public function verCadenaAdoracion()
    {
        try {
            $cadenasPaginadas = Cadena::where('tipo_cadena', true)
                ->orderBy('id')
                ->paginate(1); // Paginar de 1 en 1 (una cadena por página)

            foreach ($cadenasPaginadas as $cadena) {
                $detalles = DetalleCadena::select(
                    'detalle_cadenas.id',
                    'detalle_cadenas.id_cadena',
                    'detalle_cadenas.numero',
                    'detalle_cadenas.id_coro',
                    'coros.tipo_coro',
                    'coros.id_autor',
                    'coros.nombre',
                    'coros.nota',
                    'coros.letra',
                    'autor.nombre AS nombre_autor'
                )
                    ->leftJoin('coros', 'detalle_cadenas.id_coro', '=', 'coros.id')
                    ->leftJoin('autor', 'coros.id_autor', '=', 'autor.id')
                    ->where('detalle_cadenas.id_cadena', $cadena->id)
                    ->get();

                // Agrega los detalles a la cadena actual
                $cadena->detalles = $detalles;
            }

            return view('content.cadenas-web.verAdoracion', compact('cadenasPaginadas'));
        } catch (Exception $e) {
            return view('content.error.404');
        }
    }
}
