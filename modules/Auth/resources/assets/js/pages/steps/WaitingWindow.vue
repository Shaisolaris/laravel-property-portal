<script setup>
import LandingLayout from "$module@landing/layouts/LandingLayout.vue";
import { BAN, REJECT, REJECTED } from "~/scripts/utils/utils.js";

const user = computed(() => usePage().props.auth);

onMounted(() => {
    // user.value.status = 'Reject'
})
</script>

<template>

    <LandingLayout :show-footer="false" title="payment-success" color="beige">
        <div class="auth-page-wrapper d-flex justify-content-center align-items-center min-vh-100 text-center">
            <div>
                <div class="mb-4 text-center">
                    <div class="mb-4" v-if="user.status !== REJECT && user.status !== REJECTED && user.status !== BAN">
                        <img src="@/images/svg/complete-check.svg" width="106" height="106" alt>
                    </div>
                    <h1 class="text-black">
                        <Text v-if="user.status !== REJECT && user.status !== REJECTED && user.status !== BAN" t-key="page.register.text-19" tag="span" />
                        <Text v-else t-key="page.register.text-27" tag="span" />
                    </h1>
                    <p class="text-dim-gray fs-14 mt-3 w-75 m-auto fw-semibold" >
                        <Text v-if="user.status === BAN" t-key="page.register.text-25" tag="span"/>
                        <Text v-else-if="user.status === REJECT || user.status === REJECTED" t-key="page.register.text-26" tag="span"/>
                        <Text v-else-if="user.there_are_documents" t-key="page.register.text-20" tag="span" />
                        <Text v-else t-key="page.register.text-21" tag="span" />
                    </p>
                </div>
            </div>
        </div>
    </LandingLayout>
</template>

<style scoped></style>
