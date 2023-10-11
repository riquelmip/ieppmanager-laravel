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
use Illuminate\Support\Str;

class PredicaController extends Controller
{
    public function index()
    {
        try {
            if (Auth::user()->can('ver-predicas')) {
                return view('content.predicas.index');
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
            if (Auth::user()->can('ver-predicas')) {

                //HAGO EL SELECT A LA BASE DE DATOS PARA PODER MOSTRAR LOS REGISTROS
                if (Auth::user()->id != 1) { //no es superadmin
                    $predicas = Predica::where('id_usuario', Auth::user()->id)->get();
                } else {
                    $predicas = Predica::all();
                }

                $tablaHTML = '';
                $contadorPagina = 1; // Inicializa un contador de página
                foreach ($predicas as $predica) {
                    if ($predica['estado'] === 0) {
                        $predica['estado'] = '<span class="badge badge-warning">Inactivo</span>';
                    } else {
                        $predica['estado'] = '<span class="badge badge-primary">Activo</span>';
                    }

                    $btnVer = '';
                    $btnEditar = '';
                    $btnEliminar = '';


                    if (Auth::user()->can('ver-predicas')) {
                        $btnVer .= '<a href="' . url("/predicas/ver-predica?page={$contadorPagina}") . '" class="btn btn-icon btn-primary"><i class="fa fa-eye"></i></a>';
                    }

                    if (Auth::user()->can('editar-predicas')) {
                        $btnEditar .= '<button type="button" onclick="editarPredicaModal(\'' . $predica['id'] . '\')" class="btn btn-icon btn-primary"><i class="fa fa-edit"></i></button>';
                    }

                    if (Auth::user()->can('borrar-predicas')) {
                        $btnEliminar .= '<button type="button" onclick="eliminarPredicaModalConfirm(\'' . $predica['id'] . '\')" class="btn btn-icon btn-danger"><i class="fa fa-trash"></i></button>';
                    }


                    $tablaHTML .=  '<tr>' .
                        '<td>' .
                        $contadorPagina .
                        '</td>' .
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
                        $btnVer . ' ' . $btnEditar . ' ' . $btnEliminar .
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

    public function verPredica()
    {
        try {
            if (Auth::user()->can('ver-predicas')) {
                $predicasPaginadas = Predica::where('estado', true)
                    ->orderBy('id')
                    ->paginate(1);

                return view('content.predicas.ver', compact('predicasPaginadas'));
            }
        } catch (Exception $e) {
            return view('content.error.404');
        }
    }

    public function guardar(Request $request)
    {
        $idPredica = $request->input('idPredica');

        try {
            if (Auth::user()->can('crear-predicas', 'editar-predicas')) {
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
                        'slug' => Str::slug($request->input('nombre')),
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
                    $predica->slug = Str::slug($request->input('nombre'));
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
            if (Auth::user()->can('ver-predicas')) {
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
            if (Auth::user()->can('borrar-predicas')) {
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
