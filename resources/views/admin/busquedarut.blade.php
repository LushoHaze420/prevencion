<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Busqueda Rut</title>
</head>
<body>
    <h3>ESTA VISTA MUESTRA EL DATA TABLE CON LOS DATOS, AREA/DEPARTAMENTO Y CAPACITACIONES DEL PROPIETARIO DEL RUT BUSCADO,
        CON OPCION DE MODIFICAR DATOS Y MODIFICAR/AGREGAR CAPACITACIONES. </h3> {{-- implementar una funcion que busque por rut y retorne un registro desde la bd e implementar una validacion --}}
    <body class="p-3 m-1 border-1 adminusuarioscreados">
        <div class="container">
            <p><a class="btn btn-primary" href="{{route('adminCap')}}">Regresar a capacitaciones</a></p> {{--boton para volver a capacitaciones--}}
        </div>
    </body>
</body>
</html>
