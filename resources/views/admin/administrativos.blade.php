
@extends('layouts.formularioBase')

@section('tituloPaginaAD')
<title>Administrativos</title>
@endsection

@section('tituloArea')
<h3><center>Administrativos</center></h3>
@endsection

@section('homeCapacitaciones')
<p><a class="btn btnHomeCap" href="{{route('homeCapacitaciones')}}">Volver a Capacitaciones</a></p>
@endsection

@section('botonListadoAdministrativos')
<p><a class="btn btnListadoAdministrativos" href="{{route('listadoAdministrativos')}}">Ver listado de capacitaciones</a></p>
@endsection

@section('capAdministrativos')
    {{-- Primeros Auxilios --}}
    <div class="d-flex justify-content-start align-items-start">
        <div class="col-md-5 mb-3 pl-1 border-2 PrimerosAuxilios">
            <label class="form-label" for="inputGroupFilePrimerosAuxilios" ><b>Primeros Auxilios</b></label>
            <input class="form-control" type="file" name="PrimerosAuxilios" id="inputGroupFilePrimerosAuxilios">
        </div>
    </div>

    {{-- TMERT administradores--}}
    <div class="d-flex justify-content-start align-items-start">
        <div class="col-md-5 mb-3 pl-1 border-2 TMERTad">
            <label class="form-label" for="inputGroupFileTMERTad" ><b>TMERT</b></label>
            <input class="form-control" type="file" name="TMERTad" id="inputGroupFileTMERTad">
        </div>
    </div>
@endsection

@section('storeCapAd')
<form action="{{route('storeCapacitacionAd')}}" method="POST" enctype="multipart/form-data"><!--para subir archivos tipo file y listadocapacitaciones se enlaza en web.php-->
@endsection
