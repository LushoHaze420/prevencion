@extends('layouts.reporteBase')

@section('titleRepGyJ')
    <title>Reporte Gerencia y Jefatura</title> {{--yield--}}
@endsection

@section('h1RepGyJ')
    <h1>Reporte Capacitaciones Gerencia y Jefatura</h1>{{--yield--}}
@endsection

@section('forelseGyJ')
    @forelse($pdfgeryjef as $rpdfgyj){{--yield--}}
    <tr>
        <td>{{ $rpdfgyj->id }}</td>
        <td>{{ $rpdfgyj->nombre_prev }}</td>   {{--EN ESTE CAMPO DEBE MOSTRARSE EL NOMBRE DEL USUARIO LOGGEADO QUE SUBIO LA CAPACITACION--}}
        <td>{{ $rpdfgyj->rut_cap }}</td>
        <td>{{ $rpdfgyj->nombre_cap }}</td>
        <td>{{ $rpdfgyj->apellidos_cap }}</td>
        <td>{{ $rpdfgyj->rol_cap }}</td>
        <td>{{ $rpdfgyj->created_at->format('d-m-Y H:i') }}</td>
        <td>{{ $rpdfgyj->updated_at->format('d-m-Y H:i') }}</td>
    </tr>
    @empty
    <tr>
        <th>Sin registros</th>
    </tr>
    @endforelse
@endsection
