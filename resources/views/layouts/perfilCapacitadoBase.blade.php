<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="{{ asset('icons/logoAndimar.png') }}" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <!--estilos para la tabla-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/perfil.css')}}">
    <title>Perfil Capacitado</title>
    @vite(['resources/js/perfilCapacitado/botonEstadoCapacitado.js',])
</head>
<body class="p-3 m-1 border-1 perfil">
    <div class="container">
        <p><a class="btn btn_homeCapacitaciones" href="{{route('homeCapacitaciones')}}">Regresar a Capacitaciones</a></p>{{--boton para volver a seleccionar capacitación--}}
        @yield('botonesRedireccionFormYListadoAd')
        @yield('botonesRedireccionFormYListadoAs')
        @yield('botonesRedireccionFormYListadoCa')
        @yield('botonesRedireccionFormYListadoCyA')
        @yield('botonesRedireccionFormYListadoGyJ')
        @yield('botonesRedireccionFormYListadoMa')

        <h3>PERFIL CAPACITADO</h3>
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="perfilUsuarios">
                    <thead>
                        <th>Id<br>Capacitado</th>
                        <th>Rut<br>Capacitado</th>
                        <th>Nombre<br>Capacitado</th>
                        <th>Apellidos<br>Capacitado</th>
                        <th>Rol<br>Capacitado</th>
                        <th>Fecha<br>Creación </th>
                        <th>Fecha<br>Modificación </th>
                        <th>Estado</th>
                        <th>Guardar</th>
                    </thead>

                    <tbody>
                        <tr>
                            <td></td>
                            <td><input type="text" class="form-control" oninput="validateInput(this)"></td>
                            <td><input type="text" class="form-control" oninput="validateInput(this)"></td>
                            <td><input type="text" class="form-control" oninput="validateInput(this)"></td>
                            <td><input type="text" class="form-control" oninput="validateInput(this)"></td>
                            <td></td>
                            <td></td>
                            <td> <a id="toggleButton" class="btn btn-success" onclick="toggleButton()">Activo</a> </td> {{-- Revisar este boton que concuerde con la BD--}}
                            <td> <a class="btn btn-danger" href="#">Guardar</a> </td> {{--crear validacion mediante sweet alert para este boton--}}
                        </tr>
                    </tbody>


                    {{-- <tbody>
                        @forelse($perfilusuarios as $pu)
                            <tr>
                                {{-- <td>{{ $lu->id }}</td>
                                <td>{{ $lu->rut_NU }}</td>
                                <td>{{ $lu->nombre_NU }}</td>
                                <td>{{ $lu->apellido_NU }}</td>
                                <td>{{ $lu->email_NU }}</td>
                                <td>{{ $lu->rol_NU }}</td>
                                <td>{{ $lu->created_at->format('d-m-Y H:i') }}</td>
                                <td>{{ $lu->updated_at->format('d-m-Y H:i') }}</td> --}}
                                {{--<td> <a class="btn btn-danger" href="{{ route ('perfilCap')}}">Ver Perfil</a> </td> , ['id' => $lu->id]
                            </tr>
                        @empty
                            <tr>
                                <th>Sin registros</th>
                            </tr>
                        @endforelse
                    </tbody> --}}
                </table>
            </div>
        </div>
        <br>
        <h4>Falta match con el usuario seleccionado y los controladores para mostrar y editar los datos</h4>
    </div>

    <br>
    <div class="container">
        <h3>LISTADO DE CAPACITACIONES</h3>
        <div class="card">
            <div class="card-body">
                <ul style="list-style-type: none; padding-left: 0;">
                    <li>
                        <span><b>ODI</b></span>
                        <div>
                            {{-- <button class="btn btn-primary" onclick="openDocument('/public/Archivos/administrativos/PDF_EJEMPLO.pdf')" target="blank_">Acceder</button> --}}
                            <button class="btn btn-primary" onclick="window.open('/Archivos/administrativos/PDF_EJEMPLO.pdf', '_blank')">Acceder</button>
                            {{-- <a class="btn btn-danger" href="/Archivos/administrativos/{{ $lad->documentos }}" target="blank_">Acceder</a> --}}
                            {{-- <input class="btn btn-secondary" type="file" id="fileInput"  accept=".pdf" onchange="showSelectedFileName()"> --}}
                            <input class="btn btn-secondary" type="file" id="fileInput"  accept=".pdf" onclick="replaceDocument()" onchange="showSelectedFileName()">
                            <button class="btn btn-success" onclick="saveChanges()">Guardar cambios</button>
                        </div>
                    </li>
                    <br>
                    <li>
                        <span><b>Uso y Manejo de Extintores</b></span>
                        <div>
                            <button class="btn btn-primary" onclick="window.open('', '_blank')">Acceder</button>
                            <input class="btn btn-secondary" type="file" id="fileInput"  accept=".pdf" onclick="replaceDocument()" onchange="showSelectedFileName()">
                            <button class="btn btn-success" onclick="saveChanges()">Guardar cambios</button>
                        </div>
                    </li>
                    <br>
                    <li>
                        <span><b>Difusion Plan de Emergencia</b></span>
                        <div>
                            <button class="btn btn-primary" onclick="window.open('', '_blank')">Acceder</button>
                            <input class="btn btn-secondary" type="file" id="fileInput"  accept=".pdf" onclick="replaceDocument()" onchange="showSelectedFileName()">
                            <button class="btn btn-success" onclick="saveChanges()">Guardar cambios</button>
                        </div>
                    </li>
                    <br>
                    @yield('capacitacionesAdministrativos')
                    @yield('capacitacionesAseadores')
                    @yield('capacitacionesCajeras')
                    @yield('capacitacionesCondYAux')
                    @yield('capacitacionesGerYJef')
                    @yield('capacitacionesMantenimiento')

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
    $('#perfilUsuarios').DataTable({
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
            "infoEmpty": "Sin registros disponibles",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            "search": "Buscar:",
            "paginate":{
                "next": "siguiente",
                "previous": "Anterior",
            }
        }
    });
</script>
<script>  //este script no funciona fuera de esta pagina, osea en un archivo js, aun asi esta en@vite como botonEstadoCapacitado.js
    function toggleButton() {
        var button = document.getElementById("toggleButton");

        if (button.innerText === "Activo") {
            button.innerText = "Inactivo";
            button.classList.remove("btn-success");
            button.classList.add("btn-warning");
        } else {
            button.innerText = "Activo";
            button.classList.remove("btn-warning");
            button.classList.add("btn-success");
        }
    }
</script>
<script>
    function validateInput(input) {
        var regex = /^[a-zA-Z\s]*$/;
        var inputValue = input.value;

        if (!regex.test(inputValue)) {
            input.value = inputValue.replace(/[^a-zA-Z\s]/g, '');
        }
    }
</script>
</body>
</html>
{{--este enlace fue utilizado como tutorial para implementar datatables con estilos responsivos: https://www.youtube.com/watch?v=xyGriTTRo_o&list=PLZ2ovOgdI-kVmp2KynrUyosIazUhGK-6n --}}

{{--traducir ciertos textos y mejorar la paginacion con responsividad https://www.youtube.com/watch?v=gnJXZkrfscM&list=PLZ2ovOgdI-kVmp2KynrUyosIazUhGK-6n&index=3 --}}

{{-- carga de datos mas rapido con ajax (hay que eliminar el tbody y crear un controlador ) https://www.youtube.com/watch?v=Hsw4GGeolmg&list=PLZ2ovOgdI-kVmp2KynrUyosIazUhGK-6n&index=6 --}}

