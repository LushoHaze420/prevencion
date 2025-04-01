@extends('layouts.formularioBase')

@section('tituloPagina')
<title>Conductores y Auxiliares</title>
@endsection

@section('tituloDepartamento')
<h3><center>Conductores y Auxiliares</center></h3>
@endsection

@section('homeCapacitaciones')
<p><a class="btn btnHomeCap" href="{{route('homeCapacitaciones')}}">Volver a Capacitaciones</a></p>
@endsection

@section('botonListadoCondyAux')
<p><a class="btn btnListadoCondyAux" href="{{route('listadoCondyAux')}}">Ver listado de capacitaciones</a></p>
@endsection

@section('capCondyAux')
    {{-- Manejo a la Defensiva --}}
    <div class="d-flex justify-content-start align-items-start">
        <div class="col-md-5 mb-3 pl-1 border-2 ManejoDefensiva">
            <label class="form-label" for="inputGroupFileManejoDefensiva" ><b>Manejo a la Defensiva</b></label>
            <input class="form-control" type="file" name="manejo_defensiva" id="inputGroupFileManejoDefensiva">
        </div>
    </div>

    {{-- Riesgos Criticos en la Conduccion de Buses --}}
    <div class="d-flex justify-content-start align-items-start">
        <div class="col-md-5 mb-3 pl-1 border-2 RiesgosCriticosConduccionBuses">
            <label class="form-label" for="inputGroupFileRiesgosCriticosConduccionBuses" ><b>Riesgos Criticos en la Conduccion de Buses</b></label>
            <input class="form-control" type="file" name="riesgos_criticos_conduccion_buses" id="inputGroupFileRiesgosCriticosConduccionBuses">
        </div>
    </div>

    {{-- Reinduccion por Exceso de Velocidad --}}
    <div class="d-flex justify-content-start align-items-start">
        <div class="col-md-5 mb-3 pl-1 border-2 ReinduccionExcesoVelocidad">
            <label class="form-label" for="inputGroupFileReinduccionExcesoVelocidad" ><b>Reinduccion por Exceso de Velocidad</b></label>
            <input class="form-control" type="file" name="reinduccion_exceso_velocidad" id="inputGroupFileReinduccionExcesoVelocidad">
        </div>
    </div>

    {{-- Campaña de Exceso de Velocidad --}}
    <div class="d-flex justify-content-start align-items-start">
        <div class="col-md-5 mb-3 pl-1 border-2 CampañaExcesoVelocidad">
            <label class="form-label" for="inputGroupFileCampañaExcesoVelocidad" ><b>Campaña de Exceso de Velocidad</b></label>
            <input class="form-control" type="file" name="campaña_exceso_velocidad" id="inputGroupFileCampañaExcesoVelocidad">
        </div>
    </div>

    {{-- Conduccion Segura en Alta Montaña --}}
    <div class="d-flex justify-content-start align-items-start">
        <div class="col-md-5 mb-3 pl-1 border-2 ConduccionSeguraAltaMontaña">
            <label class="form-label" for="inputGroupFileConduccionSeguraAltaMontaña" ><b>Conduccion Segura en Alta Montaña</b></label>
            <input class="form-control" type="file" name="conduccion_segura_alta_montaña" id="inputGroupFileConduccionSeguraAltaMontaña">
        </div>
    </div>

    {{-- Control de Riesgos en la Conduccion --}}
    <div class="d-flex justify-content-start align-items-start">
        <div class="col-md-5 mb-3 pl-1 border-2 ControlRiesgosConduccion">
            <label class="form-label" for="inputGroupFileControlRiesgosConduccion" ><b>Control de Riesgos en la Conduccion</b></label>
            <input class="form-control" type="file" name="control_riesgos_conduccion" id="inputGroupFileControlRiesgosConduccion">
        </div>
    </div>

    {{-- Manejo a la Defensiva en Autopistas y Carreteras --}}
    <div class="d-flex justify-content-start align-items-start">
        <div class="col-md-5 mb-3 pl-1 border-2 ManejoDefensivaAutopistasCarreteras">
            <label class="form-label" for="inputGroupFileManejoDefensivaAutopistasCarreteras" ><b>Manejo a la Defensiva en Autopistas y Carreteras</b></label>
            <input class="form-control" type="file" name="manejo_defensiva_autopistas_carreteras" id="inputGroupFileManejoDefensivaAutopistasCarreteras">
        </div>
    </div>

    {{-- Control de Riesgos de Fatiga y Somnolencia en la Conduccion --}}
    <div class="d-flex justify-content-start align-items-start">
        <div class="col-md-5 mb-3 pl-1 border-2 ControlRiesgosFatigaSomnolenciaConduccion">
            <label class="form-label" for="inputGroupFileControlRiesgosFatigaSomnolenciaConduccion" ><b>Control de Riesgos de Fatiga y Somnolencia en la Conduccion</b></label>
            <input class="form-control" type="file" name="control_riesgos_fatiga_somnolencia_conduccion" id="inputGroupFileControlRiesgosFatigaSomnolenciaConduccion">
        </div>
    </div>

    {{-- Reinduccion en Manejo a la Defensiva --}}
    <div class="d-flex justify-content-start align-items-start">
        <div class="col-md-5 mb-3 pl-1 border-2 ReinduccionManejoDefensiva">
            <label class="form-label" for="inputGroupFileReinduccionManejoDefensiva" ><b>Reinduccion en Manejo a la Defensiva</b></label>
            <input class="form-control" type="file" name="reinduccion_manejo_defensiva" id="inputGroupFileReinduccionManejoDefensiva">
        </div>
    </div>

    {{-- Manejo Manual de Cargas --}}
    <div class="d-flex justify-content-start align-items-start">
        <div class="col-md-5 mb-3 pl-1 border-2 ManejoManualCargas">
            <label class="form-label" for="inputGroupFileManejoManualCargas" ><b>Manejo Manual de Cargas</b></label>
            <input class="form-control" type="file" name="manejo_manual_cargas" id="inputGroupFileManejoManualCargas">
        </div>
    </div>

    {{-- Curso teorico/practico Conduccion Preventiva de vehiculos de Transporte de Pasajeros con Simulador--}}
    <div class="d-flex justify-content-start align-items-start">
        <div class="col-md-5 mb-3 pl-1 border-2 Cursoteorico/practicoConduccionSimulador">
            <label class="form-label" for="inputGroupFileCursoteorico/practicoConduccionSimulador" ><b>Curso teorico/practico Conduccion Preventiva de vehiculos de Transporte de Pasajeros con Simulador</b></label>
            <input class="form-control" type="file" name="curso_teorico_practico_conduccion_simulador" id="inputGroupFileCursoteorico/practicoConduccionSimulador">
        </div>
    </div>

    {{-- Promocion de la Salud --}}
    <div class="d-flex justify-content-start align-items-start">
        <div class="col-md-5 mb-3 pl-1 border-2 PromocionSalud">
            <label class="form-label" for="inputGroupFilePromocionSalud" ><b>Promocion de la Salud</b></label>
            <input class="form-control" type="file" name="promocion_salud" id="inputGroupFilePromocionSalud">
        </div>
    </div>
@endsection

@section('storeCapCA')
<form action="{{route('storeCapacitacionCA')}}" method="POST" enctype="multipart/form-data"><!--para subir archivos tipo file y listadocapacitaciones se enlaza en web.php-->
@endsection
