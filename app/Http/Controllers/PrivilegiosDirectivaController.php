<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Directiva;
use App\Models\PrivilegiosDirectiva;
use App\Models\TipoDirectiva;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PrivilegiosDirectivaController extends Controller
{
    public function index()
    {
        try {
            if (Auth::user()->can('ver-privilegios_directivas')) {
                return view('content.privilegios_directivas.index');
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
            if (Auth::user()->can('ver-privilegios_directivas')) {
                //HAGO EL SELECT A LA BASE DE DATOS PARA PODER MOSTRAR LOS REGISTROS
                $privilegios_directivas = PrivilegiosDirectiva::select(
                    'privilegios_directivas.id',
                    'privilegios_directivas.dia',
                    'privilegios_directivas.fecha',
                    'privilegios_directivas.id_directiva',
                    'privilegios_directivas.inicio',
                    'privilegios_directivas.alabanzas',
                    'privilegios_directivas.coros',
                    'privilegios_directivas.presentacion',
                    'privilegios_directivas.ofrenda',
                    'privilegios_directivas.talento',
                    'privilegios_directivas.alabanza_especial',
                    'privilegios_directivas.adoracion',
                    'privilegios_directivas.mensaje',
                    'privilegios_directivas.aseo',
                    'directiva..nombre as nombre_directiva',
                    'directiva.anio as anio_directiva'
                )
                    ->join('directiva', 'directiva.id', 'privilegios_directivas.id_directiva')
                    ->get();

                $tablaHTML = '';

                foreach ($privilegios_directivas as $privilegio) {
                    $btnEditar = '';
                    $btnEliminar = '';

                    if (Auth::user()->can('editar-privilegios_directivas')) {
                        $btnEditar .= '<button type="button" onclick="editarModal(\'' . $privilegio['id'] . '\')" class="btn btn-icon btn-primary"><i class="fa fa-edit"></i></button>';
                    }

                    if (Auth::user()->can('borrar-privilegios_directivas')) {
                        $btnEliminar .= '<button type="button" onclick="eliminarModalConfirm(\'' . $privilegio['id'] . '\')" class="btn btn-icon btn-danger"><i class="fa fa-trash"></i></button>';
                    }

                    $tablaHTML .=  '<tr>' .
                        '<td>' .
                        $privilegio['id'] .
                        '</td>' .
                        '<td>' .
                        $privilegio['dia'] .
                        '</td>' .
                        '<td class="text-center">' .
                        $privilegio['fecha'] .
                        '</td>' .
                        '<td class="text-center">' .
                        $privilegio['nombre_directiva'] . ' - ' .   $privilegio['anio_directiva'] .
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

    public function obtenerDirectivas()
    {
        try {
            if (Auth::user()->can('ver-privilegios_directivas')) {
                //OBTENGO EL LISTADO DE LOS ROLES   
                $directivas = Directiva::where('estado', true)->where('directiva_actual', true)->get();

                $html = "";

                $html .= '<option value="0">Seleccione una opción</option>';
                for ($i = 0; $i < count($directivas); $i++) {
                    $html .= '<option value="' . $directivas[$i]['id'] . '">' . $directivas[$i]['nombre'] . ' ' . $directivas[$i]['anio'] . '</option>';
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
            if (Auth::user()->can('crear-privilegios_directivas', 'editar-privilegios_directivas')) {
                $idPrivilegioDirectiva = $request->input('idPrivilegioDirectiva');

                //VALIDO LOS CAMPOS
                $validator = Validator::make($request->all(), [
                    'dia' => 'required',
                    'fecha' => 'required',
                    'directiva' => [
                        'required',
                        function ($attribute, $value, $fail) {
                            if ($value == 0) {
                                $fail('Debe seleccionar una directiva válida.');
                            }
                        },
                    ],
                    'inicio' => 'nullable',
                    'alabanzas' => 'nullable',
                    'coros' => 'nullable',
                    'presentacion' => 'nullable',
                    'ofrenda' => 'nullable',
                    'talento' => 'nullable',
                    'alabanza_especial' => 'nullable',
                    'adoracion' => 'nullable',
                    'mensaje' => 'nullable',
                    'aseo' => 'nullable',
                    'anuncios' => 'nullable',
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
                if (intval($idPrivilegioDirectiva) === 0) {
                    //SI PASAN LAS VALIDACIONES, HAGO EL REGISTRO
                    $privilegio = PrivilegiosDirectiva::create([
                        'dia' => $request->input('dia'),
                        'fecha' => $request->input('fecha'),
                        'id_directiva' => $request->input('directiva'),
                        'inicio' => $request->input('inicio'),
                        'alabanzas' => $request->input('alabanzas'),
                        'coros' => $request->input('coros'),
                        'presentacion' => $request->input('presentacion'),
                        'ofrenda' => $request->input('ofrenda'),
                        'talento' => $request->input('talento'),
                        'alabanza_especial' => $request->input('alabanza_especial'),
                        'adoracion' => $request->input('adoracion'),
                        'mensaje' => $request->input('mensaje'),
                        'aseo' => $request->input('aseo'),
                        'anuncios' => $request->input('anuncios'),
                    ]);

                    return response()->json(
                        [
                            'estado' => true,
                            'titulo' => 'Éxito',
                            'msg' => 'Registro realizado',
                            'datos' => $privilegio
                        ]
                    );
                } else {
                    //ES EDICION

                    //OBTENGO LOS DATOS
                    $privilegio = PrivilegiosDirectiva::find($idPrivilegioDirectiva);

                    //HAGO LA EDICION DEL NOMBRE
                    $privilegio->dia = $request->input('dia');
                    $privilegio->fecha = $request->input('fecha');
                    $privilegio->id_directiva = $request->input('directiva');
                    $privilegio->inicio = $request->input('inicio');
                    $privilegio->alabanzas = $request->input('alabanzas');
                    $privilegio->coros = $request->input('coros');
                    $privilegio->presentacion = $request->input('presentacion');
                    $privilegio->ofrenda = $request->input('ofrenda');
                    $privilegio->talento = $request->input('talento');
                    $privilegio->alabanza_especial = $request->input('alabanza_especial');
                    $privilegio->adoracion = $request->input('adoracion');
                    $privilegio->mensaje = $request->input('mensaje');
                    $privilegio->aseo = $request->input('aseo');
                    $privilegio->anuncios = $request->input('anuncios');
                    $privilegio->save();

                    return response()->json(
                        [
                            'estado' => true,
                            'titulo' => 'Éxito',
                            'msg' => 'Actualización realizada',
                            'datos' => $privilegio
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

    public function obtenerPrivilegio($id)
    {
        try {
            if (Auth::user()->can('ver-privilegios_directivas')) {
                //OBTENGO LOS DATOS
                $privilegio = PrivilegiosDirectiva::find($id);
                return response()->json(
                    [
                        'estado' => true,
                        'titulo' => 'Éxito',
                        'msg' => 'Datos obtenidos correctamente',
                        'datos' => $privilegio
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

    public function eliminar(Request $request)
    {
        try {
            if (Auth::user()->can('borrar-privilegios_directivas')) {
                //OBTENGO EL ID DEL POST
                $idPrivilegioDirectiva = intval(json_decode($request->getContent(), true)['idPrivilegioDirectiva']);
                //OBTENGO EL REGISTRO LO ELIMINO
                PrivilegiosDirectiva::find($idPrivilegioDirectiva)->delete();

                return response()->json(
                    [
                        'estado' => true,
                        'titulo' => 'Éxito',
                        'msg' => 'Eliminación realizada',
                        'datos' => $idPrivilegioDirectiva
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
