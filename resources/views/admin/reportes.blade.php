<!DOCTYPE html>  {{-- VISTA PARA SELECCIONAR EL REPORTE TOTAL, TODOS LOS REGISTROS, POR AREA--}}
<html lang="en">
<head>
    <link rel="icon" href="{{ asset('icons/logoAndimar.png') }}" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/reportesBase.css')}}">
    <title>Reportes de Capacitaciones</title>
</head>
<body class="p-3 m-1 border-1 reportesBase">
    <div class="container">
        <p><a class="btn btnHomeCap" href="{{route('homeCapacitaciones')}}">Volver a Capacitaciones</a></p>
        <h1 class="text-center">Reportes de Capacitaciones</h1>
        <br>
        <div class="card">
            <h3 class="text-center">Seleccione Departamento</h3>
            <p><a href="{{route('reporteAdministrativos')}}" class="btn btnRepAdministrativos" target="_blank">Administrativos</a></p>
            <p><a href="{{route('reporteAseadores')}}" class="btn btnRepAseadores" target="_blank">Aseadores</a></p>
            <p><a href="{{route('reporteCajeras')}}" class="btn btnRepCajeras" target="_blank">Cajeras</a></p>
            <p><a href="{{route('reporteCondyAux')}}" class="btn btnRepCondyAux" target="_blank">Conductores y Auxiliares</a></p>
            <p><a href="{{route('reporteGeryJef')}}" class="btn btnRepGeryJef" target="_blank">Gerencia y Jefatura</a></p>
            <p><a href="{{route('reporteMantenimiento')}}" class="btn btnRepMantenimiento" target="_blank">Mantenimiento</a></p>
        </div>
    </div>

</body>
</html>

{{-- https://github.com/barryvdh/laravel-dompdf --}}
{{-- Repositorio para la libreria de PDF --}}
