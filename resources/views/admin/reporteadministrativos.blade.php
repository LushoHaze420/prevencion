@extends('layouts.reporteBase')

{{-- esta llamada no funciona, se intentó añadir la fecha  actual en la hoja pdf --}}
{{-- @section('fechaAd')
    @forelse ($fechaAd as $fechaad )
        <h5>{{$fechaad}}</h5>
    @endforelse
@endsection --}}

@section('titleRepAd')
    <title>Reporte Administrativos</title> {{--yield--}}
@endsection

@section('h1RepAd')
    <h1>Reporte Capacitaciones Administrativos</h1>{{--yield--}}
@endsection

@section('forelseAd')
    @forelse($pdfadministrativos as $rpdfad){{--yield--}}
    <tr>
        <td>{{ $rpdfad->id }}</td>
        <td>{{ $rpdfad->nombre_prev }}</td>   {{--EN ESTE CAMPO DEBE SE MOSTRAR EL NOMBRE DEL USUARIO LOGGEADO QUE SUBIO LA CAPACITACION--}}
        <td>{{ $rpdfad->rut_cap }}</td>
        <td>{{ $rpdfad->nombre_cap }}</td>
        <td>{{ $rpdfad->apellidos_cap }}</td>
        <td>{{ $rpdfad->rol_cap }}</td>
        <td>{{ $rpdfad->created_at->format('d-m-Y H:i') }}</td>
        <td>{{ $rpdfad->updated_at->format('d-m-Y H:i') }}</td>
    </tr>
    @empty
    <tr>
        <th>Sin registros</th>
    </tr>
    @endforelse

@endsection


