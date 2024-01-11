<script setup>
import { Link, router } from '@inertiajs/vue3';
import { computed, onMounted, ref } from "vue";
import simplebar from "simplebar-vue";

import us_flag from "@/images/flags/us.svg";
import spain from "@/images/flags/spain.svg";
import germany from "@/images/flags/germany.svg";
import italy from "@/images/flags/italy.svg";
import russia from "@/images/flags/russia.svg";
import china from "@/images/flags/china.svg";
import french from "@/images/flags/french.svg";
import ae from "@/images/flags/ae.svg";

import img1 from "@/images/products/img-1.png";
import img2 from "@/images/products/img-2.png";
import img3 from "@/images/products/img-3.png";
import img4 from "@/images/products/img-4.png";
import img5 from "@/images/products/img-5.png";

const languages = ref([
    {
        flag: us_flag,
        language: "en",
        title: "English",
    },
    {
        flag: spain,
        language: "sp",
        title: "Española",
    },
    {
        flag: germany,
        language: "gr",
        title: "Deutsche",
    },
    {
        flag: italy,
        language: "it",
        title: "italiana",
    },
    {
        flag: russia,
        language: "ru",
        title: "русский",
    },
    {
        flag: china,
        language: "ch",
        title: "中國人",
    },
    {
        flag: french,
        language: "fr",
        title: "Français",
    },
    {
        flag: ae,
        language: "ar",
        title: "Arabic",
    },
]);
const cartItems = ref([
    {
        id: 1,
        productImage: img1,
        productName: "Branded T-Shirts",
        productLink: "/ecommerce/product-details",
        quantity: "10 x $32",
        itemPrice: "320",
    },
    {
        id: 2,
        productImage: img2,
        productName: "Bentwood Chair",
        productLink: "/ecommerce/product-details",
        quantity: "5 x $18",
        itemPrice: "89",
    },
    {
        id: 3,
        productImage: img3,
        productName: "Borosil Paper Cup",
        productLink: "/ecommerce/product-details",
        quantity: "3 x $250",
        itemPrice: "750",
    },
    {
        id: 4,
        productImage: img4,
        productName: "Gray Styled T-Shirt",
        productLink: "/ecommerce/product-details",
        quantity: "1 x $1250",
        itemPrice: "1250",
    },
    {
        id: 5,
        productImage: img5,
        productName: "Stillbird Helmet",
        productLink: "/ecommerce/product-details",
        quantity: "2 x $495",
        itemPrice: "990",
    },
]);
import i18n from "~/i18n.js";

// const { t } = useI18n();

const lan = ref('en');
const text = ref(null);
const flag = ref(null);
const value = ref(null);
const myVar = ref(1);


const isCustomDropdown = () => {
}
const toggleHamburgerMenu = () => {
}
const toggleMenu = () => {
}
const toggleRightSidebar = () => {
}
const initFullScreen = () => {
}
const setLanguage = (locale, country, flag) => {
    lan.value = locale;
    text.value = country;
    flag.value = flag;
    document.getElementById("header-lang-img").setAttribute("src", flag);
    i18n.global.locale = locale;
}

const removeItem = (cartItem) => {
    cartItems.value = cartItems.value.filter(item => item.id !== cartItem.id)
}

const calculateTotalPrice = computed(() => cartItems.value.reduce((total, item) => total + parseFloat(item.itemPrice), 0).toFixed(2));
const logout = () => {
    router.post(route('logout'));
};

onMounted(() => {
    flag.value = 'es';

    languages.value.forEach((item) => {
        if (item.language === flag.value) {
            document.getElementById("header-lang-img") ? document.getElementById("header-lang-img").setAttribute("src", item.flag) : '';
        }
    });

    document.addEventListener("scroll", function () {
        var pageTopbar = document.getElementById("page-topbar");

        if (pageTopbar) {
            document.body.scrollTop >= 50 || document.documentElement.scrollTop >= 50 ? pageTopbar.classList.add(
                "topbar-shadow") : pageTopbar.classList.remove("topbar-shadow");
        }
    });
    if (document.getElementById("topnav-hamburger-icon"))
        document.getElementById("topnav-hamburger-icon").addEventListener("click", toggleHamburgerMenu);

    isCustomDropdown();
});


