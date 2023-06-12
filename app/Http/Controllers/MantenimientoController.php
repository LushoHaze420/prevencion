<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mantenimiento;

class MantenimientoController extends Controller{
    public function index(){
        return view('admin.admincapacitaciones');//pagina principal
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
        if($request->hasFile('documentos')){
            $archivo=$request->file('documentos');
            $archivo->move(public_path().'/Archivos/mantenimiento/',$archivo->getClientOriginalName());
            $reg->documentos=$archivo->getClientOriginalName();
        }
        //return $reg;
        $reg->save();
        return redirect()->route('listadoMantenimiento'); //name de la ruta
    }
};


