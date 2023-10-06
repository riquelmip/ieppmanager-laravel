<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Alabanza;
use App\Models\Predica;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PredicaController extends Controller
{
    function __construct()
    {
        //DOY LOS PERMISOS SEGUN EL ROL
        $this->middleware('permission:ver-predicas|crear-predicas|editar-predicas|borrar-predicas', ['only' => ['index', 'cargarTabla']]);
        $this->middleware(
            'permission:ver-predicas',
            ['only' => ['cargarTabla', 'obtener']]
        );
        $this->middleware('permission:crear-predicas', ['only' => ['guardar']]);
        $this->middleware('permission:editar-predicas', ['only' => ['guardar']]);
        $this->middleware('permission:borrar-predicas', ['only' => ['eliminar']]);
    }

    public function index()
    {
        try {
            return view('content.predicas.index');
        } catch (Exception $e) {

            // return redirect()->route('content.roles.index')->with('error', true);
        }
    }

    public function cargarTabla()
    {
        try {
            //OBTENGO LOS DATOS DEL USUARIO LOGUEADO Y SU ROL
            $usuarioLogueado = User::with('roles')->find(Auth::user()->id);
            $rolLogueado = $usuarioLogueado->roles->first();

            //HAGO EL SELECT A LA BASE DE DATOS PARA PODER MOSTRAR LOS REGISTROS
            if ($usuarioLogueado->id != 1) { //no es superadmin
                $predicas = Predica::where('id_usuario', $usuarioLogueado->id)->get();
            } else {
                $predicas = Predica::all();
            }

            $tablaHTML = '';

            foreach ($predicas as $predica) {
                if ($predica['estado'] === 0) {
                    $predica['estado'] = '<span class="badge badge-warning">Inactivo</span>';
                } else {
                    $predica['estado'] = '<span class="badge badge-primary">Activo</span>';
                }

                $btnEditar = '';
                $btnEliminar = '';


                if ($rolLogueado->hasPermissionTo('editar-predicas')) {
                    $btnEditar .= '<button type="button" onclick="editarPredicaModal(\'' . $predica['id'] . '\')" class="btn btn-icon btn-primary"><i class="fa fa-edit"></i></button>';
                }

                if ($rolLogueado->hasPermissionTo('borrar-predicas')) {
                    $btnEliminar .= '<button type="button" onclick="eliminarPredicaModalConfirm(\'' . $predica['id'] . '\')" class="btn btn-icon btn-danger"><i class="fa fa-trash"></i></button>';
                }


                $tablaHTML .=  '<tr>' .
                    '<td>' .
                    $predica['nombre'] .
                    '</td>' .
                    '<td>' .
                    $predica['descripcion_corta'] .
                    '</td>' .
                    '<td class="text-center">' .
                    $predica['estado'] .
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
        $idPredica = $request->input('idPredica');

        try {
            //SI EL ID ES 0, ENTONCES ES NUEVO REGISTRO
            if (intval($idPredica) === 0) {

                //VALIDO LOS CAMPOS
                $validator = Validator::make($request->all(), [
                    'nombre' => 'required|unique:predicas',
                    'estado' => 'required',
                    'descripcion_corta' => 'required',
                    'descripcion_larga' => 'required',
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
                $predica = Predica::create([
                    'nombre' => $request->input('nombre'),
                    'estado' => $request->input('estado'),
                    'descripcion_corta' => $request->input('descripcion_corta'),
                    'descripcion_larga' => $request->input('descripcion_larga'),
                    'id_usuario' => Auth::user()->id,
                ]);

                return response()->json(
                    [
                        'estado' => true,
                        'titulo' => 'Éxito',
                        'msg' => 'Registro realizado',
                        'datos' => $predica
                    ]
                );
            } else {
                //ES EDICION

                //VALIDO LOS CAMPOS
                $validator = Validator::make($request->all(), [
                    'nombre' => 'required|unique:predicas,nombre,' . $idPredica,
                    'estado' => 'required',
                    'descripcion_corta' => 'required',
                    'descripcion_larga' => 'required',
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

                $predica = Predica::find($idPredica);
                $predica->nombre = $request->input('nombre');
                $predica->estado = $request->input('estado');
                $predica->descripcion_corta = $request->input('descripcion_corta');
                $predica->descripcion_larga = $request->input('descripcion_larga');
                $predica->id_usuario = Auth::user()->id;
                $predica->save();

                return response()->json(
                    [
                        'estado' => true,
                        'titulo' => 'Éxito',
                        'msg' => 'Actualización realizada',
                        'datos' => $predica
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

    public function obtener($id)
    {
        try {
            //OBTENGO LOS DATOS
            $predica = Predica::find($id);

            return response()->json(
                [
                    'estado' => true,
                    'titulo' => 'Éxito',
                    'msg' => 'Datos obtenidos correctamente',
                    'datos' => $predica
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

    public function eliminar(Request $request)
    {
        try {
            //OBTENGO EL ID DEL POST
            $idPredica = intval(json_decode($request->getContent(), true)['idPredica']);

            //OBTENGO EL REGISTRO Y LO ELIMINO
            Predica::find($idPredica)->delete();

            return response()->json(
                [
                    'estado' => true,
                    'titulo' => 'Éxito',
                    'msg' => 'Eliminación realizada',
                    'datos' => $idPredica
                ]
            );
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
