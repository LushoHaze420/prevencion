@extends('layouts.reporteBase')

@section('titleRepAs')
    <title>Reporte Aseadores</title> {{--yield--}}
@endsection

@section('h1RepAs')
    <h1>Reporte Capacitaciones Aseadores</h1>{{--yield--}}
@endsection

@section('forelseAs')
    @forelse($pdfaseadores as $rpdfas){{--yield--}}
    <tr>
        <td>{{ $rpdfas->id }}</td>
        <td>{{ $rpdfas->nombre_prev }}</td>   {{--EN ESTE CAMPO DEBE MOSTRARSE EL NOMBRE DEL USUARIO LOGGEADO QUE SUBIO LA CAPACITACION--}}
        <td>{{ $rpdfas->rut_cap }}</td>
        <td>{{ $rpdfas->nombre_cap }}</td>
        <td>{{ $rpdfas->apellidos_cap }}</td>
        <td>{{ $rpdfas->rol_cap }}</td>
        <td>{{ $rpdfas->created_at->format('d-m-Y H:i') }}</td>
        <td>{{ $rpdfas->updated_at->format('d-m-Y H:i') }}</td>
    </tr>
    @empty
    <tr>
        <th>Sin registros</th>
    </tr>
    @endforelse
@endsection
