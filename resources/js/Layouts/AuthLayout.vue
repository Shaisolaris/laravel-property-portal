<script setup>
import NavBar from "~/Layouts/Partials/AuthLayout/NavBar.vue";

defineProps({
    title: {
        type: String
    },
    cols: {
        type: Object,
        default: {
            left: 'col-6 col-lg-4 col-xl-6 col-xxl-4',
            right: 'col-6 col-lg-8 col-xl-6 col-xxl-8',
        }
    }
});
</script>

<template>
    <Head :title="`${$t(`title.${title}`)}`" />

    <div class="layout-wrapper landing overflow-x-hidden">
        <NavBar />

        <slot name="main-content">
            <b-row class="align-items-center ptc-67">
                <b-col :class="cols.left">
                    <div class="block-bg text-center">
                        <div class="d-flex justify-content-center">
                            <div class="wc-70">
                                <Text t-key="page.login.text-1" class="fsc-30 py-5 fontf-McLaren" />
                            </div>
                        </div>
                    </div>
                </b-col>
                <b-col :class="cols.right">
                    <slot name="right-content" />
                </b-col>
            </b-row>
        </slot>
    </div>
</template>

<style scoped>
.block-bg {
    background: url('@/images/page/auth/img-1.svg') no-repeat;
    width: 672px;
    height: 920px;
}
</style>