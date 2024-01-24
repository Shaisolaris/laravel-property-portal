import { defineConfig } from 'vite';
import { createSvgIconsPlugin } from "vite-plugin-svg-icons";
import path, { resolve } from "path";
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import autoImport from "unplugin-auto-import/vite";
import components from "unplugin-vue-components/vite"
import fsExtra from 'fs-extra';


const __dirname = path.dirname(__filename);


const generateModuleAliases = () => {
    const tsConfigPath = path.join(__dirname, 'tsconfig.json');
    const moduleDir = path.resolve(__dirname, 'modules');
    const aliases = {};
    const paths_ = {}


    fsExtra.readdirSync(moduleDir).forEach((moduleName) => {
        const modulePath = `modules/${moduleName}/resources/assets/js`;

        if (fsExtra.existsSync(path.resolve(__dirname, modulePath))) {
            aliases[`$module@${moduleName.toLowerCase()}`] = path.resolve(__dirname, modulePath);
            paths_[`$module@${moduleName.toLowerCase()}/*`] = [`./${modulePath}/*`];
        }
    });

    fsExtra.readFile(tsConfigPath, (err, data) => {
        const tsConfig = JSON.parse(data);
        const paths = { ...tsConfig.compilerOptions.paths, ...paths_ };

        tsConfig.compilerOptions = tsConfig.compilerOptions || {};
        tsConfig.compilerOptions.paths = paths;

        fsExtra.writeFile(tsConfigPath, JSON.stringify(tsConfig, null, 2), err => {
            if (err) {
                console.error('Ошибка при записи в файл tsconfig.json:', err);
            } else {
                console.log('tsconfig.json успешно обновлен');
            }
        });
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
            ...generateModuleAliases()
        },
    },
});