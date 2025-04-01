@extends('layouts.perfilCapacitadoBase')

@section('botonesRedireccionFormYListadoGyJ')
    <p><a class="btn btn_FormNuevoUsuario" href="{{route('formGeryJef')}}">Ingresar nueva capacitación</a></p>
    <p><a class="btn btn_VerNU" href="{{route('listadoGeryJef')}}">Volver a listado gerencia y jefatura</a></p>
@endsection

@section('capacitacionesGerYJef')
    <li>
        <span><b>Taller de Responsabilidad Civil y Penal</b></span>
        <div>
            <button class="btn btn-primary" onclick="window.open('', '_blank')">Acceder</button>
            <input class="btn btn-secondary" type="file" id="fileInput"  accept=".pdf" onclick="replaceDocument()" onchange="showSelectedFileName()">
            <button class="btn btn-success" onclick="saveChanges()">Guardar cambios</button>
        </div>
    </li>
    <br>
    <li>
        <span><b>Investigacion de Accidentes</b></span>
        <div>
            <button class="btn btn-primary" onclick="window.open('', '_blank')">Acceder</button>
            <input class="btn btn-secondary" type="file" id="fileInput"  accept=".pdf" onclick="replaceDocument()" onchange="showSelectedFileName()">
            <button class="btn btn-success" onclick="saveChanges()">Guardar cambios</button>
        </div>
    </li>
    <br>
    <li>
        <span><b>Liderazgo y Comunicación en la Administracion de Negocios</b></span>
        <div>
            <button class="btn btn-primary" onclick="window.open('', '_blank')">Acceder</button>
            <input class="btn btn-secondary" type="file" id="fileInput"  accept=".pdf" onclick="replaceDocument()" onchange="showSelectedFileName()">
            <button class="btn btn-success" onclick="saveChanges()">Guardar cambios</button>
        </div>
    </li>
    <br>
    <li>
        <span><b>Identificacion de Peligros y Evaluacion de Riesgos</b></span>
        <div>
            <button class="btn btn-primary" onclick="window.open('', '_blank')">Acceder</button>
            <input class="btn btn-secondary" type="file" id="fileInput"  accept=".pdf" onclick="replaceDocument()" onchange="showSelectedFileName()">
            <button class="btn btn-success" onclick="saveChanges()">Guardar cambios</button>
        </div>
    </li>
    <br>
    <li>
        <span><b>Prevencion del Coronavirus</b></span>
        <div>
            <button class="btn btn-primary" onclick="window.open('', '_blank')">Acceder</button>
            <input class="btn btn-secondary" type="file" id="fileInput"  accept=".pdf" onclick="replaceDocument()" onchange="showSelectedFileName()">
            <button class="btn btn-success" onclick="saveChanges()">Guardar cambios</button>
        </div>
    </li>
@endsection

