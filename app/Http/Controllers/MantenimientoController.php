<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mantenimiento;
use Barryvdh\DomPDF\Facade\Pdf;


class MantenimientoController extends Controller{
    public function index(){
        return view('admin.capacitaciones');//pagina principal
    }

    public function create(){
        return view('admin.mantenimiento'); //formulario de ingreso general, se debe heradar esta vista para cada usuario.
    }

    public function show(){
        $formmantenimiento = Mantenimiento::orderBy('id', 'desc')->get();
        //dd($formulariocap);
        return view('admin.listadomantenimiento', ['listadomantenimiento'=>$formmantenimiento]); //listado de capacitados, esta lista hace uso todos los usuarios.
    }   //este código carga la vista 'listadomantenimiento' y pasa el valor de $formmantenimiento a través de la variable $listadomantenimiento (revisar cual variable hereda) para ser utilizado en la vista.

    public function store(Request $request){
        $reg=new Mantenimiento();
        // $reg->rut_prev=$request->rut_prev;
        $reg->nombre_prev=$request->nombre_prev;
        // $reg->apellidos_prev=$request->apellidos_prev;
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
            $archivo->move(public_path().'/Archivos/mantenimiento/odi/', $getUniqueFileName($archivo));
            $reg->odi=$getUniqueFileName($archivo);
        }else {
            // Si no hay archivo, establece el campo difusion en null o un valor por defecto según tu lógica.
            $reg->odi = null; // o $reg->odi = 'valor_por_defecto';
        }

        if($request->hasFile('extintores')){
            $archivo=$request->file('extintores');
            $archivo->move(public_path().'/Archivos/mantenimiento/extintores/', $getUniqueFileName($archivo));
            $reg->extintores=$getUniqueFileName($archivo);
        }else {
            $reg->extintores = null;
        }

        if($request->hasFile('difusion')){
            $archivo=$request->file('difusion');
            $archivo->move(public_path().'/Archivos/mantenimiento/difusion/', $getUniqueFileName($archivo));
            $reg->difusion=$getUniqueFileName($archivo);
        }else {
            $reg->difusion = null;
        }

        if($request->hasFile('manejo_manual_carga_ma')){
            $archivo=$request->file('manejo_manual_carga_ma');
            $archivo->move(public_path().'/Archivos/mantenimiento/manejo_manual_carga_ma/', $getUniqueFileName($archivo));
            $reg->manejo_manual_carga_ma=$getUniqueFileName($archivo);
        }else {
            $reg->manejo_manual_carga_ma = null;
        }

        if($request->hasFile('transtornos_musculo_esqueleticos')){
            $archivo=$request->file('transtornos_musculo_esqueleticos');
            $archivo->move(public_path().'/Archivos/mantenimiento/transtornos_musculo_esqueleticos/', $getUniqueFileName($archivo));
            $reg->transtornos_musculo_esqueleticos=$getUniqueFileName($archivo);
        }else {
            $reg->transtornos_musculo_esqueleticos = null;
        }

        if($request->hasFile('primeros_auxilios')){
            $archivo=$request->file('primeros_auxilios');
            $archivo->move(public_path().'/Archivos/mantenimiento/primeros_auxilios/', $getUniqueFileName($archivo));
            $reg->primeros_auxilios=$getUniqueFileName($archivo);
        }else {
            $reg->primeros_auxilios = null;
        }

        if($request->hasFile('manejo_sustancias_peligrosas')){
            $archivo=$request->file('manejo_sustancias_peligrosas');
            $archivo->move(public_path().'/Archivos/mantenimiento/manejo_sustancias_peligrosas/', $getUniqueFileName($archivo));
            $reg->manejo_sustancias_peligrosas=$getUniqueFileName($archivo);
        }else {
            $reg->manejo_sustancias_peligrosas = null;
        }

        if($request->hasFile('almacenamiento_sustancias_peligrosas')){
            $archivo=$request->file('almacenamiento_sustancias_peligrosas');
            $archivo->move(public_path().'/Archivos/mantenimiento/almacenamiento_sustancias_peligrosas/', $getUniqueFileName($archivo));
            $reg->almacenamiento_sustancias_peligrosas=$getUniqueFileName($archivo);
        }else {
            $reg->almacenamiento_sustancias_peligrosas = null;
        }

