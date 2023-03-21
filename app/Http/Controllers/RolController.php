<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolController extends Controller
{

    function __construct()
    {
        //DOY LOS PERMISOS SEGUN EL ROL
        $this->middleware('permission:ver-roles|crear-roles|editar-roles|borrar-roles', ['only' => ['index']]);
        $this->middleware('permission:ver-roles',
            ['only' => ['cargarTabla', 'obtenerRol']]
        );
        $this->middleware('permission:crear-roles', ['only' => ['guardar']]);
        $this->middleware('permission:editar-roles', ['only' => ['guardar']]);
        $this->middleware('permission:borrar-roles', ['only' => ['eliminarRol']]);
        $this->middleware('permission:asignar-permisos', ['only' => ['ponerPermiso', 'quitarPermiso', 'obtenerPermisos']]);
    }

    public function index()
    {
        try {
            return view('content.roles.index');
        } catch (Exception $e) {

            // return redirect()->route('content.roles.index')->with('error', true);
        }
    }

    public function obtenerPermisos(Request $request)
    {
        try {
            //OBTENGO EL ID DEL ROL DEL POST
            $idRol = intval(json_decode($request->getContent(), true)['idRol']);
            //OBTENGO EL LISTADO DE LOS PERMISOS
            $permisos = Permission::get();
            //OBTENGO EL LISTADO DE LOS PERMISOS ASIGNADOS AL ROL
            $permisosRol = DB::table('role_has_permissions')->where('role_id', '=', $idRol)->get();
            //COMO ES UNA COLECCION EL LISTADO DE PERMISOS DEL ROL, CONVIERTO ESA COLECCION A ARRAY NATIVO PHP
            $arrayPermisosRol = $permisosRol->toArray();
            //EXTRAIGO LA COLUMNA DE EL ID DEL PERMISO EN UN SOLO ARRAY
            $id_arrayPermisosRol = array_column($arrayPermisosRol, 'permission_id');
            //CREO EL HTML
            $permisosHTML = '';

            //RECORRO EL ARRAY DE LOS PERMISOS
            foreach ($permisos as $permiso) {

                //VERIFICO SI EL ID DEL LISTADO QUE VA EN EL FOR, EXISTE EN EL ARRAY COLUMNA ID DE LOS PERMISOS QUE YA ESTAN ASIGNADOS
                if (in_array(intval($permiso['id']), $id_arrayPermisosRol)) {
                    //SI COINCIDE, ENTONCES PONGO EL CHECK ACTIVADO
                    $permisosHTML .=
                        "<tr>" .
                        "<td>" .
                        $permiso["id"] .
                        "</td>" .
                        "<td>" .
                        $permiso["name"] .
                        "</td>" .
                        '<td class="text-center">' .
                        '<input class="js-switch" type="checkbox" id="permiso-' . $permiso['id'] . '-rol-' . $idRol . '" name="permiso-' . $permiso['id'] . '-rol-' . $idRol . '" onchange="quitarPermiso(' . $permiso['id'] . ',\'' . $idRol . '\')" checked></input>' .
                        "</tr>";
                } else {
                    //SINO LO PONGO SIN CHECKAR
                    $permisosHTML .=
                        "<tr>" .
                        "<td>" .
                        $permiso["id"] .
                        "</td>" .
                        "<td>" .
                        $permiso["name"] .
                        "</td>" .
                        '<td class="text-center">' .
                        '<input class="js-switch" type="checkbox" id="permiso-' . $permiso['id'] . '-rol-' . $idRol . '" name="permiso-' . $permiso['id'] . '-rol-' . $idRol . '" onchange="ponerPermiso(' . $permiso['id'] . ',\'' . $idRol . '\')"></input>' .
                        "</tr>";
                }
            }

            return response()->json(
                [
                    'estado' => true,
                    'titulo' => 'Éxito',
                    'msg' => 'Datos obtenidos correctamente',
                    'datos' => $permisosHTML
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
        $idRol = $request->input('idRol');

        //VALIDO LOS CAMPOS
        $validator = Validator::make($request->all(), [
            'name' => 'required',
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

        try {
            //SI EL ID ES 0, ENTONCES ES NUEVO REGISTRO
            if (intval($idRol) === 0) {
                //SI PASAN LAS VALIDACIONES, HAGO EL REGISTRO
                $rol = Role::create(['name' => $request->input('name')]);

                return response()->json(
                    [
                        'estado' => true,
                        'titulo' => 'Éxito',
                        'msg' => 'Registro realizado',
                        'datos' => $rol
                    ]
                );
            } else {
                //ES EDICION

                //OBTENGO LOS DATOS DE ESE ROL
                $rol = Role::findById($idRol);

                //HAGO LA EDICION DEL NOMBRE
                $rol->name = $request->input('name');
                $rol->save();

                return response()->json(
                    [
                        'estado' => true,
                        'titulo' => 'Éxito',
                        'msg' => 'Actualización realizada',
                        'datos' => $rol
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

    public function quitarPermiso(Request $request)
    {
        try {
            //OBTENGO EL ID DEL ROL DEL POST
            $idRol = intval(json_decode($request->getContent(), true)['idRol']);
            //OBTENGO EL ID DEL PERMISO DEL POST
            $idPermiso = intval(json_decode($request->getContent(), true)['idPermiso']);

            //OBTENGO LOS DATOS DEL ROL
            $rol = Role::findById($idRol);
            //OBTENGO LOS DATOS DEL PERMISO
            $permiso = Permission::findById($idPermiso);

            //SI EL ROL TIENE ASIGNADO ESE PERMISO
            if ($rol->hasPermissionTo($permiso['name'])) {
                //LE QUITO EL PERMISO, ES DECIR LO REVOCO
                $rol->revokePermissionTo($permiso['name']);
                return response()->json(
                    [
                        'estado' => true,
                        'titulo' => 'Éxito',
                        'msg' => 'El permiso se ha quitado a este rol',
                        'datos' => $rol
                    ]
                );
            } else {
                // El rol no tiene asignado el permiso
                return response()->json(
                    [
                        'estado' => false,
                        'titulo' => 'Error',
                        'msg' => 'No se puede revocar el permiso, ya que no está asignado a este rol',
                        'errors' => 'No se puede revocar el permiso, ya que no está asignado a este rol'
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

    public function ponerPermiso(Request $request)
    {
        try {
            //OBTENGO EL ID DEL ROL DEL POST
            $idRol = intval(json_decode($request->getContent(), true)['idRol']);
            //OBTENGO EL ID DEL PERMISO DEL POST
            $idPermiso = intval(json_decode($request->getContent(), true)['idPermiso']);

            //OBTENGO LOS DATOS DEL ROL
            $rol = Role::findById($idRol);
            //OBTENGO LOS DATOS DEL PERMISO
            $permiso = Permission::findById($idPermiso);

            //SI EL ROL TIENE ASIGNADO ESE PERMISO
            if ($rol->hasPermissionTo($permiso['name'])) {
                return response()->json(
                    [
                        'estado' => false,
                        'titulo' => 'Error',
                        'msg' => 'El permiso ya está asignado a ese rol',
                        'errors' => 'El permiso ya está asignado a ese rol'
                    ]
                );
            } else {
                // El rol no tiene asignado el permiso
                //LE ASIGNO EL PERMISO
                $rol->givePermissionTo($permiso['name']);
                return response()->json(
                    [
                        'estado' => true,
                        'titulo' => 'Éxito',
                        'msg' => 'El permiso se ha asignado a este rol',
                        'datos' => $rol
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

    public function cargarTabla()
    {
        try {
            //OBTENGO LOS DATOS DEL USUARIO LOGUEADO Y SU ROL
            $usuarioLogueado = User::with('roles')->find(Auth::user()->id);
            $rolLogueado = $usuarioLogueado->roles->first();
             
            //HAGO EL SELECT A LA BASE DE DATOS PARA PODER MOSTRAR LOS REGISTROS
            $roles = Role::all();

            $tablaHTML = '';


            foreach ($roles as $rol) {
                $btnPermisos = '';
                $btnEditar = '';
                $btnEliminar = '';

                if ($rol['id'] != 1) {

                    if ($rolLogueado->hasPermissionTo('asignar-permisos')) {
                        $btnPermisos .= '<button type="button" onclick="permisosRolModal(\'' . $rol['id'] . '\')" class="btn btn-icon btn-warning"><i class="fa fa-shield"></i></button>';
                    }
                    if ($rolLogueado->hasPermissionTo('editar-roles')) {
                        $btnEditar .= '<button type="button" onclick="editarRolModal(\'' . $rol['id'] . '\')" class="btn btn-icon btn-primary"><i class="fa fa-edit"></i></button>';
                    }
                    if ($rolLogueado->hasPermissionTo('borrar-roles')) {
                        $btnEliminar .= '<button type="button" onclick="eliminarRolModalConfirm(\'' . $rol['id'] . '\')" class="btn btn-icon btn-danger"><i class="fa fa-trash"></i></button>';
                    }
                    
                }

                $tablaHTML .=  '<tr>' .
                    '<td>' .
                    $rol['id'] .
                    '</td>' .
                    '<td>' .
                    $rol['name'] .
                    '</td>' .
                    '<td class="text-center">' .
                    $btnPermisos . ' ' . $btnEditar . ' ' . $btnEliminar .
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

    public function obtenerRol($id)
    {
        try {
            //OBTENGO LOS DATOS DEL ROL
            $rol = Role::findById($id);
            return response()->json(
                [
                    'estado' => true,
                    'titulo' => 'Éxito',
                    'msg' => 'Datos obtenidos correctamente',
                    'datos' => $rol
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

    public function eliminarRol(Request $request)
    {
        try {
            //OBTENGO EL ID DEL ROL DEL POST
            $idRol = intval(json_decode($request->getContent(), true)['idRol']);
            //OBTENGO EL REGISTRO DE ROL Y LO ELIMINO
            DB::table('roles')->where('id', $idRol)->delete();

            return response()->json(
                [
                    'estado' => true,
                    'titulo' => 'Éxito',
                    'msg' => 'Eliminación realizada',
                    'datos' => $idRol
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
