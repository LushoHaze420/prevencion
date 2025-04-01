<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="{{ asset('icons/logoAndimar.png') }}" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    {{-- bootstrap 4 funciona con libreria pdf--}}

    {{-- @yield('fechaAd') --}}
    @yield('titleRepAd')
    @yield('titleRepAs')
    @yield('titleRepCa')
    @yield('titleRepCyA')
    @yield('titleRepGyJ')
    @yield('titleRepMa')


    <style>
        .cabecera{
            background-color: black;
            color: white;
        }
        h1{
            text-align: center;
            color: blue;
        }
        h4{
            text-align: left;
        }
    </style>
</head>
<body>
    <img src="icons/Logo_Andimar_2023.png" width="100px" height="50px" alt="">
    @yield('h1RepAd')
    @yield('h1RepAs')
    @yield('h1RepCa')
    @yield('h1RepCyA')
    @yield('h1RepGyJ')
    @yield('h1RepMa')

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
            @yield('forelseAd')
            @yield('forelseAs')
            @yield('forelseCa')
            @yield('forelseCyA')
            @yield('forelseGyJ')
            @yield('forelseMa')
        </tbody>
    </table>

</body>
</html>

{{-- https://www.youtube.com/watch?v=kix2lu1L0Ng --}}
{{-- video integracion pdf con laravel --}}
