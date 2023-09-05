@extends('layouts.listadoBase')

@section('tituloMa')
    <title>Listado de documentos Mantenimiento</title>
@endsection

@section('botonesRedireccionMa')
    <p><a class="btn btnHomeCap" href="{{route('homeCapacitaciones')}}">Volver a capacitaciones</a></p> {{--boton para ingresar nueva capacitación de amntenimiento--}}
    <p><a class="btn btnFormMantenimiento" href="{{route('formMantenimiento')}}">Ingresar nueva capacitacion</a></p> {{--boton para volver a capacitaciónes--}}
    <h3>Listado Capacitaciones de Mantenimiento</h3>
@endsection

@section('tableclassMa')
    <table class="table table-striped" id="listadoMantenimiento">
@endsection

@section('tablaMa')
    @forelse($listadomantenimiento as $lm)
        <tr>
            <td>{{ $lm->id }}</td>
            <td>{{ $lm->nombre_prev }}</td>
            <td>{{ $lm->rut_cap }}</td>
            <td>{{ $lm->nombre_cap }}</td>
            <td>{{ $lm->apellidos_cap }}</td>
            <td>{{ $lm->rol_cap }}</td>
            <td>{{ $lm->created_at->format('d-m-Y H:i') }}</td>
            <td>{{ $lm->updated_at->format('d-m-Y H:i') }}</td>
            {{-- <td> <a class="btn btn-danger" href="/Archivos/mantenimiento/{{ $lm->documentos }}" target="blank_">Documentos</a> </td> --}}
            <td> <a class="btn btn-danger" href="{{route('perfilCapacitadoMa')}}">Modificar</a> </td>
        </tr>
    @empty
        <tr>
            <th>Sin registros</th>
        </tr>
    @endforelse
@endsection

@section('datatableMa')
    <script>
        $('#listadoMantenimiento').DataTable({
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

