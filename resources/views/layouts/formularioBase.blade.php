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

    @yield('tituloPagina')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    @vite(['assets/formularioBase.css',
    'assets/capacitaciones.css',
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
        @yield('tituloDepartamento')
    </div>
    <div class="center g-5 p-2 border-2 botonListadoCap">
        @yield('homeCapacitaciones')

        @yield('botonListadoMantenimiento')
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


