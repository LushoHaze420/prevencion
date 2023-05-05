<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Nuevo Prevencionista</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/valRutPrev.js', 'resources/js/valRutPrev2.js', 'resources/js/valNomPrev.js', 'resources/js/valApPrev.js','resources/js/valRutCap.js','resources/js/valRutCap2.js', 'resources/js/valNomCap.js', 'resources/js/valApCap.js', 'resources/js/cargoCap.js','resources/js/valDocs.js',])
</head>

<body class="p-3 m-1 border-1 bd-example">
    <div class="titulos">
        <h2>Formulario de ingreso para nuevo usuario prevencionista</h2>
    </div>
    <div class="center g-5 p-2 border-2 botonListadoNUPrev">
        {{-- <p><a class="btn btn-primary" href="{{route('listadoNUPrev')}}">Ver listado de nuevos usuarios</a></p>    </div> --}}
        <!--crear metodo y ruta-->
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

        <!--nombre y apellidos nuevo prevencionista-->
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

        <!--cargo del nuevo usuario-->
        <div class="row justify-content-center g-5 p-1 border-2">
            <div class="col-md-3 "><label for="" class="form-label"><b>Rol Usuario</b></label>
                <select class="form-select" aria-label="seleccion de rol">
                    <option selected>Seleccione Rol</option>
                    <option value="1" name="rol_usuario">Prevencionista</option>
                </select>
                {{-- <input type="text" name="rol_cap" id="soloLetras_cc" class="form-control" placeholder="Ingrese Cargo del capacitado*" aria-label="Cargo capacitado"> --}}
            </div>
        </div>

        <!--boton crear nuevo usuario prevencionista-->
        <div class="d-flex align-items-center">
            <div class="col-md-3 mb-3 pl-1 border-2 btnCrearUsuario mx-auto">
                <br>
            </div>
            <button class="btn btn-success mx-auto" type="submit">Crear Usuario</button>
        </div>
    </form>
</body>
</html>


