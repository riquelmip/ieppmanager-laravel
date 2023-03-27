<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesPermisosSeeder extends Seeder
{
    public function run()
    {
        //CREANDO ROLES

        $roles = [
            'Super-Administrador',
            'Administrador',
        ];

        foreach ($roles as $rol) {
            Role::create(['name' => $rol]);
        }

        //CREANDO PERMISOS

        $permisos = [
            //Tabla roles
            'ver-roles',
            'crear-roles',
            'editar-roles',
            'borrar-roles',
            'asignar-permisos',

            //Tabla usuarios
            'ver-usuarios',
            'crear-usuarios',
            'editar-usuarios',
            'borrar-usuarios',

            //Tabla autores
            'ver-autores',
            'crear-autores',
            'editar-autores',
            'borrar-autores',

            //Tabla alabanzas
            'ver-alabanzas-himnario',
            'crear-alabanzas-himnario',
            'editar-alabanzas-himnario',
            'borrar-alabanzas-himnario',

            'ver-alabanzas-cancionero',
            'crear-alabanzas-cancionero',
            'editar-alabanzas-cancionero',
            'borrar-alabanzas-cancionero',

            //Tabla COROS
            'ver-coros-avivamiento',
            'crear-coros-avivamiento',
            'editar-coros-avivamiento',
            'borrar-coros-avivamiento',

            'ver-coros-adoracion',
            'crear-coros-adoracion',
            'editar-coros-adoracion',
            'borrar-coros-adoracion',

            //Tabla CADENAS
            'ver-cadenas-avivamiento',
            'crear-cadenas-avivamiento',
            'editar-cadenas-avivamiento',
            'borrar-cadenas-avivamiento',

            'ver-cadenas-adoracion',
            'crear-cadenas-adoracion',
            'editar-cadenas-adoracion',
            'borrar-cadenas-adoracion',
        ];

        foreach ($permisos as $permiso) {
            Permission::create(['name' => $permiso]);
        }

        //CREO EL SUPER USUARIO
        $usuario = User::create([
            'username' => 'superadmin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('superadmin'),
            'estado' => true,
        ]);

        // SI NO SE HA CREADO NINGUN ROL
        // $rol = Role::create(['name' => 'Super Administrador']);

        ///////////////////////////////////////////////////////////
        ////////////////        PARA SUPERADMIN
        ////////////////////////////////////////////////////////
        //SI YA SE CREARON LOS ROLES
        $superadminRol = Role::findByName('Super-Administrador'); //Obtengo el registro del super admin

        $permisosCreados = Permission::all(); //Obtengo el listado de los permisos

        $nombres_permisos = []; //Creo un array vacio

        foreach ($permisosCreados as $permiso) {
            $nombres_permisos[] = $permiso->name; //Agrego solo el nombre al array
        }

        $superadminRol->syncPermissions($nombres_permisos); //Asigno los permisos al rol de super admin

        $usuario->assignRole($superadminRol->name); //Asigno el rol al usuario super admin

        //SI YA SE CREARON ROLES
        //$usuario->assignRole('Administrador');







        ///////////////////////////////////////////////////////////
        ////////////////        PARA ADMIN
        ////////////////////////////////////////////////////////
        //SI YA SE CREARON LOS ROLES
        $adminRol = Role::findByName('Administrador'); //Obtengo el registro del admin

        $permisosCreadosAdmin = Permission::all(); //Obtengo el listado de los permisos

        $nombres_permisos_admin = []; //Creo un array vacio

        foreach ($permisosCreadosAdmin as $permiso) {
            $nombres_permisos_admin[] = $permiso->name; //Agrego solo el nombre al array
        }

        $adminRol->syncPermissions($nombres_permisos_admin); //Asigno los permisos al rol de admin


    }
}
