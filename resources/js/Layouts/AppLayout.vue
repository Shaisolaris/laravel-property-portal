<script setup>
import { isEmpty } from "lodash";
import { useToast } from "~/scripts/helpers/useToast.js";
import simplebar from "simplebar-vue";
import Menu from "./Partials/AppLayout/Menu.vue";
import NavBar from "./Partials/AppLayout/NavBar.vue";
import Breadcrumbs from "~/Layouts/Partials/AppLayout/Breadcrumbs.vue";


defineProps({
    title: {
        type: String,
        default: ''
    }
});
const isMenuCondensed = ref(false);

localStorage.setItem('hoverd', false);


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


watch(
    () => usePage().props.flash,
    (flashMessage) => {
        if (!isEmpty(flashMessage) && flashMessage.type !== undefined) {
            const { toast } = useToast();
            toast(flashMessage.type, flashMessage.text);
        }
    }
);


onBeforeMount(() => {
    document.body.removeAttribute("data-layout", "horizontal");
    document.body.removeAttribute("data-topbar", "dark");
    document.body.removeAttribute("data-layout-size", "boxed");

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
    <Head :title="`${$t(`title.${title}`)}`" />

    <div id="layout-wrapper">
        <NavBar />

        <div>
            <div class="app-menu navbar-menu">
                <div class="navbar-brand-box">
                    <Link :href="route('landing.academy.index')" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="@/images/logo/logo-mini.svg" alt="" height="22" />
                        </span>
                        <span class="logo-lg">
                            <img src="@/images/logo/logo.svg" alt="" height="35" />
                        </span>
                    </Link>
                    <Link :href="route('landing.academy.index')" class="logo logo-light">
                        <span class="logo-sm">
                          <img src="@/images/logo/logo-mini.svg" alt="" height="22" />
                        </span>
                        <span class="logo-lg">
                            <img src="@/images/logo/logo.svg" alt="" height="35" />
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

                <div class="d-flex align-items-center pxc-20 avatar-block">
                    <div class="me-4">
                        <Avatar :path="$page.props.auth?.avatar" rounded="circle" size="lg" />
                    </div>
                    <div class="d-block d-lg-none d-xl-block text-start">
                        <div class="fs-14 text-dim-gray">{{ $page.props.auth.role?.displayName }}</div>
                        <div class="sidebar-name-block fs-5 fw-medium">{{ $page.props.auth?.fullName }}</div>
                    </div>
                </div>
                <simplebar id="scrollbar" style="height: 90%" ref="scrollbar">
                    <Menu />
                </simplebar>
                <div class="sidebar-background"></div>
            </div>
            <div class="vertical-overlay" id="overlay"></div>
        </div>

        <div class="main-content">
            <div class="page-content">
                <b-container fluid>
                    <slot name="breadcrumbs">
                        <Breadcrumbs :title="title" page-title="page-title" />
                    </slot>
                    <slot />
                </b-container>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>