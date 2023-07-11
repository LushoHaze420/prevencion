
@extends('layouts.listadoBase')

@section('tituloGyJ')
    <title>Listado de documentos Gerencia y Jefatura</title>
@endsection

@section('botonesRedireccionGyJ')
    <p><a class="btn btnAdminCap" href="{{route('adminCap')}}">Volver a Capacitaciones</a></p>
    <p><a class="btn btnFormGeryJef" href="{{route('formGeryJef')}}">Ingresar nueva capacitación</a></p>
    <h3>Listado Capacitaciones de  Gerencia y Jefaturas</h3>
@endsection

@section('tableclassGyJ')
    <table class="table table-striped" id="listadoGeryJef">
@endsection

@section('tablaGyJ')
    @forelse($listadogeryjef as $lgf)
        <tr>
            <td>{{ $lgf->id }}</td>
            <td>{{ $lgf->nombre_prev }}</td>
            <td>{{ $lgf->rut_cap }}</td>
            <td>{{ $lgf->nombre_cap }}</td>
            <td>{{ $lgf->apellidos_cap }}</td>
            <td>{{ $lgf->rol_cap }}</td>
            <td>{{ $lgf->created_at->format('d-m-Y H:i') }}</td>
            <td>{{ $lgf->updated_at->format('d-m-Y H:i') }}</td>
            <td> <a class="btn btn-danger" href="/Archivos/geryjef/{{ $lgf->documentos }}" target="blank_">Documentos</a> </td>
            <td> <a class="btn btn-danger" href="{{route('perfilCapacitadoGyj')}}">Modificar</a> </td>
        </tr>
    @empty
        <tr>
            <th>Sin registros</th>
        </tr>
    @endforelse
@endsection

@section('datatableGyJ')
    <script>
        $('#listadoGeryJef').DataTable({
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
