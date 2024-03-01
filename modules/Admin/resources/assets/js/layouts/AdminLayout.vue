<script setup>
import { isEmpty } from "lodash";
import { useToast } from "~/scripts/helpers/useToast.js";
import simplebar from "simplebar-vue";
import Menu from "~/Layouts/Partials/AppLayout/Menu.vue";
import NavBar from "$module@admin/partials/AdminLayout/NavBar.vue";


const { t } = useI18n();
const { baseToast } = useToast();
const props = defineProps({
    title: {
        type: String,
        default: ''
    },
    header: {
        type: String,
        default: null,
    },
    headerBreadcrumb: {
        type: Boolean,
        default: false
    },
    breadcrumbs: {
        type: [ String, Array ],
        default: null
    },
});
const breadcrumbs = computed(() => {
    if (Array.isArray(props.breadcrumbs)) {
        return props.breadcrumbs;
    }

    let item = props.breadcrumbs;

    if (!item && props.headerBreadcrumb && props.header) {
        item = props.header;
    }

    if (!item) {
        return null;
    }

    return [
        { link: route('admin.dashboard'), text: t(`admin.breadcrumb`), },
        { link: null, text: item, },
    ]
});
const title = computed(() => {
    if (props.title) {
        return props.title;
    }

    if (props.header) {
        return props.header;
    }

    return null;
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


watch(
    () => usePage().props.flash,
    (flashMessage) => {
        if (!isEmpty(flashMessage) && flashMessage.type !== undefined) {
            let message = flashMessage.text;

            if (message.startsWith('admin.')) {
                message = t(message);
            }

            baseToast('backend', flashMessage.type, message, flashMessage.options);
        }
    }
);

onBeforeMount(() => {
    document.body.removeAttribute("data-layouts", "horizontal");
    document.body.removeAttribute("data-topbar", "dark");
    document.body.removeAttribute("data-layouts-size", "boxed");

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
    <div id="layout-wrapper" class="admin-layout-wrapper">
        <Head :title="title" />

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

                <simplebar id="scrollbar" styleu="height: 90%" class="h-100" ref="scrollbar">
                    <Menu />
                </simplebar>
                <div class="sidebar-background"></div>
            </div>
            <div class="vertical-overlay" id="overlay"></div>
        </div>

        <div class="main-content">
            <div class="page-content">
                <b-container fluid>
                    <div class="row" v-if="header || breadcrumbs">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0" v-if="header">
                                    {{ header }}
                                </h4>
                                <div class="page-title-right" v-if="breadcrumbs">
                                    <ol class="breadcrumb m-0">
                                        <li
                                            class="breadcrumb-item"
                                            v-for="(breadcrumb, index) in breadcrumbs"
                                            :class="{'active': index === breadcrumbs.length - 1}"
                                        >
                                            <Link :href="breadcrumb.link" v-if="breadcrumb.link">
                                                {{ breadcrumb.text }}
                                            </Link>
                                            <template v-else>
                                                {{ breadcrumb.text }}
                                            </template>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <slot />
                </b-container>
            </div>
        </div>
    </div>
</template>

<style lang="scss">
.admin-layout-wrapper {
    .breadcrumb-item + .breadcrumb-item::before {
        margin-top: -4px;
    }

    :not(.input-group) > .form-control {
        border-radius: 10px !important;
        --in-input-border-custom: #e7e8e9;
    }


    :is([data-layout="vertical"], [data-layout="semibox"])[data-layout-style="detached"] & {
        @media (min-width: 1024.1px) {
            .navbar-menu {
                top: calc(var(--header-height) + var(--grid-gutter-width));
            }
        }
    }
}
</style>
