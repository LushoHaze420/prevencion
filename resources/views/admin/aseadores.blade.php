@extends('layouts.formularioBase')

@section('tituloPaginaA')
<title>Aseadores</title>
@endsection

@section('tituloArea')
<h3><center>Aseadores</center></h3>
@endsection

@section('adminCap')
<p><a class="btn btnAdminCap" href="{{route('adminCap')}}">Volver a capacitaciones</a></p>
@endsection

@section('botonListadoAseadores')
<p><a class="btn btnListadoAseadores" href="{{route('listadoAseadores')}}">Ver listado de capacitaciones</a></p>
@endsection

@section('storeCapA')
<form action="{{route('storeCapacitacionA')}}" method="POST" enctype="multipart/form-data"><!--para subir archivos tipo file y listadocapacitaciones se enlaza en web.php-->
@endsection
