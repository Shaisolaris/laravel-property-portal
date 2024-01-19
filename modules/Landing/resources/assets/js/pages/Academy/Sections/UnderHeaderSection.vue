<script setup>

</script>

<template>
    <section class="section job-hero-section background-under-header-section" id="start-learning">
        <b-container class="position-relative pb-5">
            <b-row class="justify-content-between align-items-center">
                <b-col>
                    <Text t-key="landing.academy.under-header-section.text-1" class="fontf-McLaren fsc-64 lh-1" />
                    <Text t-key="landing.academy.under-header-section.text-2" class="fs-24 py-3" />

                    <div class="d-flex align-items-center justify-content-between border bg-white border-2 border-black rounded p-2">
                        <div class="d-flex align-items-center gap-2 ms-3">
                            <i class="ri-search-2-line align-bottom fs-3" />
                            <BaseInput placeholder="what-do-you-want" class="border-0 ps-0" />
                        </div>
                        <div class="text-end">
                            <BaseButton t-key="search" />
                        </div>
                    </div>
                </b-col>
                <b-col>
                    <Icon name="page-landing-academy-under-header-section-img-1" width="505" height="539" />
                </b-col>
            </b-row>
            <div class="position-absolute" style="bottom: -20%; width: 100%">
                <Card class="shadow-white radius-20">
                    <b-row>
                        <b-col
                            v-for="item in $tm('landing.academy.under-header-section.items')"
                            class="text-center g-4"
                            cols="12"
                            lg="3"
                        >
                            <div class="fsc-36 fw-bolder">2000+</div>
                            <Text :t-key="item" />
                        </b-col>
                    </b-row>
                </Card>
            </div>
        </b-container>
    </section>
</template>

<style scoped>

</style>