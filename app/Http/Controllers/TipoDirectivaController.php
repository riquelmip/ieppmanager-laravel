<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\TipoDirectiva;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TipoDirectivaController extends Controller
{
    public function index()
    {
        try {
            if (Auth::user()->can('ver-tipo_directivas')) {
                return view('content.tipo_directivas.index');
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
            if (Auth::user()->can('ver-tipo_directivas')) {
                //HAGO EL SELECT A LA BASE DE DATOS PARA PODER MOSTRAR LOS REGISTROS
                $tipo_directivas = TipoDirectiva::all();
                $tablaHTML = '';

                foreach ($tipo_directivas as $tipo_directiva) {
                    if ($tipo_directiva['estado'] === 0) {
                        $tipo_directiva['estado'] = '<span class="badge badge-warning">Inactivo</span>';
                    } else {
                        $tipo_directiva['estado'] = '<span class="badge badge-primary">Activo</span>';
                    }

                    $btnEditar = '';
                    $btnEliminar = '';


                    if (Auth::user()->can('editar-tipo_directivas')) {
                        $btnEditar .= '<button type="button" onclick="editarModal(\'' . $tipo_directiva['id'] . '\')" class="btn btn-icon btn-primary"><i class="fa fa-edit"></i></button>';
                    }

                    if (Auth::user()->can('borrar-tipo_directivas')) {
                        $btnEliminar .= '<button type="button" onclick="eliminarModalConfirm(\'' . $tipo_directiva['id'] . '\')" class="btn btn-icon btn-danger"><i class="fa fa-trash"></i></button>';
                    }


                    $tablaHTML .=  '<tr>' .
                        '<td>' .
                        $tipo_directiva['id'] .
                        '</td>' .
                        '<td>' .
                        $tipo_directiva['nombre'] .
                        '</td>' .
                        '<td class="text-center">' .
                        $tipo_directiva['estado'] .
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
            if (Auth::user()->can('crear-tipo_directivas', 'editar-tipo_directivas')) {
                $idTipoDirectiva = $request->input('idTipoDirectiva');

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
                if (intval($idTipoDirectiva) === 0) {
                    //SI PASAN LAS VALIDACIONES, HAGO EL REGISTRO
                    $tipo_directiva = TipoDirectiva::create([
                        'nombre' => $request->input('nombre'),
                        'estado' => $request->input('estado'),
                    ]);

                    return response()->json(
                        [
                            'estado' => true,
                            'titulo' => 'Éxito',
                            'msg' => 'Registro realizado',
                            'datos' => $tipo_directiva
                        ]
                    );
                } else {
                    //ES EDICION

                    //OBTENGO LOS DATOS
                    $tipo_directiva = TipoDirectiva::find($idTipoDirectiva);

                    //HAGO LA EDICION DEL NOMBRE
                    $tipo_directiva->nombre = $request->input('nombre');
                    $tipo_directiva->estado = $request->input('estado');
                    $tipo_directiva->save();

                    return response()->json(
                        [
                            'estado' => true,
                            'titulo' => 'Éxito',
                            'msg' => 'Actualización realizada',
                            'datos' => $tipo_directiva
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

    public function obtenerTipoDirectiva($id)
    {
        try {
            if (Auth::user()->can('ver-tipo_directivas')) {
                //OBTENGO LOS DATOS
                $tipo_directiva = TipoDirectiva::find($id);
                return response()->json(
                    [
                        'estado' => true,
                        'titulo' => 'Éxito',
                        'msg' => 'Datos obtenidos correctamente',
                        'datos' => $tipo_directiva
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

    public function eliminarTipoDirectiva(Request $request)
    {
        try {
            if (Auth::user()->can('borrar-tipo_directivas')) {
                //OBTENGO EL ID DEL POST
                $idTipoDirectiva = intval(json_decode($request->getContent(), true)['idTipoDirectiva']);
                //OBTENGO EL REGISTRO LO ELIMINO
                TipoDirectiva::find($idTipoDirectiva)->delete();

                return response()->json(
                    [
                        'estado' => true,
                        'titulo' => 'Éxito',
                        'msg' => 'Eliminación realizada',
                        'datos' => $idTipoDirectiva
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
