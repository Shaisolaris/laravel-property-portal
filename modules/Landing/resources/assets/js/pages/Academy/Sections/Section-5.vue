<script setup>
import LinkArrow from "$module@landing/partials/LinkArrow.vue";


const instructors = ref([
    { name: 'Mathew Anderson', icon: 'page-landing-academy-section-5-img-1' },
    { name: 'Mathew Anderson', icon: 'page-landing-academy-section-5-img-2' },
    { name: 'Mathew Anderson', icon: 'page-landing-academy-section-5-img-3' },
    { name: 'Mathew Anderson', icon: 'page-landing-academy-section-5-img-4' },
]);
</script>

<template>
    <section class="section background-blue-2">
        <b-container class="text-center">
            <Text t-key="landing.academy.section-5.title" class="fsc-40 fontf-McLaren lh-1" />
            <Text t-key="landing.academy.section-5.subtitle" class="fs-16 pt-3" />

            <b-row class="g-3 pyc-40">
                <b-col v-for="instructor in instructors" cols="12" md="6" lg="3">
                    <Icon :name="instructor.icon" width="297" height="296" />
                    <div class="py-3 fs-3 fontf-McLaren">{{ instructor.name }}</div>
                </b-col>
            </b-row>

            <LinkArrow text-t-key="academy.section-5" />
        </b-container>
    </section>
</template>

<style scoped>

</style>