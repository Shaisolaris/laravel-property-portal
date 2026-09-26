import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { createRequire } from 'module';

const require = createRequire(import.meta.url);

export default defineConfig({
    build: {
        outDir: '../../public/build-admin',
        emptyOutDir: true,
        manifest: true,
    },
    plugins: [
        laravel({
            publicDirectory: '../../public',
            buildDirectory: 'build-admin',
            input: [
                __dirname + '/resources/assets/js/app.js'
            ],
            refresh: true,
        }),
    ],
});
