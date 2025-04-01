<?php

namespace App\Http\Controllers;
use App\Models\GeryJef;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class GeryJefController extends Controller
{
    public function index(){
        return view('admin.capacitaciones');//pagina principal
    }

    public function create(){
        return view('admin.geryjef'); //formulario de ingreso
    }

    public function show(){
        $formgeryjef = GeryJef::orderBy('id', 'desc')->get();
        //dd($formulariocap);
        return view('admin.listadogeryjef', ['listadogeryjef'=>$formgeryjef]); //listado de capacitados
    }

    public function store(Request $request){
        $reg=new GeryJef();
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
            $archivo->move(public_path().'/Archivos/geryjef/odi/', $getUniqueFileName($archivo));
            $reg->odi=$getUniqueFileName($archivo);
        }else {
            // Si no hay archivo, establece el campo difusion en null o un valor por defecto según tu lógica.
            $reg->odi = null; // o $reg->odi = 'valor_por_defecto';
        }

        if($request->hasFile('extintores')){
            $archivo=$request->file('extintores');
            $archivo->move(public_path().'/Archivos/geryjef/extintores/', $getUniqueFileName($archivo));
            $reg->extintores=$getUniqueFileName($archivo);
        }else {
            $reg->extintores = null;
        }

        if($request->hasFile('difusion')){
            $archivo=$request->file('difusion');
            $archivo->move(public_path().'/Archivos/geryjef/difusion/', $getUniqueFileName($archivo));
            $reg->difusion=$getUniqueFileName($archivo);
        }else {
            $reg->difusion = null;
        }

        if($request->hasFile('taller_responsabilidad_civil_penal')){
            $archivo=$request->file('taller_responsabilidad_civil_penal');
            $archivo->move(public_path().'/Archivos/geryjef/taller_responsabilidad_civil_penal/', $getUniqueFileName($archivo));
            $reg->taller_responsabilidad_civil_penal=$getUniqueFileName($archivo);
        }else {
            $reg->taller_responsabilidad_civil_penal = null;
        }

        if($request->hasFile('investigacion_accidentes')){
            $archivo=$request->file('investigacion_accidentes');
            $archivo->move(public_path().'/Archivos/geryjef/investigacion_accidentes/', $getUniqueFileName($archivo));
            $reg->investigacion_accidentes=$getUniqueFileName($archivo);
        }else {
            $reg->investigacion_accidentes = null;
        }

        if($request->hasFile('liderazgo_comunicacion_administracion_negocios')){
            $archivo=$request->file('liderazgo_comunicacion_administracion_negocios');
            $archivo->move(public_path().'/Archivos/geryjef/liderazgo_comunicacion_administracion_negocios/', $getUniqueFileName($archivo));
            $reg->liderazgo_comunicacion_administracion_negocios=$getUniqueFileName($archivo);
        }else {
            $reg->liderazgo_comunicacion_administracion_negocios = null;
        }

        if($request->hasFile('identificacion_peligros_y_evaluacion_riesgos')){
            $archivo=$request->file('identificacion_peligros_y_evaluacion_riesgos');
            $archivo->move(public_path().'/Archivos/geryjef/identificacion_peligros_y_evaluacion_riesgos/', $getUniqueFileName($archivo));
            $reg->identificacion_peligros_y_evaluacion_riesgos=$getUniqueFileName($archivo);
        }else {
            $reg->identificacion_peligros_y_evaluacion_riesgos = null;
        }

        if($request->hasFile('prevencion_coronavirus')){
            $archivo=$request->file('prevencion_coronavirus');
            $archivo->move(public_path().'/Archivos/geryjef/prevencion_coronavirus/', $getUniqueFileName($archivo));
            $reg->prevencion_coronavirus=$getUniqueFileName($archivo);
        }else {
            $reg->prevencion_coronavirus = null;
        }

        if($request->hasFile('diploma')){
            $archivo=$request->file('diploma');
            $archivo->move(public_path().'/Archivos/geryjef/diploma/', $getUniqueFileName($archivo));
            $reg->diploma=$getUniqueFileName($archivo);
        }else {
            $reg->diploma = null;
        }

        //return $reg;
        $reg->save();
        return redirect()->route('listadoGeryJef');
    }

    public function perfilcapacitado(){
        return view('admin.perfilcapacitadogyj');
    }

    public function pdfgeryjef(){
        $pdfgeryjef=GeryJef::all();
        $pdf = Pdf::loadView('admin.reportegeryjef', compact('pdfgeryjef'));
        return $pdf->stream('reporte_capacitaciones_geryjef.pdf');  //stream para visualizar pdf, tambien permite descargar
        //  return $pdf->download('reporte_capacitaciones_geryjef.pdf'); solo para descargar pdf
        //  https://github.com/barryvdh/laravel-dompdf
        //  Repositorio para la libreria de PDF
    }
}
