<script setup>
import { Autoplay, Thumbs, Pagination, Navigation, EffectCoverflow, Mousewheel, Scrollbar, EffectFade, EffectFlip, EffectCreative } from "swiper/modules";
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
import "swiper/css/autoplay";
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';
import 'swiper/css/mousewheel';
import 'swiper/css/effect-fade';
import 'swiper/css/effect-creative';
import 'swiper/css/effect-flip';
import 'swiper/css/effect-coverflow';

const mousewheelModules = [ Mousewheel, Pagination ];
const effectFlipModules = [ EffectFlip, Pagination ];
</script>

<template>
    <section class="section background-blue">
        <swiper
            class="effect-flip-swiper rounded" :loop="true" :effect="'flip'" :modules="effectFlipModules"
            :grabCursor="true" :autoplay="{ delay: 2500, disableOnInteraction: false }"
            :pagination="{ el: '.swiper-pagination', clickable: true }"
        >
            <swiper-slide>
                <b-row class="align-items-center">
                    <b-col>
                        <div>Upcoming courses</div>
                        <div class="fsc-64 lh-1">Color Theory for Designers</div>

                        <div>
                            Discover a world of learning opportunities through our upcoming courses, where industry experts and thought leaders will guide you in acquiring new expertise, expanding your horizons, and reaching your full potential.
                        </div>
                    </b-col>
                    <b-col>
                        <Icon name="page-landing-academy-section-1-img-1" width="595" height="586" />
                    </b-col>
                </b-row>
            </swiper-slide>
            <swiper-slide>
                <b-row class="align-items-center">
                    <b-col>
                        <div>Upcoming courses</div>
                        <div class="fsc-64 lh-1">Color Theory for Designers</div>

                        <div>
                            Discover a world of learning opportunities through our upcoming courses, where industry experts and thought leaders will guide you in acquiring new expertise, expanding your horizons, and reaching your full potential.
                        </div>
                    </b-col>
                    <b-col>
                        <Icon name="page-landing-academy-section-1-img-1" width="595" height="586" />
                    </b-col>
                </b-row>
            </swiper-slide>
            <swiper-slide>
                <b-row class="align-items-center">
                    <b-col>
                        <div>Upcoming courses</div>
                        <div class="fsc-64 lh-1">Color Theory for Designers</div>

                        <div>
                            Discover a world of learning opportunities through our upcoming courses, where industry experts and thought leaders will guide you in acquiring new expertise, expanding your horizons, and reaching your full potential.
                        </div>
                    </b-col>
                    <b-col>
                        <Icon name="page-landing-academy-section-1-img-1" width="595" height="586" />
                    </b-col>
                </b-row>
            </swiper-slide>
            <div class="swiper-pagination"></div>
        </swiper>


        <!--                <swiper class="mousewheel-control-swiper rounded" :loop="true" :direction="'vertical'" :mousewheel="true"-->
        <!--                        :modules="mousewheelModules" :autoplay="{ delay: 2500, disableOnInteraction: false }"-->
        <!--                        :pagination="{ el: '.swiper-pagination', clickable: true }" style="height: 324px">-->
        <!--                    <swiper-slide>-->
        <!--                        <img src="@/images/page/landing/bg-footer.svg" alt class="img-fluid" />-->
        <!--                    </swiper-slide>-->
        <!--                    <swiper-slide>-->
        <!--                        <img src="@/images/small/img-4.jpg" alt class="img-fluid" />-->
        <!--                    </swiper-slide>-->
        <!--                    <swiper-slide>-->
        <!--                        <img src="@/images/small/img-5.jpg" alt class="img-fluid" />-->
        <!--                    </swiper-slide>-->
        <!--                    <div class="swiper-pagination"></div>-->
        <!--                </swiper>-->

    </section>
</template>

<style scoped>

</style>