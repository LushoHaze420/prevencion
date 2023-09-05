@extends('layouts.formularioBase')

@section('tituloPaginaC')
<title>Cajeras</title>
@endsection

@section('tituloArea')
<h3><center>Cajeras</center></h3>
@endsection

@section('homeCapacitaciones')
<p><a class="btn btnHomeCap" href="{{route('homeCapacitaciones')}}">Volver a capacitaciones</a></p>
@endsection

@section('botonListadoCajeras')
<p><a class="btn btnListadoCajeras" href="{{route('listadoCajeras')}}">Ver listado de capacitaciones</a></p>
@endsection

@section('capCajeras')
    {{-- Atencion de Publico --}}
    <div class="d-flex justify-content-start align-items-start">
        <div class="col-md-5 mb-3 pl-1 border-2 AtencionPublico">
            <label class="form-label" for="inputGroupFileAtencionPublico" ><b>Atención de Publico</b></label>
            <input class="form-control" type="file" name="AtencionPublico" id="inputGroupFileAtencionPublico">
        </div>
    </div>

        {{-- TMERT cajeras --}}
        <div class="d-flex justify-content-start align-items-start">
            <div class="col-md-5 mb-3 pl-1 border-2 TMERTc">
                <label class="form-label" for="inputGroupFileTMERTc" ><b>TMERT</b></label>
                <input class="form-control" type="file" name="TMERTc" id="inputGroupFileTMERTc">
            </div>
        </div>

@endsection

@section('storeCapC')
<form action="{{route('storeCapacitacionC')}}" method="POST" enctype="multipart/form-data"><!--para subir archivos tipo file y listadocapacitaciones se enlaza en web.php-->
@endsection
