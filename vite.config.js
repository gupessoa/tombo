import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/js/core/bootstrap.bundle.min.js',
                'resources/js/plugins/perfect-scrollbar.min.js',
                'resources/js/plugins/moment.min.js',
                'resources/js/plugins/nouislider.min.js',
                'resources/js/plugins/glidejs.min.js',
                'resources/js/plugins/choices.min.js',
                'resources/js/material-kit-pro.js',
            ],
            refresh: true,
        }),
    ],
});
