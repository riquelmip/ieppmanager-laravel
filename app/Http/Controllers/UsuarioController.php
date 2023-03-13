<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Models\User;

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
            //OBTENGO EL LISTADO DE USUARIOS PARA MOSTRAR LA VISTA
            $usuarios = User::paginate(5);

            return view('usuarios.index', compact('usuarios'));
        } catch (\Illuminate\Database\QueryException $e) {
            // Si ocurre una excepción al hacer la consulta, se maneja aquí
            //return response()->json(['message' => 'Ocurrió un error al hacer la consulta'], 500);
            return redirect()->route('usuarios.index')->with('error', true);
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
