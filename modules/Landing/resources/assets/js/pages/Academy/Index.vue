<script setup>
import Section8 from "./Sections/Section-8.vue";
import Section9 from "./Sections/Section-9.vue";
import Section7 from "./Sections/Section-7.vue";
import Section6 from "./Sections/Section-6.vue";
import Section3 from "./Sections/Section-3.vue";
import Section1 from "./Sections/Section-1.vue";
import Section2 from "./Sections/Section-2.vue";
import Section4 from "./Sections/Section-4.vue";
import Section5 from "./Sections/Section-5.vue";
import LandingLayout from "../../layouts/LandingLayout.vue";
import UnderHeaderSection from "./Sections/UnderHeaderSection.vue";
</script>

<template>
    <LandingLayout>
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
    </LandingLayout>
</template>

<style scoped>

</style>