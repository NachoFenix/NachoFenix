<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\MenuRolController;
use App\Http\Controllers\Backend\rolController;
use App\Http\Controllers\Backend\rolRolController;
use App\Http\Controllers\MiCuentaController;
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
    //return view('theme.back.app');
    return view('welcome');
});

Route::get('mi-cuenta', [MiCuentaController::class, 'index'])->middleware('auth')->name('mi-cuenta');

Route::group(['prefix'=> 'admin-backend', 'middleware'=>['auth','superadministrador']],function(){
    Route::get('', [DashboardController::class, 'index'])->name('dashboard');
    // Rutas del menu
    Route::get('menu',[MenuController::class, 'index'])->name('menu');
    Route::get('menu/crear',[MenuController::class, 'crear'])->name('menu.crear');
    Route::get('menu/{id}/editar',[MenuController::class, 'editar'])->name('menu.editar');
    Route::post('menu', [MenuController::class, 'guardar'])->name('menu.guardar');
    Route::post('menu/guardar-orden', [MenuController::class, 'guardarOrden'])->name('menu.orden');
    Route::put('menu/{id}', [MenuController::class, 'actualizar'])->name('menu.actualizar');
    Route::delete('menu/{id}/eliminar', [MenuController::class, 'eliminar'])->name('menu.eliminar');
    // Rutas del menu rol
    Route::get('menu-rol',[MenuRolController::class, 'index'])->name('menu-rol');
    Route::post('menu-rol',[MenuRolController::class, 'guardar'])->name('menu-rol.guardar');

    //Rutas del rol
    Route::get('rol',[rolController::class, 'index'])->name('rol');
    Route::get('rol/crear',[rolController::class, 'crear'])->name('rol.crear');
    Route::get('rol/{rol}/editar',[rolController::class, 'editar'])->name('rol.editar');
    Route::post('rol', [rolController::class, 'guardar'])->name('rol.guardar');
    Route::put('rol/{rol}', [rolController::class, 'actualizar'])->name('rol.actualizar');
    Route::delete('rol/{rol}/eliminar', [rolController::class, 'eliminar'])->name('rol.eliminar');

    //Rutas de permiso
    Route::get('permiso',[PermisoController::class, 'index'])->name('permiso');
    Route::get('permiso/crear',[PermisoController::class, 'crear'])->name('permiso.crear');
    Route::get('permiso/{id}/editar',[PermisoController::class, 'editar'])->name('permiso.editar');
    Route::post('permiso', [PermisoController::class, 'guardar'])->name('permiso.guardar');
    Route::put('permiso/{id}', [PermisoController::class, 'actualizar'])->name('permiso.actualizar');
    Route::delete('permiso/{id}/eliminar', [PermisoController::class, 'eliminar'])->name('permiso.eliminar');

    // Rutas del menu rol
    Route::get('permiso-rol',[PermisoRolController::class, 'index'])->name('permiso-rol');
    Route::post('permiso-rol',[PermisoRolController::class, 'guardar'])->name('permiso-rol.guardar');
  
});