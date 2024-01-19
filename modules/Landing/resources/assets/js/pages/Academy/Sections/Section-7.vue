<script setup>

</script>

<template>
    <section class="section background-academy-section-7">
        <b-container class="text-center">
            <Text t-key="landing.academy.section-7.title" class="fsc-40 fontf-McLaren lh-1" />
            <Text t-key="landing.academy.section-7.subtitle" class="fs-16 fontf-HelveticaNeue pt-3" />

            <BAccordion class="custom-accordionwithicon-plus pyc-40" id="accordionWithplusicon">
                <BAccordionItem title="What is a Learning Management System (LMS)?">
                    What is a Learning Management System (LMS)?
                </BAccordionItem>
                <BAccordionItem title="What are the key features of an LMS?">
                    What are the key features of an LMS?
                </BAccordionItem>
                <BAccordionItem title="How can an LMS benefit educational institutions and organizations?">
                    How can an LMS benefit educational institutions and organizations?
                </BAccordionItem>
                <BAccordionItem title="Is an LMS suitable for both academic and corporate settings?">
                    Is an LMS suitable for both academic and corporate settings?
                </BAccordionItem>
            </BAccordion>

            <Link :href="route('landing.academy')" class="text-black fs-3 lh-1 fontf-McLaren text-center">
                <Text tag="span" t-key="landing.academy.section-7.button" class="me-2" />
                <Icon name="svg-arrow-right" width="29" height="19" />
            </Link>
        </b-container>
    </section>
</template>

<style scoped>

</style>