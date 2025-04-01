@extends('layouts.formularioBase')

@section('tituloPagina')
<title>Gerencia y Jefaturas</title>
@endsection

@section('tituloDepartamento')
<h3><center>Gerencia y Jefaturas</center></h3>
@endsection

@section('homeCapacitaciones')
<p><a class="btn btnHomeCap" href="{{route('homeCapacitaciones')}}">Volver a Capacitaciones</a></p>
@endsection

@section('botonListadoGeryJef')
<p><a class="btn btnListadoGeryJef" href="{{route('listadoGeryJef')}}">Ver listado de capacitaciones</a></p>
@endsection

@section('capGeryJef')
        {{-- Taller de Responsabilidad Civil y Penal --}}
        <div class="d-flex justify-content-start align-items-start">
            <div class="col-md-5 mb-3 pl-1 border-2 TallerResponsabilidadCivilPenal">
                <label class="form-label" for="inputGroupFileTallerResponsabilidadCivilPenal" ><b>Taller de Responsabilidad Civil y Penal</b></label>
                <input class="form-control" type="file" name="taller_responsabilidad_civil_penal" id="inputGroupFileTallerResponsabilidadCivilPenal">
            </div>
        </div>

        {{-- Investigacion de Accidentes --}}
        <div class="d-flex justify-content-start align-items-start">
            <div class="col-md-5 mb-3 pl-1 border-2 InvestigacionAccidentes">
                <label class="form-label" for="inputGroupFileInvestigacionAccidentes" ><b>Investigacion de Accidentes</b></label>
                <input class="form-control" type="file" name="investigacion_accidentes" id="inputGroupFileInvestigacionAccidentes">
            </div>
        </div>

        {{-- Liderazgo y Comunicación en la Administracion de Negocios --}}
        <div class="d-flex justify-content-start align-items-start">
            <div class="col-md-5 mb-3 pl-1 border-2 LiderazgoComunicaciónAdministracionNegocios">
                <label class="form-label" for="inputGroupFileLiderazgoComunicaciónAdministracionNegocios" ><b>Liderazgo y Comunicación en la Administracion de Negocios</b></label>
                <input class="form-control" type="file" name="liderazgo_comunicacion_administracion_negocios" id="inputGroupFileLiderazgoComunicaciónAdministracionNegocios">
            </div>
        </div>

        {{-- Identificacion de Peligros y Evaluacion de Riesgos --}}
        <div class="d-flex justify-content-start align-items-start">
            <div class="col-md-5 mb-3 pl-1 border-2 IdentificacionPeligrosYEvaluacionRiesgos">
                <label class="form-label" for="inputGroupFileIdentificacionPeligrosYEvaluacionRiesgos" ><b>Identificacion de Peligros y Evaluacion de Riesgos</b></label>
                <input class="form-control" type="file" name="identificacion_peligros_y_evaluacion_riesgos" id="inputGroupFileIdentificacionPeligrosYEvaluacionRiesgos">
            </div>
        </div>

        {{-- Prevencion del Coronavirus --}}
        <div class="d-flex justify-content-start align-items-start">
            <div class="col-md-5 mb-3 pl-1 border-2 PrevencionCoronavirus">
                <label class="form-label" for="inputGroupFilePrevencionCoronavirus" ><b>Prevencion del Coronavirus</b></label>
                <input class="form-control" type="file" name="prevencion_coronavirus" id="inputGroupFilePrevencionCoronavirus">
            </div>
        </div>
    </div>
@endsection

@section('storeCapGJ')
<form action="{{route('storeCapacitacionGJ')}}" method="POST" enctype="multipart/form-data"><!--para subir archivos tipo file y listadocapacitaciones se enlaza en web.php-->
@endsection
