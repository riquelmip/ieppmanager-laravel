<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Directiva;
use App\Models\TipoDirectiva;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DirectivaController extends Controller
{
    public function index()
    {
        try {
            if (Auth::user()->can('ver-directivas')) {
                return view('content.directivas.index');
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
            if (Auth::user()->can('ver-directivas')) {
                //HAGO EL SELECT A LA BASE DE DATOS PARA PODER MOSTRAR LOS REGISTROS
                $directivas = Directiva::all();
                $tablaHTML = '';

                foreach ($directivas as $directiva) {
                    if ($directiva['estado'] === 0) {
                        $directiva['estado'] = '<span class="badge badge-warning">Inactivo</span>';
                    } else {
                        $directiva['estado'] = '<span class="badge badge-primary">Activo</span>';
                    }

                    if ($directiva['directiva_actual'] === 0) {
                        $directiva['directiva_actual'] = '<span class="badge badge-warning">Periodo Finalizado</span>';
                    } else {
                        $directiva['directiva_actual'] = '<span class="badge badge-primary">Periodo Activo</span>';
                    }

                    $btnEditar = '';
                    $btnEliminar = '';


                    if (Auth::user()->can('editar-directivas')) {
                        $btnEditar .= '<button type="button" onclick="editarModal(\'' . $directiva['id'] . '\')" class="btn btn-icon btn-primary"><i class="fa fa-edit"></i></button>';
                    }

                    if (Auth::user()->can('borrar-directivas')) {
                        $btnEliminar .= '<button type="button" onclick="eliminarModalConfirm(\'' . $directiva['id'] . '\')" class="btn btn-icon btn-danger"><i class="fa fa-trash"></i></button>';
                    }


                    $tablaHTML .=  '<tr>' .
                        '<td>' .
                        $directiva['id'] .
                        '</td>' .
                        '<td>' .
                        $directiva['nombre'] . ' - ' . $directiva['anio'] .
                        '</td>' .
                        '<td class="text-center">' .
                        $directiva['directiva_actual'] .
                        '</td>' .
                        '<td class="text-center">' .
                        $directiva['estado'] .
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

    public function obtenerTiposDirectivas()
    {
        try {
            if (Auth::user()->can('ver-directivas')) {
                //OBTENGO EL LISTADO DE LOS ROLES   
                $tipos = TipoDirectiva::where('estado', true)->get();

                $html = "";

                $html .= '<option value="0">Seleccione una opción</option>';
                for ($i = 0; $i < count($tipos); $i++) {
                    $html .= '<option value="' . $tipos[$i]['id'] . '">' . $tipos[$i]['nombre'] . ' ' . $tipos[$i]['anio'] . '</option>';
                }

                return response()->json(
                    [
                        'estado' => true,
                        'titulo' => 'Éxito',
                        'msg' => 'Datos obtenidos correctamente',
                        'datos' => $html
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
            if (Auth::user()->can('crear-directivas', 'editar-directivas')) {
                $idDirectiva = $request->input('idDirectiva');

                //VALIDO LOS CAMPOS
                $validator = Validator::make($request->all(), [
                    'nombre' => 'required',
                    'anio' => 'required',
                    'pastor' => 'nullable',
                    'tipo_directiva' => [
                        'required',
                        function ($attribute, $value, $fail) {
                            if ($value == 0) {
                                $fail('Debe seleccionar un tipo válido.');
                            }
                        },
                    ],
                    'presidente' => 'nullable',
                    'vicepresidente' => 'nullable',
                    'secretario' => 'nullable',
                    'tesorero' => 'nullable',
                    'vocal1' => 'nullable',
                    'vocal2' => 'nullable',
                    'vocal3' => 'nullable',
                    'directiva_actual' => 'required',
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
                if (intval($idDirectiva) === 0) {
                    //SI PASAN LAS VALIDACIONES, HAGO EL REGISTRO
                    $directiva = Directiva::create([
                        'nombre' => $request->input('nombre'),
                        'anio' => $request->input('anio'),
                        'pastor' => $request->input('pastor'),
                        'id_tipo_directiva' => $request->input('tipo_directiva'),
                        'presidente' => $request->input('presidente'),
                        'vicepresidente' => $request->input('vicepresidente'),
                        'secretario' => $request->input('secretario'),
                        'tesorero' => $request->input('tesorero'),
                        'vocal1' => $request->input('vocal1'),
                        'vocal2' => $request->input('vocal1'),
                        'vocal3' => $request->input('vocal3'),
                        'directiva_actual' => $request->input('directiva_actual'),
                        'estado' => $request->input('estado'),
                    ]);

                    return response()->json(
                        [
                            'estado' => true,
                            'titulo' => 'Éxito',
                            'msg' => 'Registro realizado',
                            'datos' => $directiva
                        ]
                    );
                } else {
                    //ES EDICION

                    //OBTENGO LOS DATOS
                    $directiva = Directiva::find($idDirectiva);

                    //HAGO LA EDICION DEL NOMBRE
                    $directiva->nombre = $request->input('nombre');
                    $directiva->anio = $request->input('anio');
                    $directiva->pastor = $request->input('pastor');
                    $directiva->id_tipo_directiva = $request->input('tipo_directiva');
                    $directiva->presidente = $request->input('presidente');
                    $directiva->vicepresidente = $request->input('vicepresidente');
                    $directiva->secretario = $request->input('secretario');
                    $directiva->tesorero = $request->input('tesorero');
                    $directiva->vocal1 = $request->input('vocal1');
                    $directiva->vocal2 = $request->input('vocal2');
                    $directiva->vocal3 = $request->input('vocal3');
                    $directiva->directiva_actual = $request->input('directiva_actual');
                    $directiva->estado = $request->input('estado');
                    $directiva->save();

                    return response()->json(
                        [
                            'estado' => true,
                            'titulo' => 'Éxito',
                            'msg' => 'Actualización realizada',
                            'datos' => $directiva
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

    public function obtenerDirectiva($id)
    {
        try {
            if (Auth::user()->can('ver-directivas')) {
                //OBTENGO LOS DATOS
                $directiva = Directiva::find($id);
                return response()->json(
                    [
                        'estado' => true,
                        'titulo' => 'Éxito',
                        'msg' => 'Datos obtenidos correctamente',
                        'datos' => $directiva
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

    public function eliminarDirectiva(Request $request)
    {
        try {
            if (Auth::user()->can('borrar-directivas')) {
                //OBTENGO EL ID DEL POST
                $idDirectiva = intval(json_decode($request->getContent(), true)['idDirectiva']);
                //OBTENGO EL REGISTRO LO ELIMINO
                Directiva::find($idDirectiva)->delete();

                return response()->json(
                    [
                        'estado' => true,
                        'titulo' => 'Éxito',
                        'msg' => 'Eliminación realizada',
                        'datos' => $idDirectiva
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
