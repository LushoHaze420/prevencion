<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrativos;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class AdministrativosController extends Controller{
    public function index(){
        return view('admin.capacitaciones');//pagina principal
    }

    public function create(){
        return view('admin.administrativos'); //formulario de ingreso
    }

    public function show(){
        $listadministrativos = Administrativos::orderBy('id', 'desc')->get();
        return view('admin.listadoadministrativos', ['listadoadministrativos'=>$listadministrativos]); //listado de capacitados
    }

    public function store(Request $request){
        $reg=new Administrativos();
        //$reg->rut_prev=$request->rut_prev;
        $reg->nombre_prev=$request->nombre_prev;
        //$reg->apellidos_prev=$request->apellidos_prev;
        $reg->rut_cap=$request->rut_cap;
        $reg->nombre_cap=$request->nombre_cap;
        $reg->apellidos_cap=$request->apellidos_cap;
        $reg->rol_cap=$request->rol_cap;

        // Función para obtener un nombre de archivo único concatenando al nombre del archivo la fecha actual, para generar nombre unico y evitar repetición y conflictos
        $getUniqueFileName = function ($file) {
            $extension = $file->getClientOriginalExtension();
            $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            return $filename . '_' . date('YmdHis') . '.' . $extension;
        };

        if($request->hasFile('odi')){
            $archivo=$request->file('odi');
            $archivo->move(public_path().'/Archivos/administrativos/odi/', $getUniqueFileName($archivo));
            $reg->odi=$getUniqueFileName($archivo);
        }else {
            // Si no hay archivo, establece el campo difusion en null o un valor por defecto según tu lógica.
            $reg->odi = null; // o $reg->odi = 'valor_por_defecto';
        }

        if($request->hasFile('extintores')){
            $archivo=$request->file('extintores');
            $archivo->move(public_path().'/Archivos/administrativos/extintores/', $getUniqueFileName($archivo));
            $reg->extintores=$getUniqueFileName($archivo);
        }else {
            $reg->extintores = null;
        }

        if($request->hasFile('difusion')){
            $archivo=$request->file('difusion');
            $archivo->move(public_path().'/Archivos/administrativos/difusion/', $getUniqueFileName($archivo));
            $reg->difusion=$getUniqueFileName($archivo);
        }else {
            $reg->difusion = null;
        }

        if($request->hasFile('primeros_auxilios')){
            $archivo=$request->file('primeros_auxilios');
            $archivo->move(public_path().'/Archivos/administrativos/primeros_auxilios/', $getUniqueFileName($archivo));
            $reg->primeros_auxilios=$getUniqueFileName($archivo);
        }else {
            $reg->primeros_auxilios = null;
        }

        if($request->hasFile('tmertad')){
            $archivo=$request->file('tmertad');
            $archivo->move(public_path().'/Archivos/administrativos/tmertad/', $getUniqueFileName($archivo));
            $reg->tmertad=$getUniqueFileName($archivo);
        }else {
            $reg->tmertad = null;
        }

        if($request->hasFile('diploma')){
            $archivo=$request->file('diploma');
            $archivo->move(public_path().'/Archivos/administrativos/diploma/', $getUniqueFileName($archivo));
            $reg->diploma=$getUniqueFileName($archivo);
        }else {
            $reg->diploma = null;
        }

        //return $reg;
        $reg->save();
        return redirect()->route('listadoAdministrativos');
    }

    public function perfilcapacitado(){
        return view('admin.perfilcapacitadoad');
    }

    public function pdfadministrativos(){
        $pdfadministrativos=Administrativos::all();
        $pdf = Pdf::loadView('admin.reporteadministrativos', compact('pdfadministrativos'));
        //$fechaAd=Carbon::now()->format('d-m-Y H:i:s');->with('fechaAd', $fechaAd)
        return $pdf->stream('reporte_capacitaciones_administrativos.pdf');  //stream para visualizar pdf, tambien permite descargar
        //  return $ pdf->download('reporte_capacitaciones_administrativos.pdf'); solo para descargar pdf
        //  https://github.com/barryvdh/laravel-dompdf
        //  Repositorio para la libreria de PDF
    }

    //ACTUALMENTE NO FUNCIONA 04-10-2023
    //funcion para obtener la fecha actual e integrarla a la hoja de reportes
    public function fecha(){
        $fechaAd = Carbon::now()->format('d-m-Y H:i:s');  //Obtiene la fecha actual:  dia mes año hora minuto y segundo
        return $fechaAd;
    }

}
