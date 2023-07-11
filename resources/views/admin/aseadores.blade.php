@extends('layouts.formularioBase')

@section('tituloPaginaA')
<title>Aseadores</title>
@endsection

@section('tituloArea')
<h3><center>Aseadores</center></h3>
@endsection

@section('adminCap')
<p><a class="btn btnAdminCap" href="{{route('adminCap')}}">Volver a capacitaciones</a></p>
@endsection

@section('botonListadoAseadores')
<p><a class="btn btnListadoAseadores" href="{{route('listadoAseadores')}}">Ver listado de capacitaciones</a></p>
@endsection

@section('capAseadores')
    {{-- Limpieza y Desinfeccion frente a Covid --}}
    <div class="d-flex justify-content-start align-items-start">
        <div class="col-md-5 mb-3 pl-1 border-2 LimpiezaDesinfeccionCovid">
            <label class="form-label" for="inputGroupFileLimpiezaDesinfeccionCovid" ><b>Limpieza y Desinfeccion frente a Covid</b></label>
            <input class="form-control" type="file" name="LimpiezaDesinfeccionCovid" id="inputGroupFileLimpiezaDesinfeccionCovid">
        </div>
    </div>

    {{-- Uso de Sustancias Peligrosas --}}
    <div class="d-flex justify-content-start align-items-start">
        <div class="col-md-5 mb-3 pl-1 border-2 UsoSustanciasPeligrosas">
            <label class="form-label" for="inputGroupFileUsoSustanciasPeligrosas" ><b>Uso de Sustancias Peligrosas</b></label>
            <input class="form-control" type="file" name="UsoSustanciasPeligrosas" id="inputGroupFileUsoSustanciasPeligrosas">
        </div>
    </div>

        {{-- Uso Correcto de EPP --}}
        <div class="d-flex justify-content-start align-items-start">
            <div class="col-md-5 mb-3 pl-1 border-2 UsoCorrectoEPP">
                <label class="form-label" for="inputGroupFileUsoCorrectoEPP" ><b>Uso Correcto de EPP</b></label>
                <input class="form-control" type="file" name="UsoCorrectoEPP" id="inputGroupFileUsoCorrectoEPP">
            </div>
        </div>
@endsection

@section('storeCapA')
<form action="{{route('storeCapacitacionA')}}" method="POST" enctype="multipart/form-data"><!--para subir archivos tipo file y listadocapacitaciones se enlaza en web.php-->
@endsection
