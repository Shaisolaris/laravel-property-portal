const vite = require('vite');
import laravel from 'laravel-vite-plugin';
import { resolve } from "path";
import { viteStaticCopy } from 'vite-plugin-static-copy';
import { watchAndRun } from "vite-plugin-watch-and-run";
import { createSvgIconsPlugin } from "vite-plugin-svg-icons";


import fs from 'fs-extra';
import path from 'path';

const folder = {
    src: "resources/assets/",
    src_assets: "resources/assets/",
    dist: "public/",
    dist_assets: "public/build/"
};

export default vite.defineConfig({
    build: {
        manifest: true,
        rtl: true,
        outDir: 'public/build/',
        cssCodeSplit: true,
        rollupOptions: {
            output: {
                assetFileNames: (css) => {
                    if (css.name.split('.').pop() == 'css') {
                        return 'css/' + `[name]` + '.min.' + 'css';
                    } else {
                        return 'icons/' + css.name;
                    }
                },
                entryFileNames: 'js/' + `[name]` + `.js`,
            },
        },
    },
    plugins: [
        watchAndRun([
            {
                watch: path.resolve('resources/assets/**/*.(scss|js|css)'),
                watchKind: ['add', 'change', 'unlink'],
                run: 'npm run build',
                delay: 0
            },
        ]),
        laravel(
            {
                input: [
                    'resources/assets/scss/bootstrap.scss',
                    'resources/assets/scss/icons.scss',
                    'resources/assets/scss/app.scss',
                    'resources/assets/scss/custom.scss',
                ],
                refresh: true
            }
        ),
        createSvgIconsPlugin({
            iconDirs: [resolve(__dirname, 'resources/assets/images')],
            symbolId: 'icon-[dir]-[name]',
        }),
        viteStaticCopy({
            targets: [
                {
                    src: 'resources/assets/fonts',
                    dest: ''
                },
                {
                    src: 'resources/assets/images',
                    dest: ''
                },
                {
                    src: 'resources/assets/scripts',
                    dest: ''
                },
            ]
        }),
        {
            name: 'copy-specific-packages',
            async writeBundle() {
                const outputPath = path.resolve(__dirname, folder.dist_assets);
                const configPath = path.resolve(__dirname, 'package-copy-config.json');

                try {
                    const configContent = await fs.readFile(configPath, 'utf-8');
                    const { packagesToCopy } = JSON.parse(configContent);

                    for (const packageName of packagesToCopy) {
                        const destPackagePath = path.join(outputPath, 'libs', packageName);

                        const sourcePath = (fs.existsSync(path.join(__dirname, 'node_modules', packageName + "/dist"))) ?
                            path.join(__dirname, 'node_modules', packageName + "/dist")
                            : path.join(__dirname, 'node_modules', packageName);

                        try {
                            await fs.access(sourcePath, fs.constants.F_OK);
                            await fs.copy(sourcePath, destPackagePath);
                        } catch (error) {
                            console.error(`Package ${packageName} does not exist.`);
                        }
                    }
                } catch (error) {
                    console.error('Error copying and renaming packages:', error);
                }
            },
        },

    ],
});

