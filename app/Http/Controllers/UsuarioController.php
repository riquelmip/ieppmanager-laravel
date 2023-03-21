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
use Illuminate\Support\Facades\Auth;

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
            //OBTENGO LOS DATOS DEL USUARIO LOGUEADO Y SU ROL
            $usuarioLogueado = User::with('roles')->find(Auth::user()->id);
            $rolLogueado = $usuarioLogueado->roles->first();

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

                    if ($rolLogueado->hasPermissionTo('editar-usuarios')) {
                        $btnEditar .= '<button type="button" onclick="editarUsuarioModal(\'' . $usuario['id'] . '\')" class="btn btn-icon btn-primary"><i class="fa fa-edit"></i></button>';
                    }

                    if ($rolLogueado->hasPermissionTo('borrar-usuarios')) {
                        $btnEliminar .= '<button type="button" onclick="eliminarUsuarioModalConfirm(\'' . $usuario['id'] . '\')" class="btn btn-icon btn-danger"><i class="fa fa-trash"></i></button>';
                    } 
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
                    '<td class="text-center">' .
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

        try {
            //SI EL ID ES 0, ENTONCES ES NUEVO REGISTRO
            if (intval($idUsuario) === 0) {

                //VALIDO LOS CAMPOS
                $validator = Validator::make($request->all(), [
                    'username' => 'required|unique:users',
                    'email' => 'required|email|unique:users',
                    'password' => 'required|same:confirm-password',
                    'rol' => 'required|min:1',
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

                //SI PASAN LAS VALIDACIONES, HAGO EL REGISTRO
                $usuario = User::create([
                    'username' => $request->input('username'),
                    'email' => $request->input('email'),
                    'password' => Hash::make($request->input('password')),
                    'estado' => $request->input('estado')
                ]);


                //OBTENGO LOS DATOS DEL ROL ELEGIDO
                $rol = Role::findById($request->input('rol'));

                //ASIGNO EL ROL A ESE USUARIO
                $usuario->assignRole($rol->name);

                return response()->json(
                    [
                        'estado' => true,
                        'titulo' => 'Éxito',
                        'msg' => 'Registro realizado',
                        'datos' => $usuario
                    ]
                );
            } else {
                //ES EDICION


                //VALIDO LOS CAMPOS
                $validator = Validator::make($request->all(), [
                    'username' => 'required|unique:users,username,' . $idUsuario,
                    'email' => 'required|email|unique:users,email,' . $idUsuario,
                    'password' => 'nullable|same:confirm-password',
                    'rol' => 'required|min:1',
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

                //OBTENGO LOS DATOS DE ESE USUARIO
                $usuario = User::find($idUsuario);

                //HAGO LA EDICION DEL USUARIO
                $usuario->username = $request->input('username');
                $usuario->email = $request->input('email');
                //SI LA CONTRASEÑA NO VIENE VACIA
                if (!is_null($usuario->password)) {
                    $usuario->password = Hash::make($request->input('password'));
                }
                $usuario->estado = $request->input('estado');
                $usuario->save();

                //OBTENGO LOS DATOS DEL ROL ELEGIDO
                $rol = Role::findById($request->input('rol'));

                //ASIGNO EL ROL A ESE USUARIO
                $usuario->syncRoles([$rol->name]); // reemplaza todos los roles anteriores por el nuevo rol 'nuevo_rol'

                return response()->json(
                    [
                        'estado' => true,
                        'titulo' => 'Éxito',
                        'msg' => 'Actualización realizada',
                        'datos' => $usuario
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

    public function obtenerRoles()
    {
        try {
            //OBTENGO EL LISTADO DE LOS ROLES   
            $roles = Role::all();

            $htmlRoles = "";
            $where_admin = "";
            // if ($_SESSION['login_datos_' . nombreproyecto()]['id'] != 1) {
            //     $where_admin = " AND id != 1";
            // }
            $htmlRoles .= '<option value="0">Seleccione una opción</option>';
            for ($i = 0; $i < count($roles); $i++) {
                //SI EL ROL NO ES DE SUPERADMINISTRADOR
                if ($roles[$i]['id'] != 1) {
                    $htmlRoles .= '<option value="' . $roles[$i]['id'] . '">' . $roles[$i]['name'] . '</option>';
                }
            }


            return response()->json(
                [
                    'estado' => true,
                    'titulo' => 'Éxito',
                    'msg' => 'Datos obtenidos correctamente',
                    'datos' => $htmlRoles
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

    public function obtenerUsuario($id)
    {
        try {
            //OBTENGO LOS DATOS DEL ROL
            //$usuario = User::findById($id);
            $usuario = User::with('roles')->find($id);

            //SI EL USUARIO TIENE ROL ASIGNADO
            if (!empty($usuario->roles)) {
                $rol = $usuario->roles->first();
                $usuario->roles = $usuario->roles->first();
            } else {
                //SI NO TIENE ROL ASIGNADO
                $usuario->roles = 0;
            }

            return response()->json(
                [
                    'estado' => true,
                    'titulo' => 'Éxito',
                    'msg' => 'Datos obtenidos correctamente',
                    'datos' => $usuario
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

    public function eliminarUsuario(Request $request)
    {
        try {
            //OBTENGO EL ID DEL USUARIO DEL POST
            $idUsuario = intval(json_decode($request->getContent(), true)['idUsuario']);

            //OBTENGO EL REGISTRO DE USUARIO Y LO ELIMINO
            User::find($idUsuario)->delete();

            return response()->json(
                [
                    'estado' => true,
                    'titulo' => 'Éxito',
                    'msg' => 'Eliminación realizada',
                    'datos' => $idUsuario
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
