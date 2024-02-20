<script setup>
import CourseCard from "$module@landing/partials/CourseCard.vue";
</script>

<template>
    <section class="section">
        <b-container class="text-center">
            <div class="top-teachers-section">
                <h1>Top teachers</h1>
                <p>They efficiently serve a large number of students on our platform</p>
            </div>

            <Text t-key="landing.school.section-5.title" class="fsc-40 fontf-McLaren lh-1" />
            <Text t-key="landing.school.section-5.subtitle" class="fs-16 fontf-HelveticaNeue pt-3" />

            <b-row>
                <b-col v-for="item in [...Array(4).keys()]">
                    <CourseCard shadow="black" />
                </b-col>
            </b-row>
        </b-container>
    </section>
</template>

<style scoped>

</style>