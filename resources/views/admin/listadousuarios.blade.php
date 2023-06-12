<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Listado de nuevos usuarios</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!--estilos para la tabla-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/listadoCapacitaciones.css')}}">
</head>

<body class="p-3 m-1 border-1 listadoCapacitaciones">
    <div class="container">
        <p><a class="btn btnAdminCap" href="{{route('adminCap')}}">Regresar a Capacitaciones</a></p> {{--boton para volver a seleccionar capacitación--}}
        <p><a class="btn btnFormNuevoUsuario" href="{{route('formNuevoUsuario')}}">Ingresar nuevo usuario</a></p> {{--boton para volver a crear nuevo usuario--}}
        <h3>Listado Usuarios</h3>
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="listadoUsuarios">
                    <thead>
                        <th>Id<br>Usuario</th>
                        <th>Rut<br>Usuario</th>
                        <th>Nombre<br>Usuario</th>
                        <th>Apellidos<br>Usuario</th>
                        <th>Email<br>Usuario</th>
                        <th>Rol<br>Usuario</th>
                        <th>Fecha<br>Creación </th>
                        <th>Fecha<br>Modificación </th>

                    </thead>

                    <tbody>
                        @forelse($listadousuarios as $lu)
                            <tr>
                                <td>{{ $lu->id }}</td>
                                <td>{{ $lu->rut_NU }}</td>
                                <td>{{ $lu->nombre_NU }}</td>
                                <td>{{ $lu->apellido_NU }}</td>
                                <td>{{ $lu->email_NU }}</td>
                                <td>{{ $lu->rol_NU }}</td>
                                <td>{{ $lu->created_at->format('d-m-Y H:i') }}</td>
                                <td>{{ $lu->updated_at->format('d-m-Y H:i') }}</td>
                                {{-- EN ESTA VISTA, AGREGAR UN BOTON A LA TABLA PARA MODIFICAR LA CAPACITACION INGRESADA MEDIANTE CONTROLADOR --}}
                            </tr>
                        @empty
                            <tr>
                                <th>Sin registros</th>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap5.min.js"></script>
<script>
    $('#listadoUsuarios').DataTable({
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
</body>
</html>
{{--este enlace fue utilizado como tutorial para implementar datatables con estilos responsivos: https://www.youtube.com/watch?v=xyGriTTRo_o&list=PLZ2ovOgdI-kVmp2KynrUyosIazUhGK-6n --}}

{{--traducir ciertos textos y mejorar la paginacion con responsividad https://www.youtube.com/watch?v=gnJXZkrfscM&list=PLZ2ovOgdI-kVmp2KynrUyosIazUhGK-6n&index=3 --}}

{{-- carga de datos mas rapido con ajax (hay que eliminar el tbody y crear un controlador ) https://www.youtube.com/watch?v=Hsw4GGeolmg&list=PLZ2ovOgdI-kVmp2KynrUyosIazUhGK-6n&index=6 --}}
