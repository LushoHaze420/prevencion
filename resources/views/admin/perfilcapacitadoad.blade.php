@extends('layouts.perfilCapacitadoBase')

@section('botonesRedireccionFormYListadoAd')
    <p><a class="btn btn_FormNuevoUsuario" href="{{route('formAdministrativos')}}">Ingresar nueva capacitación</a></p> {{--boton para volver a crear nuevo usuario--}}
    <p><a class="btn btn_VerNU" href="{{route('listadoAdministrativos')}}">Volver a listado administrativos</a></p>
@endsection

@section('capacitacionesAdministrativos')
    <li>
        <span><b>Primeros Auxilios</b></span>
        <div>
            <button class="btn btn-primary" onclick="window.open('', '_blank')">Acceder</button>
            <input class="btn btn-secondary" type="file" id="fileInput"  accept=".pdf" onclick="replaceDocument()" onchange="showSelectedFileName()">
            <button class="btn btn-success" onclick="saveChanges()">Guardar cambios</button>
        </div>
    </li>
    <br>
    <li>
        <span><b>TMERT</b></span>
        <div>
            <button class="btn btn-primary" onclick="window.open('', '_blank')">Acceder</button>
            <input class="btn btn-secondary" type="file" id="fileInput"  accept=".pdf" onclick="replaceDocument()" onchange="showSelectedFileName()">
            <button class="btn btn-success" onclick="saveChanges()">Guardar cambios</button>
        </div>
    </li>


@endsection



