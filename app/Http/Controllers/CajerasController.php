<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cajeras;
use Barryvdh\DomPDF\Facade\Pdf;


class CajerasController extends Controller{
    public function index(){
        return view('admin.capacitaciones');//pagina principal
    }

    public function create(){
        return view('admin.cajeras'); //formulario de ingreso
    }

    public function show(){
        $formmcajeras = Cajeras::orderBy('id', 'desc')->get();
        //dd($formulariocap);
        return view('admin.listadocajeras', ['listadocajeras'=>$formmcajeras]); //listado de capacitados
    }

    public function store(Request $request){
        $reg=new Cajeras();
        $reg->nombre_prev=$request->nombre_prev;
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
            $archivo->move(public_path().'/Archivos/cajeras/odi/', $getUniqueFileName($archivo));
            $reg->odi=$getUniqueFileName($archivo);
        }else {
            // Si no hay archivo, establece el campo difusion en null o un valor por defecto según tu lógica.
            $reg->odi = null; // o $reg->odi = 'valor_por_defecto';
        }

        if($request->hasFile('extintores')){
            $archivo=$request->file('extintores');
            $archivo->move(public_path().'/Archivos/cajeras/extintores/', $getUniqueFileName($archivo));
            $reg->extintores=$getUniqueFileName($archivo);
        }else {
            $reg->extintores = null;
        }

        if($request->hasFile('difusion')){
            $archivo=$request->file('difusion');
            $archivo->move(public_path().'/Archivos/cajeras/difusion/', $getUniqueFileName($archivo));
            $reg->difusion=$getUniqueFileName($archivo);
        }else {
            $reg->difusion = null;
        }

        if($request->hasFile('atencion_publico')){
            $archivo=$request->file('atencion_publico');
            $archivo->move(public_path().'/Archivos/cajeras/atencion_publico/', $getUniqueFileName($archivo));
            $reg->atencion_publico=$getUniqueFileName($archivo);
        }else {
            $reg->atencion_publico = null;
        }

        if($request->hasFile('tmertc')){
            $archivo=$request->file('tmertc');
            $archivo->move(public_path().'/Archivos/cajeras/tmertc/', $getUniqueFileName($archivo));
            $reg->tmertc=$getUniqueFileName($archivo);
        }else {
            $reg->tmertc = null;
        }

        if($request->hasFile('diploma')){
            $archivo=$request->file('diploma');
            $archivo->move(public_path().'/Archivos/cajeras/diploma/', $getUniqueFileName($archivo));
            $reg->diploma=$getUniqueFileName($archivo);
        }else {
            $reg->diploma = null;
        }

        //return $reg;
        $reg->save();
        return redirect()->route('listadoCajeras');
    }

    public function perfilcapacitado(){
        return view('admin.perfilcapacitadoca');
    }

    public function pdfcajeras(){
        $pdfcajeras=Cajeras::all();
        $pdf = Pdf::loadView('admin.reportecajeras', compact('pdfcajeras'));
        return $pdf->stream('reporte_capacitaciones_cajeras.pdf');  //stream para visualizar pdf, tambien permite descargar
        //  return $pdf->download('reporte_capacitaciones_cajeras.pdf'); solo para descargar pdf
        //  https://github.com/barryvdh/laravel-dompdf
        //  Repositorio para la libreria de PDF
    }
}
