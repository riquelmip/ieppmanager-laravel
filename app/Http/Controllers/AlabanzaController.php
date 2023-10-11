<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Alabanza;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AlabanzaController extends Controller
{
    /* ---------------------------------------------------------------------------
                            PARA EL HIMNARIO
    ----------------------------------------------------------------------------*/

    public function himnario()
    {
        try {
            if (Auth::user()->can('ver-alabanzas-himnario')) {
                return view('content.alabanzas.himnario');
            } else {
                return view('content.error.403');
            }
        } catch (Exception $e) {

            // return redirect()->route('content.roles.index')->with('error', true);
        }
    }

    public function cargarTablaHimnario()
    {
        try {
            if (Auth::user()->can('ver-alabanzas-himnario')) {
                //HAGO EL SELECT A LA BASE DE DATOS PARA PODER MOSTRAR LOS REGISTROS
                $himnario = Alabanza::where('tipo_alabanza', false)->orderBy('numero_himnario')->get(); //Solo los que son del himnario
                $tablaHTML = '';

                foreach ($himnario as $alabanza) {
                    if ($alabanza['estado'] === 0) {
                        $alabanza['estado'] = '<span class="badge badge-warning">Inactivo</span>';
                    } else {
                        $alabanza['estado'] = '<span class="badge badge-primary">Activo</span>';
                    }

                    $btnEditar = '';
                    $btnEliminar = '';


                    if (Auth::user()->can('editar-alabanzas-himnario')) {
                        $btnEditar .= '<button type="button" onclick="editarAlabanzaHimnarioModal(\'' . $alabanza['id'] . '\')" class="btn btn-icon btn-primary"><i class="fa fa-edit"></i></button>';
                    }

                    if (Auth::user()->can('borrar-alabanzas-himnario')) {
                        $btnEliminar .= '<button type="button" onclick="eliminarAlabanzaHimnarioModalConfirm(\'' . $alabanza['id'] . '\')" class="btn btn-icon btn-danger"><i class="fa fa-trash"></i></button>';
                    }


                    $tablaHTML .=  '<tr>' .
                        '<td>' .
                        $alabanza['numero_himnario'] .
                        '</td>' .
                        '<td>' .
                        $alabanza['nombre'] .
                        '</td>' .
                        '<td class="text-center">' .
                        $alabanza['estado'] .
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
            } else {
                return view('content.error.403');
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

    public function guardarAlabanzaHimnario(Request $request)
    {
        try {
            if (Auth::user()->can('crear-alabanzas-himnario', 'editar-alabanzas-himnario')) {
                $idHimnario = $request->input('idHimnario');

                //SI EL ID ES 0, ENTONCES ES NUEVO REGISTRO
                if (intval($idHimnario) === 0) {

                    //VALIDO LOS CAMPOS
                    $validator = Validator::make($request->all(), [
                        'numero_himnario' => 'required|unique:alabanzas',
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

                    $nombreAlabanza = $request->input('nombre');

                    if (empty($nombreAlabanza)) {
                        return response()->json([
                            'estado' => false,
                            'titulo' => 'Error',
                            'msg' => 'El nombre de la alabanza no puede estar vacío.',
                        ]);
                    }
                    // $nombreAlabanza = preg_replace('/[^a-zA-Z0-9]+/', '-', $nombreAlabanza);
                    // $nombreAlabanza = trim($nombreAlabanza, '-');

                    $himnario = Alabanza::create([
                        'tipo_alabanza' => 0,
                        'numero_himnario' => $request->input('numero_himnario'),
                        'nombre' => $request->input('nombre'),
                        'slug' => Str::slug($request->input('nombre')),
                        'id_autor' => ($request->input('id_autor') == 0) ? null : $request->input('id_autor'), //SI NO HA SELECCIONADO
                        'nota' => ($request->input('nota') == 0) ? null : $request->input('nota'), //SI NO HA SELECCIONADO
                        'estado' => $request->input('estado'),
                        'letra' => $request->input('letra'),
                        'id_usuario' => Auth::user()->id,
                    ]);

                    return response()->json(
                        [
                            'estado' => true,
                            'titulo' => 'Éxito',
                            'msg' => 'Registro realizado',
                            'datos' => $himnario
                        ]
                    );
                }
            } else {
                //ES EDICION

                //VALIDO LOS CAMPOS
                $validator = Validator::make($request->all(), [
                    'numero_himnario' => 'required|unique:alabanzas,numero_himnario,' . $idHimnario,
                    'nombre' => 'required|unique:alabanzas,nombre,' . $idHimnario,
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
                $himnario = Alabanza::find($idHimnario);

                //HAGO LA EDICION DE LA ALABANZA
                $himnario->numero_himnario = $request->input('numero_himnario');
                $himnario->nombre = $request->input('nombre');
                $himnario->slug = Str::slug($request->input('nombre'));
                $himnario->id_autor = $request->input('id_autor');
                $himnario->nota = $request->input('nota');
                $himnario->estado = $request->input('estado');
                $himnario->letra = $request->input('letra');
                $himnario->id_usuario = Auth::user()->id;
                $himnario->save();

                return response()->json(
                    [
                        'estado' => true,
                        'titulo' => 'Éxito',
                        'msg' => 'Actualización realizada',
                        'datos' => $himnario
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

    public function obtenerAutores()
    {
        try {
            if (Auth::user()->can('ver-alabanzas-himnario')) {
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

    public function obtenerAlabanzaHimnario($id)
    {
        try {
            if (Auth::user()->can('ver-alabanzas-himnario')) {
                //OBTENGO LOS DATOS
                $alabanza = Alabanza::find($id);

                return response()->json(
                    [
                        'estado' => true,
                        'titulo' => 'Éxito',
                        'msg' => 'Datos obtenidos correctamente',
                        'datos' => $alabanza
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

    public function eliminarAlabanzaHimnario(Request $request)
    {
        try {
            if (Auth::user()->can('borrar-alabanzas-himnario')) {
                //OBTENGO EL ID DEL POST
                $idHimnario = intval(json_decode($request->getContent(), true)['idHimnario']);

                //OBTENGO EL REGISTRO Y LO ELIMINO
                Alabanza::find($idHimnario)->delete();

                return response()->json(
                    [
                        'estado' => true,
                        'titulo' => 'Éxito',
                        'msg' => 'Eliminación realizada',
                        'datos' => $idHimnario
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


    /* ---------------------------------------------------------------------------
                            PARA EL CANCIONERO
    ----------------------------------------------------------------------------*/

    public function cancionero()
    {
        try {
            if (Auth::user()->can('ver-alabanzas-cancionero')) {
                return view('content.alabanzas.cancionero');
            } else {
                return view('content.error.403');
            }
        } catch (Exception $e) {

            // return redirect()->route('content.roles.index')->with('error', true);
        }
    }

    public function cargarTablaCancionero()
    {
        try {
            if (Auth::user()->can('ver-alabanzas-cancionero')) {
                //HAGO EL SELECT A LA BASE DE DATOS PARA PODER MOSTRAR LOS REGISTROS
                $himnario = Alabanza::where('tipo_alabanza', TRUE)->get(); //Solo los que son del cancionero
                $tablaHTML = '';

                foreach ($himnario as $alabanza) {
                    if ($alabanza['estado'] === 0) {
                        $alabanza['estado'] = '<span class="badge badge-warning">Inactivo</span>';
                    } else {
                        $alabanza['estado'] = '<span class="badge badge-primary">Activo</span>';
                    }

                    $btnEditar = '';
                    $btnEliminar = '';


                    if (Auth::user()->can('editar-alabanzas-cancionero')) {
                        $btnEditar .= '<button type="button" onclick="editarAlabanzaCancioneroModal(\'' . $alabanza['id'] . '\')" class="btn btn-icon btn-primary"><i class="fa fa-edit"></i></button>';
                    }

                    if (Auth::user()->can('borrar-alabanzas-cancionero')) {
                        $btnEliminar .= '<button type="button" onclick="eliminarAlabanzaCancioneroModalConfirm(\'' . $alabanza['id'] . '\')" class="btn btn-icon btn-danger"><i class="fa fa-trash"></i></button>';
                    }


                    $tablaHTML .=  '<tr>' .
                        '<td>' .
                        $alabanza['nombre'] .
                        '</td>' .
                        '<td class="text-center">' .
                        $alabanza['estado'] .
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

    public function guardarAlabanzaCancionero(Request $request)
    {
        try {
            if (Auth::user()->can('crear-alabanzas-cancionero', 'editar-alabanzas-cancionero')) {
                $idCancionero = $request->input('idCancionero');

                //SI EL ID ES 0, ENTONCES ES NUEVO REGISTRO
                if (intval($idCancionero) === 0) {

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
                    $cancionero = Alabanza::create([
                        'tipo_alabanza' => 1,
                        'nombre' => $request->input('nombre'),
                        'slug' => Str::slug($request->input('nombre')),
                        'id_autor' => ($request->input('id_autor') == 0) ? null : $request->input('id_autor'), //SI NO HA SELECCIONADO
                        'nota' => ($request->input('nota') == 0) ? null : $request->input('nota'), //SI NO HA SELECCIONADO
                        'estado' => $request->input('estado'),
                        'letra' => $request->input('letra'),
                        'id_usuario' => Auth::user()->id,
                    ]);

                    return response()->json(
                        [
                            'estado' => true,
                            'titulo' => 'Éxito',
                            'msg' => 'Registro realizado',
                            'datos' => $cancionero
                        ]
                    );
                } else {
                    //ES EDICION

                    //VALIDO LOS CAMPOS
                    $validator = Validator::make($request->all(), [
                        'nombre' => 'required|unique:alabanzas,nombre,' . $idCancionero,
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
                    $cancionero = Alabanza::find($idCancionero);

                    //HAGO LA EDICION DE LA ALABANZA
                    $cancionero->nombre = $request->input('nombre');
                    $cancionero->slug = Str::slug($request->input('nombre'));
                    $cancionero->id_autor = $request->input('id_autor');
                    $cancionero->nota = $request->input('nota');
                    $cancionero->estado = $request->input('estado');
                    $cancionero->letra = $request->input('letra');
                    $cancionero->id_usuario = Auth::user()->id;
                    $cancionero->save();

                    return response()->json(
                        [
                            'estado' => true,
                            'titulo' => 'Éxito',
                            'msg' => 'Actualización realizada',
                            'datos' => $cancionero
                        ]
                    );
                }
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

    public function obtenerAlabanzaCancionero($id)
    {
        try {
            if (Auth::user()->can('ver-alabanzas-cancionero')) {
                //OBTENGO LOS DATOS
                $alabanza = Alabanza::find($id);

                return response()->json(
                    [
                        'estado' => true,
                        'titulo' => 'Éxito',
                        'msg' => 'Datos obtenidos correctamente',
                        'datos' => $alabanza
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

    public function eliminarAlabanzaCancionero(Request $request)
    {
        try {
            if (Auth::user()->can('borrar-alabanzas-cancionero')) {
                //OBTENGO EL ID DEL POST
                $idCancionero = intval(json_decode($request->getContent(), true)['idCancionero']);

                //OBTENGO EL REGISTRO Y LO ELIMINO
                Alabanza::find($idCancionero)->delete();

                return response()->json(
                    [
                        'estado' => true,
                        'titulo' => 'Éxito',
                        'msg' => 'Eliminación realizada',
                        'datos' => $idCancionero
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
