<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CondyAux;

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
        if($request->hasFile('documentos')){
            $archivo=$request->file('documentos');
            $archivo->move(public_path().'/Archivos/condyaux/',$archivo->getClientOriginalName());
            $reg->documentos=$archivo->getClientOriginalName();
        }
        //return $reg;
        $reg->save();
        return redirect()->route('listadoCondyAux');
    }


    public function perfilcapacitado(){
        return view('admin.perfilcapacitadocya');
    }
}
