@extends('layouts.formularioBase')

@section('tituloPagina')
<title>Mantenimiento</title>
@endsection

@section('tituloDepartamento')
<h3><center>Mantenimiento</center></h3>
@endsection

@section('homeCapacitaciones')
<p><a class="btn btnHomeCap" href="{{route('homeCapacitaciones')}}">Volver a capacitaciones</a></p>
@endsection

@section('botonListadoMantenimiento')
<p><a class="btn btnListadoMantenimiento" href="{{route('listadoMantenimiento')}}">Ver listado de capacitaciones</a></p>
@endsection

@section('capMantenimiento')
    {{-- Manejo Manual de Carga --}}
    <div class="d-flex justify-content-start align-items-start">
        <div class="col-md-5 mb-3 pl-1 border-2 ManejoManualCargaMa">
            <label class="form-label" for="inputGroupFileManejoManualCargaMa" ><b>Manejo Manual de Carga</b></label>
            <input class="form-control" type="file" name="manejo_manual_carga_ma" id="inputGroupFileManejoManualCargaMa">
        </div>
    </div>

    {{-- Transtornos Musculo Esqueleticos TMERT --}}
    <div class="d-flex justify-content-start align-items-start">
        <div class="col-md-5 mb-3 pl-1 border-2 TranstornosMusculoEsqueleticos">
            <label class="form-label" for="inputGroupFileTranstornosMusculoEsqueleticos" ><b>Transtornos Musculo Esqueleticos</b></label>
            <input class="form-control" type="file" name="transtornos_musculo_esqueleticos" id="inputGroupFileTranstornosMusculoEsqueleticos">
        </div>
    </div>

    {{-- Primeros Auxilios --}}
    <div class="d-flex justify-content-start align-items-start">
        <div class="col-md-5 mb-3 pl-1 border-2 PrimerosAuxilios">
            <label class="form-label" for="inputGroupFilePrimerosAuxilios" ><b>Primeros Auxilios</b></label>
            <input class="form-control" type="file" name="primeros_auxilios" id="inputGroupFilePrimerosAuxilios">
        </div>
    </div>

    {{-- Manejo de Sustancias Peligrosas --}}
    <div class="d-flex justify-content-start align-items-start">
        <div class="col-md-5 mb-3 pl-1 border-2 ManejoSustanciasPeligrosas">
            <label class="form-label" for="inputGroupFileManejoSustanciasPeligrosas" ><b>Manejo de Sustancias Peligrosas</b></label>
            <input class="form-control" type="file" name="manejo_sustancias_peligrosas" id="inputGroupFileManejoSustanciasPeligrosas">
        </div>
    </div>

    {{-- Almacenamiento de Sustancias Peligrosas --}}
    <div class="d-flex justify-content-start align-items-start">
        <div class="col-md-5 mb-3 pl-1 border-2 AlmacenamientoSustanciasPeligrosas">
            <label class="form-label" for="inputGroupFileAlmacenamientoSustanciasPeligrosas" ><b>Almacenamiento de Sustancias Peligrosas</b></label>
            <input class="form-control" type="file" name="almacenamiento_sustancias_peligrosas" id="inputGroupFileAlmacenamientoSustanciasPeligrosas">
        </div>
    </div>

    {{-- Prevencion a la Exposicion de Radiacion UV --}}
    <div class="d-flex justify-content-start align-items-start">
        <div class="col-md-5 mb-3 pl-1 border-2 PrevencionExposicionRadiacionUV">
            <label class="form-label" for="inputGroupFilePrevencionExposicionRadiacionUV" ><b>Prevencion a la Exposicion de Radiacion UV</b></label>
            <input class="form-control" type="file" name="prevencion_exposicion_radiacion_uv" id="inputGroupFilePrevencionExposicionRadiacionUV">
        </div>
    </div>

    {{-- Uso Correcto de EPP --}}
    <div class="d-flex justify-content-start align-items-start">
        <div class="col-md-5 mb-3 pl-1 border-2 UsoCorrectoEPP">
            <label class="form-label" for="inputGroupFileUsoCorrectoEPP" ><b>Uso Correcto de EPP</b></label>
            <input class="form-control" type="file" name="uso_correcto_epp" id="inputGroupFileUsoCorrectoEPP">
        </div>
    </div>

    {{-- Plan de Emergencia --}}
    <div class="d-flex justify-content-start align-items-start">
        <div class="col-md-5 mb-3 pl-1 border-2 PlanEmergencia">
            <label class="form-label" for="inputGroupFilePlanEmergencia" ><b>Plan de Emergencia</b></label>
            <input class="form-control" type="file" name="plan_emergencia" id="inputGroupFilePlanEmergencia">
        </div>
    </div>

    {{-- Control de Riesgos en Altura --}}
    <div class="d-flex justify-content-start align-items-start">
        <div class="col-md-5 mb-3 pl-1 border-2 ControlRiesgosAltura">
            <label class="form-label" for="inputGroupFileControlRiesgosAltura" ><b>Control de Riesgos en Altura</b></label>
            <input class="form-control" type="file" name="control_riesgos_altura" id="inputGroupFileControlRiesgosAltura">
        </div>
    </div>

    {{-- Cuidado de las Manos --}}
    <div class="d-flex justify-content-start align-items-start">
        <div class="col-md-5 mb-3 pl-1 border-2 CuidadoManos">
            <label class="form-label" for="inputGroupFileCuidadoManos" ><b>Cuidado de las Manos</b></label>
            <input class="form-control" type="file" name="cuidado_manos" id="inputGroupFileCuidadoManos">
        </div>
    </div>

    {{-- Orientacion en Prevencion de Riesgos --}}
    <div class="d-flex justify-content-start align-items-start">
        <div class="col-md-5 mb-3 pl-1 border-2 OrientacionPrevencionRiesgos">
            <label class="form-label" for="inputGroupFileOrientacionPrevencionRiesgos" ><b>Orientacion en Prevencion de Riesgos</b></label>
            <input class="form-control" type="file" name="orientacion_prevencion_riesgos" id="inputGroupFileOrientacionPrevencionRiesgos">
        </div>
    </div>

    {{-- PREXOR --}}
    <div class="d-flex justify-content-start align-items-start">
        <div class="col-md-5 mb-3 pl-1 border-2 PREXOR">
            <label class="form-label" for="inputGroupFilePREXOR" ><b>PREXOR</b></label>
            <input class="form-control" type="file" name="prexor" id="inputGroupFilePREXOR">
        </div>
    </div>

    {{-- Actitudes Preventivas --}}
    <div class="d-flex justify-content-start align-items-start">
        <div class="col-md-5 mb-3 pl-1 border-2 ActitudesPreventivas">
            <label class="form-label" for="inputGroupFileActitudesPreventivas" ><b>Actitudes Preventivas</b></label>
            <input class="form-control" type="file" name="actitudes_preventivas" id="inputGroupFileActitudesPreventivas">
        </div>
    </div>

    {{-- Uso de Herramientas Electricas y Motrices --}}
    <div class="d-flex justify-content-start align-items-start">
        <div class="col-md-5 mb-3 pl-1 border-2 UsoHerramientasElectricasYMotrices">
            <label class="form-label" for="inputGroupFileUsoHerramientasElectricasYMotrices" ><b>Uso de Herramientas Electricas y Motrices</b></label>
            <input class="form-control" type="file" name="uso_herramientas_electricas_y_motrices" id="inputGroupFileUsoHerramientasElectricasYMotrices">
        </div>
    </div>
@endsection

@section('storeCapM')
<form action="{{route('storeCapacitacionM')}}" method="POST" enctype="multipart/form-data"><!--para subir archivos tipo file y listadocapacitaciones se enlaza en web.php-->
@endsection
