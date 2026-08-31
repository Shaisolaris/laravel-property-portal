<script setup>
import BaseFooter from "../partials/BaseFooter.vue";
import GlobalLayout from "~/Layouts/GlobalLayout.vue";
import NavBar from "~/Layouts/Partials/AppLayout/NavBar.vue";


defineProps({
    title: {
        type: String,
        default: ''
    },
    color: {
        type: String,
        default: 'white'
    },
    showFooter: {
        type: Boolean,
        default: true
    },
    links: {
        type: Array,
        default: [
            {
                route: 'landing.school.index',
                key: 'landing.school-inoura'
            },
            {
                route: 'landing.academy.course.index',
                key: 'landing.all-courses'
            },
        ]
    }
});


const topFunction = () => {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}


const showSearch = ref(false);

onMounted(() => {
    let backToTop = document.getElementById("back-to-top");

    if (backToTop) {
        backToTop = document.getElementById("back-to-top");
        window.onscroll = function () {
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                backToTop.style.display = "block";
            } else {
                backToTop.style.display = "none";
            }
        };
    }

    window.addEventListener('scroll', function (e) {
        e.preventDefault();
        const navbar = document.getElementById("navbar");

        if (navbar) {
            if (document.body.scrollTop >= 50 || document.documentElement.scrollTop >= 50) {
                navbar.classList.add("is-sticky");
            } else {
                navbar.classList.remove("is-sticky");
            }
        }
    });
});

const goToWebsite = (route) => {
    router.visit(route);
}

onMounted(() => {
    const element = document.getElementsByTagName('html');

    if (element.length) {
        element[0].setAttribute('data-layout-style', 'detached');
    }
});
</script>

<template>
    <GlobalLayout>
        <Head :title="`${$t(`title.${title}`)}`" />

        <div class="layout-wrapper landing">
            <NavBar :class="`bg-${color} box-shadow-none border-none`">
                <template #bottom-header>
                    <div class="d-flex align-items-center gap-3">
                        <template v-for="link in links">
                            <slot name="link-landing">
                                <BaseLink :href="route(link.route)" class="text-black">
                                    <template #text>
                                        <Text :t-key="link.key" class="text-black fs-14 fw-medium text-underline-hover" />
                                    </template>
                                </BaseLink>
                            </slot>
                        </template>

                        <i class="ri-search-2-line fs-4 hover-element" @click="showSearch = !showSearch" />

                        <div :class="['searchCourse', {'show': showSearch}]">
                            <BaseInput :class="`searchCourseInput bg-${color} rounded`" placeholder="search-course" />
                        </div>
                    </div>

                    <div class="d-flex justify-content-end align-items-center gap-3">
                        <i class="ri-shopping-bag-line align-bottom fs-20" />
                        <div v-if="!$page.props.auth">
                            <BaseButton t-key="create-account" variant="light-yellow" :route="route('register')" />
                        </div>
                        <div v-if="!$page.props.auth">
                            <BaseButton t-key="login" :route="route('login')" />
                        </div>
                        <template v-else>
                            <div>
                                <BaseButton t-key="logout" variant="light-yellow" :route="route('auth.logout')" />
                            </div>
                            <div>
                                <BaseButton v-if="!$page.props.auth?.is_admin" is-tag-a t-key="dashboard" :route="route('general.dashboard', {'role': $page.props.auth?.role_name, 'institution': $page.props.auth?.institution_type})" />
                                <BaseButton v-else t-key="dashboard" :route="route('admin.dashboard')" />
                            </div>
                        </template>
                    </div>
                </template>
            </NavBar>

            <slot />

            <BaseFooter v-if="showFooter" />

            <b-button variant="light-blue" @click="topFunction" class="btn-icon" id="back-to-top">
                <i class="ri-arrow-up-line"></i>
            </b-button>
        </div>
    </GlobalLayout>
</template>

<style lang="scss">
</style>