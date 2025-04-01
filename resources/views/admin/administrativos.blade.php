
@extends('layouts.formularioBase')

@section('tituloPagina')
<title>Administrativos</title>
@endsection

@section('tituloDepartamento')
<h3><center>Administrativos</center></h3>
@endsection

@section('homeCapacitaciones')
<p><a class="btn btnHomeCap" href="{{route('homeCapacitaciones')}}">Volver a Capacitaciones</a></p>
@endsection

@section('botonListadoAdministrativos')
<p><a class="btn btnListadoAdministrativos" href="{{route('listadoAdministrativos')}}">Ver listado de capacitaciones</a></p>
@endsection


@section('storeCapAd')
<form action="{{route('storeCapacitacionAd')}}" method="POST" enctype="multipart/form-data"><!--para subir archivos tipo file y listadocapacitaciones se enlaza en web.php-->
@endsection

@section('capAdministrativos')

    {{-- INFORMACION OBLIGATORIA DEL CAPACITADO --}}

    <!--nombre del prevencionista que ingresa los datos-->
    <div class="row justify-content-auto g-5 p-1 border-2">
        <div class="col-md-4">
            <label for="" class="form-label"><b>Nombre prevencionista</b></label>
            <input type="text" name="nombre_prev" id="soloLetras_np" class="form-control" placeholder="por defecto el nombre de usuario loggeado"
                aria-label="Nombre prevencionista">
        </div>
    </div>

    <!--rut del capacitado-->
    <div class="row justify-content-auto g-5 p-1 border-2">
        <div class="col-md-4">
            <label for="rut_cap" class="form-label"><b>Rut capacitado</b></label>
            <input type="text" name="rut_cap" id="rut_cap" class="form-control" placeholder="Ingrese Rut del capacitado" aria-label="Rut capacitado" maxlength="9" autofocus="autofocus">
            <span id="maximo_caracteres_rc" class="form-text"></span>
        </div>
    </div>

    <!--nombre y apellidos capacitado-->
    <div class="row justify-content-auto g-5 p-1 border-2">
        <div class="col-md-4">
            <label for="" class="form-label"><b>Nombre capacitado</b></label>
            <input type="text" name="nombre_cap" id="soloLetras_nc" class="form-control" placeholder="Ingrese nombre del capacitado"
                aria-label="Nombre capacitado">
        </div>
    </div>
    <div class="row justify-content-auto g-5 p-1 border-2">
        <div class="col-md-4">
            <label for="" class="form-label"><b>Apellidos capacitado</b></label>
            <input type="text" name="apellidos_cap" id="soloLetras_ac" class="form-control" placeholder="Ingrese Apellidos del capacitado"
                aria-label="Apellidos capacitado">
        </div>
    </div>

        <!--cargo del capacitado-->
    <div class="row justify-content-auto g-5 p-1 border-2">
        <div class="col-md-4 "><label for="" class="form-label"><b>Cargo capacitado</b></label>
            <input type="text" name="cargo_cap" id="soloLetras_cc" class="form-control" placeholder="Ingrese Cargo del capacitado" aria-label="Cargo capacitado">
        </div>
    </div>
    <br>

    {{-- CAPACITACIONES GENERALES PARA TODOS LOS COLABORADORES --}}

    {{-- ODI --}}
    <div class="d-flex justify-content-start align-items-start">
        <div class="col-md-5 mb-3 pl-1 border-2 ODI ">
            <label class="form-label" for="inputGroupFileODI" ><b>ODI</b></label>
            <input class="form-control" type="file" name="odi" id="inputGroupFileODI">
        </div>
    </div>

    {{-- Uso y Manejo Extintores --}}
    <div class="d-flex justify-content-start align-items-start">
        <div class="col-md-5 mb-3 pl-1 border-2 Extintores ">
            <label class="form-label" for="inputGroupFileExtintores" ><b>Uso y Manejo Extintores</b></label>
            <input class="form-control" type="file" name="extintores" id="inputGroupFileExtintores">
        </div>
    </div>

    {{-- Difusion Plan de Emergencia --}}
    <div class="d-flex justify-content-start align-items-start">
        <div class="col-md-5 mb-3 pl-1 border-2 Difusion">
            <label class="form-label" for="inputGroupFileDifusion" ><b>Difusion Plan de Emergencia</b></label>
            <input class="form-control" type="file" name="difusion" id="inputGroupFileDifusion">
        </div>
    </div>

    {{-- Primeros Auxilios --}}
    <div class="d-flex justify-content-start align-items-start">
        <div class="col-md-5 mb-3 pl-1 border-2 PrimerosAuxilios">
            <label class="form-label" for="inputGroupFilePrimerosAuxilios" ><b>Primeros Auxilios</b></label>
            <input class="form-control" type="file" name="primeros_auxilios" id="inputGroupFilePrimerosAuxilios">
        </div>
    </div>

    {{-- TMERT administradores--}}
    <div class="d-flex justify-content-start align-items-start">
        <div class="col-md-5 mb-3 pl-1 border-2 TMERTad">
            <label class="form-label" for="inputGroupFileTMERTad" ><b>TMERT</b></label>
            <input class="form-control" type="file" name="tmertad" id="inputGroupFileTMERTad">
        </div>
    </div>

    {{-- Diploma de Capacitación --}}
    <div class="d-flex justify-content-start align-items-start">
        <div class="col-md-5 mb-3 pl-1 border-2 Diploma">
            <label class="form-label" for="inputGroupFileDiploma" ><b>Diploma de Capacitación</b></label>
            <input class="form-control" type="file" name="diploma" id="inputGroupFileDiploma">
            <br>
            {{-- sweetalert2 solo funciona con conexion a internet --}}
            <button class="btn btn-success" type="submit" data-toggle="modal" data-target="#modalError">Subir Documentos</button>
        </div>
    </div>

@endsection

