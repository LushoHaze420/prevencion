@extends('layouts.reporteBase')

@section('titleRepCyA')
    <title>Reporte Conductores y Auxiliares</title> {{--yield--}}
@endsection

@section('h1RepCyA')
    <h1>Reporte Capacitaciones Conductores y Auxiliares</h1>{{--yield--}}
@endsection

@section('forelseCyA')
    @forelse($pdfcondyaux as $rpdfcya){{--yield--}}
    <tr>
        <td>{{ $rpdfcya->id }}</td>
        <td>{{ $rpdfcya->nombre_prev }}</td>   {{--EN ESTE CAMPO DEBE MOSTRARSE EL NOMBRE DEL USUARIO LOGGEADO QUE SUBIO LA CAPACITACION--}}
        <td>{{ $rpdfcya->rut_cap }}</td>
        <td>{{ $rpdfcya->nombre_cap }}</td>
        <td>{{ $rpdfcya->apellidos_cap }}</td>
        <td>{{ $rpdfcya->rol_cap }}</td>
        <td>{{ $rpdfcya->created_at->format('d-m-Y H:i') }}</td>
        <td>{{ $rpdfcya->updated_at->format('d-m-Y H:i') }}</td>
    </tr>
    @empty
    <tr>
        <th>Sin registros</th>
    </tr>
    @endforelse
@endsection
