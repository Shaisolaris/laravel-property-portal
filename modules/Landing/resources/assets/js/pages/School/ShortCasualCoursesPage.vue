<script setup>
import Search from "$module@landing/partials/Search.vue";
import LandingLayout from "$module@landing/layouts/LandingLayout.vue";
import BeigeCard from "$module@landing/partials/BeigeCard.vue";
</script>

<template>
    <LandingLayout>
        <section class="section job-hero-section">
            <b-container class="text-center background-school-short-casual-courses-page">
                <Text t-key="landing.school.short-casual-courses-page.title" class="fsc-40 fontf-McLaren lh-1" />

                <Search />

                <Text tag="span" t-key="landing.school.short-casual-courses-page.text-1" class="fs-16 fontf-HelveticaNeue text-dim-gray" />
                <Text tag="span" t-key="landing.school.short-casual-courses-page.text-2" class="fs-16 fw-medium fontf-HelveticaNeue" />
            </b-container>
        </section>

        <section class="section">
            <b-container class="text-center">
                <Text t-key="landing.school.short-casual-courses-page.section-1.title" class="fs-3 fw-medium fontf-HelveticaNeue lh-1" />

                <b-row>
                    <b-col v-for="item in [...Array(4).keys()]">
                        <BeigeCard />
                    </b-col>
                </b-row>
            </b-container>
        </section>
    </LandingLayout>
</template>

<style scoped>

</style>