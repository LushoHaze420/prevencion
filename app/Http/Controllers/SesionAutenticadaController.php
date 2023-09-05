<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;


class SesionAutenticadaController extends Controller
{
    public function create(){
        return view ('auth.login');
    }

    public function store(Request $request){
        //return $request;
        $credenciales=$request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required','string'],
        ]);
        //return $credenciales;
        if ( ! Auth::attempt($credenciales, $request->boolean('recuerdame'))) {
            throw ValidationException::withMessages([
                'email' => 'Email Incorrecto o no registrado'
            ]);
            //return back()->with('error', 'Credenciales incorrectas.');
        }
        $request->session()->regenerate();
        return redirect()->intended('/capacitaciones')
            ->with('status', 'Bienvenido');
    }

    public function destroy(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }



}
