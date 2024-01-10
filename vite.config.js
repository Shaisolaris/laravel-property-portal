import { defineConfig } from 'vite';
// import { createSvgIconsPlugin } from "vite-plugin-svg-icons";
import { resolve } from "path";
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';


export default defineConfig({
    build: {
        chunkSizeWarningLimit: 4000,
    },
    plugins: [
        laravel({
            input: 'resources/scripts/app.js',
            ssr: 'resources/scripts/ssr.js',
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
            '@': resolve(__dirname, 'resources'),
            '~': resolve(__dirname, 'resources/views'),
        },
    },
});
