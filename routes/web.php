<?php
use App\Http\Controllers\MantenimientoController;
use App\Http\Controllers\CajerasController;
use App\Http\Controllers\AseadoresController;
use App\Http\Controllers\GeryJefController;
use App\Http\Controllers\CondyAuxController;
use App\Http\Controllers\AdministrativosController;
use App\Http\Controllers\NuevoUsuarioController;
use App\Http\Controllers\BusquedaRutController;
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

// RUTAS DE PRUEBA
Route::get('/', function () {
    return view('welcome');
});

Route::get('prueba', function () {
    return view('prueba');
});
///////////////////////////


//LOGIN - PAGINA INICIAL
Route::view('logincapacitaciones', 'auth.login')->name('login');

//VISTA ADMINISTRADOR - BUSQUEDA RUT
Route::get('admincapacitaciones/busquedarut', [BusquedaRutController::class, 'perfil'])->name('busquedaRut');

// Route::controller(BusquedaRutController::class)->group(function(){
//     Route::get('admincapacitaciones/busquedarut', 'show')->name('busquedaRut'); //busqueda por rut.
// });


Route::controller(NuevoUsuarioController::class)->group(function(){
    Route::get('admincapacitaciones/nuevousuario','create')->name('formNuevoUsuario');
    Route::get('admincapacitaciones/nuevousuario/listadousuarios', 'show')->name('listadoUsuarios');
    Route::post('admincapacitaciones/storenuevousuario','store')->name('storeNuevoUsuario');
    Route::get('admincapacitaciones/nuevousuario/listadousuarios/perfilusuario','perfilusuario')->name('perfilUsuario');
});

//VISTA PREVENCIONISTA
Route::view('prevcapacitaciones', 'prevencionista.prevcapacitaciones')->name('prevCap');
Route::view('prevcapacitaciones/prevbusquedarut', 'prevencionista.prevbusquedarut')->name('prevBusquedaRut'); //busqueda por rut.



/*MANTENIMIENTO*/
Route::controller(MantenimientoController::class)->group(function(){
    Route::get('admincapacitaciones','index')->name('adminCap');//pagina principal
    Route::get('admincapacitaciones/mantenimiento', 'create')->name('formMantenimiento');  //ADMINISTRADOR
    Route::get('admincapacitaciones/mantenimiento/listadocapacitacionesmantenimiento', 'show')->name('listadoMantenimiento');
    Route::post('admincapacitaciones/storecapacitacion', 'store')->name('storeCapacitacionM');
    Route::get('admincapacitaciones/mantenimiento/listadocapacitacionesmantenimiento/perfilcapacitado','perfilcapacitado')->name('perfilCapacitadoMa');

    //Route::get('prevcapacitaciones/prevmantenimiento', 'create')->name('prevFormMantenimiento'); //PREVENCIONISTA
    //Route::get('prevcapacitaciones/prevmantenimiento/listadocapacitacionesmantenimiento', 'show')->name('prevListadoMantenimiento');
    //Route::post('prevcapacitaciones/storecapacitacion', 'store')->name('storeCapacitacionM');
});

/*CAJERAS*/
Route::controller(CajerasController::class)->group(function(){
    Route::get('admincapacitaciones/cajeras','create')->name('formCajeras'); //ADMINISTRADOR
    Route::get('admincapacitaciones/cajeras/listadocapacitacionescajeras','show')->name('listadoCajeras');
    Route::post('admincapacitaciones/storecajeras','store')->name('storeCapacitacionC');
    Route::get('admincapacitaciones/cajeras/listadocapacitacionescajeras/perfilcapacitado','perfilcapacitado')->name('perfilCapacitadoCa');
    //Route::get('prevcapacitaciones/prevcajeras','create')->name('prevFormCajeras'); //PREVENCIONISTA
    //Route::get('prevcapacitaciones/prevcajeras/listadocapacitacionescajeras','show')->name('prevListadoCajeras');
    //Route::post('prevcapacitaciones/storecajeras','store')->name('storeCapacitacionC');
});

