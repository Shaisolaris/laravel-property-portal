<script setup>
defineProps({
    icon: {
        type: String,
        default: ''
    },
    color: {
        type: String,
        default: 'beige'
    },
    size: {
        type: String,
        default: 'lg'
    }
});
</script>

<template>
    <div :class="`btn-${color} default-bg-card rounded-pill btn btn-icon btn-${size} p-2 me-2 icon-rounded pointer-events-none`">
        <slot name="body">
            <i :class="`${icon} fs-20`"></i>
        </slot>
    </div>
</template>

<style scoped>
</style>