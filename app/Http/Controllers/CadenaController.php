<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Coro;
use App\Models\Cadena;
use App\Models\DetalleCadena;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CadenaController extends Controller
{
    public function avivamiento()
    {
        try {
            if (Auth::user()->can('ver-cadenas-avivamiento')) {
                $tipo_cadena = 0;
                return view('content.cadenas.index', compact('tipo_cadena'));
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
            if (Auth::user()->can('ver-cadenas-adoracion')) {
                $tipo_cadena = 1;
                return view('content.cadenas.index', compact('tipo_cadena'));
            } else {
                return view('content.error.403');
            }
        } catch (Exception $e) {

            // return redirect()->route('content.roles.index')->with('error', true);
        }
    }

    public function cargarTabla($tipo_cadena)
    {
        try {
            if (Auth::user()->can('ver-cadenas-avivamiento', 'ver-cadenas-adoracion')) {
                if (Auth::user()->id != 1) {
                    //HAGO EL SELECT A LA BASE DE DATOS PARA PODER MOSTRAR LOS REGISTROS
                    $cadenas = Cadena::where('tipo_cadena', $tipo_cadena)->get(); //Segun el tipo de cadena //Avivamiento = 0, Adoracion = 1
                } else {
                    $cadenas = Cadena::where('tipo_cadena', $tipo_cadena)->where('id_usuario', Auth::user()->id)->get();
                }


                $tablaHTML = '';

                foreach ($cadenas as $cadena) {
                    if ($cadena['estado']) {
                        $cadena['estado'] = '<span class="badge badge-primary">Activo</span>';
                    } else {
                        $cadena['estado'] = '<span class="badge badge-warning">Inactivo</span>';
                    }

                    $btnEditar = '';
                    $btnEliminar = '';

                    if ($tipo_cadena) { //ES ADORACION = 1
                        if (Auth::user()->can('editar-cadenas-adoracion')) {
                            $btnEditar .= '<button type="button" onclick="editarCadenaModal(\'' . $cadena['id'] . '\')" class="btn btn-icon btn-primary"><i class="fa fa-edit"></i></button>';
                        }

                        if (Auth::user()->can('borrar-cadenas-adoracion')) {
                            $btnEliminar .= '<button type="button" onclick="eliminarCadenaModalConfirm(\'' . $cadena['id'] . '\')" class="btn btn-icon btn-danger"><i class="fa fa-trash"></i></button>';
                        }
                    } else {
                        if (Auth::user()->can('ver-cadenas-avivamiento')) {
                            $btnEditar .= '<button type="button" onclick="editarCadenaModal(\'' . $cadena['id'] . '\')" class="btn btn-icon btn-primary"><i class="fa fa-edit"></i></button>';
                        }

                        if (Auth::user()->can('ver-cadenas-avivamiento')) {
                            $btnEliminar .= '<button type="button" onclick="eliminarCadenaModalConfirm(\'' . $cadena['id'] . '\')" class="btn btn-icon btn-danger"><i class="fa fa-trash"></i></button>';
                        }
                    }



                    $tablaHTML .=  '<tr>' .
                        '<td>' .
                        $cadena['nombre'] .
                        '</td>' .
                        '<td class="text-center">' .
                        $cadena['estado'] .
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

        if (Auth::user()->can('crear-cadenas-avivamiento', 'editar-cadenas-avivamiento', 'crear-cadenas-adoracion', 'editar-cadenas-adoracion')) {
            $idCadena = $request->input('idCadena');
            $tipo_cadena = $request->input('tipo_cadena');
            $arrCoros = json_decode($request->input('coros'), true);

            //VALIDO LOS CAMPOS
            $validator = Validator::make($request->all(), [
                'nombre' => 'required',
                'nota' => 'nullable|min:1',
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

            //SI EL ARRAY DE COROS VIENE VACIO
            if (empty($arrCoros)) {
                return response()->json([
                    'estado' => false,
                    'titulo' => 'Error',
                    'msg' => '',
                    'errors' => 'No ha añadido ningún coro a la cadena'
                ]);
            }

            try {
                //SI EL ID ES 0, ENTONCES ES NUEVO REGISTRO
                if (intval($idCadena) === 0) {

                    //SI PASAN LAS VALIDACIONES, HAGO EL REGISTRO
                    $cadena = Cadena::create([
                        'tipo_cadena' => $tipo_cadena,
                        'nombre' => $request->input('nombre'),
                        'slug' => Str::slug($request->input('nombre')),
                        'nota' => ($request->input('nota') == 0) ? null : $request->input('nota'), //SI NO HA SELECCIONADO
                        'estado' => $request->input('estado'),
                        'id_usuario' => Auth::user()->id
                    ]);

                    foreach ($arrCoros as $coro) {
                        DetalleCadena::create([
                            'id_cadena' => $cadena['id'],
                            'id_coro' => $coro['id'],
                            'numero' => $coro['numero']
                        ]);
                    }

                    return response()->json(
                        [
                            'estado' => true,
                            'titulo' => 'Éxito',
                            'msg' => 'Registro realizado',
                            'datos' => $cadena
                        ]
                    );
                } else {
                    //ES EDICION

                    $cadena = Cadena::find($idCadena);
                    $cadena->nombre = $request->input('nombre');
                    $cadena->slug = Str::slug($request->input('nombre'));
                    $cadena->nota = $request->input('nota');
                    $cadena->estado = $request->input('estado');
                    $cadena->save();

                    //ELIMINO LOS DETALLES
                    DetalleCadena::where('id_cadena', $idCadena)->delete();

                    //CREO LOS NUEVOS
                    foreach ($arrCoros as $coro) {
                        DetalleCadena::create([
                            'id_cadena' => $cadena['id'],
                            'id_coro' => $coro['id'],
                            'numero' => $coro['numero']
                        ]);
                    }

                    return response()->json(
                        [
                            'estado' => true,
                            'titulo' => 'Éxito',
                            'msg' => 'Actualización realizada',
                            'datos' => $cadena
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

    public function obtenerCoros($tipo_cadena)
    {
        try {
            if (Auth::user()->can('ver-cadenas-avivamiento', 'ver-cadenas-adoracion')) {
                //OBTENGO EL LISTADO DE LOS COROS
                $coros = Coro::where('tipo_coro', $tipo_cadena)->where('estado', true)->get();

                $htmlCoros = "";
                $htmlCoros .= '<option value="0">Seleccione una opción</option>';
                for ($i = 0; $i < count($coros); $i++) {
                    $htmlCoros .= '<option value="' . $coros[$i]['id'] . '">' . $coros[$i]['nombre'] . '</option>';
                }

                return response()->json(
                    [
                        'estado' => true,
                        'titulo' => 'Éxito',
                        'msg' => 'Datos obtenidos correctamente',
                        'datos' => $htmlCoros
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

    public function obtenerCadena($id)
    {
        try {
            if (Auth::user()->can('ver-cadenas-avivamiento', 'ver-cadenas-adoracion')) {
                if ($id != 0) {
                    //OBTENGO LOS DATOS
                    $cadena =   Cadena::find($id);
                    $coros = DetalleCadena::select(
                        'detalle_cadenas.id_coro',
                        'detalle_cadenas.id_cadena',
                        'detalle_cadenas.numero',
                        'coros.nombre'
                    )->join('coros', 'coros.id', 'detalle_cadenas.id_coro')
                        ->where('detalle_cadenas.id_cadena', $cadena->id)->orderBy('detalle_cadenas.numero')->get();
                    $cadena->coros = $coros;


                    return response()->json(
                        [
                            'estado' => true,
                            'titulo' => 'Éxito',
                            'msg' => 'Datos obtenidos correctamente',
                            'datos' => $cadena
                        ]
                    );
                } else {
                    return response()->json(
                        [
                            'estado' => false,
                            'titulo' => 'Error',
                            'msg' => 'No existe la cadena',
                            'errors' => 'No existe la cadena',
                        ]
                    );
                }
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
            if (Auth::user()->can('ver-cadenas-avivamiento', 'ver-cadenas-adoracion')) {
                if ($id != 0) {
                    //OBTENGO LOS DATOS
                    $coro =   Coro::find($id);

                    return response()->json(
                        [
                            'estado' => true,
                            'titulo' => 'Éxito',
                            'msg' => 'Datos obtenidos correctamente',
                            'datos' => $coro
                        ]
                    );
                } else {
                    return response()->json(
                        [
                            'estado' => false,
                            'titulo' => 'Error',
                            'msg' => 'No existe el coro',
                            'errors' => 'No existe el coro',
                        ]
                    );
                }
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

    public function eliminarCadena(Request $request)
    {
        try {
            if (Auth::user()->can('borrar-cadenas-avivamiento', 'borrar-cadenas-adoracion')) {
                //OBTENGO EL ID DEL POST
                $idCadena = intval(json_decode($request->getContent(), true)['idCadena']);


                //ELIMINO LOS DETALLES
                DetalleCadena::where('id_cadena', $idCadena)->delete();

                //OBTENGO EL REGISTRO Y LO ELIMINO
                Cadena::find($idCadena)->delete();

                return response()->json(
                    [
                        'estado' => true,
                        'titulo' => 'Éxito',
                        'msg' => 'Eliminación realizada',
                        'datos' => $idCadena
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
