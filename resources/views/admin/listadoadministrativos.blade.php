@extends('layouts.listadoBase')

@section('tituloAd')
    <title>Listado de documentos Administrativos</title>
@endsection

@section('botonesRedireccionAd')
    <p><a class="btn btnHomeCap" href="{{route('homeCapacitaciones')}}">Volver a Capacitaciones</a></p>
    <p><a class="btn btnFormAdministrativos" href="{{route('formAdministrativos')}}">Ingresar nueva capacitación</a></p>
    <h3>Listado de Capacitaciones de Administrativos</h3>
@endsection

@section('tableclassAd')
    <table class="table table-striped" id="listadoAdministrativos">
@endsection

@section('tablaAd')
    @forelse($listadoadministrativos as $lad)
        <tr>
            <td>{{ $lad->id }}</td>
            {{-- <td>{{ $lad->rut_prev }}</td> --}}
            <td>{{ $lad->nombre_prev }}</td>   {{--EN ESTE CAMPO DEBE MOSTRARSE EL NOMBRE DEL USUARIO LOGGEADO--}}
            {{-- <td>{{ $lad->apellidos_prev }}</td> --}}
            <td>{{ $lad->rut_cap }}</td>
            <td>{{ $lad->nombre_cap }}</td>
            <td>{{ $lad->apellidos_cap }}</td>
            <td>{{ $lad->rol_cap }}</td>
            <td>{{ $lad->created_at->format('d-m-Y H:i') }}</td>
            <td>{{ $lad->updated_at->format('d-m-Y H:i') }}</td>
            {{-- <td> <a class="btn btn-danger" href="/Archivos/administrativos/{{ $lad->documentos }}" target="blank_">Documentos</a> </td> --}}
            <td><a class="btn btn-danger" href="{{route('perfilCapacitadoAd')}}">Modificar</a> </td>
        </tr>
    @empty
        <tr>
            <th>Sin registros</th>
        </tr>
    @endforelse
@endsection

@section('datatableAd')
    <script>
        $('#listadoAdministrativos').DataTable({
            responsive: true,
            autowidth: false,
            "language": {
                "lengthMenu": 'Mostrar ' +
                            '<select class="custom-select custom-select-sm form-control form-control-sm">' +
                                '<option value="10">10</option>' +
                                '<option value="25">25</option>' +
                                '<option value="50">50</option>' +
                                '<option value="100">100</option>' +
                                '<option value="-1">All</option>' +
                            '</select>' +
                            ' registros por página',
                "zeroRecords": "Nada encontrado - Disculpa",
                "info": "Mostrando la página _PAGE_ de _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(filtrado de _MAX_ registros totales)",
                "search": "Buscar:",
                "paginate":{
                "next": "siguiente",
                "previous": "Anterior",
                }
            }
        });
    </script>

@endsection
