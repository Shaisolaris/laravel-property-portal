import { defineConfig } from 'vite';
import { createSvgIconsPlugin } from "vite-plugin-svg-icons";
import path, { resolve } from "path";
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import autoimport from "unplugin-auto-import/vite";
import components from "unplugin-vue-components/vite"


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
        createSvgIconsPlugin({
            iconDirs: [ resolve(__dirname, 'resources/assets/images') ],
            symbolId: 'icon-[dir]-[name]',
        }),
        autoimport({
            vueTemplate: true,
            imports: [
                'vue', 'vuex', 'vue-i18n',
                { "@inertiajs/vue3": [ 'router', 'useForm', 'usePage' ] },
                { "lodash": [ 'isEmpty' ] },
            ]
        }),
        components({
            dirs: [ "resources/js/Components" ],
            // dts: [ "resources/ts/BootstrapVue", "resources/ts/SelfComponents" ],
            resolvers: [
                (name) => {
                    const components = [ "Link", "Head" ]
                    if (components.includes(name)) {
                        return { name, from: "@inertiajs/vue3" }
                    }
                },
            ],
        }),
    ],
    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'resources/assets'),
            '~': path.resolve(__dirname, 'resources/js'),
        },
    },
});
