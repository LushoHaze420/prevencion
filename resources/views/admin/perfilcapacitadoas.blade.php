@extends('layouts.perfilCapacitadoBase')

@section('botonesRedireccionFormYListadoAs')
    <p><a class="btn btn_FormNuevoUsuario" href="{{route('formAseadores')}}">Ingresar nueva capacitación</a></p> {{--boton para volver a crear nuevo usuario--}}
    <p><a class="btn btn_VerNU" href="{{route('listadoAseadores')}}">Volver a listado aseadores</a></p>
@endsection

@section('capacitacionesAseadores')
    <li>
        <span><b>Limpieza y Desinfeccion frente a Covid</b></span>
        <div>
            <button class="btn btn-primary" onclick="openDocument('documento1.pdf')">Acceder</button>
            <input class="btn btn-secondary" type="file" id="fileInput"  accept=".pdf" onclick="replaceDocument()" onchange="showSelectedFileName()">
            <button class="btn btn-success" onclick="saveChanges()">Guardar cambios</button>
        </div>
    </li>
    <br>
    <li>
        <span><b>Uso de Sustancias Peligrosas</b></span>
        <div>
            <button class="btn btn-primary" onclick="openDocument('documento1.pdf')">Acceder</button>
            <input class="btn btn-secondary" type="file" id="fileInput"  accept=".pdf" onclick="replaceDocument()" onchange="showSelectedFileName()">
            <button class="btn btn-success" onclick="saveChanges()">Guardar cambios</button>
        </div>
    </li>
    <br>
    <li>
        <span><b>Uso Correcto de EPP</b></span>
        <div>
            <button class="btn btn-primary" onclick="openDocument('documento1.pdf')">Acceder</button>
            <input class="btn btn-secondary" type="file" id="fileInput"  accept=".pdf" onclick="replaceDocument()" onchange="showSelectedFileName()">
            <button class="btn btn-success" onclick="saveChanges()">Guardar cambios</button>
        </div>
    </li>
@endsection

