@extends('layouts.reporteBase')

@section('titleRepMa')
    <title>Reporte Mantenimiento</title> {{--yield--}}
@endsection

@section('h1RepMa')
    <h1>Reporte Capacitaciones Mantenimiento</h1>{{--yield--}}
@endsection

@section('forelseMa')
    @forelse($pdfmantenimiento as $rpdfma){{--yield--}}
    <tr>
        <td>{{ $rpdfma->id }}</td>
        <td>{{ $rpdfma->nombre_prev }}</td>   {{--EN ESTE CAMPO DEBE MOSTRARSE EL NOMBRE DEL USUARIO LOGGEADO QUE SUBIO LA CAPACITACION--}}
        <td>{{ $rpdfma->rut_cap }}</td>
        <td>{{ $rpdfma->nombre_cap }}</td>
        <td>{{ $rpdfma->apellidos_cap }}</td>
        <td>{{ $rpdfma->rol_cap }}</td>
        <td>{{ $rpdfma->created_at->format('d-m-Y H:i') }}</td>
        <td>{{ $rpdfma->updated_at->format('d-m-Y H:i') }}</td>
    </tr>
    @empty
    <tr>
        <th>Sin registros</th>
    </tr>
    @endforelse
@endsection
