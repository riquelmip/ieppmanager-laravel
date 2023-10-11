<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AutorController extends Controller
{
    public function index()
    {
        try {
            if (Auth::user()->can('ver-autores')) {
                return view('content.autores.index');
            } else {
                return view('content.error.403');
            }
        } catch (Exception $e) {

            // return redirect()->route('content.roles.index')->with('error', true);
        }
    }

    public function cargarTabla()
    {
        try {
            if (Auth::user()->can('ver-autores')) {
                //HAGO EL SELECT A LA BASE DE DATOS PARA PODER MOSTRAR LOS REGISTROS
                $autores = Autor::all();
                $tablaHTML = '';

                foreach ($autores as $autor) {
                    if ($autor['estado'] === 0) {
                        $autor['estado'] = '<span class="badge badge-warning">Inactivo</span>';
                    } else {
                        $autor['estado'] = '<span class="badge badge-primary">Activo</span>';
                    }

                    $btnEditar = '';
                    $btnEliminar = '';


                    if (Auth::user()->can('editar-autores')) {
                        $btnEditar .= '<button type="button" onclick="editarAutorModal(\'' . $autor['id'] . '\')" class="btn btn-icon btn-primary"><i class="fa fa-edit"></i></button>';
                    }

                    if (Auth::user()->can('borrar-autores')) {
                        $btnEliminar .= '<button type="button" onclick="eliminarAutorModalConfirm(\'' . $autor['id'] . '\')" class="btn btn-icon btn-danger"><i class="fa fa-trash"></i></button>';
                    }


                    $tablaHTML .=  '<tr>' .
                        '<td>' .
                        $autor['id'] .
                        '</td>' .
                        '<td>' .
                        $autor['nombre'] .
                        '</td>' .
                        '<td class="text-center">' .
                        $autor['estado'] .
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
        try {
            if (Auth::user()->can('crear-autores', 'editar-autores')) {
                $idAutor = $request->input('idAutor');

                //VALIDO LOS CAMPOS
                $validator = Validator::make($request->all(), [
                    'nombre' => 'required',
                    'estado' => 'required',
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


                //SI EL ID ES 0, ENTONCES ES NUEVO REGISTRO
                if (intval($idAutor) === 0) {
                    //SI PASAN LAS VALIDACIONES, HAGO EL REGISTRO
                    $autor = Autor::create([
                        'nombre' => $request->input('nombre'),
                        'estado' => $request->input('estado'),
                    ]);

                    return response()->json(
                        [
                            'estado' => true,
                            'titulo' => 'Éxito',
                            'msg' => 'Registro realizado',
                            'datos' => $autor
                        ]
                    );
                } else {
                    //ES EDICION

                    //OBTENGO LOS DATOS
                    $autor = Autor::find($idAutor);

                    //HAGO LA EDICION DEL NOMBRE
                    $autor->nombre = $request->input('nombre');
                    $autor->estado = $request->input('estado');
                    $autor->save();

                    return response()->json(
                        [
                            'estado' => true,
                            'titulo' => 'Éxito',
                            'msg' => 'Actualización realizada',
                            'datos' => $autor
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

    public function obtenerAutor($id)
    {
        try {
            if (Auth::user()->can('ver-autores')) {
                //OBTENGO LOS DATOS
                $autor = Autor::find($id);
                return response()->json(
                    [
                        'estado' => true,
                        'titulo' => 'Éxito',
                        'msg' => 'Datos obtenidos correctamente',
                        'datos' => $autor
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

    public function eliminarAutor(Request $request)
    {
        try {
            if (Auth::user()->can('borrar-autores')) {
                //OBTENGO EL ID DEL POST
                $idAutor = intval(json_decode($request->getContent(), true)['idAutor']);
                //OBTENGO EL REGISTRO LO ELIMINO
                Autor::find($idAutor)->delete();

                return response()->json(
                    [
                        'estado' => true,
                        'titulo' => 'Éxito',
                        'msg' => 'Eliminación realizada',
                        'datos' => $idAutor
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
