<script setup>

import Search from "$module@landing/partials/Search.vue";
</script>

<template>
    <section class="section job-hero-section background-school-under-header-section" >
        <b-container class="position-relative h-100">
            <b-row class="justify-content-center align-items-center text-center">
                <b-col cols="12" md="6">
                    <Text t-key="landing.school.under-header-section.text-1" class="fsc-48 fontf-McLaren lh-1 pb-4" />
                    <Text t-key="landing.school.under-header-section.text-2" class="fs-3 fontf-HelveticaNeue" />
                </b-col>
            </b-row>

            <div class="position-absolute d-flex justify-content-center" style="width: 100%; bottom: -20%;">
                <div class="wc-63">
                    <Search />
                </div>
            </div>
        </b-container>
    </section>
</template>

<style scoped>

</style>