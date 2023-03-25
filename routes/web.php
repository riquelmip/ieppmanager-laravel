<?php

use App\Http\Controllers\AlabanzaController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\CoroController;
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
    Route::get('/usuarios/roles', [UsuarioController::class, 'obtenerRoles'])->name('usuarios/roles');
    Route::get('/usuarios/ver/{id}', [UsuarioController::class, 'obtenerUsuario']);
    Route::post('/usuarios/eliminar', [UsuarioController::class, 'eliminarUsuario'])->name('usuarios/eliminar');

    //RUTAS AUTORES
    Route::get('/autores', [AutorController::class, 'index'])->name('autores');
    Route::get('/autores/cargartabla', [AutorController::class, 'cargarTabla'])->name('autores/cargartabla');
    Route::post('/autores/guardar', [AutorController::class, 'guardar'])->name('autores/guardar');
    Route::get('/autores/ver/{id}', [AutorController::class, 'obtenerAutor']);
    Route::post('/autores/eliminar', [AutorController::class, 'eliminarAutor'])->name('autores/eliminar');

    //RUTAS HIMNARIO OFICIAL
    Route::get('/himnario', [AlabanzaController::class, 'himnario'])->name('himnario');
    Route::get('/himnario/cargartabla', [AlabanzaController::class, 'cargarTablaHimnario'])->name('himnario/cargartabla');
    Route::get('/himnario/autores', [AlabanzaController::class, 'obtenerAutores'])->name('himnario/autores');
    Route::post('/himnario/guardar', [AlabanzaController::class, 'guardarAlabanzaHimnario'])->name('himnario/guardar');
    Route::get('/himnario/ver/{id}', [AlabanzaController::class, 'obtenerAlabanzaHimnario']);
    Route::post('/himnario/eliminar', [AlabanzaController::class, 'eliminarAlabanzaHimnario'])->name('himnario/eliminar');

    //RUTAS CANCIONERO
    Route::get('/cancionero', [AlabanzaController::class, 'cancionero'])->name('cancionero');
    Route::get('/cancionero/cargartabla', [AlabanzaController::class, 'cargarTablaCancionero'])->name('cancionero/cargartabla');
    Route::get('/cancionero/autores', [AlabanzaController::class, 'obtenerAutores'])->name('cancionero/autores');
    Route::post('/cancionero/guardar', [AlabanzaController::class, 'guardarAlabanzaCancionero'])->name('cancionero/guardar');
    Route::get('/cancionero/ver/{id}', [AlabanzaController::class, 'obtenerAlabanzaCancionero']);
    Route::post('/cancionero/eliminar', [AlabanzaController::class, 'eliminarAlabanzaCancionero'])->name('cancionero/eliminar');

    //RUTAS COROS
    Route::get('/coros/avivamiento', [CoroController::class, 'avivamiento'])->name('coros/avivamiento');
    Route::get('/coros/adoracion', [CoroController::class, 'adoracion'])->name('coros/adoracion');
    Route::get('/coros/cargartabla/{id}', [CoroController::class, 'cargarTabla']);
    Route::post('/coros/guardar', [CoroController::class, 'guardar'])->name('coros/guardar');
    Route::get('/coros/autores', [CoroController::class, 'obtenerAutores'])->name('coros/autores');
    Route::get('/coros/ver/{id}', [CoroController::class, 'obtenerCoro']);
    Route::post('/coros/eliminar', [CoroController::class, 'eliminarCoro'])->name('coros/eliminar');
});
