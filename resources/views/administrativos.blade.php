<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Administrativos</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="p-3 m-1 border-1 bd-example">

    <div class="titulos">
        <h2>
            <center>Formulario de ingreso para capacitaciones</center>
        </h2>
        <h3>
            <center>Administrativos</center>
        </h3>
    </div>
    <div class="center g-5 p-1 border-2">{{-- centrar boton --}}
        <p><a class="btn btn-primary" href="{{route('listadoAdministrativos')}}">Ver listado de capacitaciones</a></p>
    </div>


    <form action="{{route('storeCapacitacionAd')}}" method="POST" enctype="multipart/form-data"><!--para subir archivos tipo file y storeCapacitacionAd se enlaza en web.php-->
        @csrf
        <div class="row justify-content-center g-5 p-1 border-2">
            <div class="col-md-3">
                <input type="text" name="rut_prev" class="form-control" placeholder="Rut del prevencionista*" {{--name="rut_prev" conecta con tabla de bd--}}
                    aria-label="Rut prevencionista">
            </div>
        </div>

        <!--nombre y apellidos prevencionista-->
        <div class="row justify-content-center g-5 p-1 border-2">
            <div class="col-md-3">
                <input type="text" name="nombre_prev" class="form-control" placeholder="Ingrese nombre del prevencionista"
                    aria-label="Nombre prevencionista">
            </div>
            <div class="col-md-3">
                <input type="text" name="apellidos_prev" class="form-control" placeholder="Apellidos del prevencionista"
                    aria-label="Apellido paterno prevencionista">
            </div>
        </div>

        <!--rut del capacitado-->
        <div class="row justify-content-center g-5 p-1 border-2">
            <div class="col-md-3">
                <input type="text" name="rut_cap" class="form-control" placeholder="Rut del capacitado*" aria-label="Rut capacitado">
            </div>
        </div>

        <!--nombre y apellidos capacitado-->
        <div class="row justify-content-center g-5 p-1 border-2">
            <div class="col-md-3">
                <input type="text" name="nombre_cap" class="form-control" placeholder="Ingrese nombre del capacitado"
                    aria-label="Nombre capacitado">
            </div>
            <div class="col-md-3">
                <input type="text" name="apellidos_cap" class="form-control" placeholder="Apellidos del capacitado"
                    aria-label="Apellido paterno capacitado">
            </div>
        </div>

            <!--cargo del capacitado-->
        <div class="row justify-content-center g-5 p-1 border-2">
            <div class="col-md-3 ">
                <input type="text" name="rol_cap" class="form-control" placeholder="Cargo del capacitado" aria-label="Cargo capacitado">
            </div>
        </div>

        <!--multiple document upload-->
        <div class="col-md-3 mb-3 p-2 border-2">
            <label for="formFileMultiple" class="form-label">Documento de la capacitación</label>
            <input class="form-control" type="file" name="documentos" id="formFileMultiple" multiple>
            <br>
            <button class="btn btn-success" type="submit">Subir Documentos</button>
            {{-- <a href="personalmantenimiento/listadocapacitaciones" class="btn btn-success" type="submit">Subir documentos</a> --}}
        </div>
        </form>



</body>

</html>


