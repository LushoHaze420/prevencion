@extends('layouts.formularioBase')    <!--FORMULARIO DE MANTENIMIENTO EN VISTA PREVENCIONISTA-->

@section('tituloPaginaM')
<title>Mantenimiento</title>
@endsection

@section('tituloArea')
<h3><center>Mantenimiento</center></h3>
@endsection

@section('botonPrevListadoMantenimiento')
<p><a class="btn btn-primary" href="{{route('prevListadoMantenimiento')}}">Ver listado de capacitaciones</a></p>
@endsection

@section('storeCapM')
<form action="{{route('storeCapacitacionM')}}" method="POST" enctype="multipart/form-data"><!--para subir archivos tipo file y listadocapacitaciones se enlaza en web.php-->
@endsection
