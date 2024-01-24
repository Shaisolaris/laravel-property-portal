<script setup>
import { SwiperSlide } from "swiper/vue";
import TextWave from "$module@landing/components/TextWave.vue";


const items = ref([...Array(3).keys()]);
</script>

<template>
    <section class="section">
        <b-container>
            <Swiper swiper-pagination-type="blue">
                <template #sliders>
                    <swiper-slide v-for="(item, index) in items">
                        <b-row class="align-items-center">
                            <b-col>
                                <Text t-key="landing.school.section-4.swiper-slide-1.text-1" class="fsc-64 fontf-McLaren lh-1" />

                                <div class="pyc-40">
                                    <TextWave color="#FFF3C8" width="260" />
                                </div>

                                <Text t-key="landing.school.section-4.swiper-slide-1.text-2" class="fs-3 fontf-HelveticaNeue" />
                            </b-col>
                            <b-col class="text-end">
                                <Icon name="page-landing-school-section-4-img-1" width="581" height="610" />
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