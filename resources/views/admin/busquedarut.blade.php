<!doctype html>
<html lang="en">

<head>
    <link rel="icon" href="{{ asset('icons/logoAndimar.png') }}" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Busqueda Rut</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!--estilos para la tabla-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/listadoCapacitaciones.css')}}">
</head>

<body class="p-3 m-1 border-1 listadoCapacitaciones">
    <div class="container">
        <p><a class="btn btnHomeCap" href="{{route('homeCapacitaciones')}}">Volver a capacitaciones</a></p> {{--boton para ingresar nueva capacitación de mantenimiento--}}
        <h3>Busqueda de Capacitado por Rut</h3>
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="busquedaRut">
                    <thead>
                        <th>Id</th>
                        <th>Rut<br>Capacitado</th>
                        <th>Nombre<br>Capacitado</th>
                        <th>Apellidos<br>Capacitado</th>
                        <th>Rol<br>Capacitado</th>
                        <th>Fecha<br>Creación</th>
                        <th>Fecha<br>Modificación</th>
                    </thead>

                    <tbody>
                        {{-- @forelse($listadoCapacitados as $lCap)   {{--CREAR CONTROLADOR PARA UTILIZAR ESTA VARIABLE
                            <tr>
                                <td>{{ $lCap->id }}</td>
                                <td>{{ $lCap->rut_cap }}</td>
                                <td>{{ $lCap->nombre_cap }}</td>
                                <td>{{ $lCap->apellidos_cap }}</td>
                                <td>{{ $lCap->rol_cap }}</td>
                                <td>{{ $lCap->created_at->format('d-m-Y H:i') }}</td>
                                <td>{{ $lCap->updated_at->format('d-m-Y H:i') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <th>Sin registros</th>
                            </tr>
                        @endforelse --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <h3>Listado De Capacitaciones</h3>
        <div class="card">
            <div class="card-body">
                <ul style="list-style-type: none; padding-left: 0;">
                    <li>
                        <span><b>ODI</b></span>
                        <div>
                            <button class="btn btn-primary" onclick="window.open('', '_blank')">Acceder</button>
                            <input class="btn btn-secondary" type="file" id="fileInput"  accept=".pdf" onclick="replaceDocument()" onchange="showSelectedFileName()">
                            <button class="btn btn-success" onclick="saveChanges()">Guardar cambios</button>
                        </div>                    </li>
                    <br>
                    <li>
                        <span><b>Uso y Manejo de Extintores</b></span>
                        <div>
                            <button class="btn btn-primary" onclick="window.open('', '_blank')">Acceder</button>
                            <input class="btn btn-secondary" type="file" id="fileInput"  accept=".pdf" onclick="replaceDocument()" onchange="showSelectedFileName()">
                            <button class="btn btn-success" onclick="saveChanges()">Guardar cambios</button>
                        </div>                    </li>
                    <br>
                    <li>
                        <span><b>Difusion Plan de Emergencia</b></span>
                        <div>
                            <button class="btn btn-primary" onclick="window.open('', '_blank')">Acceder</button>
                            <input class="btn btn-secondary" type="file" id="fileInput"  accept=".pdf" onclick="replaceDocument()" onchange="showSelectedFileName()">
                            <button class="btn btn-success" onclick="saveChanges()">Guardar cambios</button>
                        </div>                    </li>
                </ul>

            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap5.min.js"></script>
<script>
    $('#busquedaRut').DataTable({
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
            "zeroRecords": "Nada encontrado",
            "info": "Mostrando la página _PAGE_ de _PAGES_",
            "infoEmpty": "Sin Registros disponibles",
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

{{-- carga de datosmas rapido con ajax (hay que eliminar el tbody y crear un controlador ) https://www.youtube.com/watch?v=Hsw4GGeolmg&list=PLZ2ovOgdI-kVmp2KynrUyosIazUhGK-6n&index=6 --}}
