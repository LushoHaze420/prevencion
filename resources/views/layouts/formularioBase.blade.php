<!doctype html>
<html lang="en">

<head>
    <link rel="icon" href="{{ asset('icons/logoAndimar.png') }}" type="image/x-icon">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/formularioBase.css')}}">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}

    @yield('tituloPaginaM')
    @yield('tituloPaginaC')
    @yield('tituloPaginaA')
    @yield('tituloPaginaGJ')
    @yield('tituloPaginaCA')
    @yield('tituloPaginaAD')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    @vite(['assets/formularioBase.css',
    'assets/capacitaciones.css/',
    'resources/js/valRutPrev.js',
    'resources/js/valRutPrev2.js',
    'resources/js/valNomPrev.js',
    'resources/js/valApPrev.js',
    'resources/js/valRutCap.js',
    'resources/js/valRutCap2.js',
    'resources/js/valNomCap.js',
    'resources/js/valApCap.js',
    'resources/js/cargoCap.js',
    'resources/js/valDocs.js',])
</head>

<body class="p-3 m-1 border-1 formularioBase">

    <div class="titulos">
        <h2>Formulario de ingreso para capacitaciones</h2>
        @yield('tituloArea')
    </div>
    <div class="center g-5 p-2 border-2 botonListadoCap">
        @yield('homeCapacitaciones')
        @yield('botonListadoMantenimiento')
        {{-- @yield('botonPrevListadoMantenimiento')     revisar --}}
        @yield('botonListadoCajeras')
        @yield('botonListadoAseadores')
        @yield('botonListadoGeryJef')
        @yield('botonListadoCondyAux')
        @yield('botonListadoAdministrativos')
    </div>
        @yield('storeCapM')
        @yield('storeCapC')
        @yield('storeCapA')
        @yield('storeCapGJ')
        @yield('storeCapCA')
        @yield('storeCapAd')
        @csrf

        <div class="card">
            <div class="card-body">
                <!-- Rut prevencionista
                <div class="row justify-content-auto g-5 p-1 border-2">
                    <div class="col-md-3">
                        <label for="rut_prev" class="form-label"><b>Rut prevencionista</b></label>
                        <input type="text" name="rut_prev" id="rut_prev" class="form-control" placeholder="Rut del prevencionista*" {{--name="rut_prev" conecta con tabla de bd--}}
                            aria-label="Rut prevencionista" maxlength="9">
                            <span id="maximo_caracteres" class="form-text"></span>
                    </div>
                </div>-->

                <!--nombre y apellidos prevencionista-->
                <div class="row justify-content-auto g-5 p-1 border-2">
                    <div class="col-md-3">
                        <label for="" class="form-label"><b>Nombre prevencionista</b></label>
                        <input type="text" name="nombre_prev" id="soloLetras_np" class="form-control" placeholder="Ingrese nombre del prevencionista"
                            aria-label="Nombre prevencionista">
                    </div>
                    <!--<div class="col-md-3">
                        <label for="" class="form-label"><b>Apellidos prevencionista</b></label>
                        <input type="text" name="apellidos_prev" id="soloLetras_ap" class="form-control" placeholder="Ingrese Apellidos del prevencionista"
                            aria-label="Apellido prevencionista">
                    </div>-->
                </div>

                <!--rut del capacitado-->
                <div class="row justify-content-auto g-5 p-1 border-2">
                    <div class="col-md-3">
                        <label for="rut_cap" class="form-label"><b>Rut capacitado</b></label>
                        <input type="text" name="rut_cap" id="rut_cap" class="form-control" placeholder="Ingrese Rut del capacitado*" aria-label="Rut capacitado" maxlength="9" autofocus="autofocus">
                        <span id="maximo_caracteres_rc" class="form-text"></span>
                    </div>
                </div>

                <!--nombre y apellidos capacitado-->
                <div class="row justify-content-auto g-5 p-1 border-2">
                    <div class="col-md-3">
                        <label for="" class="form-label"><b>Nombre capacitado</b></label>
                        <input type="text" name="nombre_cap" id="soloLetras_nc" class="form-control" placeholder="Ingrese nombre del capacitado"
                            aria-label="Nombre capacitado">
                    </div>
                    <div class="col-md-3">
                        <label for="" class="form-label"><b>Apellidos capacitado</b></label>
                        <input type="text" name="apellidos_cap" id="soloLetras_ac" class="form-control" placeholder="Ingrese Apellidos del capacitado"
                            aria-label="Apellidos capacitado">
                    </div>
                </div>

                    <!--cargo del capacitado-->
                <div class="row justify-content-auto g-5 p-1 border-2">
                    <div class="col-md-3 "><label for="" class="form-label"><b>Rol capacitado</b></label>
                        <input type="text" name="rol_cap" id="soloLetras_cc" class="form-control" placeholder="Ingrese Cargo del capacitado*" aria-label="Cargo capacitado">
                    </div>
                </div>
                <br>

                <!--multiple document upload-->
                <div class="d-flex justify-content-start align-items-start">  {{--revisar la subida multiple de documentos--}}
                    <div class="col-md-5 mb-3 pl-1 border-2 subirDocs ">
                        <label class="form-label" for="formFileMultiple"><b>Documentos de la capacitación</b></label>
                        <input class="form-control" type="file" name="documentos" id="formFileMultiple" multiple>
                        <br>
                        {{-- <button class="btn btn-success" type="submit">Subir Documentos</button> --}}
                        <button class="btn btn-success" type="submit" data-toggle="modal" data-target="#modalError">Subir Documentos</button>
                    </div>
                </div>

            {{-- CAPACITACIONES GENERALES PARA TODOS LOS COLABORADORES --}}

                {{-- ODI --}}
                <div class="d-flex justify-content-start align-items-start">
                    <div class="col-md-5 mb-3 pl-1 border-2 ODI ">
                        <label class="form-label" for="inputGroupFileODI" ><b>ODI</b></label>
                        <input class="form-control" type="file" name="ODI" id="inputGroupFileODI">
                    </div>
                </div>

                {{-- Uso y Manejo Extintores --}}
                <div class="d-flex justify-content-start align-items-start">
                    <div class="col-md-5 mb-3 pl-1 border-2 Extintores ">
                        <label class="form-label" for="inputGroupFileExtintores" ><b>Uso y Manejo Extintores</b></label>
                        <input class="form-control" type="file" name="Extintores" id="inputGroupFileExtintores">
                    </div>
                </div>

                {{-- Difusion Plan de Emergencia --}}
                <div class="d-flex justify-content-start align-items-start">
                    <div class="col-md-5 mb-3 pl-1 border-2 Difusion">
                        <label class="form-label" for="inputGroupFileDifusion" ><b>Difusion Plan de Emergencia</b></label>
                        <input class="form-control" type="file" name="Difusion" id="inputGroupFileDifusion">
                    </div>
                </div>

                @yield('capAdministrativos')
                @yield('capAseadores')
                @yield('capCajeras')
                @yield('capCondyAux')
                @yield('capGeryJef')
                @yield('capMantenimiento')

            </div>
        </div>
    </form>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>


