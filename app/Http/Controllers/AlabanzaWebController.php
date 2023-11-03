<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Alabanza;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AlabanzaWebController extends Controller
{

    /* ---------------------------------------------------------------------------
                            PARA EL HIMNARIO
    ----------------------------------------------------------------------------*/

    public function himnario()
    {
        try {
            $autores = Autor::inRandomOrder()->limit(10)->get();

            return view('content.alabanzas-web.himnario', compact('autores'));
        } catch (Exception $e) {
            return view('content.error.404');
        }
    }

    /* ---------------------------------------------------------------------------
                            PARA EL CANCIONERO
    ----------------------------------------------------------------------------*/

    public function cancionero()
    {
        try {
            $autores = Autor::whereNotIn('id', [1])->inRandomOrder()->limit(15)->get(); //EXCEPTO AUTOR CONGREGACIONAL PORQUE ESO ES PARA HIMNARIO

            return view('content.alabanzas-web.cancionero', compact('autores'));
        } catch (Exception $e) {
            return view('content.error.404');
        }
    }

    public function cargarTablaHimnario()
    {
        try {
            //HAGO EL SELECT A LA BASE DE DATOS PARA PODER MOSTRAR LOS REGISTROS
            $himnario = Alabanza::where('tipo_alabanza', false)->orderBy('numero_himnario')->get(); //Solo los que son del himnario
            $tablaHTML = '';
            $contadorPagina = 1; // Inicializa un contador de página
            foreach ($himnario as $alabanza) {
                $btnVer = '';

                $btnVer .= '<a href="' . url("/web/himnario/ver?page={$contadorPagina}") . '" class="btn btn-icon btn-primary"><i class="fa fa-eye"></i></a>';

                // Construye el enlace con el slug de la alabanza para el nombre
                $numLink = '<a href="' . url("/web/himnario/ver?page={$contadorPagina}") . '">' . $alabanza['numero_himnario'] . '</a>';

                // Construye el enlace con el slug de la alabanza para el nombre
                $nombreLink = '<a href="' . url("/web/himnario/ver?page={$contadorPagina}") . '">' . $alabanza['nombre'] . '</a>';

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

    public function cargarTablaCancionero($idAutor)
    {
        try {
            //HAGO EL SELECT A LA BASE DE DATOS PARA PODER MOSTRAR LOS REGISTROS
            if ($idAutor != 0) {
                $himnario = Alabanza::where('tipo_alabanza', true)->where('id_autor', $idAutor)->orderBy('id')->get(); //Solo los que son del cancionero
            } else {
                $himnario = Alabanza::where('tipo_alabanza', true)->orderBy('id')->get(); //Solo los que son del cancionero
            }

            $tablaHTML = '';
            $contadorPagina = 1; // Inicializa un contador de página
            foreach ($himnario as $alabanza) {
                $btnVer = '';

                $btnVer .= '<a href="' . url("/web/cancionero/ver?page={$contadorPagina}") . '" class="btn btn-icon btn-primary"><i class="fa fa-eye"></i></a>';

                // Construye el enlace con el slug de la alabanza para el nombre
                $numLink = '<a href="' . url("/web/cancionero/ver?page={$contadorPagina}") . '">' . $contadorPagina . '</a>';

                // Construye el enlace con el slug de la alabanza para el nombre
                $nombreLink = '<a href="' . url("/web/cancionero/ver?page={$contadorPagina}") . '">' . $alabanza['nombre'] . '</a>';

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

    public function verAlabanza()
    {
        try {
            // Obtener la lista paginada (cada alabanza es una página)
            $alabanzasPaginadas = Alabanza::where('tipo_alabanza', false)
                ->orderBy('numero_himnario')
                ->paginate(1); // Paginar de 1 en 1 (una alabanza por página)

            return view('content.alabanzas-web.ver', compact('alabanzasPaginadas'));
        } catch (Exception $e) {
            return view('content.error.404');
        }
    }

    public function verAlabanzaCancionero()
    {
        try {
            // Obtener la lista paginada (cada alabanza es una página)
            $alabanzasPaginadas = Alabanza::where('tipo_alabanza', true)
                ->orderBy('id')
                ->paginate(1); // Paginar de 1 en 1 (una alabanza por página)

            return view('content.alabanzas-web.verCancionero', compact('alabanzasPaginadas'));
        } catch (Exception $e) {
            return view('content.error.404');
        }
    }
}
