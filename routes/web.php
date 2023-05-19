<?php
use App\Http\Controllers\MantenimientoController;
use App\Http\Controllers\CajerasController;
use App\Http\Controllers\AseadoresController;
use App\Http\Controllers\GeryJefController;
use App\Http\Controllers\CondyAuxController;
use App\Http\Controllers\AdministrativosController;
use App\Http\Controllers\NuevoUsuarioController;
use App\Http\Controllers\SesionController;
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

Route::get('homecapacitaciones', function () {
    return view('homecapacitaciones');
});

Route::get('registro', function () {
    return view('auth.registro');
});





// RUTAS DE PRUEBA
Route::get('prueba', function () {
    return view('prueba');
});


//LOGIN - PAGINA INICIAL
//Route::get('registrarusuario', [RegistroController::class, 'create'])->name('registro.index');
//Route::post('registrarusuario', [RegistroController::class, 'store'])->name('registro.store');

//Route::get('logincapacitaciones', [SesionController::class, 'create'])->name('login.index');

Route::view('logincapacitaciones', 'auth.login')->name('login');
Route::view('login/olvidastecontrasena', 'auth.olvidastecontrasena')->name('olviContrasena');


//VISTA ADMINISTRADOR
Route::view('admincapacitaciones', 'admin.admincapacitaciones')->name('adminCap');
Route::view('admincapacitaciones/adminbusquedarut', 'admin.adminbusquedarut')->name('adminBusquedaRut'); //busqueda por rut.
//Route::view('admincapacitaciones/adminnuevousuario', 'admin.adminnuevousuario')->name('adminNuevoUsuario');
//Route::view('admincapacitaciones/adminnuevousuario/adminusuarioscreados', 'admin.adminusuarioscreados')->name('adminUsuariosCreados');
//Route::post('admincapacitaciones/storeadminnuevousuario', 'store')->name('storeAdminNuevoUsuario');

Route::controller(NuevoUsuarioController::class)->group(function(){
    Route::get('admincapacitaciones/adminnuevousuario','create')->name('formadminnuevousuario');
    //Route::get('admincapacitaciones/adminnuevousuario/adminusuarioscreados', function () {return view('admin.adminusuarioscreados');})->name('adminUsuariosCreados');
    Route::get('admincapacitaciones/adminnuevousuario/adminusuarioscreados', 'show')->name('adminUsuariosCreados');
    Route::post('admincapacitaciones/storeadminnuevousuario','store')->name('storeAdminNuevoUsuario');

});

//VISTA PREVENCIONISTA
Route::view('prevcapacitaciones', 'prevencionista.prevcapacitaciones')->name('prevCap');
Route::view('prevcapacitaciones/prevbusquedarut', 'prevencionista.prevbusquedarut')->name('prevBusquedaRut'); //busqueda por rut.

/*MANTENIMIENTO*/
Route::controller(MantenimientoController::class)->group(function(){
    //Route::get('admincapacitaciones','index')->name('capacitaciones');//pagina principal
    //Route::get('admincapacitaciones/adminmantenimiento', 'create')->name('adminFormMantenimiento');  ADMINISTRADOR
    Route::get('admincapacitaciones/adminmantenimiento', function () {return view('admin.adminmantenimiento');})->name('adminFormMantenimiento'); //ADMINISTRADOR
    //Route::get('admincapacitaciones/adminmantenimiento/adminlistadocapacitacionesmantenimiento', 'show')->name('adminListadoMantenimiento');
    Route::get('admincapacitaciones/adminmantenimiento/adminlistadocapacitacionesmantenimiento', function () {return view('admin.adminlistadomantenimiento');})->name('adminListadoMantenimiento'); //ADMINISTRADOR
    Route::post('admincapacitaciones/storecapacitacion', 'store')->name('storeCapacitacionM');
    Route::get('prevcapacitaciones/prevmantenimiento', 'create')->name('prevFormMantenimiento');//PREVENCIONISTA
    Route::get('prevcapacitaciones/prevmantenimiento/prevlistadocapacitacionesmantenimiento', 'prevencionista.prevlistadomantenimiento')->name('prevListadoMantenimiento');
    Route::post('prevcapacitaciones/storecapacitacion', 'store')->name('storeCapacitacionM');
});

/*CAJERAS*/
Route::controller(CajerasController::class)->group(function(){
    Route::get('admincapacitaciones/cajeras','create')->name('formCajeras');
    Route::get('admincapacitaciones/cajeras/listadocapacitacionescajeras','show')->name('listadoCajeras');
    Route::post('admincapacitaciones/storecajeras','store')->name('storeCapacitacionC');
});

/*ASEADORES*/
Route::controller(AseadoresController::class)->group(function(){
    Route::get('admincapacitaciones/aseadores','create')->name('formAseadores');
    Route::get('admincapacitaciones/aseadores/listadocapacitacionesaseadores','show')->name('listadoAseadores');
    Route::post('admincapacitaciones/storeaseadores','store')->name('storeCapacitacionA');
});

/*GERENCIA Y JEFATURA*/
Route::controller(GeryJefController::class)->group(function(){
    Route::get('admincapacitaciones/geryjef','create')->name('formGeryJef');
    Route::get('admincapacitaciones/geryjef/listadocapacitacionesgeryjef','show')->name('listadoGeryJef');
    Route::post('admincapacitaciones/storegeryjef','store')->name('storeCapacitacionGJ');
});

/*CONDUCTORES Y AUXILIARES*/
Route::controller(CondyAuxController::class)->group(function(){
    Route::get('admincapacitaciones/condyaux','create')->name('formCondyAux');
    Route::get('admincapacitaciones/condyaux/listadocapacitacionescondyaux','show')->name('listadoCondyAux');
    Route::post('admincapacitaciones/storecondyaux','store')->name('storeCapacitacionCA');
});

/*ADMINISTRATIVOS*/
Route::controller(AdministrativosController::class)->group(function(){
    Route::get('admincapacitaciones/administrativos','create')->name('formAdministrativos');
    Route::get('admincapacitaciones/administrativos/listadocapacitacionesadministrativos','show')->name('listadoAdministrativos');
    Route::post('admincapacitaciones/storeadministrativos','store')->name('storeCapacitacionAd');
});
