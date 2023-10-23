<?php

use App\Http\Controllers\AlabanzaController;
use App\Http\Controllers\AlabanzaWebController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\BibliaWebController;
use App\Http\Controllers\CadenaController;
use App\Http\Controllers\CadenaWebController;
use App\Http\Controllers\CoroController;
use App\Http\Controllers\DirectivaController;
use App\Http\Controllers\PredicaController;
use App\Http\Controllers\PrivilegiosDirectivaController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\TipoDirectivaController;
use App\Http\Controllers\UsuarioController;
use App\Models\PrivilegiosDirectiva;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'inicio'])->name('inicio');

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
    Route::get('/usuarios/directivas', [UsuarioController::class, 'obtenerDirectivas'])->name('usuarios/directivas');
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

    //RUTAS CADENAS
    Route::get('/cadenas/avivamiento', [CadenaController::class, 'avivamiento'])->name('cadenas/avivamiento');
    Route::get('/cadenas/adoracion', [CadenaController::class, 'adoracion'])->name('cadenas/adoracion');
    Route::get('/cadenas/cargartabla/{id}', [CadenaController::class, 'cargarTabla']);
    Route::post('/cadenas/guardar', [CadenaController::class, 'guardar'])->name('cadenas/guardar');
    Route::get('/cadenas/coros/{id}', [CadenaController::class, 'obtenerCoros']);
    Route::get('/cadenas/ver/{id}', [CadenaController::class, 'obtenerCadena']);
    Route::get('/cadenas/obtenerCoro/{id}', [CadenaController::class, 'obtenerCoro']);
    Route::post('/cadenas/eliminar', [CadenaController::class, 'eliminarCadena'])->name('cadenas/eliminar');

    //RUTAS PREDICAS
    Route::get('/predicas', [PredicaController::class, 'index'])->name('predicas');
    Route::get('/predicas/cargartabla', [PredicaController::class, 'cargarTabla'])->name('predicas/cargartabla');
    Route::post('/predicas/guardar', [PredicaController::class, 'guardar'])->name('predicas/guardar');
    Route::get('/predicas/ver/{id}', [PredicaController::class, 'obtener']);
    Route::get('/predicas/ver-predica', [PredicaController::class, 'verPredica'])->name('predicas/ver-predica');
    Route::post('/predicas/eliminar', [PredicaController::class, 'eliminar'])->name('predicas/eliminar');

    //RUTAS TIPOS DIRECTIVAS
    Route::get('/tipos_directivas', [TipoDirectivaController::class, 'index'])->name('tipos_directivas');
    Route::get('/tipos_directivas/cargartabla', [TipoDirectivaController::class, 'cargarTabla'])->name('tipos_directivas/cargartabla');
    Route::post('/tipos_directivas/guardar', [TipoDirectivaController::class, 'guardar'])->name('tipos_directivas/guardar');
    Route::get('/tipos_directivas/ver/{id}', [TipoDirectivaController::class, 'obtenerTipoDirectiva']);
    Route::post('/tipos_directivas/eliminar', [TipoDirectivaController::class, 'eliminarTipoDirectiva'])->name('tipos_directivas/eliminar');

    //RUTAS DIRECTIVAS
    Route::get('/directivas', [DirectivaController::class, 'index'])->name('directivas');
    Route::get('/directivas/cargartabla', [DirectivaController::class, 'cargarTabla'])->name('directivas/cargartabla');
    Route::post('/directivas/guardar', [DirectivaController::class, 'guardar'])->name('directivas/guardar');
    Route::get('/directivas/ver/{id}', [DirectivaController::class, 'obtenerDirectiva']);
    Route::post('/directivas/eliminar', [DirectivaController::class, 'eliminarDirectiva'])->name('directivas/eliminar');
    Route::get('/directivas/tipos_directivas', [DirectivaController::class, 'obtenerTiposDirectivas'])->name('directivas/tipos_directivas');

    //RUTAS PRIVILEGIOS DIRECTIVAS
    Route::get('/privilegios_directivas', [PrivilegiosDirectivaController::class, 'index'])->name('privilegios_directivas');
    Route::get('/privilegios_directivas/cargartabla', [PrivilegiosDirectivaController::class, 'cargarTabla'])->name('privilegios_directivas/cargartabla');
    Route::post('/privilegios_directivas/guardar', [PrivilegiosDirectivaController::class, 'guardar'])->name('privilegios_directivas/guardar');
    Route::get('/privilegios_directivas/ver/{id}', [PrivilegiosDirectivaController::class, 'obtenerPrivilegio']);
    Route::post('/privilegios_directivas/eliminar', [PrivilegiosDirectivaController::class, 'eliminar'])->name('privilegios_directivas/eliminar');
    Route::get('/privilegios_directivas/directivas', [PrivilegiosDirectivaController::class, 'obtenerDirectivas'])->name('privilegios_directivas/directivas');
});


//RUTAS PARA INICIO SIN NECESIDAD DE AUTENTICACION

//HIMNARIO
Route::get('/public/himnario', [AlabanzaWebController::class, 'himnario'])->name('public/himnario');
Route::get('/public/himnario/cargartabla', [AlabanzaWebController::class, 'cargarTablaHimnario'])->name('public/himnario/cargartabla');
Route::get('/public/himnario/ver', [AlabanzaWebController::class, 'verAlabanza']);

//CANCIONERO
Route::get('/public/cancionero', [AlabanzaWebController::class, 'cancionero'])->name('public/cancionero');
Route::get('/public/cancionero/cargartabla/autor/{idautor}', [AlabanzaWebController::class, 'cargarTablaCancionero'])->name('public.cancionero.tabla');
Route::get('/public/cancionero/ver', [AlabanzaWebController::class, 'verAlabanzaCancionero']);

//CADENAS
Route::get('/public/cadenas/avivamiento', [CadenaWebController::class, 'avivamiento'])->name('public/cadenas/avivamiento');
Route::get('/public/cadenas/adoracion', [CadenaWebController::class, 'adoracion'])->name('public/cadenas/adoracion');
Route::get('/public/cadenas/cargartabla/{tipo}', [CadenaWebController::class, 'cargarTabla']);
Route::get('/public/cadenas/ver-cadena-avivamiento', [CadenaWebController::class, 'verCadenaAvivamiento']);
Route::get('/public/cadenas/ver-cadena-adoracion', [CadenaWebController::class, 'verCadenaAdoracion']);

Route::get('/public/biblias/biblia-rv1960', [BibliaWebController::class, 'bibliarv'])->name('public/biblias/biblia-rv1960');
Route::get('/public/biblias/biblia/libro/{numero}', [BibliaWebController::class, 'verLibro'])->name('biblia.libro');
Route::get('/public/biblias/biblia/libro/{numlibro}/capitulo/{numcapitulo}', [BibliaWebController::class, 'verVersiculo'])->name('biblia.capitulo');


Route::get('/public/biblias/holy-bible', [BibliaWebController::class, 'bibliahb'])->name('public/biblias/holy-bible');
Route::get('/public/biblias/bible/book/{numero}', [BibliaWebController::class, 'viewBook'])->name('bible.book');
Route::get('/public/biblias/bible/chapter/{numlibro}/capitulo/{numcapitulo}', [BibliaWebController::class, 'viewChapter'])->name('book.chapter');