/*ASEADORES*/
Route::controller(AseadoresController::class)->group(function(){
    Route::get('admincapacitaciones/aseadores','create')->name('formAseadores'); //ADMINISTRADOR
    Route::get('admincapacitaciones/aseadores/listadocapacitacionesaseadores','show')->name('listadoAseadores');
    Route::post('admincapacitaciones/storeaseadores','store')->name('storeCapacitacionA');
    Route::get('admincapacitaciones/aseadores/listadocapacitacionesaseadores/perfilcapacitado','perfilcapacitado')->name('perfilCapacitadoAs');
    //Route::get('prevcapacitaciones/prevaseadores','create')->name('prevFormAseadores'); //PREVENCIONISTA
    //Route::get('prevcapacitaciones/prevaseadores/listadocapacitacionesaseadores','show')->name('prevListadoAseadores');
    //Route::post('prevcapacitaciones/storeaseadores','store')->name('storeCapacitacionA');
});

/*GERENCIA Y JEFATURA*/
Route::controller(GeryJefController::class)->group(function(){
    Route::get('admincapacitaciones/geryjef','create')->name('formGeryJef'); //ADMINISTRADOR
    Route::get('admincapacitaciones/geryjef/listadocapacitacionesgeryjef','show')->name('listadoGeryJef');
    Route::post('admincapacitaciones/storegeryjef','store')->name('storeCapacitacionGJ');
    Route::get('admincapacitaciones/geryjef/listadocapacitacionesgeryjef/perfilcapacitado','perfilcapacitado')->name('perfilCapacitadoGyj');
    //Route::get('prevcapacitaciones/prevgeryjef','create')->name('prevFormGeryJef'); //PREVENCIONISTA
    //Route::get('prevcapacitaciones/prevgeryjef/listadocapacitacionesgeryjef','show')->name('prevListadoGeryJef');
    //Route::post('prevcapacitaciones/storegeryjef','store')->name('storeCapacitacionGJ');
});

/*CONDUCTORES Y AUXILIARES*/
Route::controller(CondyAuxController::class)->group(function(){
    Route::get('admincapacitaciones/condyaux','create')->name('formCondyAux'); //ADMINISTRADOR
    Route::get('admincapacitaciones/condyaux/listadocapacitacionescondyaux','show')->name('listadoCondyAux');
    Route::post('admincapacitaciones/storecondyaux','store')->name('storeCapacitacionCA');
    Route::get('admincapacitaciones/condyaux/listadocapacitacionescondyaux/perfilcapacitado','perfilcapacitado')->name('perfilCapacitadoCya');
    //Route::get('prevcapacitaciones/prevcondyaux','create')->name('prevFormCondyAux'); //PREVENCIONISTA
    //Route::get('prevcapacitaciones/prevcondyaux/listadocapacitacionescondyaux','show')->name('prevListadoCondyAux');
    //Route::post('prevcapacitaciones/storecondyaux','store')->name('storeCapacitacionCA');
});

/*ADMINISTRATIVOS*/
Route::controller(AdministrativosController::class)->group(function(){
    Route::get('admincapacitaciones/administrativos','create')->name('formAdministrativos'); //ADMINISTRADOR
    Route::get('admincapacitaciones/administrativos/listadocapacitacionesadministrativos','show')->name('listadoAdministrativos');
    Route::post('admincapacitaciones/storeadministrativos','store')->name('storeCapacitacionAd');
    Route::get('admincapacitaciones/administrativos/listadocapacitacionesadministrativos/perfilcapacitado','perfilcapacitado')->name('perfilCapacitadoAd');

    //Route::get('prevcapacitaciones/prevadministrativos','create')->name('prevFormAdministrativos'); //PREVENCION
    //Route::get('prevcapacitaciones/prevadministrativos/listadocapacitacionesadministrativos','show')->name('prevListadoAdministrativos');
    //Route::post('prevcapacitaciones/storeadministrativos','store')->name('storeCapacitacionAd');
});
