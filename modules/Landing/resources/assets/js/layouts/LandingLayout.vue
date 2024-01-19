<script setup>
import BaseFooter from "../pages/Partials/BaseFooter.vue";
import NavBar from "~/Layouts/Partials/AppLayout/NavBar.vue";


defineProps({
    title: {
        type: String,
        default: ''
    }
});


const topFunction = () => {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

const links = ref([
    {
        route: 'landing.school',
        key: 'landing.school-inoura'
    },
    {
        route: 'blog.index',
        key: 'landing.blog'
    },
    {
        route: 'landing.all-courses',
        key: 'landing.all-courses'
    },
]);

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
</script>

<template>
    <Head :title="`${$t(`title.${title}`)}`" />

    <div class="layout-wrapper landing">
        <NavBar class="bg-beige box-shadow-none border-none">
            <template #bottom-header>
                <div class="d-flex align-items-center gap-3">
                    <template v-for="(link, index) in links">
                        <template v-if="index === 0">
                            <slot name="link-landing">
                                <BaseLink :href="route(link.route)">
                                    <template #text>
                                        <Text :t-key="link.key" class="text-black fs-14 fw-medium text-underline-hover" />
                                    </template>
                                </BaseLink>
                            </slot>
                        </template>
                        <BaseLink  v-else :href="route(link.route)">
                            <template #text>
                                <Text :t-key="link.key" class="text-black fs-14 fw-medium text-underline-hover" />
                            </template>
                        </BaseLink>
                    </template>

                    <i class="ri-search-2-line fs-4 hover-element" @click="showSearch = !showSearch" />

                    <div :class="['searchCourse', {'show': showSearch}]" >
                        <BaseInput class="searchCourseInput rounded" placeholder="search-course" />
                    </div>
                </div>

                <div class="d-flex justify-content-end align-items-center gap-3">
                    <i class="ri-shopping-bag-line align-bottom fs-20" />
                    <div v-if="!$page.props.auth">
                        <BaseButton t-key="create-account" variant="light-yellow" route-name="register" />
                    </div>
                    <div v-if="!$page.props.auth">
                        <BaseButton t-key="login" route-name="login" />
                    </div>
                    <div v-else>
                        <BaseButton t-key="dashboard" route-name="dashboard" />
                    </div>
                </div>
            </template>
        </NavBar>

        <slot />

        <BaseFooter />

        <BButton variant="light-blue" @click="topFunction" class="btn-icon" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </BButton>
    </div>
</template>

<style lang="scss">
</style>