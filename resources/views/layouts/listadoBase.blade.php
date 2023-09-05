<!doctype html>
<html lang="en">

<head>
    <link rel="icon" href="{{ asset('icons/logoAndimar.png') }}" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!--estilos para la tabla-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/listadoCapacitaciones.css')}}">
    @yield('tituloAd')
    @yield('tituloAs')
    @yield('tituloCa')
    @yield('tituloCyA')
    @yield('tituloGyJ')
    @yield('tituloMa')
</head>

<body class="p-3 m-1 border-1 listadoCapacitaciones">
    <div class="container">
        @yield('botonesRedireccionAd')
        @yield('botonesRedireccionAs')
        @yield('botonesRedireccionCa')
        @yield('botonesRedireccionCyA')
        @yield('botonesRedireccionGyJ')
        @yield('botonesRedireccionMa')
        <div class="card">
            <div class="card-body">
                @yield('tableclassAd')
                @yield('tableclassAs')
                @yield('tableclassCa')
                @yield('tableclassCyA')
                @yield('tableclassGyJ')
                @yield('tableclassMa')
                    <thead>
                        <th>Id</th>
                        <th>Nombre<br>Prevencionista</th>
                        <th>Rut<br>Capacitado</th>
                        <th>Nombre<br>Capacitado</th>
                        <th>Apellidos<br>Capacitado</th>
                        <th>Rol<br>Capacitado</th>
                        <th>Fecha<br>Creación </th>
                        <th>Fecha<br>Modificación </th>
                        {{-- <th>Capacitaciones</th> --}}
                        <th>Perfil</th>
                    </thead>

                    <tbody>
                        @yield('tablaAd')
                        @yield('tablaAs')
                        @yield('tablaCa')
                        @yield('tablaCyA')
                        @yield('tablaGyJ')
                        @yield('tablaMa')
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{{-- EN ESTA VISTA, AGREGAR UN BOTON A LA TABLA PARA MODIFICAR LA CAPACITACION INGRESADA MEDIANTE CONTROLADOR --}}
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap5.min.js"></script>
@yield('datatableAd')
@yield('datatableAs')
@yield('datatableCa')
@yield('datatableCyA')
@yield('datatableGyJ')
@yield('datatableMa')
</body>
</html>
{{--este enlace fue utilizado como tutorial para implementar datatables con estilos responsivos: https://www.youtube.com/watch?v=xyGriTTRo_o&list=PLZ2ovOgdI-kVmp2KynrUyosIazUhGK-6n --}}

{{--traducir ciertos textos y mejorar la paginacion con responsividad https://www.youtube.com/watch?v=gnJXZkrfscM&list=PLZ2ovOgdI-kVmp2KynrUyosIazUhGK-6n&index=3 --}}

{{-- carga de datosmas rapido con ajax (hay que eliminar el tbody y crear un controlador ) https://www.youtube.com/watch?v=Hsw4GGeolmg&list=PLZ2ovOgdI-kVmp2KynrUyosIazUhGK-6n&index=6 --}}
