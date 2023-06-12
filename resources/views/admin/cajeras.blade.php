@extends('layouts.formularioBase')

@section('tituloPaginaC')
<title>Cajeras</title>
@endsection

@section('tituloArea')
<h3><center>Cajeras</center></h3>
@endsection

@section('adminCap')
<p><a class="btn btnAdminCap" href="{{route('adminCap')}}">Volver a capacitaciones</a></p>
@endsection

@section('botonListadoCajeras')
<p><a class="btn btnListadoCajeras" href="{{route('listadoCajeras')}}">Ver listado de capacitaciones</a></p>
@endsection

@section('storeCapC')
<form action="{{route('storeCapacitacionC')}}" method="POST" enctype="multipart/form-data"><!--para subir archivos tipo file y listadocapacitaciones se enlaza en web.php-->
@endsection
