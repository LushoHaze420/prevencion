<?php
use App\Http\Controllers\MantenimientoController;
use App\Http\Controllers\CajerasController;
use App\Http\Controllers\GeryJefController;
use App\Http\Controllers\AseadoresController;
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

Route::get('login', function () {
    return view('login');
});

Route::get('/', function () {
    return view('welcome');
});


/*BUSQUEDA POR RUT (PERFIL)*/
Route::get('capacitaciones/perfil', function () {
    return view('perfil');
});

// RUTAS DE PRUEBA
Route::get('prueba', function () {
    return view('prueba');
});



/*MANTENIMIENTO*/
Route::controller(MantenimientoController::class)->group(function(){
    Route::get('capacitaciones','index')->name('capacitaciones');//pagina principal
    Route::get('capacitaciones/mantenimiento', 'create');
    Route::get('capacitaciones/mantenimiento/capacitacionesmantenimiento', 'show')->name('listadoMantenimiento');
    Route::post('capacitaciones/storecapacitacion', 'store')->name('createCapacitacionM');
});





/*CAJERAS*/
Route::get('capacitaciones', [CajerasController::class,'index'])->name('capacitaciones');//pagina principal

Route::get('capacitaciones/cajeras', [CajerasController::class,'create']);

Route::get('capacitaciones/cajeras/capacitacionescajeras', [CajerasController::class,'show'])->name('listadoCajeras');

Route::post('capacitaciones/storecajeras', [CajerasController::class,'store'])->name('createCapacitacionC');

/*ASEADORES*/
Route::get('capacitaciones', [AseadoresController::class,'index'])->name('capacitaciones');//pagina principal

Route::get('capacitaciones/aseadores', [AseadoresController::class,'create']);

Route::get('capacitaciones/aseadores/capacitacionesaseadores', [AseadoresController::class,'show'])->name('listadoAseadores');

Route::post('capacitaciones/storeaseadores', [AseadoresController::class,'store'])->name('storeCapacitacionA');

/*GERENCIA Y JEFATURA*/
Route::get('capacitaciones', [GeryJefController::class,'index'])->name('capacitaciones');//pagina principal

Route::get('capacitaciones/geryjef', [GeryJefController::class,'create']);

Route::get('capacitaciones/geryjef/capacitacionesgeryjef', [GeryJefController::class,'show'])->name('listadoGeryJef');

Route::post('capacitaciones/storegeryjef', [GeryJefController::class,'store'])->name('storeCapacitacionGF');


/*CONDUCTORES Y AUXILIARES*/
Route::get('capacitaciones', [CondyAuxController::class,'index'])->name('capacitaciones');//pagina principal

Route::get('capacitaciones/condyaux', [CondyAuxController::class,'create']);

Route::get('capacitaciones/condyaux/capacitacionescondyaux', [CondyAuxController::class,'show'])->name('listadoCondyAux');

Route::post('capacitaciones/storecondyaux', [CondyAuxController::class,'store'])->name('storeCapacitacionCA');


/*ADMINISTRATIVOS*/
Route::get('capacitaciones', [AdministrativosController::class,'index'])->name('capacitaciones');//pagina principal

Route::get('capacitaciones/administrativos', [AdministrativosController::class,'create']);

Route::get('capacitaciones/administrativos/capacitacionesadministrativos', [AdministrativosController::class,'show'])->name('listadoAdministrativos');

Route::post('capacitaciones/storeadministrativos', [AdministrativosController::class,'store'])->name('storeCapacitacionAd');
