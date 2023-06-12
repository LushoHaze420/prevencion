@extends('layouts.formularioBase')

@section('tituloPaginaGJ')
<title>Gerencia y Jefaturas</title>
@endsection

@section('tituloArea')
<h3><center>Gerencia y Jefaturas</center></h3>
@endsection

@section('adminCap')
<p><a class="btn btnAdminCap" href="{{route('adminCap')}}">Volver a Capacitaciones</a></p>
@endsection

@section('botonListadoGeryJef')
<p><a class="btn btnListadoGeryJef" href="{{route('listadoGeryJef')}}">Ver listado de capacitaciones</a></p>
@endsection

@section('storeCapGJ')
<form action="{{route('storeCapacitacionGJ')}}" method="POST" enctype="multipart/form-data"><!--para subir archivos tipo file y listadocapacitaciones se enlaza en web.php-->
@endsection
