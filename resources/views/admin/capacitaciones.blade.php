<!doctype html>
<html lang="en">
    <head>
        <link rel="icon" href="{{ asset('icons/logoAndimar.png') }}" type="image/x-icon">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <title>Home Capacitaciones</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/capacitaciones.css')}}"> <!--REVISAR-->
        @vite([ 'resources/js/home/valBusquedaRut2.js',
            'resources/js/home/valBusquedaRut.js',])
    </head>
    <body class="p-3 m-0 border-0 bd-example">
        <!--barra de navegacion con toggler-->
        <nav class="navbar bg-body-tertiary fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand"><b>CAPACITACIONES</b></a>
                @auth
                    <div style="text-align: right;">{{Auth::user()->name}}</div>  {{-- para mostrar el nombre del usuario autenticado--}}
                @endauth
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" >
                    <span class="navbar-toggler-icon" ></span>
                </button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="background-color: #dde2ff">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Formulario para ingreso de capacitaciones - Seleccione Área</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{route('formNuevoUsuario')}}"><b>Usuarios</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('formAdministrativos')}}">Administrativos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('formAseadores')}}">Aseadores</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('formCajeras')}}">Cajeras</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('formCondyAux')}}">Conductores y Auxiliares</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('formGeryJef')}}">Gerencia y Jefaturas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('formMantenimiento')}}">Mantenimiento</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Reportes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('login')}}" style="color: #c40000"><b>Cerrar Sesion</b></a> <!--Crear este modulo para cerrar sesion-->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    <!--barra de busqueda por rut-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-smaller rounded">
        <div class="container-fluid d-flex ">
        <a class="navbar-brand busquedaRut">Ingrese Rut a Consultar</a>
        <form action="{{ route('busquedaRut') }}" method="GET" class="d-flex" role="search">
            @csrf
            <input class="form-control me-2" type="search" name="busquedarut" id="busqueda_rut" placeholder="Rut del capacitado" aria-label="Search" maxlength="9">
            <span id="maximo_caracteres_br" class="form-text"></span>
            <button class="btn btn-outline-success btnBusquedaRut" type="submit">Buscar</button>
        </form>
        </div>
    </nav>
    <br>
    <div>
        <div class="card solomensaje">
            <h3><center>Vista para usuario no registrado</center></h3> <!--texto informativo-->
            @role('rol_usuario_superadmin')
            <h3><center>Vista para S. Administrador</center></h3> <!--texto informativo-->
            @endrole
            @role('rol_usuario_admin')
            <h3><center>Vista para Administrador</center></h3> <!--texto informativo-->
            @endrole
            @role('rol_usuario_prevencionista')
            <h3><center>Vista para Prevencionista</center></h3> <!--texto informativo-->
            @endrole
            @role('rol_usuario_consultor')
            <h3><center>Vista para Consultor</center></h3> <!--texto informativo-->
            @endrole
        </div>
    </div>
    </body>
</html>
