<?php

use App\Http\Controllers\RolController;
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
    Route::post('/roles/permisos', [RolController::class, 'getPermisos'])->name('roles/permisos');
    Route::post('/roles/quitarpermiso', [RolController::class, 'quitarPermiso'])->name('roles/quitarpermiso');
    Route::post('/roles/ponerpermiso', [RolController::class, 'ponerPermiso'])->name('roles/ponerpermiso');
    Route::get('/roles/cargartabla', [RolController::class, 'cargarTabla'])->name('roles/cargartabla');
    Route::resource('roles', RolController::class);
});
