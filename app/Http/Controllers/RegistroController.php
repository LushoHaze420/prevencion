<?php
// controlador para crear nuevos usuarios
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistroController extends Controller{

    public function create(){
        return view ('auth.registro');
    }

    public function store(){
        $user=User::create(request(['rut_NU', 'nombre_NU','apellido_NU','email_NU','contrasena_NU','rol_NU']));
        auth()->login($user);
        return redirect()->to('login.index');
    }
}
