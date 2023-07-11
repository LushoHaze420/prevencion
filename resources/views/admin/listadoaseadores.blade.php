@extends('layouts.listadoBase')

@section('tituloAs')
    <title>Listado de documentos Aseadores</title>
@endsection

@section('botonesRedireccionAs')
    <p><a class="btn btnAdminCap" href="{{route('adminCap')}}">Volver a capacitaciones</a></p>
    <p><a class="btn btnFormAseadores" href="{{route('formAseadores')}}">Ingresar nueva capacitación</a></p>
    <h3>Listado Capacitaciones de Aseadores</h3>
@endsection

@section('tableclassAs')
    <table class="table table-striped" id="listadoAseadores">
@endsection

@section('tablaAs')
    @forelse($listadoaseadores as $la)
        <tr>
            <td>{{ $la->id }}</td>
            <td>{{ $la->nombre_prev }}</td>
            <td>{{ $la->rut_cap }}</td>
            <td>{{ $la->nombre_cap }}</td>
            <td>{{ $la->apellidos_cap }}</td>
            <td>{{ $la->rol_cap }}</td>
            <td>{{ $la->created_at->format('d-m-Y H:i') }}</td>
            <td>{{ $la->updated_at->format('d-m-Y H:i') }}</td>
            <td> <a class="btn btn-danger" href="/Archivos/aseadores/{{ $la->documentos }}" target="blank_">Documentos</a> </td>
            <td> <a class="btn btn-danger" href="{{route('perfilCapacitadoAs')}}" >Modificar</a> </td>
        </tr>
    @empty
        <tr>
            <th>Sin registros</th>
        </tr>
    @endforelse
@endsection

@section('datatableAs')
    <script>
        $('#listadoAseadores').DataTable({
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
