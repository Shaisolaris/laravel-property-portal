<script setup>
const props = defineProps({
    error: {
        type: String,
        default: ''
    },
    showError: {
        type: Boolean,
        default: true
    }
});


const isShow = computed(() => props.error && props.error.length > 0 && props.showError);
</script>

<template>
    <div v-if="isShow" :class="['invalid-feedback', {'d-block': isShow}]">
        {{ error }}
    </div>
</template>

<style scoped>

</style>