<script setup>
import { computed, onBeforeMount, ref, watch } from "vue";
import { useStore } from "vuex";
import { Head, Link, usePage } from "@inertiajs/vue3";
import { layoutComputed } from "@/scripts/state/helpers";
import { isEmpty } from "lodash";
import simplebar from "simplebar-vue";
import NavBar from "./Partials/AppLayout/NavBar.vue";


localStorage.setItem('hoverd', false);

defineProps({
    title: {
        type: String,
        default: ''
    }
});

const store = useStore();
const isMenuCondensed = ref(false);
const sidebarSize = computed({
    get() {
        return store ? store.state.layout.sidebarSize : {} || {};
    },
    set(type) {
        return store.dispatch('layout/changeSidebarSize', {
            sidebarSize: type,
        });
    },
});


const initActiveMenu = () => {
    if (document.documentElement.getAttribute('data-sidebar-size') === 'sm-hover') {
        localStorage.setItem('hoverd', true);
        document.documentElement.setAttribute('data-sidebar-size', 'sm-hover-active');
    } else if (document.documentElement.getAttribute('data-sidebar-size') === 'sm-hover-active') {
        localStorage.setItem('hoverd', false);
        document.documentElement.setAttribute('data-sidebar-size', 'sm-hover');
    } else {
        document.documentElement.setAttribute('data-sidebar-size', 'sm-hover');
    }
}

const toggleMenu = () => {
    document.body.classList.toggle("sidebar-enable");

    if (window.screen.width >= 992) {
        document.body.classList.toggle("vertical-collpsed");
    } else {
        document.body.classList.remove("vertical-collpsed");
    }
    isMenuCondensed.value = !isMenuCondensed.value;
}

const toggleRightSidebar = () => {
    document.body.classList.toggle("right-bar-enabled");
}

const hideRightSidebar = () => {
    document.body.classList.remove("right-bar-enabled");
}


watch(
    () => usePage().props.flash,
    (flashMessage) => {
        if (!isEmpty(flashMessage) && flashMessage.type !== undefined) {
            // proxy.$toast(flashMessage);
        }
    }
);


onBeforeMount(() => {
    document.body.removeAttribute("data-layout", "horizontal");
    document.body.removeAttribute("data-topbar", "dark");
    document.body.removeAttribute("data-layout-size", "boxed");

    document.body.setAttribute("data-layout", store.state.layout.layoutType);
    document.body.setAttribute("data-topbar", store.state.layout.topbar);
    document.body.setAttribute("data-sidebar", store.state.layout.sidebarColor);
    document.body.setAttribute("data-sidebar-size",  store.state.layout.sidebarSize);
    document.body.setAttribute("data-sidebar-image", store.state.layout.sidebarImage);
    document.body.setAttribute("data-preloader", store.state.layout.preloader);
    document.body.setAttribute("data-bs-theme", store.state.layout.mode);
    document.body.setAttribute("data-layout-width",  store.state.layout.layoutWidth);
    document.body.setAttribute("data-layout-position",  store.state.layout.position);
    document.body.setAttribute("data-layout-style", store.state.layout.sidebarView);
    document.body.setAttribute("data-sidebar-visibility", store.state.layout.visibility);

    if (localStorage.getItem('hoverd') === 'true') {
        document.documentElement.setAttribute('data-sidebar-size', 'sm-hover-active');
    }

    const overlay = document.getElementById('overlay');

    if (overlay) {
        overlay.addEventListener('click', () => {
            document.body.classList.remove('vertical-sidebar-enable');
        });
    }
});
</script>

<template>
    <Head :title="title" />

    <div id="layout-wrapper">
        <NavBar />

        <div>
            <div class="app-menu navbar-menu">
                <div class="navbar-brand-box">
                    <Link href="/" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="@/assets/images/logo-sm.png" alt="" height="22" />
                        </span>
                        <span class="logo-lg">
                            <img src="@/assets/images/logo-dark.png" alt="" height="17" />
                        </span>
                    </Link>
                    <Link href="/" class="logo logo-light">
                        <span class="logo-sm">
                          <img src="@/assets/images/logo-sm.png" alt="" height="22" />
                        </span>
                        <span class="logo-lg">
                            <img src="@/assets/images/logo-light.png" alt="" height="17" />
                        </span>
                    </Link>
                    <button
                        type="button"
                        class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                        id="vertical-hover"
                        @click="initActiveMenu"
                    >
                        <i class="ri-record-circle-line"></i>
                    </button>
                </div>

                <simplebar id="scrollbar" class="h-100" ref="scrollbar">
                    <Menu></Menu>
                </simplebar>
                <div class="sidebar-background"></div>
            </div>
            <div class="vertical-overlay" id="overlay"></div>
        </div>

        <div class="main-content">
            <div class="page-content">
                <b-container fluid>
                    <slot />
                </b-container>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>