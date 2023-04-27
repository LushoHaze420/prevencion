<?php

namespace App\Http\Controllers;
use App\Models\Aseadores;

use Illuminate\Http\Request;

class AseadoresController extends Controller
{
    public function index(){
        return view('capacitaciones');//pagina principal
    }

    public function create(){
        return view('aseadores'); //formulario de ingreso
    }

    public function show(){
        $formaseadores = Aseadores::orderBy('id', 'desc')->get();
        //dd($formulariocap);
        return view('listadoaseadores', ['listadoaseadores'=>$formaseadores]); //listado de capacitados
    }

    public function store(Request $request){
        $reg=new Aseadores();
        $reg->rut_prev=$request->rut_prev;
        $reg->nombre_prev=$request->nombre_prev;
        $reg->apellidos_prev=$request->apellidos_prev;
        $reg->rut_cap=$request->rut_cap;
        $reg->nombre_cap=$request->nombre_cap;
        $reg->apellidos_cap=$request->apellidos_cap;
        $reg->rol_cap=$request->rol_cap;
        if($request->hasFile('documentos')){
            $archivo=$request->file('documentos');
            $archivo->move(public_path().'/Archivos/aseadores/',$archivo->getClientOriginalName());
            $reg->documentos=$archivo->getClientOriginalName();
        }
        //return $reg;
        $reg->save();
        return redirect()->route('listadoAseadores');
    }
}
