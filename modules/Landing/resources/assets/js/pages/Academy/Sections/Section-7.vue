<script setup>

import LinkArrow from "$module@landing/partials/LinkArrow.vue";
</script>

<template>
    <section class="section background-pink">
        <b-container class="text-center">
            <Text t-key="landing.academy.section-7.title" class="fsc-40 fontf-McLaren lh-1" />
            <Text t-key="landing.academy.section-7.subtitle" class="fs-16 fontf-HelveticaNeue pt-3" />

            <b-accordion class="custom-accordionwithicon-plus pyc-40" id="accordionWithplusicon">
                <b-accordion-item title="What is a Learning Management System (LMS)?">
                    What is a Learning Management System (LMS)?
                </b-accordion-item>
                <b-accordion-item title="What are the key features of an LMS?">
                    What are the key features of an LMS?
                </b-accordion-item>
                <b-accordion-item title="How can an LMS benefit educational institutions and organizations?">
                    How can an LMS benefit educational institutions and organizations?
                </b-accordion-item>
                <b-accordion-item title="Is an LMS suitable for both academic and corporate settings?">
                    Is an LMS suitable for both academic and corporate settings?
                </b-accordion-item>
            </b-accordion>

            <LinkArrow text-t-key="academy.section-7" />
        </b-container>
    </section>
</template>

<style scoped>

</style>