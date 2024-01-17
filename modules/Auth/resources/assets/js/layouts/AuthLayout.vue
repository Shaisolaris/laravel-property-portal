<script setup>
import NavBar from "./prtials/NavBar.vue";

defineProps({
    title: {
        type: String
    },
    withoutRightContent: {
        default: () => false,
    }
});
</script>

<template>
    <Head :title="`${$t(`title.${title}`)}`" />
    <div class="layout-wrapper landing overflow-x-hidden">
        <NavBar />
        <slot name="main-content">
            <b-row class="align-items-center ptc-67" :no-gutters="true">
                <b-col v-if="!withoutRightContent" cols="12" lg="5" class="d-none d-lg-block">
                    <div class="block-bg text-center">
                        <div class="d-flex justify-content-center">
                            <div class="wc-70">
                                <Text t-key="page.login.text-1" class="fsc-30 py-5 fontf-McLaren" />
                            </div>
                        </div>
                    </div>
                </b-col>
                <b-col cols="12" :lg="!withoutRightContent ? '7' : '12'" class="pt-lg-0 pt-5">
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
