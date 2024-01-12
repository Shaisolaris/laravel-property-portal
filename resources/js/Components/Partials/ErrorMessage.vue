<script setup>
defineProps({
    error: {
        type: String,
        default: ''
    },
    showError: {
        type: Boolean,
        default: true
    }
});
</script>

<template>
    <span v-if="error && error.length > 0 && showError" class="invalid-feedback">{{ error }}</span>
</template>

<style scoped>

</style>