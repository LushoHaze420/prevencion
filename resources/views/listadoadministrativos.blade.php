<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Listado de documentos</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="p-3 m-1 border-1 bd-example">
    <div class="container">
        <p><a class="btn btn-primary" href="{{route('adminCap')}}">Ingresar nueva capacitacion</a></p>
        <table class="table">
            <thead>
                <th>Id<br>Documentos</th>
                <th>Rut<br>Prevencionista</th>
                <th>Nombre<br>Prevencionista</th>
                <th>Apellidos<br>Prevencionista</th>
                <th>Rut<br>Capacitado</th>
                <th>Nombre<br>Capacitado</th>
                <th>Apellidos<br>Capacitado</th>
                <th>Rol<br>Capacitado</th>
                <th>Ver</th>
            </thead>

            <tbody>
                @forelse($listadoadministrativos as $lad)
                    <tr>
                        <td>{{ $lad->id }}</td>
                        <td>{{ $lad->rut_prev }}</td>
                        <td>{{ $lad->nombre_prev }}</td>
                        <td>{{ $lad->apellidos_prev }}</td>
                        <td>{{ $lad->rut_cap }}</td>
                        <td>{{ $lad->nombre_cap }}</td>
                        <td>{{ $lad->apellidos_cap }}</td>
                        <td>{{ $lad->rol_cap }}</td>
                        <td> <a class="btn btn-danger" href="/Archivos/administrativos/{{ $lad->documentos }}" target="blank_">Ver Documentos</a> </td>
                    </tr>
                @empty
                    <tr>
                        <th>Sin registros</th>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</body>
</html>
