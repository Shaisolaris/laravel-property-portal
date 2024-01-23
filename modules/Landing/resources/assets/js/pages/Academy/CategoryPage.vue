<script setup>
import { getTranslateContent } from "~/scripts/helpers/translateHelper.js";
import Search from "$module@landing/partials/Search.vue";
import LandingLayout from "$module@landing/layouts/LandingLayout.vue";
</script>

<template>
    <LandingLayout :show-footer="false" title="academy-category">
        <section class="section job-hero-section">
            <b-container class="text-center background-school-short-casual-courses-page">
                <Text t-key="landing.academy.categories-page.title" class="fsc-40 fontf-McLaren lh-1" />

                <div class="d-flex justify-content-center py-3">
                    <div class="w-50">
                        <Search />
                    </div>
                </div>

                <Text tag="span" t-key="landing.academy.categories-page.text-1" class="fs-16 fontf-HelveticaNeue text-dim-gray" />
                <Text tag="span" t-key="landing.academy.categories-page.text-2" class="fs-16 fw-medium fontf-HelveticaNeue" />
            </b-container>
        </section>

        <section class="section">
            <b-container class="text-center">
                <Text t-key="landing.academy.categories-page.section-1.title" class="fsc-40 fontf-McLaren lh-1 pb-4" />

                <b-row class="justify-content-center">
                    <b-col v-for="item in getTranslateContent('landing.academy.categories-page.section-1')" cols="2">
                        <Card :class="`bg-${item.color} text-black h-100 shadow-black border border-2 border-black`">
                            <div class="text-center">
                                <Text :t-key="item.title" class="fs-3 fw-medium fontf-HelveticaNeue" />
                                <Text :t-key="item.text" class="fs-16 py-3" />
                                <Icon :name="item.icon" width="220" height="220" />
                            </div>
                        </Card>
                    </b-col>
                </b-row>
            </b-container>
        </section>
    </LandingLayout>
</template>

<style scoped>

</style>