import { defineConfig } from 'vite';
// import { createSvgIconsPlugin } from "vite-plugin-svg-icons";
import path, { resolve } from "path";
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import AutoImport from 'unplugin-auto-import/vite'
import VueI18nPlugin from '@intlify/unplugin-vue-i18n/vite'

const __dirname = path.dirname(__filename);

export default defineConfig({
    server: { host: process.env.VITE_APP_URL },
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
        VueI18nPlugin({
            // runtimeOnly: false,
            // include: resolve(dirname(fileURLToPath(import.meta.url)), './resource/js/lang/**') // TODO:: нужно понять как мы будем передатьва переводы на фронт, я могу вот такой плагин поставить, но нужно будет ток немного доделать структуру
        }),
        AutoImport({ /* options */ }),
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
