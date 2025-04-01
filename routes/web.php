<?php
use App\Http\Controllers\MantenimientoController;
use App\Http\Controllers\CajerasController;
use App\Http\Controllers\AseadoresController;
use App\Http\Controllers\GeryJefController;
use App\Http\Controllers\CondyAuxController;
use App\Http\Controllers\AdministrativosController;
use App\Http\Controllers\BusquedaRutController;
use App\Http\Controllers\SesionAutenticadaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarbonController;
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

// RUTAS DE PRUEBA
Route::get('/', function () {
    return view('welcome');
});

Route::get('', function () {
    return view('');
});
///////////////////////////


//LOGIN
Route::controller(SesionAutenticadaController::class)->group(function(){
    Route::get('logincapacitaciones','create')->name('login');
    Route::post('logincapacitaciones/storelogin','store')->name('storeLogin');
    Route::post('logoutcapacitaciones','destroy')->name('logout');
});
//Route::view('logincapacitaciones', 'auth.login')->name('login');


//BUSQUEDA RUT
Route::controller(BusquedaRutController::class)->group(function(){
    Route::get('capacitaciones/busquedarut', 'index')->name('busquedaRut'); //busqueda por rut.
    Route::get('capacitaciones/busquedarut/pdfbusquedarut','pdfbusquedarut')->name('reporteBusquedaRut');

});


//REPORTES
Route::get('capacitaciones/reportes', function () {
    return view('admin.reportes');
})->name('reportes');


//USUARIOS
Route::controller(UserController::class)->group(function(){
    Route::get('capacitaciones/nuevousuario','create')->name('formNuevoUsuario');
    Route::post('capacitaciones/nuevousuario/verificaremail', 'verificaremail')->name('verificarEmail');
    Route::get('capacitaciones/nuevousuario/listadousuarios', 'show')->name('listadoUsuarios');
    //Route::post('homeCapacitacionesacitaciones/nuevousuario/validarcorreo','validarcorreo')->name('validarCorreo');
    Route::post('capacitaciones/storenuevousuario','store')->name('storeNuevoUsuario');
    Route::get('capacitaciones/nuevousuario/listadousuarios/perfilusuario','perfilusuario')->name('perfilUsuario');
});


/*ADMINISTRATIVOS*/
Route::controller(AdministrativosController::class)->group(function(){
    Route::get('capacitaciones/administrativos','create')->name('formAdministrativos');
    Route::get('capacitaciones/administrativos/listadocapacitacionesadministrativos','show')->name('listadoAdministrativos');
    Route::post('capacitaciones/storeadministrativos','store')->name('storeCapacitacionAd');
    Route::get('capacitaciones/administrativos/listadocapacitacionesadministrativos/perfilcapacitado','perfilcapacitado')->name('perfilCapacitadoAd');
    Route::get('capacitaciones/reportes/pdfadministrativos', 'pdfadministrativos')->name('reporteAdministrativos');
    //Route::get('prueba','fecha')->name('fecha');
});


/*ASEADORES*/
Route::controller(AseadoresController::class)->group(function(){
    Route::get('capacitaciones/aseadores','create')->name('formAseadores');
    Route::get('capacitaciones/aseadores/listadocapacitacionesaseadores','show')->name('listadoAseadores');
    Route::post('capacitaciones/storeaseadores','store')->name('storeCapacitacionA');
    Route::get('capacitaciones/aseadores/listadocapacitacionesaseadores/perfilcapacitado','perfilcapacitado')->name('perfilCapacitadoAs');
    Route::get('capacitaciones/reportes/pdfaseadores', 'pdfaseadores')->name('reporteAseadores');
});


/*CAJERAS*/
Route::controller(CajerasController::class)->group(function(){
    Route::get('capacitaciones/cajeras','create')->name('formCajeras');
    Route::get('capacitaciones/cajeras/listadocapacitacionescajeras','show')->name('listadoCajeras');
    Route::post('capacitaciones/storecajeras','store')->name('storeCapacitacionC');
    Route::get('capacitaciones/cajeras/listadocapacitacionescajeras/perfilcapacitado','perfilcapacitado')->name('perfilCapacitadoCa');
    Route::get('capacitaciones/reportes/pdfcajeras', 'pdfcajeras')->name('reporteCajeras');
});


/*CONDUCTORES Y AUXILIARES*/
Route::controller(CondyAuxController::class)->group(function(){
    Route::get('capacitaciones/condyaux','create')->name('formCondyAux');
    Route::get('capacitaciones/condyaux/listadocapacitacionescondyaux','show')->name('listadoCondyAux');
    Route::post('capacitaciones/storecondyaux','store')->name('storeCapacitacionCA');
    Route::get('capacitaciones/condyaux/listadocapacitacionescondyaux/perfilcapacitado','perfilcapacitado')->name('perfilCapacitadoCya');
    Route::get('capacitaciones/reportes/pdfcondyaux', 'pdfcondyaux')->name('reporteCondyAux');
});


/*GERENCIA Y JEFATURA*/
Route::controller(GeryJefController::class)->group(function(){
    Route::get('capacitaciones/geryjef','create')->name('formGeryJef');
    Route::get('capacitaciones/geryjef/listadocapacitacionesgeryjef','show')->name('listadoGeryJef');
    Route::post('capacitaciones/storegeryjef','store')->name('storeCapacitacionGJ');
    Route::get('capacitaciones/geryjef/listadocapacitacionesgeryjef/perfilcapacitado','perfilcapacitado')->name('perfilCapacitadoGyj');
    Route::get('capacitaciones/reportes/pdfgeryjef', 'pdfgeryjef')->name('reporteGeryJef');
});


/*MANTENIMIENTO*/
Route::controller(MantenimientoController::class)->group(function(){
    Route::get('capacitaciones','index')->name('homeCapacitaciones');//pagina principal
    Route::get('capacitaciones/mantenimiento', 'create')->name('formMantenimiento');
    Route::get('capacitaciones/mantenimiento/listadocapacitacionesmantenimiento', 'show')->name('listadoMantenimiento');
    Route::post('capacitaciones/storecapacitacion', 'store')->name('storeCapacitacionM');
    Route::get('capacitaciones/mantenimiento/listadocapacitacionesmantenimiento/perfilcapacitado','perfilcapacitado')->name('perfilCapacitadoMa');
    Route::get('capacitaciones/reportes/pdfmantenimiento', 'pdfmantenimiento')->name('reporteMantenimiento');
});
