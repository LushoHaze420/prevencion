@extends('layouts.perfilCapacitadoBase')

@section('botonesRedireccionFormYListadoCa')
    <p><a class="btn btn_FormNuevoUsuario" href="{{route('formCajeras')}}">Ingresar nueva capacitación</a></p>
    <p><a class="btn btn_VerNU" href="{{route('listadoCajeras')}}">Volver a listado cajeras</a></p>
@endsection

@section('capacitacionesCajeras')
    <li>
        <span><b>Atención de Publico</b></span>
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

