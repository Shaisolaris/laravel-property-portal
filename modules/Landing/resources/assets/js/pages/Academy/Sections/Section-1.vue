<script setup>
import { SwiperSlide } from "swiper/vue";


const items = ref([...Array(5).keys()]);
</script>

<template>
    <section class="section background-section-1-academy">
        <b-container>
            <Swiper>
                <template #sliders>
                    <swiper-slide v-for="(item, index) in items">
                        <b-row class="align-items-center justify-content-center">
                            <b-col>
                                <div class="d-flex justify-content-between text-light-yellow fs-16 fw-semibold fontf-HelveticaNeue">
                                    <Text t-key="landing.academy.section-1.swiper-slide-1.text-1" class="text-uppercase" />
                                    <div>#{{ index + 1}}/{{ items.length }}</div>
                                </div>

                                <div class="fsc-64 lh-1 fontf-McLaren py-4">
                                    <Text t-key="landing.academy.section-1.swiper-slide-1.text-2-part-1" class="text-light-yellow" />
                                    <Text t-key="landing.academy.section-1.swiper-slide-1.text-2-part-2" />
                                </div>

                                <Text t-key="landing.academy.section-1.swiper-slide-1.text-3" class="fs-3 fontf-HelveticaNeue" />
                            </b-col>
                            <b-col class="text-end">
                                <Icon name="page-landing-academy-section-1-img-1" width="595" height="586" />
                            </b-col>
                        </b-row>
                    </swiper-slide>
                </template>
            </Swiper>
        </b-container>
    </section>
</template>

<style scoped>

</style>