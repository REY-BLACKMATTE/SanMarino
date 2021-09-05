<?php

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

/**
 * CLEAR CACHE PAGE
 */
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('usuarios', [App\Http\Controllers\UsuarioController::class, 'index'])->name('usuarios');
Route::get('pagos', [App\Http\Controllers\PagosController::class, 'index'])->name('pagos');
Route::post('usuarios.guardar', [App\Http\Controllers\UsuarioController::class, 'guardarUsuario'])->name('usuarios.guardar');
Route::post('usuarios.listar', [App\Http\Controllers\UsuarioController::class, 'listarUsuarios'])->name('usuarios.listar');
Route::get('pagos.crearPago', [App\Http\Controllers\PagosController::class, 'crearPago'])->name('crearPago');
//Route::get('/usuarios', 'UsuarioController@index')->name('usuarios');
//Route::post('/usuarios/guardar/', 'UsuarioController@guardarUsuario')->name('guardarUsuario');

Route::get('controlPanel', [App\Http\Controllers\PanelControlController::class, 'index'])->name('controlPanel');
Route::post('setTheme', [App\Http\Controllers\PanelControlController::class, 'setTheme'])->name('setTheme');