        if($request->hasFile('prevencion_exposicion_radiacion_uv')){
            $archivo=$request->file('prevencion_exposicion_radiacion_uv');
            $archivo->move(public_path().'/Archivos/mantenimiento/prevencion_exposicion_radiacion_uv/', $getUniqueFileName($archivo));
            $reg->prevencion_exposicion_radiacion_uv=$getUniqueFileName($archivo);
        }else {
            $reg->prevencion_exposicion_radiacion_uv = null;
        }

        if($request->hasFile('uso_correcto_epp')){
            $archivo=$request->file('uso_correcto_epp');
            $archivo->move(public_path().'/Archivos/mantenimiento/uso_correcto_epp/', $getUniqueFileName($archivo));
            $reg->uso_correcto_epp=$getUniqueFileName($archivo);
        }else {
            $reg->uso_correcto_epp = null;
        }

        if($request->hasFile('plan_emergencia')){
            $archivo=$request->file('plan_emergencia');
            $archivo->move(public_path().'/Archivos/mantenimiento/plan_emergencia/', $getUniqueFileName($archivo));
            $reg->plan_emergencia=$getUniqueFileName($archivo);
        }else {
            $reg->plan_emergencia = null;
        }

        if($request->hasFile('control_riesgos_altura')){
            $archivo=$request->file('control_riesgos_altura');
            $archivo->move(public_path().'/Archivos/mantenimiento/control_riesgos_altura/', $getUniqueFileName($archivo));
            $reg->control_riesgos_altura=$getUniqueFileName($archivo);
        }else {
            $reg->control_riesgos_altura = null;
        }

        if($request->hasFile('cuidado_manos')){
            $archivo=$request->file('cuidado_manos');
            $archivo->move(public_path().'/Archivos/mantenimiento/cuidado_manos/', $getUniqueFileName($archivo));
            $reg->cuidado_manos=$getUniqueFileName($archivo);
        }else {
            $reg->cuidado_manos = null;
        }

        if($request->hasFile('orientacion_prevencion_riesgos')){
            $archivo=$request->file('orientacion_prevencion_riesgos');
            $archivo->move(public_path().'/Archivos/mantenimiento/orientacion_prevencion_riesgos/', $getUniqueFileName($archivo));
            $reg->orientacion_prevencion_riesgos=$getUniqueFileName($archivo);
        }else {
            $reg->orientacion_prevencion_riesgos = null;
        }

        if($request->hasFile('prexor')){
            $archivo=$request->file('prexor');
            $archivo->move(public_path().'/Archivos/mantenimiento/prexor/', $getUniqueFileName($archivo));
            $reg->prexor=$getUniqueFileName($archivo);
        }else {
            $reg->prexor = null;
        }

        if($request->hasFile('actitudes_preventivas')){
            $archivo=$request->file('actitudes_preventivas');
            $archivo->move(public_path().'/Archivos/mantenimiento/actitudes_preventivas/', $getUniqueFileName($archivo));
            $reg->actitudes_preventivas=$getUniqueFileName($archivo);
        }else {
            $reg->actitudes_preventivas = null;
        }

        if($request->hasFile('uso_herramientas_electricas_y_motrices')){
            $archivo=$request->file('uso_herramientas_electricas_y_motrices');
            $archivo->move(public_path().'/Archivos/mantenimiento/uso_herramientas_electricas_y_motrices/', $getUniqueFileName($archivo));
            $reg->uso_herramientas_electricas_y_motrices=$getUniqueFileName($archivo);
        }else {
            $reg->uso_herramientas_electricas_y_motrices = null;
        }

        if($request->hasFile('diploma')){
            $archivo=$request->file('diploma');
            $archivo->move(public_path().'/Archivos/mantenimiento/diploma/', $getUniqueFileName($archivo));
            $reg->diploma=$getUniqueFileName($archivo);
        }else {
            $reg->diploma = null;
        }

        $reg->save();
        return redirect()->route('listadoMantenimiento');
    }

    public function perfilcapacitado(){
        return view('admin.perfilcapacitadoma');
    }

    public function pdfmantenimiento(){
        $pdfmantenimiento=Mantenimiento::all();
        $pdf = Pdf::loadView('admin.reportemantenimiento', compact('pdfmantenimiento'));
        return $pdf->stream('reporte_capacitaciones_mantenimiento.pdf');  //stream para visualizar pdf, tambien permite descargar
        //  return $pdf->download('reporte_capacitaciones_mantenimiento.pdf'); solo para descargar pdf
        //  https://github.com/barryvdh/laravel-dompdf
        //  Repositorio para la libreria de PDF
    }
}


