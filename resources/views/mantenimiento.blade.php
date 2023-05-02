@extends('layouts.formularioBase')

@section('tituloPaginaM')
<title>Mantenimiento</title>
@endsection

@section('tituloArea')
<h3><center>Mantenimiento</center></h3>
@endsection

@section('botonListadoMantenimiento')
<p><a class="btn btn-primary" href="{{route('listadoMantenimiento')}}">Ver listado de capacitaciones</a></p>
@endsection

@section('storeCapM')
<form action="{{route('storeCapacitacionM')}}" method="POST" enctype="multipart/form-data"><!--para subir archivos tipo file y listadocapacitaciones se enlaza en web.php-->
@endsection
