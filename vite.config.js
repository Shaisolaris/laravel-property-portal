import { defineConfig } from 'vite';
// import { createSvgIconsPlugin } from "vite-plugin-svg-icons";
import path, { resolve } from "path";
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';


const __dirname = path.dirname(__filename);

export default defineConfig({
    build: {
        chunkSizeWarningLimit: 4000,
    },
    plugins: [
        laravel({
            input: 'resources/js/app.js',
            ssr: 'resources/js/ssr.js',
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
        // createSvgIconsPlugin({
        //     iconDirs: [resolve(__dirname, 'resources/assets/images')],
        //     symbolId: 'icon-[dir]-[name]',
        // }),
    ],
    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'resources/assets'),
            '~': path.resolve(__dirname, 'resources/js'),
        },
    },
});
