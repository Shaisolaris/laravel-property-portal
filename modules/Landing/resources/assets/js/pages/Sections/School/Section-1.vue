<script setup>
import { Autoplay, Navigation, Pagination } from "swiper/modules";
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
import "swiper/css/autoplay";
import 'swiper/css/navigation';
import 'swiper/css/pagination';
</script>

<template>
    <section class="section background-section mt-5">
        <b-container>
            <swiper
                class="navigation-swiper rounded" :loop="true"
                :modules="[Autoplay, Navigation, Pagination]"
                :autoplay="{ delay: 2500, disableOnInteraction: false }"
                :navigation="{ nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' }"
                :pagination="{ clickable: true, el: '.swiper-pagination' }"
            >
                <swiper-slide>
                    <div class="swiper-slide">
                        <BRow class="justify-content-center">
                            <BCol cols="10">
                                <div class="text-white-50">
                                    <p class="fs-20 ff-secondary mb-4">" I am givng 5 stars. Theme
                                        is great and everyone one stuff everything in theme. Future
                                        request should not affect current
                                        state of theme. "</p>

                                    <div>
                                        <h5 class="text-white">gregoriusus</h5>
                                        <p>- Skote User</p>
                                    </div>
                                </div>
                            </BCol>
                        </BRow>
                    </div>
                </swiper-slide>

                <swiper-slide>
                    <div class="swiper-slide">
                        <BRow class="justify-content-center">
                            <BCol cols="10">
                                <div class="text-white-50">
                                    <p class="fs-20 ff-secondary mb-4">" Awesome support. Had few
                                        issues while setting up because of my device, the support
                                        team helped me fix them up in a day.
                                        Everything looks clean and good. Highly recommended! "</p>

                                    <div>
                                        <h5 class="text-white">GeekyGreenOwl</h5>
                                        <p>- Skote User</p>
                                    </div>
                                </div>
                            </BCol>
                        </BRow>
                    </div>
                </swiper-slide>

                <swiper-slide>
                    <div class="swiper-slide">
                        <BRow class="justify-content-center">
                            <BCol cols="10">
                                <div class="text-white-50">
                                    <p class="fs-20 ff-secondary mb-4">" Amazing template, Redux
                                        store and components is nicely designed.
                                        It's a great start point for an admin based project. Clean
                                        Code and good documentation. Template is
                                        completely in React and absolutely no usage of jQuery "</p>

                                    <div>
                                        <h5 class="text-white">sreeks456</h5>
                                        <p>- Veltrix User</p>
                                    </div>
                                </div>
                            </BCol>
                        </BRow>
                    </div>
                </swiper-slide>
                <div class="swiper-button-next bg-white rounded-circle"></div>
                <div class="swiper-button-prev bg-white rounded-circle"></div>
                <div class="swiper-pagination position-relative mt-2"></div>

            </swiper>
        </b-container>
    </section>
</template>

<style scoped>
.background-section {
    background: url("@/images/page/landing/school/blue-bg.svg") no-repeat;
    background-size: cover;
}
</style>