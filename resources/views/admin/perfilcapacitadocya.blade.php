@extends('layouts.perfilCapacitadoBase')

@section('botonesRedireccionFormYListadoCyA')
    <p><a class="btn btn_FormNuevoUsuario" href="{{route('formCondyAux')}}">Ingresar nueva capacitación</a></p>
    <p><a class="btn btn_VerNU" href="{{route('listadoCondyAux')}}">Volver a listado conductores y auxiliares</a></p>
@endsection

@section('capacitacionesCondYAux')
    <li>
        <span><b>Manejo a la Defensiva</b></span>
        <div>
            <button class="btn btn-primary" onclick="window.open('', '_blank')">Acceder</button>
            <input class="btn btn-secondary" type="file" id="fileInput"  accept=".pdf" onclick="replaceDocument()" onchange="showSelectedFileName()">
            <button class="btn btn-success" onclick="saveChanges()">Guardar cambios</button>
        </div>
    </li>
    <br>
    <li>
        <span><b>Riesgos Criticos en la Conduccion de Buses</b></span>
        <div>
            <button class="btn btn-primary" onclick="window.open('', '_blank')">Acceder</button>
            <input class="btn btn-secondary" type="file" id="fileInput"  accept=".pdf" onclick="replaceDocument()" onchange="showSelectedFileName()">
            <button class="btn btn-success" onclick="saveChanges()">Guardar cambios</button>
        </div>
    </li>
    <br>
    <li>
        <span><b>Reinduccion por Exceso de Velocidad</b></span>
        <div>
            <button class="btn btn-primary" onclick="window.open('', '_blank')">Acceder</button>
            <input class="btn btn-secondary" type="file" id="fileInput"  accept=".pdf" onclick="replaceDocument()" onchange="showSelectedFileName()">
            <button class="btn btn-success" onclick="saveChanges()">Guardar cambios</button>
        </div>
    </li>
    <br>
    <li>
        <span><b>Campaña de Exceso de Velocidad</b></span>
        <div>
            <button class="btn btn-primary" onclick="window.open('', '_blank')">Acceder</button>
            <input class="btn btn-secondary" type="file" id="fileInput"  accept=".pdf" onclick="replaceDocument()" onchange="showSelectedFileName()">
            <button class="btn btn-success" onclick="saveChanges()">Guardar cambios</button>
        </div>
    </li>
    <br>
    <li>
        <span><b>Conduccion Segura en Alta Montaña</b></span>
        <div>
            <button class="btn btn-primary" onclick="window.open('', '_blank')">Acceder</button>
            <input class="btn btn-secondary" type="file" id="fileInput"  accept=".pdf" onclick="replaceDocument()" onchange="showSelectedFileName()">
            <button class="btn btn-success" onclick="saveChanges()">Guardar cambios</button>
        </div>
    </li>
    <br>
    <li>
        <span><b>Control de Riesgos en la Conduccion</b></span>
        <div>
            <button class="btn btn-primary" onclick="window.open('', '_blank')">Acceder</button>
            <input class="btn btn-secondary" type="file" id="fileInput"  accept=".pdf" onclick="replaceDocument()" onchange="showSelectedFileName()">
            <button class="btn btn-success" onclick="saveChanges()">Guardar cambios</button>
        </div>
    </li>
    <br>
    <li>
        <span><b>Manejo a la Defensiva en Autopistas y Carreteras</b></span>
        <div>
            <button class="btn btn-primary" onclick="window.open('', '_blank')">Acceder</button>
            <input class="btn btn-secondary" type="file" id="fileInput"  accept=".pdf" onclick="replaceDocument()" onchange="showSelectedFileName()">
            <button class="btn btn-success" onclick="saveChanges()">Guardar cambios</button>
        </div>
    </li>
    <br>
    <li>
        <span><b>Control de Riesgos de Fatiga y Somnolencia en la Conduccion</b></span>
        <div>
            <button class="btn btn-primary" onclick="window.open('', '_blank')">Acceder</button>
            <input class="btn btn-secondary" type="file" id="fileInput"  accept=".pdf" onclick="replaceDocument()" onchange="showSelectedFileName()">
            <button class="btn btn-success" onclick="saveChanges()">Guardar cambios</button>
        </div>
    </li>
    <br>
    <li>
        <span><b>Reinduccion en Manejo a la Defensiva</b></span>
        <div>
            <button class="btn btn-primary" onclick="window.open('', '_blank')">Acceder</button>
            <input class="btn btn-secondary" type="file" id="fileInput"  accept=".pdf" onclick="replaceDocument()" onchange="showSelectedFileName()">
            <button class="btn btn-success" onclick="saveChanges()">Guardar cambios</button>
        </div>
    </li>
    <br>
    <li>
        <span><b>Manejo Manual de Cargas</b></span>
        <div>
            <button class="btn btn-primary" onclick="window.open('', '_blank')">Acceder</button>
            <input class="btn btn-secondary" type="file" id="fileInput"  accept=".pdf" onclick="replaceDocument()" onchange="showSelectedFileName()">
            <button class="btn btn-success" onclick="saveChanges()">Guardar cambios</button>
        </div>
    </li>
    <br>
    <li>
        <span><b>Curso teorico/practico Conduccion Preventiva de vehiculos de Transporte de Pasajeros con Simulador</b></span>
        <div>
            <button class="btn btn-primary" onclick="window.open('', '_blank')">Acceder</button>
            <input class="btn btn-secondary" type="file" id="fileInput"  accept=".pdf" onclick="replaceDocument()" onchange="showSelectedFileName()">
            <button class="btn btn-success" onclick="saveChanges()">Guardar cambios</button>
        </div>
    </li>
    <br>
    <li>
        <span><b>Promocion de la Salud</b></span>
        <div>
            <button class="btn btn-primary" onclick="window.open('', '_blank')">Acceder</button>
            <input class="btn btn-secondary" type="file" id="fileInput"  accept=".pdf" onclick="replaceDocument()" onchange="showSelectedFileName()">
            <button class="btn btn-success" onclick="saveChanges()">Guardar cambios</button>
        </div>
    </li>
@endsection



