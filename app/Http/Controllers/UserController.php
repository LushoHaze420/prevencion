<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function create(){   //muestra el formulario para crear un nuevo usuario
        return view ('auth.nuevousuario');
    }

    public function show(){    //muestra el listado de usuarios y nuevos usuarios
        $formnuevousuario = user::orderBy('id', 'desc')->get();
        return view('admin.listadousuarios', ['listadousuarios'=>$formnuevousuario]);
    }
    public function store2(Request $request){    //metodo en pausa

        $regNU = new user();
        $regNU->rut = $request->rut;
        $regNU->name=$request->name;
        $regNU->last_name=$request->last_name;
        $regNU->email=$request->email;
        $regNU->password=$request->password;
        $regNU->role=$request->role;
        //return $reg;
        $regNU->save();
        return redirect()->route('listadoUsuarios'); //este es el name de la ruta

    }

    public function verificaremail(Request $request)
    {
        $email = $request->input('email');
        $emailexiste = User::where('email', $email)->exists();

        return response()->json(['exists' => $emailexiste]);
    }


    private function mapRoleValue($role)
    {

        $roleMappings = [
            'rol_usuario_superadmin' => 'Superadmin',
            'rol_usuario_admin' => 'Admin',
            'rol_usuario_prevencionista' => 'Prevencionista',
            'rol_usuario_consultor' => 'Consultor',
        ];

        if (isset($roleMappings[$role])) {
            return $roleMappings[$role];
        }

        // Si el valor del campo role no está mapeado, puedes retornar un valor predeterminado o lanzar una excepción según tus necesidades.
        return 'Unknown Role';
    }


    public function store(Request $request)   //metodo en prueba
    {
        $validator = Validator::make($request->all(), [
            'rut' => 'required',
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            //'role' => 'required|in:rol_usuario_superadmin, rol_usuario_admin, rol_usuario_prevencionista, rol_usuario_consultor',
            'role' => 'required|in:rol_usuario_superadmin,rol_usuario_admin,rol_usuario_prevencionista,rol_usuario_consultor',

        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()], 422);
        }

        // continuar con el proceso de almacenamiento si la validación es exitosa
        $regNU = new User;
        $regNU->rut = $request->input('rut');
        $regNU->name = $request->input('name');
        $regNU->last_name = $request->input('last_name');
        $regNU->email = $request->input('email');
        $regNU->password = bcrypt($request->input('password'));
        $regNU->role = $this->mapRoleValue($request->input('role'));
        $regNU->save();

        return redirect()->route('listadoUsuarios'); //este es el name de la ruta
    }


    public function perfilusuario(){       //vista creada solo para una maquetacion funcional, falta la logica.
        return view('admin.perfilusuario');
    }


}
