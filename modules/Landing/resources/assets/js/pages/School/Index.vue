<script setup>
import LandingLayout from "$module@landing/layouts/LandingLayout.vue";
import Section1 from "$module@landing/pages/School/Sections/Section-1.vue";
import Section2 from "$module@landing/pages/School/Sections/Section-2.vue";
import Section3 from "$module@landing/pages/School/Sections/Section-3.vue";
import Section4 from "$module@landing/pages/School/Sections/Section-4.vue";
import Section5 from "$module@landing/pages/School/Sections/Section-5.vue";
import UnderHeaderSection from "$module@landing/pages/School/Sections/UnderHeaderSection.vue";
import Section7 from "$module@landing/pages/Academy/Sections/Section-7.vue";
</script>

<template>
    <LandingLayout title="school-landing">
        <template #link-landing>
            <BaseLink :href="route('landing.academy.index')">
                <template #text>
                    <Text t-key="landing.academy-inoura" class="text-black fs-14 fw-medium text-underline-hover" />
                </template>
            </BaseLink>
        </template>

        <UnderHeaderSection />
        <Section1 />
        <Section2 />
        <Section3 />
        <Section4 />
        <Section7 />
        <Section5 />
    </LandingLayout>
</template>

<style scoped>

</style>