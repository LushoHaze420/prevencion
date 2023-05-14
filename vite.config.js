import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['assets/login.css', 'resources/css/app.css', 'resources/js/app.js', 'resources/js/valNomPrev.js', 'resources/js/valNomPrev.js', 'resources/js/login/valUsuario.js', 'resources/js/login/valUsuario2.js', 'resources/js/login/modalRegistrate.js'],
            refresh: true,
        }),
    ],
});
