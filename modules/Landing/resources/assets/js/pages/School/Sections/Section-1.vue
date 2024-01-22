<script setup>
import LinkArrow from "$module@landing/partials/LinkArrow.vue";
</script>

<template>
    <section class="section">
        <b-container>
            <b-row class="justify-content-between align-items-center pbc-40">
                <b-col>
                    <Text t-key="landing.school.section-1.title" class="fsc-40 fontf-McLaren lh-1" />
                    <Text t-key="landing.school.section-1.subtitle" class="fs-16 w-75 pt-3" />
                </b-col>
                <b-col class="text-end">
                    <LinkArrow text-t-key="school.section-1" />
                </b-col>
            </b-row>

            <b-row>
                <b-col v-for="item in [...Array(4).keys()]">
                    <Card class="bg-beige shadow-black text-center text-black border border-2 border-black">
                        <div class="fs-3 fontf-HelveticaNeue fw-medium">
                            Math: Pre-K - 8th grade
                        </div>

                        <div class="fs-16 fontf-HelveticaNeue py-3">
                            Pre-K through grade 2, Early math review, 2nd grade - 8th grade, See Pre-K - 8th Math
                        </div>

                        <div>
                            icon
                        </div>
                    </Card>
                </b-col>
            </b-row>
        </b-container>
    </section>
</template>

<style scoped>

</style>