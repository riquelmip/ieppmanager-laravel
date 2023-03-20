<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Validator;

class UsuarioController extends Controller
{

    function __construct()
    {
        //DOY LOS PERMISOS SEGUN EL ROL
        //El metodo index tiene todos los permisos debido a que ahi estan los botones
        $this->middleware('permission:ver-usuarios|crear-usuarios|editar-usuarios|borrar-usuarios', ['only' => ['index']]);
        //Permiso de crear usuarios solo tiene acceso los metodos create y store
        $this->middleware('permission:crear-usuarios', ['only' => ['create', 'store']]);
        //Permiso de editar usuarios solo tiene acceso los metodos edit y update
        $this->middleware('permission:editar-usuarios', ['only' => ['edit', 'update']]);
        //Permiso de borrar usuarios solo tiene acceso el metodo destroy
        $this->middleware('permission:borrar-usuarios', ['only' => ['destroy']]);
    }

   
    public function index()
    {
        try {
            return view('content.usuarios.index');
        } catch (Exception $e) {

            // return redirect()->route('content.roles.index')->with('error', true);
        }
    }

    public function cargarTabla()
    {
        try {
            //HAGO EL SELECT A LA BASE DE DATOS PARA PODER MOSTRAR LOS REGISTROS
            $usuarios = User::all();

            $tablaHTML = '';


            foreach ($usuarios as $usuario) {
                if ($usuario['estado'] === 0) {
                    $usuario['estado'] = '<span class="badge badge-warning">Inactivo</span>';
                } else {
                    $usuario['estado'] = '<span class="badge badge-primary">Activo</span>';
                }

                $btnEditar = '';
                $btnEliminar = '';

                if ($usuario['id'] != 1) {
                    $btnEditar .= '<button type="button" onclick="editarUsuarioModal(\'' . $usuario['id'] . '\')" class="btn btn-icon btn-primary"><i class="fa fa-edit"></i></button>';
                    $btnEliminar .= '<button type="button" onclick="eliminarUsuarioModalConfirm(\'' . $usuario['id'] . '\')" class="btn btn-icon btn-danger"><i class="fa fa-trash"></i></button>';
                }

                $tablaHTML .=  '<tr>' .
                '<td>' .
                $usuario['id'] .
                '</td>' .
                '<td>' .
                $usuario['username'] .
                '</td>' .
                '<td>' .
                $usuario['email'] .
                '</td>' .
                '<td>' .
                $usuario['estado'] .
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
        $idUsuario = $request->input('idUsuario');

        //VALIDO LOS CAMPOS
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'rol' => 'required',
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

        try {
            //SI EL ID ES 0, ENTONCES ES NUEVO REGISTRO
            if (intval($idUsuario) === 0) {
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


    
    public function create()
    {
        try {
            //OBTENGO EL LISTADO DE LOS ROLES PARA EL SELECT DEL FORM
            $roles = Role::where('id', '!=', '1')->pluck('name', 'name')->all(); //EXCEPTUANDO AL SUPER ADMIN

            return view('usuarios.crear', compact('roles'));
        } catch (\Illuminate\Database\QueryException $e) {
            // Si ocurre una excepción al hacer la consulta, se maneja aquí
            //return response()->json(['message' => 'Ocurrió un error al hacer la consulta'], 500);
            return redirect()->route('usuarios.index')->with('error', true);
        }
    }


    public function store(Request $request)
    {
        //VALIDO EL FORMULARIO
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);

        try {

            //AGREGO TODO EL REQUEST A UNA VARIABLE
            $input = $request->all();

            //HAGO EL HASH A LA CONTRASEÑA
            $input['password'] = Hash::make($input['password']);

            //HAGO EL REGISTRO
            $user = User::create($input);

            //ASIGNO EL ROL A ESE USUARIO
            $user->assignRole($request->input('roles'));

            return redirect()->route('usuarios.index')->with('crear', true);
        } catch (\Illuminate\Database\QueryException $e) {
            // Si ocurre una excepción al hacer la consulta, se maneja aquí
            //return response()->json(['message' => 'Ocurrió un error al hacer la consulta'], 500);
            return redirect()->route('usuarios.index')->with('error', true);
        }
    }

    public function edit($id)
    {
        try {
            //OBTENGO EL REGISTRO DE ESE USUARIO
            $usuario = User::find($id);

            //OBTENGO EL LISTADO DE LOS ROLES
            $roles = Role::where('id', '!=', '1')->pluck('name', 'name')->all();

            //OBTENGO EL ROL DE ESE USUARIO
            $usuarioRol = $usuario->roles->pluck('name', 'name')->all();

            return view('usuarios.editar', compact('usuario', 'roles', 'usuarioRol'));
        } catch (\Illuminate\Database\QueryException $e) {
            // Si ocurre una excepción al hacer la consulta, se maneja aquí
            //return response()->json(['message' => 'Ocurrió un error al hacer la consulta'], 500);
            return redirect()->route('usuarios.index')->with('error', true);
        }
    }


    public function update(Request $request, $id)
    {
        //VALIDO EL FORMULARIO
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);

        try {
            //AGREGO EL REQUEST A UNA VARIABLE INPUT
            $input = $request->all();

            //SI LA CONTRASEÑA NO VIENE VACIA
            if (!empty($input['password'])) {
                //HAGO EL HASH
                $input['password'] = Hash::make($input['password']);
            } else {
                //COMO NO VIENE CONTRASEÑA, LA SACO DEL ARRAY PARA QUE NO LA EDITE
                $input = Arr::except($input, array('password'));
            }

            //OBTENGO EL REGISTRO DE ESE USUARIO
            $user = User::find($id);

            //HAGO LA EDICION
            $user->update($input);

            //OBTENGO LA RELACION DEL USUARIOS Y SUS ROLES, Y LA ELIMINO
            DB::table('model_has_roles')->where('model_id', $id)->delete();

            //AHORA ASIGNO EL NUEVO ROL QUE VENIA DE LA EDICION
            $user->assignRole($request->input('roles'));

            return redirect()->route('usuarios.index')->with('editar', true);
        } catch (\Illuminate\Database\QueryException $e) {
            // Si ocurre una excepción al hacer la consulta, se maneja aquí
            //return response()->json(['message' => 'Ocurrió un error al hacer la consulta'], 500);
            return redirect()->route('usuarios.index')->with('error', true);
        }
    }


    public function destroy($id)
    {
        try {
            //OBTENGO EL REGISTRO DE ESE USUARIO Y LO ELIMINO
            User::find($id)->delete();

            return redirect()->route('usuarios.index')->with('eliminar', true);
        } catch (\Illuminate\Database\QueryException $e) {
            // Si ocurre una excepción al hacer la consulta, se maneja aquí
            //return response()->json(['message' => 'Ocurrió un error al hacer la consulta'], 500);
            return redirect()->route('usuarios.index')->with('error', true);
        }
    }

    public function show($id)
    {
        //
    }
}
