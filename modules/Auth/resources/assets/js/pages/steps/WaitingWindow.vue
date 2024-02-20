<script setup>
import LandingLayout from "$module@landing/layouts/LandingLayout.vue";
import { BAN, REJECT, REJECTED } from "~/scripts/utils/utils.js";


//TODO сделать так чтобы эта страница была и для ban и reject, прокинуть разные блоки
const user = computed(() => usePage().props.auth);
</script>

<template>
    <LandingLayout :show-footer="false" title="payment-success" color="beige">
        <div v-if="user.status === BAN">ban</div>
        <div v-else-if="user.status === REJECT || user.status === REJECTED">REJECTED</div>
        <div v-else class="auth-page-wrapper d-flex justify-content-center align-items-center min-vh-100 text-center">
            <div>
                <div class="mb-4 text-center">
                    <div class="mb-4">
                        <Icon name="svg-complete-check" width="106" height="106" />
                    </div>
                    <h1 class="text-black">
                        <Text t-key="page.register.text-19" tag="span" />
                    </h1>
                    <p class="text-dim-gray fs-14 mt-3 w-75 m-auto">
                        <Text v-if="user.there_are_documents" t-key="page.register.text-20" tag="span" />
                        <Text v-else t-key="page.register.text-21" tag="span" />
                    </p>
                </div>
            </div>
        </div>
    </LandingLayout>
</template>

<style scoped>
.success-screen {
    height: calc(100vh - 170px) !important;
}
</style>
