import './bootstrap';
import '../assets/scss/config/minimal/app.scss';
import '@vueform/slider/themes/default.css';
import '../assets/scss/mermaid.min.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import BootstrapVueNext from 'bootstrap-vue-next';
import vClickOutside from "click-outside-vue3";
import VueApexCharts from "vue3-apexcharts";
import VueFeather from 'vue-feather';
import VueTheMask from 'vue-the-mask';


import AOS from 'aos';
import 'aos/dist/aos.css';

import  "vue3-toastify/dist/index.css";
import 'virtual:svg-icons-register';

import store from "./state/store";
import i18n from './i18n'

AOS.init({
    easing: 'ease-out-back',
    duration: 1000
});

const renderPath = (name) => {
    let parts = name.split("::");
    let module = false;

    if (parts.length > 1) module = parts[0];

    if (module) {
        let nameVue = parts[1].split(".")[0];
        return resolvePageComponent(
            `../../modules/${module}/resources/assets/js/pages/${nameVue}.vue`,
            import.meta.glob([`../../modules/**/resources/assets/js/pages/**/*.vue`]),
        );
    } else {
        return resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob(["./Pages/**/*.vue"]));
    }
};

createInertiaApp({
    title: title => title ? `${title}` : 'Inertia + Vue & Laravel',
    resolve: (name) => renderPath(name),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(store)
            .use(i18n)
            .use(ZiggyVue)
            .use(BootstrapVueNext)
            .use(VueApexCharts)
            .use(VueTheMask)
            .use(vClickOutside)
            .component(VueFeather.type, VueFeather)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
