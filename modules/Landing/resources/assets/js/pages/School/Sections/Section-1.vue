<script setup>
import LinkArrow from "$module@landing/partials/LinkArrow.vue";
import BeigeCard from "$module@landing/partials/BeigeCard.vue";
import { SwiperSlide } from "swiper/vue";
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
                <Swiper :use-pagination="false" :slides-per-view="4" swiper-pagination-type="blue" >
                    <template #sliders>
                        <swiper-slide v-for="(item, index) in [...Array(15).keys()]">
                            <BeigeCard />
                        </swiper-slide>
                    </template>
                </Swiper>
            </b-row>
        </b-container>
    </section>
</template>

<style scoped>

</style>