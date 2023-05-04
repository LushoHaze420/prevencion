<?php
use App\Http\Controllers\MantenimientoController;
use App\Http\Controllers\CajerasController;
use App\Http\Controllers\AseadoresController;
use App\Http\Controllers\GeryJefController;
use App\Http\Controllers\CondyAuxController;
use App\Http\Controllers\AdministrativosController;

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;
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
    return view('welcome');
});

// RUTAS DE PRUEBA
Route::get('prueba', function () {
    return view('prueba');
});

/*BUSQUEDA POR RUT (PERFIL)*/
Route::get('capacitaciones/perfil', function () {
    return view('perfil');
});

//VISTA ADMINISTRADOR
Route::get('admin', function () {
    return view('admin');
});

//VISTA ADMINISTRADOR, NUEVO USUARIO
Route::get('admin/nuevousuario', function () {
    return view('nuevousuario');
});


//LOGIN GENERAL
Route::get('login', function () {
    return view('login');
});

/*MANTENIMIENTO*/
Route::controller(MantenimientoController::class)->group(function(){
    Route::get('capacitaciones','index')->name('capacitaciones');//pagina principal
    Route::get('capacitaciones/mantenimiento', 'create');
    Route::get('capacitaciones/mantenimiento/listadocapacitacionesmantenimiento', 'show')->name('listadoMantenimiento');
    Route::post('capacitaciones/storecapacitacion', 'store')->name('storeCapacitacionM');
});

/*CAJERAS*/
Route::controller(CajerasController::class)->group(function(){
    Route::get('capacitaciones','index')->name('capacitaciones');//pagina principal
    Route::get('capacitaciones/cajeras','create');
    Route::get('capacitaciones/cajeras/listadocapacitacionescajeras','show')->name('listadoCajeras');
    Route::post('capacitaciones/storecajeras','store')->name('storeCapacitacionC');
});

/*ASEADORES*/
Route::controller(AseadoresController::class)->group(function(){
    Route::get('capacitaciones','index')->name('capacitaciones');//pagina principal
    Route::get('capacitaciones/aseadores','create');
    Route::get('capacitaciones/aseadores/listadocapacitacionesaseadores','show')->name('listadoAseadores');
    Route::post('capacitaciones/storeaseadores','store')->name('storeCapacitacionA');
});

/*GERENCIA Y JEFATURA*/
Route::controller(GeryJefController::class)->group(function(){
    Route::get('capacitaciones','index')->name('capacitaciones');//pagina principal
    Route::get('capacitaciones/geryjef','create');
    Route::get('capacitaciones/geryjef/listadocapacitacionesgeryjef','show')->name('listadoGeryJef');
    Route::post('capacitaciones/storegeryjef','store')->name('storeCapacitacionGJ');
});

/*CONDUCTORES Y AUXILIARES*/
Route::controller(CondyAuxController::class)->group(function(){
    Route::get('capacitaciones','index')->name('capacitaciones');//pagina principal
    Route::get('capacitaciones/condyaux','create');
    Route::get('capacitaciones/condyaux/listadocapacitacionescondyaux','show')->name('listadoCondyAux');
    Route::post('capacitaciones/storecondyaux','store')->name('storeCapacitacionCA');
});

/*ADMINISTRATIVOS*/
Route::controller(AdministrativosController::class)->group(function(){
    Route::get('capacitaciones','index')->name('capacitaciones');//pagina principal
    Route::get('capacitaciones/administrativos','create');
    Route::get('capacitaciones/administrativos/listadocapacitacionesadministrativos','show')->name('listadoAdministrativos');
    Route::post('capacitaciones/storeadministrativos','store')->name('storeCapacitacionAd');
});
