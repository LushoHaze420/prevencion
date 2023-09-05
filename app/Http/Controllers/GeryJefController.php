<?php

namespace App\Http\Controllers;
use App\Models\GeryJef;
use Illuminate\Http\Request;

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
        if($request->hasFile('documentos')){
            $archivo=$request->file('documentos');
            $archivo->move(public_path().'/Archivos/geryjef/',$archivo->getClientOriginalName());
            $reg->documentos=$archivo->getClientOriginalName();
        }
        //return $reg;
        $reg->save();
        return redirect()->route('listadoGeryJef');
    }

    public function perfilcapacitado(){
        return view('admin.perfilcapacitadogyj');
    }
}
