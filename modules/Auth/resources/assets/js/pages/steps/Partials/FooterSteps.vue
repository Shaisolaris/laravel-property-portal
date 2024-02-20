<script setup>
defineProps({
    disabledSubmit: {
        type: Boolean,
        default: false,
    }
})

defineEmits(['send'])
</script>

<template>
    <div class="container-fluid custom-container justify-content-end d-flex mt-5 occupation-footer w-100">
        <BaseButton
            t-key="continue"
            type="submit"
            @click="$emit('send')"
            class="fs-20 fw-bold shadow-dark-blue border-2 border-black occupation-done"
            :disabled="!disabledSubmit"
        />
    </div>
</template>

<style scoped>

.occupation-done {
    width: 150px !important;
}

.occupation-footer {
    position: fixed;
    bottom: 0;
    padding: 16px 77px;
    border-top: 1px solid #E3E3E3;
}
</style>
