<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
            // Si ocurre una excepción al hacer la consulta, se maneja aquí
            //return response()->json(['message' => 'Ocurrió un error al hacer la consulta'], 500);
            return redirect()->route('content.roles.index')->with('error', true);
            //return response()->json(['error' => $e->getMessage()]);
        }
    }

    public function getPermisos()
    {
        try {
            //HAGO EL SELECT A LA BASE DE DATOS PARA PODER MOSTRAR LOS REGISTROS
            $permisos = Permission::get();

            return response()->json(
                [
                    'estado' => true,
                    'msg' => 'Datos obtenidos correctamente',
                    'datos' => $permisos
                ]
            );
        } catch (Exception $e) {
            return response()->json(
                [
                    'estado' => false,
                    'msg' => 'Ocurrió un error al obtener la información',
                    'error' => $e->getMessage()
                ]
            );
        }
    }

    public function create()
    {
        try {
            //OBTENGO EL LISTADO DE PERMISOS
            $permission = Permission::get();

            //LLAMO A LA VISTA CREAR
            return view('roles.crear', compact('permission'));
        } catch (\Illuminate\Database\QueryException $e) {
            // Si ocurre una excepción al hacer la consulta, se maneja aquí
            //return response()->json(['message' => 'Ocurrió un error al hacer la consulta'], 500);
            return redirect()->route('roles.index')->with('error', true);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //VALIDO EL FORMULARIO
        $this->validate($request, ['name' => 'required', 'permission' => 'required']);

        try {
            //SI PASAN LAS VALIDACIONES, HAGO EL REGISTRO
            $rol = Role::create(['name' => $request->input('name')]);

            //ASIGNO LOS PERMISOS DE ESE ROL SEGUN LOS CHECKBOX DEL FORM
            $rol->syncPermissions($request->input('permission'));

            return redirect()->route('roles.index')->with('crear', true);
        } catch (\Illuminate\Database\QueryException $e) {
            // Si ocurre una excepción al hacer la consulta, se maneja aquí
            //return response()->json(['message' => 'Ocurrió un error al hacer la consulta'], 500);
            return redirect()->route('roles.index')->with('error', true);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
