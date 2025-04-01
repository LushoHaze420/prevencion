<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

//ACTUALMENTE SIN FUNCIONAMIENTO 04-10-2023
//Controlador para obtener la fecha actual e integrarla a la hoja de reportes de todas las areas
class CarbonController extends Controller
{
    public function fechapdf()
    {
        $fecha = Carbon::now()->format('d-m-Y H:i:s');  //Obtiene la fecha actual:  dia mes año hora minuto y segundo
        return view('layouts.reporteBase',compact('fecha'));
    }
}
