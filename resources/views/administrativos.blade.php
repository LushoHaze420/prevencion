@extends('layouts.formularioBase')

@section('tituloPaginaAD')
<title>Administrativos</title>
@endsection

@section('tituloArea')
<h3><center>Administrativos</center></h3>
@endsection

@section('botonListadoAdministrativos')
<p><a class="btn btn-primary" href="{{route('listadoAdministrativos')}}">Ver listado de capacitaciones</a></p>
@endsection

@section('storeCapAd')
<form action="{{route('storeCapacitacionAd')}}" method="POST" enctype="multipart/form-data"><!--para subir archivos tipo file y listadocapacitaciones se enlaza en web.php-->
@endsection
