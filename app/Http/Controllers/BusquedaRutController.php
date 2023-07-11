<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BusquedaRut;
use App\Models\Administrativos;
use App\Models\Aseadores;
use App\Models\Cajeras;
use App\Models\CondyAux;
use App\Models\GeryJef;
use App\Models\Mantenimiento;
use App\Models\NuevoUsuario;


class BusquedaRutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($rut_cap)//revisar metodo ya que no esta funcionando
    {
        $administrativos = Administrativos::where('rut_cap', $rut_cap)->select('rut_cap', 'nombre_cap', 'apellido_cap', 'rol_cap')->get();
        $aseadores = Aseadores::where('rut_cap', $rut_cap)->select('rut_cap', 'nombre_cap', 'apellido_cap', 'rol_cap')->get();
        $cajeras = Cajeras::where('rut_cap', $rut_cap)->select('rut_cap', 'nombre_cap', 'apellido_cap', 'rol_cap')->get();
        $condyaux = CondyAux::where('rut_cap', $rut_cap)->select('rut_cap', 'nombre_cap', 'apellido_cap', 'rol_cap')->get();
        $geryjef = GeryJef::where('rut_cap', $rut_cap)->select('rut_cap', 'nombre_cap', 'apellido_cap', 'rol_cap')->get();
        $mantenimiento = Mantenimiento::where('rut_cap', $rut_cap)->select('rut_cap', 'nombre_cap', 'apellido_cap', 'rol_cap')->get();

        $listadoCapacitados = $administrativos->concat($aseadores)
            ->concat($cajeras)
            ->concat($condyaux)
            ->concat($geryjef)
            ->concat($mantenimiento);

        return view('admin.busquedarut', [
            'listadoCapacitados' => $listadoCapacitados
        ]);
    }

    public function perfil()
    {
        return view('admin.busquedarut');
    }






    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
