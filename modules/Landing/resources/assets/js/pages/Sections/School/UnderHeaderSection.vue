<script setup>

</script>

<template>
    <section class="section job-hero-section background-section" id="start-learning">
        <b-container>
            <b-row class="justify-content-between align-items-center">
                <b-col>
                    <Text t-key="landing.school.under-header-section.text-1" class="fontf-McLaren fsc-64 lh-1" />
                    <Text t-key="landing.school.under-header-section.text-2" class="fs-24 py-3" />

                    <div class="d-flex align-items-center justify-content-between border-2 border-black rounded-1">
                        <div class="d-flex align-items-center gap-2">
                            <i class="ri-search-2-line align-bottom" />
                            <input type="text">
                        </div>
                        <div class="text-end">
                            <BaseButton t-key="search" />
                        </div>
                    </div>
                </b-col>
                <b-col>
                    <Icon name="page-landing-school-under-header-section-img-1" width="505" height="539" />
                </b-col>
            </b-row>

            <Card class="shadow-white radius-20">
                <b-row>
                    <b-col
                        v-for="item in $tm('landing.school.under-header-section.items')"
                        class="text-center g-4"
                        cols="12"
                        lg="3"
                    >
                        <div class="fsc-36 fw-bolder">2000+</div>
                        <Text :t-key="item" />
                    </b-col>
                </b-row>
            </Card>
        </b-container>
    </section>
</template>

<style scoped>
.background-section {
    background: url("@/images/page/landing/school/beige-bg.svg") no-repeat;
    background-size: cover;
}
</style>