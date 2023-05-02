@extends('layouts.formularioBase')

@section('tituloPaginaCA')
<title>Conductores y Auxiliares</title>
@endsection

@section('tituloArea')
<h3><center>Conductores y Auxiliares</center></h3>
@endsection

@section('botonListadoCondyAux')
<p><a class="btn btn-primary" href="{{route('listadoCondyAux')}}">Ver listado de capacitaciones</a></p>
@endsection

@section('storeCapCA')
<form action="{{route('storeCapacitacionCA')}}" method="POST" enctype="multipart/form-data"><!--para subir archivos tipo file y listadocapacitaciones se enlaza en web.php-->
@endsection
