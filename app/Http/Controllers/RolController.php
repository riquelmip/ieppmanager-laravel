<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolController extends Controller
{

    function __construct()
    {
        //DOY LOS PERMISOS SEGUN EL ROL
        //El metodo index tiene todos los permisos debido a que ahi estan los botones
        $this->middleware('permission:ver-roles|crear-roles|editar-roles|borrar-roles', ['only' => ['index']]);
        //Permiso de crear roles solo tiene acceso los metodos create y store
        $this->middleware('permission:crear-roles', ['only' => ['create', 'store']]);
        //Permiso de editar roles solo tiene acceso los metodos edit y update
        $this->middleware('permission:editar-roles', ['only' => ['edit', 'update']]);
        //Permiso de borrar roles solo tiene acceso el metodo destroy
        $this->middleware('permission:borrar-roles', ['only' => ['destroy']]);
    }

    public function index()
    {
        try {
            //HAGO EL SELECT A LA BASE DE DATOS PARA PODER MOSTRAR LOS REGISTROS
            $roles = Role::all();

            return view('content.roles.index', compact('roles'));
        } catch (Exception $e) {

            return redirect()->route('content.roles.index')->with('error', true);
        }
    }

    public function getPermisos(Request $request)
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
                        '<input class="js-switch" type="checkbox" id="permission[]" name="permission[]" onchange="quitarPermiso(' . $permiso['id'] . ',\'' . $idRol . '\')" checked></input>' .
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
                        '<input class="js-switch" type="checkbox" id="permission[]" name="permission[]" onchange="ponerPermiso(' . $permiso['id'] . ',\'' . $idRol . '\')"></input>' .
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

    public function create()
    {
    }

    public function store(Request $request)
    {
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
            //SI PASAN LAS VALIDACIONES, HAGO EL REGISTRO
            $rol = Role::create(['name' => $request->input('name')]);

            //ASIGNO LOS PERMISOS DE ESE ROL SEGUN LOS CHECKBOX DEL FORM
            // $rol->syncPermissions($request->input('permission'));

            return response()->json(
                [
                    'estado' => true,
                    'titulo' => 'Éxito',
                    'msg' => 'Registro realizado',
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

    public function cargarTabla()
    {
        try {
            //HAGO EL SELECT A LA BASE DE DATOS PARA PODER MOSTRAR LOS REGISTROS
            $roles = Role::all();

            $tablaHTML = '';


            foreach ($roles as $rol) {
                $btnPermisos = '';
                $btnEditar = '';
                $btnEliminar = '';

                if ($rol['id'] != 1) {
                    $btnPermisos .= '<button type="button" onclick="permisosRolModal(\'' . $rol['id'] . '\')" class="btn btn-icon btn-warning"><i class="fa fa-shield"></i></button>';
                    $btnEditar .= '<a href="#" class="btn btn-icon btn-primary"><i class="fa fa-edit"></i></a>';
                    $btnEliminar .= '<a href="#" class="btn btn-icon btn-danger"><i class="fa fa-trash"></i></a>';
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

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        try {
            //OBTENGO LOS DATOS DEL ROL
            $rol = Role::findById($id);

            //OBTENGO EL LISTADO DE PERMISOS
            $permisos = Permission::get();

            //OBTENGO LOS PERMISOS DE ESE ROL
            $rolesPermisos = DB::table('role_has_permissions')->where('role_has_permissions.role_id', $id)->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')->all();

            return view('roles.editar', compact('rol', 'permisos', 'rolesPermisos'));
        } catch (\Illuminate\Database\QueryException $e) {
            // Si ocurre una excepción al hacer la consulta, se maneja aquí
            //return response()->json(['message' => 'Ocurrió un error al hacer la consulta'], 500);
            return redirect()->route('roles.index')->with('error', true);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //VALIDO EL FORMULARIO
        $this->validate($request, ['name' => 'required', 'permission' => 'required']);

        try {
            //OBTENGO LOS DATOS DE ESE ROL
            $rol = Role::findById($id);

            //HAGO LA EDICION DEL NOMBRE
            $rol->name = $request->input('name');
            $rol->save();

            //ASIGNO NUEVAMENTE LOS PERMISOS
            $rol->syncPermissions($request->input('permission'));

            return redirect()->route('roles.index')->with('editar', true);
        } catch (\Illuminate\Database\QueryException $e) {
            // Si ocurre una excepción al hacer la consulta, se maneja aquí
            //return response()->json(['message' => 'Ocurrió un error al hacer la consulta'], 500);
            return redirect()->route('roles.index')->with('error', true);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            //OBTENGO EL REGISTRO DE ROL Y LO ELIMINO
            DB::table('roles')->where('id', $id)->delete();

            return redirect()->route('roles.index')->with('eliminar', true);
        } catch (\Illuminate\Database\QueryException $e) {
            // Si ocurre una excepción al hacer la consulta, se maneja aquí
            //return response()->json(['message' => 'Ocurrió un error al hacer la consulta'], 500);
            return redirect()->route('roles.index')->with('error', true);
        }
    }
}
