<script setup>
import NavBar from "~/Layouts/Partials/AuthLayout/NavBar.vue";

defineProps({
    title: {
        type: String
    },
    cols: {
        type: Object,
        default: {
            // left: 'col-6 col-lg-4 col-xl-6 col-xxl-4',
            // right: 'col-7 col-lg-6 col-xl-6 col-xxl-6',
        }
    }
});
</script>

<template>
    <Head :title="`${$t(`title.${title}`)}`" />

    <div class="layout-wrapper landing overflow-x-hidden">
        <NavBar />

        <slot name="main-content">
            <b-row class="align-items-center ptc-67" :no-gutters="true">
                <b-col cols="12" lg="5" class="d-none d-lg-block">
                    <div class="block-bg text-center">
                        <div class="d-flex justify-content-center">
                            <div class="wc-70">
                                <Text t-key="page.login.text-1" class="fsc-30 py-5 fontf-McLaren" />
                            </div>
                        </div>
                    </div>
                </b-col>
                <b-col cols="12" lg="7" class="pt-lg-0 pt-5">
                    <slot name="right-content" />
                </b-col>
            </b-row>
        </slot>
    </div>
</template>

<style scoped>
.block-bg {
    background: url('@/images/page/auth/img-1.svg') no-repeat center;
    background-size: cover;
    width: 100%;
    height: 920px;
}
</style>
