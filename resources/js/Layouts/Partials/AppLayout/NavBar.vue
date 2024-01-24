<script setup>
import simplebar from "simplebar-vue";


defineProps({
    classMapHeaderBottom: {
        type: String,
        default: ''
    }
});


const toggleHamburgerMenu = () => {
    const windowSize = document.documentElement.clientWidth;
    let layoutType = document.documentElement.getAttribute("data-layouts");

    document.documentElement.setAttribute("data-sidebar-visibility", "show");
    let visibilityType = document.documentElement.getAttribute("data-sidebar-visibility");

    if (windowSize > 767)
        document.querySelector(".hamburger-icon").classList.toggle("open");

    //For collapse horizontal menu
    if (
        document.documentElement.getAttribute("data-layouts") === "horizontal"
    ) {
        document.body.classList.contains("menu") ?
            document.body.classList.remove("menu") :
            document.body.classList.add("menu");
    }

    if (visibilityType === "show" && (layoutType === "vertical" || layoutType === "semibox")) {
        if (windowSize < 1025 && windowSize > 767) {
            document.body.classList.remove("vertical-sidebar-enable");
            document.documentElement.getAttribute("data-sidebar-size") === "sm" ?
                document.documentElement.setAttribute("data-sidebar-size", "") :
                document.documentElement.setAttribute("data-sidebar-size", "sm");
        } else if (windowSize > 1025) {
            document.body.classList.remove("vertical-sidebar-enable");
            document.documentElement.getAttribute("data-sidebar-size") === "lg" ?
                document.documentElement.setAttribute("data-sidebar-size", "sm") :
                document.documentElement.setAttribute("data-sidebar-size", "lg");
        } else if (windowSize <= 767) {
            document.body.classList.add("vertical-sidebar-enable");
            document.documentElement.setAttribute("data-sidebar-size", "lg");
        }
    }

    if (document.documentElement.getAttribute("data-layouts") === "twocolumn") {
        document.body.classList.contains("twocolumn-panel") ?
            document.body.classList.remove("twocolumn-panel") :
            document.body.classList.add("twocolumn-panel");
    }
}

const toggleMenu = () => {
    document.body.classList.toggle("fullscreen-enable");
    if (
        !document.fullscreenElement &&
        !document.mozFullScreenElement &&
        !document.webkitFullscreenElement
    ) {
        if (document.documentElement.requestFullscreen) {
            document.documentElement.requestFullscreen();
        } else if (document.documentElement.mozRequestFullScreen) {
            document.documentElement.mozRequestFullScreen();
        } else if (document.documentElement.webkitRequestFullscreen) {
            document.documentElement.webkitRequestFullscreen(
                Element.ALLOW_KEYBOARD_INPUT
            );
        }
    } else {
        if (document.cancelFullScreen) {
            document.cancelFullScreen();
        } else if (document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
        } else if (document.webkitCancelFullScreen) {
            document.webkitCancelFullScreen();
        }
    }
}


onMounted(() => {
    document.addEventListener("scroll", function () {
        const pageTopBar = document.getElementById("page-topbar");

        if (pageTopBar) {
            document.body.scrollTop >= 50 || document.documentElement.scrollTop >= 50
                ? pageTopBar.classList.add("topbar-shadow")
                : pageTopBar.classList.remove("topbar-shadow");
        }
    });

    if (document.getElementById("topnav-hamburger-icon"))
        document.getElementById("topnav-hamburger-icon").addEventListener("click", toggleHamburgerMenu);
});
</script>

