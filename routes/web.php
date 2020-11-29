<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\localidad\localidadController;
use App\Http\Controllers\equipos\equiposController;
use App\Http\Controllers\jugadores\jugadoresController;
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
    return view('modules.auth.form_login');
});

Route::get('escritorio',function(){
    if (session('USER')){
        return view('modules.dashboard.index');
    }else{
        return redirect()->route('login.form_login');
    }

},[DashboardController::class,'index'])->name('dashboard.index');

Route::get('perfil',[DashboardController::class,'perfil'])->name('dashboard.perfil');

Route::put('edit/profile/{id}',[DashboardController::class,'update'])->name('dashboard.update');

Route::get('login',[LoginController::class,'form_login'])->name('login.form_login');
Route::get('logout',[LoginController::class,'logout'])->name('login.logout');
Route::get('register',[LoginController::class,'form_register'])->name('login.form_register');
Route::post('register',[LoginController::class,'register'])->name('login.register');
Route::post('login',[LoginController::class,'auth'])->name('login.auth');
/*
 * Rutas localidades
 */
Route::get('localidades',[localidadController::class,'index'])->name('localidades.index');
Route::get('localidades_create',[localidadController::class,'create'])->name('localidades.create');
Route::post('localidades_create',[localidadController::class,'store'])->name('localidades.store');
Route::get('localidades_show{id}',[localidadController::class,'show'])->name('localidades.show');
Route::get('localidades_edit{id}',[localidadController::class,'edit'])->name('localidades.edit');
Route::put('localidades_update{id}',[localidadController::class,'update'])->name('localidades.update');
Route::get('localidades_delete{id}',[localidadController::class,'delete'])->name('localidades.delete');
Route::delete('localidades_destroy{id}',[localidadController::class,'destroy'])->name('localidades.destroy');
/*
 * Rutas equipos
 */
Route::get('equipos',[equiposController::class,'index'])->name('equipos.index');
Route::get('equipos_create',[equiposController::class,'create'])->name('equipos.create');
Route::post('equipos_create',[equiposController::class,'store'])->name('equipos.store');
Route::get('equipos_show{id}',[equiposController::class,'show'])->name('equipos.show');
Route::get('equipos_edit{id}',[equiposController::class,'edit'])->name('equipos.edit');
Route::put('equipos_update{id}',[equiposController::class,'update'])->name('equipos.update');
Route::get('equipos_delete{id}',[equiposController::class,'delete'])->name('equipos.delete');
Route::delete('equipos_destroy{id}',[equiposController::class,'destroy'])->name('equipos.destroy');
/*
 * Rutas jugadores
 */
Route::get('jugadores',[jugadoresController::class,'index'])->name('jugadores.index');
Route::get('jugadores_create',[jugadoresController::class,'create'])->name('jugadores.create');
Route::post('jugadores_create',[jugadoresController::class,'store'])->name('jugadores.store');
Route::get('jugadores_show{id}',[jugadoresController::class,'show'])->name('jugadores.show');
Route::get('jugadores_edit{id}',[jugadoresController::class,'edit'])->name('jugadores.edit');
Route::put('jugadores_update{id}',[jugadoresController::class,'update'])->name('jugadores.update');
Route::get('jugadores_delete{id}',[jugadoresController::class,'delete'])->name('jugadores.delete');
Route::delete('jugadores_destroy{id}',[jugadoresController::class,'destroy'])->name('jugadores.destroy');
