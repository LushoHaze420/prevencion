@extends('layouts.formularioBase')

@section('tituloPaginaC')
<title>Cajeras</title>
@endsection

@section('tituloArea')
<h3><center>Cajeras</center></h3>
@endsection

@section('botonListadoCajeras')
<p><a class="btn btn-primary" href="{{route('listadoCajeras')}}">Ver listado de capacitaciones</a></p>
@endsection

@section('storeCapC')
<form action="{{route('storeCapacitacionC')}}" method="POST" enctype="multipart/form-data"><!--para subir archivos tipo file y listadocapacitaciones se enlaza en web.php-->
@endsection
