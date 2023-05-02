@extends('layouts.formularioBase')

@section('tituloPaginaA')
<title>Aseadores</title>
@endsection

@section('tituloArea')
<h3><center>Aseadores</center></h3>
@endsection

@section('botonListadoAseadores')
<p><a class="btn btn-primary" href="{{route('listadoAseadores')}}">Ver listado de capacitaciones</a></p>
@endsection

@section('storeCapA')
<form action="{{route('storeCapacitacionA')}}" method="POST" enctype="multipart/form-data"><!--para subir archivos tipo file y listadocapacitaciones se enlaza en web.php-->
@endsection
