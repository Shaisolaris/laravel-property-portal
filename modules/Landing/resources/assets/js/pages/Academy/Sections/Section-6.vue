<script setup>
import { SwiperSlide } from "swiper/vue";
import TextWave from "$module@landing/components/TextWave.vue";


const items = ref([ ...Array(3).keys() ]);
</script>

<template>
    <section class="section">
        <b-container>
            <Swiper swiper-pagination-type="blue">
                <template #sliders>
                    <swiper-slide v-for="(item, index) in items">
                        <b-row class="align-items-center justify-content-center">
                            <b-col>
                                <Icon name="page-landing-academy-section-6-img-1" width="610" height="615" />
                            </b-col>
                            <b-col>
                                <Text t-key="landing.academy.section-6.swiper-slide-1.text-1" class="fsc-64 fontf-McLaren lh-1" />

                                <div class="pyc-40">
                                    <TextWave color="#FFF3C8" width="260" />
                                </div>

                                <Text t-key="landing.academy.section-6.swiper-slide-1.text-2" class="fs-3 fontf-HelveticaNeue" />
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