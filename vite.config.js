import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['assets/login.css',
            'assets/capacitaciones.css',
            'assets/formularioBase.css',
            'resources/js/admin/valAdminBusquedaRut2.js',
            'resources/js/prev/valPrevBusquedaRut2.js',
            'resources/js/app.js',
            'resources/js/valNomPrev.js',
            'resources/js/valNomPrev.js',
            'resources/js/login/valUsuario.js',
            'resources/js/login/valUsuario2.js',],
            refresh: true,
        }),
    ],
});
