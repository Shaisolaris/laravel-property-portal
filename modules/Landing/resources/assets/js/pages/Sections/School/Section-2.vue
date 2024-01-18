<script setup>
import CourseCard from "../../Partials/CourseCard.vue";
</script>

<template>
    <section class="section">
        <b-container>
            <b-row class="justify-content-between align-items-center">
                <b-col>
                    <Text t-key="landing.school.section-2.title" class="fsc-40 fontf-McLaren lh-1" />
                    <Text t-key="landing.school.section-2.subtitle" class="fs-16 w-75" />
                </b-col>
                <b-col class="text-end">
                    <Link :href="route('landing.index')" class="text-black fs-3 lh-1 fontf-McLaren">
                        <Text tag="span" t-key="landing.school.section-2.button" class="me-2" />
                        <Icon name="svg-arrow-right" width="29" height="19" />
                    </Link>
                </b-col>
            </b-row>

            <b-row>
                <b-col v-for="item in [...Array(4).keys()]">
                    <CourseCard />
                </b-col>
            </b-row>
        </b-container>
    </section>
</template>

<style scoped>

</style>