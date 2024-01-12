<script setup>
defineProps({
    label: {
        type: String,
        default: ''
    },
    required: {
        type: Boolean,
        default: true
    },
    className: {
        type: String,
        default: 'form-label'
    }
});
</script>

<template>
    <label v-if="label.length > 0" :class="className">
        {{ $t(label) }}
        <span v-if="required" class="text-danger">*</span>
    </label>
</template>

<style scoped>

</style>