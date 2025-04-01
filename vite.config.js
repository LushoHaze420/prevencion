import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['assets/login.css',
            'assets/formularioBase.css',
            'assets/reportesBase.css',
            'assets/listadoCapacitaciones.css',
            'assets/nuevoUsuario.css',
            'resources/js/home/valBusquedaRut.js',
            'resources/js/home/valBusquedaRut2.js',
            'resources/js/prev/valPrevBusquedaRut2.js',
            'resources/js/app.js',
            'resources/js/valNomPrev.js',
            'resources/js/valNomPrev.js',
            'resources/js/login/valUsuario.js',
            'resources/js/login/valUsuario2.js',
            'resources/js/perfilCapacitado/botonEstadoCapacitado.js',],
            refresh: true,
        }),
    ],
});
