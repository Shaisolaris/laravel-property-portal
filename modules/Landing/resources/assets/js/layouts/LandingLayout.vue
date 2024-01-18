<script setup>
import BaseFooter from "../pages/Partials/BaseFooter.vue";
import NavBar from "~/Layouts/Partials/AppLayout/NavBar.vue";
import Section2 from "../pages/Sections/School/Section-2.vue";
import Section3 from "../pages/Sections/School/Section-3.vue";
import Section4 from "../pages/Sections/School/Section-4.vue";
import Section5 from "../pages/Sections/School/Section-5.vue";
import Section6 from "../pages/Sections/School/Section-6.vue";
import Section7 from "../pages/Sections/School/Section-7.vue";
import Section8 from "../pages/Sections/School/Section-8.vue";
import Section9 from "../pages/Sections/School/Section-9.vue";
import Section1 from "../pages/Sections/School/Section-1.vue";
import Section10 from "../pages/Sections/School/Section-10.vue";
import UnderHeaderSection from "../pages/Sections/School/UnderHeaderSection.vue";


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

const scrollToSection = (sectionId) => {
    const element = document.getElementById(sectionId);
    if (element) {
        element.scrollIntoView({ behavior: 'smooth' });
    }
}

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
                <div class="d-flex gap-3">
                    <span>School of Inoura</span>
                    <Text tag="span" t-key="landing.blog" />
                    <Text tag="span" t-key="landing.all-courses" />
                    <span>Search</span>
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

        <UnderHeaderSection />

        <Section1 />
        <Section2 />
        <Section3 />
        <Section4 />
        <Section5 />
        <Section6 />
        <Section7 />
        <Section8 />
        <Section9 />
        <Section10 />

        <BaseFooter />

        <BButton variant="light-blue" @click="topFunction" class="btn-icon" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </BButton>
    </div>
</template>

<style scoped>

</style>