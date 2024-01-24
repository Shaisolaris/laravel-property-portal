<script setup>
import { Autoplay, Thumbs, Pagination, EffectFade, EffectCreative } from "swiper/modules";
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
import "swiper/css/autoplay";
import 'swiper/css/scrollbar';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/mousewheel';
import 'swiper/css/effect-fade';


const { modules, usePagination } = defineProps({
    amountSlide: {
        type: Number,
        default: 2
    },
    slidesPerView: {
        type: Number,
        default: 1
    },
    swiperPaginationType: {
        type: String,
        default: 'black'
    },
    modules: {
        type: Array,
        default: [Pagination]
    },
    usePagination: {
        type: Boolean,
        default: true
    }
});
</script>

<template>
    <swiper
        :modules="[Pagination]"
        :speed="850"
        :pagination="{ el: '.swiper-pagination', clickable: true, enabled: usePagination, dynamicBullets: true }"

        :loop="true"
        :grabCursor="true"
        :slidesPerView="slidesPerView"
        class="default-swiper rounded"
    >
        <slot name="sliders">
            <swiper-slide v-for="(item, index) in amountSlide">
                <slot :name="`slide-${index+1}`" />
            </swiper-slide>
        </slot>

        <div :class="`swiper-pagination type-${swiperPaginationType} swiper-pagination-vertical`"></div>
    </swiper>
</template>

<style>

</style>