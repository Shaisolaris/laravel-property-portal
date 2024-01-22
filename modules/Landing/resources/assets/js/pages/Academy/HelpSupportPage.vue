<script setup>
import Search from "$module@landing/partials/Search.vue";
import LandingLayout from "$module@landing/layouts/LandingLayout.vue";
import CourseCard from "$module@landing/partials/CourseCard.vue";
</script>

<template>
    <LandingLayout>
        <Card class="bg-beige radius-60">
            <section class="section job-hero-section">
                <b-container class="text-center background-school-short-casual-courses-page">
                    <Text t-key="landing.academy.help-support-page.title" class="fsc-40 fontf-McLaren lh-1" />

                    <Search />

                    <Text
                        tag="span"
                        t-key="landing.academy.help-support-page.text-1"
                        class="fs-16 fontf-HelveticaNeue text-dim-gray"
                    />
                    <Text
                        tag="span"
                        t-key="landing.academy.help-support-page.text-2"
                        class="fs-16 fw-medium fontf-HelveticaNeue"
                    />
                </b-container>
            </section>
        </Card>


        <section class="section">
            <b-container>
                <b-row>
                    <b-col v-for="item in [...Array(7).keys()]" cols="3">
                        <CourseCard shadow="black" class-map="text-center">
                            <template #body>
                                <div>icon</div>
                                <div>text</div>
                            </template>
                        </CourseCard>
                    </b-col>
                </b-row>
            </b-container>
        </section>
    </LandingLayout>
</template>

<style scoped>

</style>