import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
            // Konfigurasi khusus untuk manifest
            buildDirectory: 'build',
        }),
        tailwindcss(),
    ],
    build: {
        // Jangan set manifest secara manual, biarkan Laravel plugin yang handle
        outDir: 'public/build',
        emptyOutDir: true,
        assetsDir: 'assets',
        rollupOptions: {
            output: {
                manualChunks: undefined,
            },
        },
    },
    server: {
        host: '0.0.0.0',
        port: 5173,
        hmr: {
            host: 'localhost',
        },
    },
});
