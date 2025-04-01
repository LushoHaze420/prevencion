
<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="icon" href="{{ asset('icons/logoAndimar.png') }}" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    {{-- bootstrap 4 funciona con libreria pdf--}}
    <title>Reporte Capacitado por Rut</title>

    <style>
        .cabecera{
            background-color: black;
            color: white;
        }
        h1{
            text-align: center;
            color: blue;
        }
    </style>

</head>
<body>
    <img src="icons/Logo_Andimar_2023.png" width="100px" height="50px" alt="">
    <h1>Reporte Capacitado por Rut</h1>

    <table class="table table-bordered table-striped">
        <thead class="cabecera">
            <tr>
                <th>Id</th>
                <th>Nombre<br>Prev</th>
                <th>Rut<br>Capacitado</th>
                <th>Nombre<br>Cap</th>
                <th>Apellidos<br>Cap</th>
                <th>Rol/ Cargo<br>Cap</th>
                <th>Fecha<br>Creación</th>
                <th>Fecha<br>Mod</th>
            </tr>
        </thead>

        <tbody>
            @forelse($pdfbusquedarut as $rpdfbr){{--yield--}}
            <tr>
                <td>{{ $rpdfbr->id }}</td>
                <td>{{ $rpdfbr->nombre_prev }}</td>   {{--EN ESTE CAMPO DEBE SE MOSTRAR EL NOMBRE DEL USUARIO LOGGEADO QUE SUBIO LA CAPACITACION--}}
                <td>{{ $rpdfbr->rut_cap }}</td>
                <td>{{ $rpdfbr->nombre_cap }}</td>
                <td>{{ $rpdfbr->apellidos_cap }}</td>
                <td>{{ $rpdfbr->rol_cap }}</td>
                <td>{{ $rpdfbr->created_at->format('d-m-Y H:i') }}</td>
                <td>{{ $rpdfbr->updated_at->format('d-m-Y H:i') }}</td>
            </tr>
            @empty
            <tr>
                <th>Sin registros</th>
            </tr>
            @endforelse

        </tbody>
    </table>

</body>
</html>
