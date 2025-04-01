<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CondyAux;
use Barryvdh\DomPDF\Facade\Pdf;

class CondyAuxController extends Controller
{
    public function index(){
        return view('admin.capacitaciones');//pagina principal
    }

    public function create(){
        return view('admin.condyaux'); //formulario de ingreso
    }

    public function show(){
        $formcondyaux = CondyAux::orderBy('id', 'desc')->get();
        return view('admin.listadocondyaux', ['listadocondyaux'=>$formcondyaux]); //listado de capacitados
    }

    public function store(Request $request){
        $reg=new CondyAux();
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
            $archivo->move(public_path().'/Archivos/condyaux/odi/', $getUniqueFileName($archivo));
            $reg->odi=$getUniqueFileName($archivo);
        }else {
            // Si no hay archivo, establece el campo difusion en null o un valor por defecto según tu lógica.
            $reg->odi = null; // o $reg->odi = 'valor_por_defecto';
        }

        if($request->hasFile('extintores')){
            $archivo=$request->file('extintores');
            $archivo->move(public_path().'/Archivos/condyaux/extintores/', $getUniqueFileName($archivo));
            $reg->extintores=$getUniqueFileName($archivo);
        }else {
            $reg->extintores = null;
        }

        if($request->hasFile('difusion')){
            $archivo=$request->file('difusion');
            $archivo->move(public_path().'/Archivos/condyaux/difusion/', $getUniqueFileName($archivo));
            $reg->difusion=$getUniqueFileName($archivo);
        }else {
            $reg->difusion = null;
        }

        if($request->hasFile('manejo_defensiva')){
            $archivo=$request->file('manejo_defensiva');
            $archivo->move(public_path().'/Archivos/condyaux/manejo_defensiva/', $getUniqueFileName($archivo));
            $reg->manejo_defensiva=$getUniqueFileName($archivo);
        }else {
            $reg->manejo_defensiva = null;
        }

        if($request->hasFile('riesgos_criticos_conduccion_buses')){
            $archivo=$request->file('riesgos_criticos_conduccion_buses');
            $archivo->move(public_path().'/Archivos/condyaux/riesgos_criticos_conduccion_buses/', $getUniqueFileName($archivo));
            $reg->riesgos_criticos_conduccion_buses=$getUniqueFileName($archivo);
        }else {
            $reg->riesgos_criticos_conduccion_buses = null;
        }

        if($request->hasFile('reinduccion_exceso_velocidad')){
            $archivo=$request->file('reinduccion_exceso_velocidad');
            $archivo->move(public_path().'/Archivos/condyaux/reinduccion_exceso_velocidad/', $getUniqueFileName($archivo));
            $reg->reinduccion_exceso_velocidad=$getUniqueFileName($archivo);
        }else {
            $reg->reinduccion_exceso_velocidad = null;
        }

        if($request->hasFile('campaña_exceso_velocidad')){
            $archivo=$request->file('campaña_exceso_velocidad');
            $archivo->move(public_path().'/Archivos/condyaux/campaña_exceso_velocidad/', $getUniqueFileName($archivo));
            $reg->campaña_exceso_velocidad=$getUniqueFileName($archivo);
        }else {
            $reg->campaña_exceso_velocidad = null;
        }

        if($request->hasFile('conduccion_segura_alta_montaña')){
            $archivo=$request->file('conduccion_segura_alta_montaña');
            $archivo->move(public_path().'/Archivos/condyaux/conduccion_segura_alta_montaña/', $getUniqueFileName($archivo));
            $reg->conduccion_segura_alta_montaña=$getUniqueFileName($archivo);
        }else {
            $reg->conduccion_segura_alta_montaña = null;
        }

        if($request->hasFile('control_riesgos_conduccion')){
            $archivo=$request->file('control_riesgos_conduccion');
            $archivo->move(public_path().'/Archivos/condyaux/control_riesgos_conduccion/', $getUniqueFileName($archivo));
            $reg->control_riesgos_conduccion=$getUniqueFileName($archivo);
        }else {
            $reg->control_riesgos_conduccion = null;
        }

