
@extends('layouts.listadoBase')

@section('tituloCa')
    <title>Listado de documentos Cajeras</title>
@endsection

@section('botonesRedireccionCa')
    <p><a class="btn btnAdminCap" href="{{route('adminCap')}}">Volver a capacitaciones</a></p>
    <p><a class="btn btnFormCajeras" href="{{route('formCajeras')}}">Ingresar nueva capacitación</a></p>
    <h3>Listado Capacitaciones de Cajeras</h3>
@endsection

@section('tableclassCa')
    <table class="table table-striped" id="listadoCajeras">
@endsection

@section('tablaCa')
    @forelse($listadocajeras as $lc)
        <tr>
            <td>{{ $lc->id }}</td>
            {{-- <td>{{ $lc->rut_prev }}</td> --}}
            <td>{{ $lc->nombre_prev }}</td>
            {{-- <td>{{ $lc->apellidos_prev }}</td> --}}
            <td>{{ $lc->rut_cap }}</td>
            <td>{{ $lc->nombre_cap }}</td>
            <td>{{ $lc->apellidos_cap }}</td>
            <td>{{ $lc->rol_cap }}</td>
            <td>{{ $lc->created_at->format('d-m-Y H:i') }}</td>
            <td>{{ $lc->updated_at->format('d-m-Y H:i') }}</td>
            <td> <a class="btn btn-danger" href="/Archivos/cajeras/{{ $lc->documentos }}" target="blank_">Documentos</a> </td>
            <td> <a class="btn btn-danger" href="{{route('perfilCapacitadoCa')}}">Modificar</a> </td>
        </tr>
    @empty
        <tr>
            <th>Sin registros</th>
        </tr>
    @endforelse
@endsection

@section('datatableCa')
    <script>
        $('#listadoCajeras').DataTable({
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
