<script setup>
import CourseCard from "$module@landing/partials/CourseCard.vue";
</script>

<template>
    <section class="section">
        <b-container class="text-center">
            <Text t-key="landing.academy.section-8.title" class="fsc-40 fontf-McLaren lh-1" />
            <Text t-key="landing.academy.section-8.subtitle" class="fs-16 fontf-HelveticaNeue pt-3" />

            <b-row>
                <b-col v-for="item in [...Array(4).keys()]">
                    <CourseCard shadow="light-pink" />
                </b-col>
            </b-row>
        </b-container>
    </section>
</template>

<style scoped>

</style>