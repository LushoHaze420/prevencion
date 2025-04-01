<?php

namespace App\Http\Controllers;
use App\Models\Aseadores;
use Barryvdh\DomPDF\Facade\Pdf;


use Illuminate\Http\Request;

class AseadoresController extends Controller
{
    public function index(){
        return view('admin.capacitaciones');//pagina principal
    }

    public function create(){
        return view('admin.aseadores'); //formulario de ingreso
    }

    public function show(){
        $formaseadores = Aseadores::orderBy('id', 'desc')->get();
        //dd($formulariocap);
        return view('admin.listadoaseadores', ['listadoaseadores'=>$formaseadores]); //listado de capacitados
    }

    public function store(Request $request){
        $reg=new Aseadores();
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
            $archivo->move(public_path().'/Archivos/aseadores/odi/', $getUniqueFileName($archivo));
            $reg->odi=$getUniqueFileName($archivo);
        }else {
            // Si no hay archivo, establece el campo odi en null o un valor por defecto
            $reg->odi = null; // o $reg->odi = 'valor_por_defecto';
        }

        if($request->hasFile('extintores')){
            $archivo=$request->file('extintores');
            $archivo->move(public_path().'/Archivos/aseadores/extintores/', $getUniqueFileName($archivo));
            $reg->extintores=$getUniqueFileName($archivo);
        }else {
            $reg->extintores = null;
        }

        if($request->hasFile('difusion')){
            $archivo=$request->file('difusion');
            $archivo->move(public_path().'/Archivos/aseadores/difusion/', $getUniqueFileName($archivo));
            $reg->difusion=$getUniqueFileName($archivo);
        }else {
            $reg->difusion = null;
        }

        if($request->hasFile('limpieza_desinfeccion_covid')){
            $archivo=$request->file('limpieza_desinfeccion_covid');
            $archivo->move(public_path().'/Archivos/aseadores/limpieza_desinfeccion_covid/', $getUniqueFileName($archivo));
            $reg->limpieza_desinfeccion_covid=$getUniqueFileName($archivo);
        }else {
            $reg->limpieza_desinfeccion_covid = null;
        }

        if($request->hasFile('uso_sustancias_peligrosas')){
            $archivo=$request->file('uso_sustancias_peligrosas');
            $archivo->move(public_path().'/Archivos/aseadores/uso_sustancias_peligrosas/', $getUniqueFileName($archivo));
            $reg->uso_sustancias_peligrosas=$getUniqueFileName($archivo);
        }else {
            $reg->uso_sustancias_peligrosas = null;
        }

        if($request->hasFile('uso_correcto_epp')){
            $archivo=$request->file('uso_correcto_epp');
            $archivo->move(public_path().'/Archivos/aseadores/uso_correcto_epp/', $getUniqueFileName($archivo));
            $reg->uso_correcto_epp=$getUniqueFileName($archivo);
        }else {
            $reg->uso_correcto_epp = null;
        }

        if($request->hasFile('diploma')){
            $archivo=$request->file('diploma');
            $archivo->move(public_path().'/Archivos/aseadores/diploma/', $getUniqueFileName($archivo));
            $reg->diploma=$getUniqueFileName($archivo);
        }else {
            $reg->diploma = null;
        }

        //return $reg;
        $reg->save();
        return redirect()->route('listadoAseadores');
    }

    public function perfilcapacitado(){
        return view('admin.perfilcapacitadoas');
    }

    public function pdfaseadores(){
        $pdfaseadores=Aseadores::all();
        $pdf = Pdf::loadView('admin.reporteaseadores', compact('pdfaseadores'));
        return $pdf->stream('reporte_capacitaciones_aseadores.pdf', );  //stream para visualizar pdf, tambien permite descargar
        //  return $pdf->download('reporte_capacitaciones_aseadores.pdf'); solo para descargar pdf
        //  https://github.com/barryvdh/laravel-dompdf
        //  Repositorio para la libreria de PDF
    }
}
