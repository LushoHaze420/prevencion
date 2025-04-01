@extends('layouts.reporteBase')

@section('titleRepCa')
    <title>Reporte Cajeras</title> {{--yield--}}
@endsection

@section('h1RepCa')
    <h1>Reporte Capacitaciones Cajeras</h1>{{--yield--}}
@endsection

@section('forelseCa')
    @forelse($pdfcajeras as $rpdfca){{--yield--}}
    <tr>
        <td>{{ $rpdfca->id }}</td>
        <td>{{ $rpdfca->nombre_prev }}</td>   {{--EN ESTE CAMPO DEBE MOSTRARSE EL NOMBRE DEL USUARIO LOGGEADO QUE SUBIO LA CAPACITACION--}}
        <td>{{ $rpdfca->rut_cap }}</td>
        <td>{{ $rpdfca->nombre_cap }}</td>
        <td>{{ $rpdfca->apellidos_cap }}</td>
        <td>{{ $rpdfca->rol_cap }}</td>
        <td>{{ $rpdfca->created_at->format('d-m-Y H:i') }}</td>
        <td>{{ $rpdfca->updated_at->format('d-m-Y H:i') }}</td>
    </tr>
    @empty
    <tr>
        <th>Sin registros</th>
    </tr>
    @endforelse
@endsection