        if($request->hasFile('manejo_defensiva_autopistas_carreteras')){
            $archivo=$request->file('manejo_defensiva_autopistas_carreteras');
            $archivo->move(public_path().'/Archivos/condyaux/manejo_defensiva_autopistas_carreteras/', $getUniqueFileName($archivo));
            $reg->manejo_defensiva_autopistas_carreteras=$getUniqueFileName($archivo);
        }else {
            $reg->manejo_defensiva_autopistas_carreteras = null;
        }

        if($request->hasFile('control_riesgos_fatiga_somnolencia_conduccion')){
            $archivo=$request->file('control_riesgos_fatiga_somnolencia_conduccion');
            $archivo->move(public_path().'/Archivos/condyaux/control_riesgos_fatiga_somnolencia_conduccion/', $getUniqueFileName($archivo));
            $reg->control_riesgos_fatiga_somnolencia_conduccion=$getUniqueFileName($archivo);
        }else {
            $reg->control_riesgos_fatiga_somnolencia_conduccion = null;
        }

        if($request->hasFile('reinduccion_manejo_defensiva')){
            $archivo=$request->file('reinduccion_manejo_defensiva');
            $archivo->move(public_path().'/Archivos/condyaux/reinduccion_manejo_defensiva/', $getUniqueFileName($archivo));
            $reg->reinduccion_manejo_defensiva=$getUniqueFileName($archivo);
        }else {
            $reg->reinduccion_manejo_defensiva = null;
        }

        if($request->hasFile('manejo_manual_cargas')){
            $archivo=$request->file('manejo_manual_cargas');
            $archivo->move(public_path().'/Archivos/condyaux/manejo_manual_cargas/', $getUniqueFileName($archivo));
            $reg->manejo_manual_cargas=$getUniqueFileName($archivo);
        }else {
            $reg->manejo_manual_cargas = null;
        }

        if($request->hasFile('curso_teorico_practico_conduccion_simulador')){
            $archivo=$request->file('curso_teorico_practico_conduccion_simulador');
            $archivo->move(public_path().'/Archivos/condyaux/curso_teorico_practico_conduccion_simulador/', $getUniqueFileName($archivo));
            $reg->curso_teorico_practico_conduccion_simulador=$getUniqueFileName($archivo);
        }else {
            $reg->curso_teorico_practico_conduccion_simulador = null;
        }

        if($request->hasFile('promocion_salud')){
            $archivo=$request->file('promocion_salud');
            $archivo->move(public_path().'/Archivos/condyaux/promocion_salud/', $getUniqueFileName($archivo));
            $reg->promocion_salud=$getUniqueFileName($archivo);
        }else {
            $reg->promocion_salud = null;
        }

        if($request->hasFile('diploma')){
            $archivo=$request->file('diploma');
            $archivo->move(public_path().'/Archivos/condyaux/diploma/', $getUniqueFileName($archivo));
            $reg->diploma=$getUniqueFileName($archivo);
        }else {
            $reg->diploma = null;
        }

        //return $reg;
        $reg->save();
        return redirect()->route('listadoCondyAux');
    }


    public function perfilcapacitado(){
        return view('admin.perfilcapacitadocya');
    }

    public function pdfcondyaux(){
        $pdfcondyaux=CondyAux::all();
        $pdf = Pdf::loadView('admin.reportecondyaux', compact('pdfcondyaux'));
        return $pdf->stream('reporte_capacitaciones_condyaux.pdf');  //stream para visualizar pdf, tambien permite descargar
        //  return $pdf->download('reporte_capacitaciones_condyaux.pdf'); solo para descargar pdf
        //  https://github.com/barryvdh/laravel-dompdf
        //  Repositorio para la libreria de PDF
    }
}
