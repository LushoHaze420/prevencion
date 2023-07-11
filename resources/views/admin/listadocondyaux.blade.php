@extends('layouts.listadoBase')  {{-- --}}

@section('tituloCyA')
    <title>Listado de documentos Conductores y Auxiliares</title>
@endsection

@section('botonesRedireccionCyA')
    <p><a class="btn btnAdminCap" href="{{route('adminCap')}}">Volver a Capacitaciones</a></p>
    <p><a class="btn btnFormCondyAux" href="{{route('formCondyAux')}}">Ingresar nueva capacitación</a></p>
    <h3>Listado Capacitaciones de Conductores y Auxiliares</h3>
@endsection

@section('tableclassCyA')
    <table class="table table-striped" id="listadoCondyAux">
@endsection

@section('tablaCyA')
    @forelse($listadocondyaux as $lca)
        <tr>
            <td>{{ $lca->id }}</td>
            {{-- <td>{{ $lca->rut_prev }}</td> --}}
            <td>{{ $lca->nombre_prev }}</td>
            {{-- <td>{{ $lca->apellidos_prev }}</td> --}}
            <td>{{ $lca->rut_cap }}</td>
            <td>{{ $lca->nombre_cap }}</td>
            <td>{{ $lca->apellidos_cap }}</td>
            <td>{{ $lca->rol_cap }}</td>
            <td>{{ $lca->created_at->format('d-m-Y H:i') }}</td>
            <td>{{ $lca->updated_at->format('d-m-Y H:i') }}</td>
            <td> <a class="btn btn-danger" href="/Archivos/condyaux/{{ $lca->documentos }}" target="blank_">Documentos</a> </td>
            <td> <a class="btn btn-danger" href="{{route('perfilCapacitadoCya')}}">Modificar</a> </td>
        </tr> {{-- EN ESTA VISTA, AGREGAR UN BOTON A LA TABLA PARA MODIFICAR LA CAPACITACION INGRESADA MEDIANTE CONTROLADOR --}}
    @empty
        <tr>
            <th>Sin registros</th>
        </tr>
    @endforelse
@endsection

@section('datatableCyA')
    <script>
        $('#listadoCondyAux').DataTable({
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
