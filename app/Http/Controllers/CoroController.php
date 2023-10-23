<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Coro;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CoroController extends Controller
{
    public function avivamiento()
    {
        try {
            if (Auth::user()->can('ver-coros-avivamiento')) {
                $tipo_coro = 0;
                return view('content.coros.index', compact('tipo_coro'));
            } else {
                return view('content.error.403');
            }
        } catch (Exception $e) {

            // return redirect()->route('content.roles.index')->with('error', true);
        }
    }

    public function adoracion()
    {
        try {
            if (Auth::user()->can('ver-coros-adoracion')) {
                $tipo_coro = 1;
                return view('content.coros.index', compact('tipo_coro'));
            } else {
                return view('content.errores.403');
            }
        } catch (Exception $e) {

            // return redirect()->route('content.roles.index')->with('error', true);
        }
    }

    public function cargarTabla($tipo_coro)
    {
        try {
            if (Auth::user()->can('ver-coros-avivamiento', 'ver-coros-adoracion')) {
                //HAGO EL SELECT A LA BASE DE DATOS PARA PODER MOSTRAR LOS REGISTROS
                $coros = Coro::where('tipo_coro', $tipo_coro)->get(); //Segun el tipo de coro //Avivamiento = 0, Adoracion = 1
                $tablaHTML = '';

                foreach ($coros as $coro) {
                    if ($coro['estado'] === 0) {
                        $coro['estado'] = '<span class="badge badge-warning">Inactivo</span>';
                    } else {
                        $coro['estado'] = '<span class="badge badge-primary">Activo</span>';
                    }

                    $btnEditar = '';
                    $btnEliminar = '';

                    if ($tipo_coro) { //ES ADORACION = 1
                        if (Auth::user()->can('editar-coros-adoracion')) {
                            $btnEditar .= '<button type="button" onclick="editarCoroModal(\'' . $coro['id'] . '\')" class="btn btn-icon btn-primary"><i class="fa fa-edit"></i></button>';
                        }

                        if (Auth::user()->can('borrar-coros-adoracion')) {
                            $btnEliminar .= '<button type="button" onclick="eliminarCoroModalConfirm(\'' . $coro['id'] . '\')" class="btn btn-icon btn-danger"><i class="fa fa-trash"></i></button>';
                        }
                    } else {
                        if (Auth::user()->can('editar-coros-avivamiento')) {
                            $btnEditar .= '<button type="button" onclick="editarCoroModal(\'' . $coro['id'] . '\')" class="btn btn-icon btn-primary"><i class="fa fa-edit"></i></button>';
                        }

                        if (Auth::user()->can('borrar-coros-avivamiento')) {
                            $btnEliminar .= '<button type="button" onclick="eliminarCoroModalConfirm(\'' . $coro['id'] . '\')" class="btn btn-icon btn-danger"><i class="fa fa-trash"></i></button>';
                        }
                    }



                    $tablaHTML .=  '<tr>' .
                        '<td>' .
                        $coro['nombre'] .
                        '</td>' .
                        '<td class="text-center">' .
                        $coro['estado'] .
                        '</td>' .
                        '<td class="text-center">' .
                        $btnEditar . ' ' . $btnEliminar .
                        '</td>' .
                        '</tr>';
                }

                return response()->json(
                    [
                        'estado' => true,
                        'titulo' => 'Éxito',
                        'msg' => 'Datos obtenidos correctamente',
                        'datos' => $tablaHTML
                    ]
                );
            }
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

    public function guardar(Request $request)
    {
        if (Auth::user()->can('crear-coros-avivamiento', 'editar-coros-avivamiento', 'crear-coros-adoracion', 'editar-coros-adoracion')) {
            $idCoro = $request->input('idCoro');
            $tipo_coro = $request->input('tipo_coro');

            try {
                //SI EL ID ES 0, ENTONCES ES NUEVO REGISTRO
                if (intval($idCoro) === 0) {

                    //VALIDO LOS CAMPOS
                    $validator = Validator::make($request->all(), [
                        'nombre' => 'required|unique:alabanzas',
                        'id_autor' => 'nullable|min:1',
                        'nota' => 'nullable|min:1',
                        'estado' => 'required',
                        'letra' => 'required',
                    ]);

                    //SI FALLA LA VALIDACION
                    if ($validator->fails()) {
                        $errors = implode('<br>', $validator->errors()->all());

                        return response()->json([
                            'estado' => false,
                            'titulo' => 'Error',
                            'msg' => 'Revise los campos',
                            'errors' => $errors
                        ]);
                    }

                    //SI PASAN LAS VALIDACIONES, HAGO EL REGISTRO
                    $coro = Coro::create([
                        'tipo_coro' => $tipo_coro,
                        'nombre' => $request->input('nombre'),
                        'slug' => Str::slug($request->input('nombre')),
                        'id_autor' => ($request->input('id_autor') == 0) ? null : $request->input('id_autor'), //SI NO HA SELECCIONADO
                        'nota' => ($request->input('nota') == 0) ? null : $request->input('nota'), //SI NO HA SELECCIONADO
                        'estado' => $request->input('estado'),
                        'letra' => $request->input('letra'),
                        'tipo_video' => ($request->input('tipo_video') == 0) ? 0 : $request->input('tipo_video'), //SI NO HA SELECCIONADO
                        'url_video' => ($request->input('url_video') == null) ? null : $request->input('url_video'), //SI NO HA SELECCIONADO
                    ]);

                    return response()->json(
                        [
                            'estado' => true,
                            'titulo' => 'Éxito',
                            'msg' => 'Registro realizado',
                            'datos' => $coro
                        ]
                    );
                } else {
                    //ES EDICION

                    //VALIDO LOS CAMPOS
                    $validator = Validator::make($request->all(), [
                        'nombre' => 'required|unique:alabanzas,nombre,' . $idCoro,
                        'id_autor' => 'nullable|min:1',
                        'nota' => 'nullable|min:1',
                        'estado' => 'required',
                        'letra' => 'required',
                    ]);

                    //SI FALLA LA VALIDACION
                    if ($validator->fails()) {
                        $errors = implode('<br>', $validator->errors()->all());

                        return response()->json([
                            'estado' => false,
                            'titulo' => 'Error',
                            'msg' => 'Revise los campos',
                            'errors' => $errors
                        ]);
                    }

                    //OBTENGO LOS DATOS DE ESA ALABANZA DE HIMNARIO
                    $coro = Coro::find($idCoro);

                    //HAGO LA EDICION DE LA ALABANZA
                    $coro->nombre = $request->input('nombre');
                    $coro->slug = Str::slug($request->input('nombre'));
                    ($request->input('id_autor') == 0) ? $coro->id_autor = $coro->id_autor : $request->input('id_autor');
                    $coro->nota = $request->input('nota');
                    $coro->estado = $request->input('estado');
                    $coro->letra = $request->input('letra');
                    $coro->tipo_video = ($request->input('tipo_video') == 0) ? 0 : $request->input('tipo_video');
                    $coro->url_video = ($request->input('url_video') == null) ? null : $request->input('url_video');
                    $coro->save();

                    return response()->json(
                        [
                            'estado' => true,
                            'titulo' => 'Éxito',
                            'msg' => 'Actualización realizada',
                            'datos' => $coro
                        ]
                    );
                }
            } catch (Exception $e) {
                return response()->json(
                    [
                        'estado' => false,
                        'titulo' => 'Error',
                        'msg' => 'Ocurrió un error',
                        'errors' => $e->getMessage()
                    ]
                );
            }
        }
    }

    public function obtenerAutores()
    {
        try {
            if (Auth::user()->can('ver-coros-avivamiento', 'ver-coros-adoracion')) {
                //OBTENGO EL LISTADO DE LOS AUTORES
                $autores = Autor::where('estado', true)->orderBy('nombre')->get();

                $htmlAutores = "";
                $htmlAutores .= '<option value="0">Seleccione una opción</option>';
                for ($i = 0; $i < count($autores); $i++) {
                    $htmlAutores .= '<option value="' . $autores[$i]['id'] . '">' . $autores[$i]['nombre'] . '</option>';
                }

                return response()->json(
                    [
                        'estado' => true,
                        'titulo' => 'Éxito',
                        'msg' => 'Datos obtenidos correctamente',
                        'datos' => $htmlAutores
                    ]
                );
            }
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

    public function obtenerCoro($id)
    {
        try {
            if (Auth::user()->can('ver-coros-avivamiento', 'ver-coros-adoracion')) {
                //OBTENGO LOS DATOS
                $coro = Coro::find($id);

                return response()->json(
                    [
                        'estado' => true,
                        'titulo' => 'Éxito',
                        'msg' => 'Datos obtenidos correctamente',
                        'datos' => $coro
                    ]
                );
            }
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

    public function eliminarCoro(Request $request)
    {
        try {
            if (Auth::user()->can('borrar-coros-avivamiento', 'borrar-coros-adoracion')) {
                //OBTENGO EL ID DEL POST
                $idCoro = intval(json_decode($request->getContent(), true)['idCoro']);

                //OBTENGO EL REGISTRO Y LO ELIMINO
                Coro::find($idCoro)->delete();

                return response()->json(
                    [
                        'estado' => true,
                        'titulo' => 'Éxito',
                        'msg' => 'Eliminación realizada',
                        'datos' => $idCoro
                    ]
                );
            }
        } catch (Exception $e) {
            return response()->json(
                [
                    'estado' => false,
                    'titulo' => 'Error',
                    'msg' => 'Ocurrió un error al realizar el proceso',
                    'errors' => $e->getMessage()
                ]
            );
        }
    }
}
