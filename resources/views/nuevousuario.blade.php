<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    @yield('tituloPaginaM')
    @yield('tituloPaginaC')
    @yield('tituloPaginaA')
    @yield('tituloPaginaGJ')
    @yield('tituloPaginaCA')
    @yield('tituloPaginaAD')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/valRutPrev.js', 'resources/js/valRutPrev2.js', 'resources/js/valNomPrev.js', 'resources/js/valApPrev.js','resources/js/valRutCap.js','resources/js/valRutCap2.js', 'resources/js/valNomCap.js', 'resources/js/valApCap.js', 'resources/js/cargoCap.js','resources/js/valDocs.js',])
</head>

<body class="p-3 m-1 border-1 bd-example">
    <div class="titulos">
        <h2>Formulario de ingreso para nuevo usuario prevencionista</h2>
        {{-- @yield('tituloArea') --}}
    </div>
    <div class="center g-5 p-2 border-2 botonListadoNUPrev">
        {{-- @yield('botonListadoNuevoUsuarioPrevencionista')  --}}
    </div>
        @yield('storeNUPrev')
        @csrf
        {{-- Rut nuevo prevencionista --}}
        <div class="row justify-content-center g-5 p-1 border-2">
            <div class="col-md-3">
                <label for="rut_prev" class="form-label"><b>Rut prevencionista</b></label>
                <input type="text" name="rut_prev" id="rut_prev" class="form-control" placeholder="Rut del prevencionista*" {{--name="rut_prev" conecta con tabla de bd--}}
                    aria-label="Rut prevencionista" maxlength="9">
                    <span id="maximo_caracteres" class="form-text"></span>
            </div>
        </div>

        <!--nombre y apellidos prevencionista-->
        <div class="row justify-content-center g-5 p-1 border-2">
            <div class="col-md-3">
                <label for="" class="form-label"><b>Nombre prevencionista</b></label>
                <input type="text" name="nombre_prev" id="soloLetras_np" class="form-control" placeholder="Ingrese nombre del prevencionista"
                    aria-label="Nombre prevencionista">
            </div>
            <div class="col-md-3">
                <label for="" class="form-label"><b>Apellidos prevencionista</b></label>
                <input type="text" name="apellidos_prev" id="soloLetras_ap" class="form-control" placeholder="Ingrese Apellidos del prevencionista"
                    aria-label="Apellido prevencionista">
            </div>
        </div>

        <!--rut del capacitado-->
        <div class="row justify-content-center g-5 p-1 border-2">
            <div class="col-md-3">
                <label for="rut_cap" class="form-label"><b>Rut capacitado</b></label>
                <input type="text" name="rut_cap" id="rut_cap" class="form-control" placeholder="Ingrese Rut del capacitado*" aria-label="Rut capacitado" maxlength="9">
                <span id="maximo_caracteres_rc" class="form-text"></span>
            </div>
        </div>

        <!--nombre y apellidos capacitado-->
        <div class="row justify-content-center g-5 p-1 border-2">
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
        <div class="row justify-content-center g-5 p-1 border-2">
            <div class="col-md-3 "><label for="" class="form-label"><b>Rol capacitado</b></label>
                <input type="text" name="rol_cap" id="soloLetras_cc" class="form-control" placeholder="Ingrese Cargo del capacitado*" aria-label="Cargo capacitado">
            </div>
        </div>

        <!--multiple document upload-->
        <div class="d-flex ">  {{--revisar la subida multiple de documentos--}}
            <div class="col-md-3 mb-3 pl-1 border-2 subirDocs mx-auto">
                <label for="formFileMultiple" class="form-label"><b>Documentos de la capacitación</b></label>
                <input class="form-control" type="file" name="documentos" id="formFileMultiple" multiple>
                <br>
                <button class="btn btn-success" type="submit">Subir Documentos</button>
            </div>
        </div>
    </form>
</body>

</html>