</script>

<template>
    <header id="page-topbar">
        <div class="layout-width">
            <div class="navbar-header">
                <div class="d-flex">
                    <div class="navbar-brand-box horizontal-logo">
                        <Link href="/public" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="../../../../assets/images/logo-sm.png" alt="" height="22" />
                            </span>
                            <span class="logo-lg">
                                <img src="../../../../assets/images/logo-dark.png" alt="" height="17" />
                            </span>
                        </Link>

                        <Link href="/public" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="../../../../assets/images/logo-sm.png" alt="" height="22" />
                            </span>
                            <span class="logo-lg">
                                <img src="../../../../assets/images/logo-light.png" alt="" height="17" />
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
                    <BDropdown
                        class="dropdown d-md-none topbar-head-dropdown header-item" variant="ghost-secondary" dropstart
                        :offset="{ alignmentAxis: 55, crossAxis: 15, mainAxis: 0 }"
                        toggle-class="btn-icon btn-topbar rounded-circle arrow-none"
                        menu-class="dropdown-menu-lg dropdown-menu-end p-0"
                    >
                        <template #button-content>
                            <i class="bx bx-search fs-22"></i>
                        </template>
                        <BDropdownItem aria-labelledby="page-header-search-dropdown">
                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input
                                            type="text"
                                            class="form-control"
                                            placeholder="Search ..."
                                            aria-label="Recipient's username"
                                        />
                                        <BButton variant="primary" type="submit">
                                            <i class="mdi mdi-magnify"></i>
                                        </BButton>
                                    </div>
                                </div>
                            </form>
                        </BDropdownItem>
                    </BDropdown>

                    <BDropdown
                        class="dropdown" variant="ghost-secondary" dropstart
                        :offset="{ alignmentAxis: 55, crossAxis: 15, mainAxis: -50 }"
                        toggle-class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle arrow-none"
                        menu-class="dropdown-menu-end"
                    >
                        <template #button-content><img
                            id="header-lang-img" src="../../../../assets/images/flags/us.svg" alt="Header Language"
                            height="20" class="rounded"
                        >
                        </template>
                        <BLink
                            href="javascript:void(0);" class="dropdown-item notify-item language py-2"
                            v-for="(entry, key) in languages" :data-lang="entry.language" :title="entry.title"
                            @click="setLanguage(entry.language, entry.title, entry.flag)" :key="key"
                        >
                            <img :src="entry.flag" alt="user-image" class="me-2 rounded" height="18">
                            <span class="align-middle">{{ entry.title }}</span>
                        </BLink>
                    </BDropdown>

                    <BDropdown
                        variant="ghost-dark"
                        dropstart
                        class="ms-1 dropdown"
                        :offset="{ alignmentAxis: 57, crossAxis: 0, mainAxis: -42 }"
                        toggle-class="btn-icon btn-topbar rounded-circle arrow-none"
                        id="page-header-notifications-dropdown"
                        menu-class="dropdown-menu-lg dropdown-menu-end p-0"
                        auto-close="outside"
                    >
                        <template #button-content>
                            <i class='bx bx-bell fs-22'></i>
                            <span class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger">
                                <span class="notification-badge">
                                3
                            </span>
                                <span class="visually-hidden">unread messages
                            </span>
                          </span>
                        </template>
                        <div class="dropdown-head bg-primary bg-pattern rounded-top dropdown-menu-lg">
                            <div class="p-3">
                                <BRow class="align-items-center">
                                    <BCol>
                                        <h6 class="m-0 fs-16 fw-semibold text-white">
                                            Notifications
                                        </h6>
                                    </BCol>
                                    <BCol cols="auto" class="dropdown-tabs">
                                        <BBadge variant="light-subtle" class="bg-light-subtle text-body fs-13"> 4 New
                                        </BBadge>
                                    </BCol>
                                </BRow>
                            </div>
                        </div>
                        <BTabs nav-class="dropdown-tabs nav-tab-custom bg-primary px-2 pt-2">
                            <BTab
                                title=" All (4) "
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

                                    <div class="text-reset notification-item d-block dropdown-item position-relative">
                                        <div class="d-flex">
                                            <img
                                                src="../../../../assets/images/users/avatar-2.jpg"
                                                class="me-3 rounded-circle avatar-xs flex-shrink-0"
                                                alt="user-pic"
                                            />
                                            <div class="flex-grow-1">
                                                <BLink href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">
                                                        Angela Bernier
                                                    </h6>
                                                </BLink>
                                                <div class="fs-13 text-muted">
                                                    <p class="mb-1">
                                                        Answered to your comment on the cash flow forecast's graph 🔔.
                                                    </p>
                                                </div>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> 48 min ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <input class="form-check-input" type="checkbox" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-reset notification-item d-block dropdown-item position-relative">
                                        <div class="d-flex">
                                            <div class="avatar-xs me-3 flex-shrink-0">
                        <span class="avatar-title bg-danger-subtle text-danger rounded-circle fs-16">
                          <i class="bx bx-message-square-dots"></i>
                        </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <BLink href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-2 fs-13 lh-base">
                                                        You have received <b class="text-success">20</b> new messages in
                                                        the conversation
                                                    </h6>
                                                </BLink>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                          <span><i class="mdi mdi-clock-outline"></i> 2 hrs
                            ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <input class="form-check-input" type="checkbox" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-reset notification-item d-block dropdown-item position-relative">
                                        <div class="d-flex">
                                            <img
                                                src="../../../../assets/images/users/avatar-8.jpg"
                                                class="me-3 rounded-circle avatar-xs flex-shrink-0"
                                                alt="user-pic"
                                            />
                                            <div class="flex-grow-1">
                                                <BLink href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">
                                                        Maureen Gibson
                                                    </h6>
                                                </BLink>
                                                <div class="fs-13 text-muted">
                                                    <p class="mb-1">
                                                        We talked about a project on linkedin.
                                                    </p>
                                                </div>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                          <span><i class="mdi mdi-clock-outline"></i> 4 hrs
                            ago</span>
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
                            </BTab>

                            <BTab
                                title="Messages" class="tab-pane fade py-2 ps-2" id="messages-tab" role="tabpanel"
                                aria-labelledby="messages-tab"
                            >
                                <simplebar data-simplebar style="max-height: 300px" class="pe-2">
                                    <div class="text-reset notification-item d-block dropdown-item">
                                        <div class="d-flex">
                                            <img
                                                src="../../../../assets/images/users/avatar-3.jpg"
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

                                    <div class="text-reset notification-item d-block dropdown-item">
                                        <div class="d-flex">
                                            <img
                                                src="../../../../assets/images/users/avatar-2.jpg"
                                                class="me-3 rounded-circle avatar-xs"
                                                alt="user-pic"
                                            />
                                            <div class="flex-grow-1">
                                                <BLink href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">
                                                        Angela Bernier
                                                    </h6>
                                                </BLink>
                                                <div class="fs-13 text-muted">
                                                    <p class="mb-1">
                                                        Answered to your comment on the cash flow
                                                        forecast's graph 🔔.
                                                    </p>
                                                </div>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                          <span><i class="mdi mdi-clock-outline"></i> 2 hrs
                            ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <input class="form-check-input" type="checkbox" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-reset notification-item d-block dropdown-item">
                                        <div class="d-flex">
                                            <img
                                                src="../../../../assets/images/users/avatar-6.jpg"
                                                class="me-3 rounded-circle avatar-xs"
                                                alt="user-pic"
                                            />
                                            <div class="flex-grow-1">
                                                <BLink href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">
                                                        Kenneth Brown
                                                    </h6>
                                                </BLink>
                                                <div class="fs-13 text-muted">
                                                    <p class="mb-1">
                                                        Mentionned you in his comment on 📃 invoice
                                                        #12501.
                                                    </p>
                                                </div>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                          <span><i class="mdi mdi-clock-outline"></i> 10 hrs
                            ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <input class="form-check-input" type="checkbox" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-reset notification-item d-block dropdown-item">
                                        <div class="d-flex">
                                            <img
                                                src="../../../../assets/images/users/avatar-8.jpg"
                                                class="me-3 rounded-circle avatar-xs"
                                                alt="user-pic"
                                            />
                                            <div class="flex-grow-1">
                                                <BLink href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">
                                                        Maureen Gibson
                                                    </h6>
                                                </BLink>
                                                <div class="fs-13 text-muted">
                                                    <p class="mb-1">
                                                        We talked about a project on linkedin.
                                                    </p>
                                                </div>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                          <span><i class="mdi mdi-clock-outline"></i> 3 days
                            ago</span>
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
                                        <img src="../../../../assets/images/svg/bell.svg" class="img-fluid" alt="user-pic" />
                                    </div>
                                    <div class="text-center pb-5 mt-2">
                                        <h6 class="fs-18 fw-semibold lh-base">
                                            Hey! You have no any notifications
                                        </h6>
                                    </div>
                                </simplebar>
                            </BTab>
                        </BTabs>
                    </BDropdown>

                    <BDropdown
                        variant="link"
                        class="ms-sm-3 header-item topbar-user"
                        toggle-class="rounded-circle arrow-none"
                        menu-class="dropdown-menu-end"
                        :offset="{ alignmentAxis: -14, crossAxis: 0, mainAxis: 0 }"
                    >
                        <template #button-content>
              <span class="d-flex align-items-center">
                <img v-if="$page.props.jetstream.managesProfilePhotos" class="rounded-circle header-profile-user">
                <span class="text-start ms-xl-2">
                  <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">gregerg</span>
                  <span class="d-none d-xl-block ms-1 fs-12 user-name-sub-text">Founder</span>
                </span>
              </span>
                        </template>
                        <h6 class="dropdown-header">Welcome !</h6>
                        <Link class="dropdown-item" :href="route('profile.show')">
                            <i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i>
                            <span class="align-middle">Profile</span>
                        </Link>
                        <Link
                            class="dropdown-item"
                            v-if="$page.props.jetstream.hasApiFeatures"
                            :href="route('api-tokens.index')"
                        ><i class="mdi mdi-key-variant text-muted fs-16 align-middle me-1"></i>
                            <span class="align-middle"> API Tokens</span>
                        </Link>
                        <div class="dropdown-divider"></div>
                        <Link class="dropdown-item" href="#">
                            <i class=" mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i>
                            <span class="align-middle"> Messages</span>
                        </Link>
                        <Link class="dropdown-item" href="#">
                            <i class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"></i>
                            <span class="align-middle"> Taskboard</span>
                        </Link>
                        <Link class="dropdown-item" href="#">
                            <i class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i>
                            <span class="align-middle"> Help</span>
                        </Link>
                        <div class="dropdown-divider"></div>
                        <Link class="dropdown-item" href="#">
                            <i class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i>
                            <span class="align-middle"> Balance : <b>$5971.67</b></span>
                        </Link>
                        <Link class="dropdown-item" href="#">
                            <BBadge variant="success-subtle" class="bg-success-subtle text-success mt-1 float-end">New
                            </BBadge>
                            <i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i>
                            <span class="align-middle"> Settings</span>
                        </Link>
                        <Link class="dropdown-item" href="/auth/lockscreen-basic">
                            <i class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i>
                            <span class="align-middle"> Lock screen</span>
                        </Link>

                        <!-- Authentication -->
                        <form method="POST" @submit.prevent="logout" class="dropdown-item">
                            <BButton variant="none" type="submit" class="btn p-0">
                                <i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> Logout
                            </BButton>
                        </form>
                    </BDropdown>
                </div>
            </div>
        </div>
    </header>
</template>

<style scoped>

</style>