<template>
    <header id="page-topbar">
        <div class="layout-width">
            <div class="navbar-header">
                <div class="d-flex">
                    <div class="navbar-brand-box horizontal-logo">
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
                    </div>
                    <button
                        type="button"
                        class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                        id="topnav-hamburger-icon"
                    >
                        <span class="hamburger-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                </div>
                <div class="d-flex align-items-center">
                    <LangDropdown />
                </div>
            </div>

            <div :class="`navbar-header ${classMapHeaderBottom}`">
                <slot name="bottom-header">
                    <div class="d-flex">
                        <slot name="bottom-left-nav-bar-block">
                            Academy of Inoura
                        </slot>
                    </div>
                    <div class="d-flex align-items-center">
                        <slot name="bottom-right-nav-bar-block">
                            <b-dropdown
                                :offset="{ alignmentAxis: 55, crossAxis: 15, mainAxis: 0 }"
                                class="dropdown d-md-none topbar-head-dropdown header-item"
                                variant="ghost-secondary"
                                dropstart
                                toggle-class="btn-icon btn-topbar rounded-circle arrow-none"
                                menu-class="dropdown-menu-lg dropdown-menu-end p-0"
                            >
                                <template #button-content>
                                    <i class="bx bx-search fs-22"></i>
                                </template>
                                <b-dropdown-item aria-labelledby="page-header-search-dropdown">
                                    <form class="p-3">
                                        <div class="form-group m-0">
                                            <div class="input-group">
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    placeholder="Search ..."
                                                    aria-label="Recipient's username"
                                                />
                                                <b-button variant="primary" type="submit">
                                                    <i class="mdi mdi-magnify"></i>
                                                </b-button>
                                            </div>
                                        </div>
                                    </form>
                                </b-dropdown-item>
                            </b-dropdown>
                            <b-dropdown
                                :offset="{ alignmentAxis: 57, crossAxis: 0, mainAxis: -42 }"
                                variant="ghost-dark"
                                dropstart
                                class="ms-1 dropdown"
                                toggle-class="btn-icon btn-topbar rounded-circle arrow-none"
                                id="page-header-notifications-dropdown"
                                menu-class="dropdown-menu-lg dropdown-menu-end p-0"
                                auto-close="outside"
                            >
                                <template #button-content>
                                    <i class='bx bx-bell fs-22' />
                                    <span class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger">
                                    <span class="notification-badge">
                                        3
                                    </span>
                                    <span class="visually-hidden">
                                        unread messages
                                    </span>
                                </span>
                                </template>
                                <div class="dropdown-head bg-primary bg-pattern rounded-top dropdown-menu-lg">
                                    <div class="p-3">
                                        <b-row class="align-items-center">
                                            <b-col>
                                                <h6 class="m-0 fs-16 fw-semibold text-white">
                                                    Notifications
                                                </h6>
                                            </b-col>
                                            <b-col cols="auto" class="dropdown-tabs">
                                                <b-badge variant="light-subtle" class="bg-light-subtle text-body fs-13"> 4
                                                    New
                                                </b-badge>
                                            </b-col>
                                        </b-row>
                                    </div>
                                </div>
                                <b-tabs nav-class="dropdown-tabs nav-tab-custom bg-primary px-2 pt-2">
                                    <b-tab
                                        title="All (4)"
                                        class="tab-pane fade py-2 ps-2 show"
                                        id="all-noti-tab"
                                        role="tabpanel"
                                    >
                                        <simplebar data-simplebar style="max-height: 300px" class="pe-2">
                                            <div class="text-reset notification-item d-block dropdown-item position-relative">
                                                <div class="d-flex">
                                                    <div class="avatar-xs me-3 flex-shrink-0">
                                                    <span class="avatar-title bg-info-subtle text-info rounded-circle fs-16">
                                                        <i class="bx bx-badge-check"></i>
                                                    </span>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <BLink href="#!" class="stretched-link">
                                                            <h6 class="mt-0 mb-2 lh-base">
                                                                Your <b>Elite</b> author Graphic Optimization
                                                                <span class="text-secondary">reward</span> is
                                                                ready!
                                                            </h6>
                                                        </BLink>
                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> Just 30 sec ago</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2 fs-15">
                                                        <input class="form-check-input" type="checkbox" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="my-3 text-center">
                                                <BButton type="button" variant="soft-success">
                                                    View All Notifications
                                                    <i class="ri-arrow-right-line align-middle"></i>
                                                </BButton>
                                            </div>
                                        </simplebar>
                                    </b-tab>

                                    <BTab
                                        title="Messages" class="tab-pane fade py-2 ps-2" id="messages-tab" role="tabpanel"
                                        aria-labelledby="messages-tab"
                                    >
                                        <simplebar data-simplebar style="max-height: 300px" class="pe-2">
                                            <div class="text-reset notification-item d-block dropdown-item">
                                                <div class="d-flex">
                                                    <img
                                                        src="@/images/users/avatar-3.jpg"
                                                        class="me-3 rounded-circle avatar-xs"
                                                        alt="user-pic"
                                                    />
                                                    <div class="flex-grow-1">
                                                        <BLink href="#!" class="stretched-link">
                                                            <h6 class="mt-0 mb-1 fs-13 fw-semibold">
                                                                James Lemire
                                                            </h6>
                                                        </BLink>
                                                        <div class="fs-13 text-muted">
                                                            <p class="mb-1">
                                                                We talked about a project on linkedin.
                                                            </p>
                                                        </div>
                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> 30 min ago</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2 fs-15">
                                                        <input class="form-check-input" type="checkbox" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="my-3 text-center">
                                                <BButton type="button" variant="soft-success">
                                                    View All Messages
                                                    <i class="ri-arrow-right-line align-middle"></i>
                                                </BButton>
                                            </div>
                                        </simplebar>
                                    </BTab>

                                    <BTab title="Alerts" class="p-4">
                                        <simplebar data-simplebar style="max-height: 300px" class="pe-2">
                                            <div class="w-25 w-sm-50 pt-3 mx-auto">
                                                <img
                                                    src="@/images/svg/bell.svg"
                                                    class="img-fluid"
                                                    alt="user-pic"
                                                />
                                            </div>
                                            <div class="text-center pb-5 mt-2">
                                                <h6 class="fs-18 fw-semibold lh-base">
                                                    Hey! You have no any notifications
                                                </h6>
                                            </div>
                                        </simplebar>
                                    </BTab>
                                </b-tabs>
                            </b-dropdown>
                            <div class="dropdown ms-sm-3 header-item topbar-user bg-transparent">
                                <button
                                    type="button"
                                    class="btn shadow-none"
                                    id="page-header-user-dropdown"
                                >
                            <span class="d-flex align-items-center">
                                <img v-if="$page.props.auth?.avatar" :src="$page.props.auth?.avatar" class="rounded-circle header-profile-user" alt>
                                <span v-else class="bg-light-blue rounded-circle header-profile-user" />
                            </span>
                                </button>
                            </div>
                        </slot>
                    </div>
                </slot>
            </div>
        </div>
    </header>
</template>

<style scoped>

</style>