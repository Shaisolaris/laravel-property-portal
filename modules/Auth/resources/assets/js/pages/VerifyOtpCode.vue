<script setup>

import RegisterStepLayout from "../Layouts/RegisterStepLayout.vue";

defineProps({
    otp_code: Number,
})

</script>

<template>
    <RegisterStepLayout>
        {{otp_code}}
    </RegisterStepLayout>
</template>

<style scoped>

</style>
