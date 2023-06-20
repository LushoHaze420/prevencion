<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NuevoUsuario;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

class NuevoUsuarioController extends Controller{
    public function create(){
        return view ('admin.nuevousuario');
    }

    public function show(){
        $formnuevousuario = NuevoUsuario::orderBy('id', 'desc')->get();
        //dd($formulariocap);
        return view('admin.listadousuarios', ['listadousuarios'=>$formnuevousuario]); //listado de nuevos usuarios
    }
//------------------------------------------------------------------------
    public function store(Request $request){
        $rutNU = $request->rut_NU;

        // Verificar si el registro ya existe
        $existingRecord = NuevoUsuario::where('rut_NU', $rutNU)->exists();

        if ($existingRecord) {
                // El registro ya existe, puedes mostrar un mensaje de error
            return back()->with('error', 'El registro ya existe.');
        }

        // si el registro no existe, puedes asignar el valor a la variable y continuar con el proceso de almacenamiento
        $regNU = new NuevoUsuario();
        $regNU->rut_NU = $rutNU;
        $regNU->nombre_NU=$request->nombre_NU;
        $regNU->apellido_NU=$request->apellido_NU;
        $regNU->email_NU=$request->email_NU;
        $regNU->contrasena_NU=$request->contrasena_NU;
        $regNU->rol_NU=$request->rol_NU;
        //return $reg;
        $regNU->save();
        return redirect()->route('listadoUsuarios'); //este es el name de la ruta

    }


    // public function edit($id){

    //     $usuario = NuevoUsuario::find($id);
    //     return view('admin.perfilcapacitado', compact('usuario')); para modificacion del perfil del usuario, no terminado
    // }

    public function perfilusuario(){
        return view('admin.perfilusuario');
    }


}
