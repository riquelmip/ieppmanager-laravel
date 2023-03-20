<?php

use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    //RUTAS ROLES
    Route::get('/roles', [RolController::class, 'index'])->name('roles');
    Route::post('/roles/permisos', [RolController::class, 'obtenerPermisos'])->name('roles/permisos');
    Route::post('/roles/quitarpermiso', [RolController::class, 'quitarPermiso'])->name('roles/quitarpermiso');
    Route::post('/roles/ponerpermiso', [RolController::class, 'ponerPermiso'])->name('roles/ponerpermiso');
    Route::get('/roles/cargartabla', [RolController::class, 'cargarTabla'])->name('roles/cargartabla');
    Route::get('/roles/ver/{id}', [RolController::class, 'obtenerRol']);
    Route::post('/roles/guardar', [RolController::class, 'guardar'])->name('roles/guardar');
    Route::post('/roles/eliminar', [RolController::class, 'eliminarRol'])->name('roles/eliminar');

    //RUTAS USUARIOS
    Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios');
    Route::get('/usuarios/cargartabla', [UsuarioController::class, 'cargarTabla'])->name('usuarios/cargartabla');
    Route::post('/usuarios/guardar', [UsuarioController::class, 'guardar'])->name('usuarios/guardar');
});
