import { defineConfig } from 'vite';
import { createSvgIconsPlugin } from "vite-plugin-svg-icons";
import path, { resolve } from "path";
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import autoImport from "unplugin-auto-import/vite";
import components from "unplugin-vue-components/vite"
import fs from 'fs';


const __dirname = path.dirname(__filename);


function generateModuleAliases() {
    const moduleDir = path.resolve(__dirname, 'modules');
    const aliases = {};

    fs.readdirSync(moduleDir).forEach((moduleName) => {
        const modulePath = `modules/${moduleName}/resources/assets/js`;

        if (fs.existsSync(path.resolve(__dirname, modulePath))) {
            aliases[`@${moduleName}`] = path.resolve(__dirname, modulePath);
        }
    });

    return aliases;
}


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
        autoImport({
            vueTemplate: true,
            dts: "resources/ts/auto-imports.d.ts",
            imports: [
                'vue',
                { "@inertiajs/vue3": [ 'router', 'useForm', 'usePage' ] },
                { "vuex": [ 'useStore' ] },
                { "vue-i18n": [ 'useI18n' ] },
                { "lodash": [ 'isEmpty' ] },
            ]
        }),
        components({
            dirs: [ "resources/js/Components", "resources/ts/BootstrapVue" ],
            dts: "resources/ts/components.d.ts",
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
            // ...generateModuleAliases()
        },
    },
});
