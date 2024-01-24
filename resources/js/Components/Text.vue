<script setup>
defineProps({
    tKey: {
        type: String,
        required: false
    },
    tag: {
        type: String,
        default: 'div'
    }
});
</script>

<template>
    <component :is="tag" :data-key="`${tKey}`">
        <slot name="custom-text">
            {{ $t(`${tKey}`) }}
        </slot>
    </component>
</template>

<style scoped></style>