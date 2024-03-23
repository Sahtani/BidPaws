import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    build: {
        outDir: 'public/build', // Répertoire de sortie
        manifest: true, // Générer un fichier de manifeste
        sourcemap: true, // Générer des sourcemaps pour le débogage
    },
});

