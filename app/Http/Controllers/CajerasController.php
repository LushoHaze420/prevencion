<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cajeras;

class CajerasController extends Controller
{
    public function index(){
        return view('capacitaciones');//pagina principal
    }

    public function create(){
        return view('cajeras'); //formulario de ingreso
    }

    public function show(){
        $formmcajeras = Cajeras::orderBy('id', 'desc')->get();
        //dd($formulariocap);
        return view('listadocajeras', ['listadocajeras'=>$formmcajeras]); //listado de capacitados
    }

    public function store(Request $request){
        $reg=new Cajeras();
        $reg->rut_prev=$request->rut_prev;
        $reg->nombre_prev=$request->nombre_prev;
        $reg->apellidos_prev=$request->apellidos_prev;
        $reg->rut_cap=$request->rut_cap;
        $reg->nombre_cap=$request->nombre_cap;
        $reg->apellidos_cap=$request->apellidos_cap;
        $reg->rol_cap=$request->rol_cap;
        if($request->hasFile('documentos')){
            $archivo=$request->file('documentos');
            $archivo->move(public_path().'/Archivos/cajeras/',$archivo->getClientOriginalName());
            $reg->documentos=$archivo->getClientOriginalName();
        }
        //return $reg;
        $reg->save();
        return redirect()->route('listadoCajeras');
    }


}
