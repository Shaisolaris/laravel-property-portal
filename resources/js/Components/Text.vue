<script setup>
defineProps({
    tKey: {
        type: String,
        required: true
    },
    tag: {
        type: String,
        default: 'div'
    }
});
</script>

<template>
    <component :is="tag" :data-key="`${tKey}`">
        {{ $t(`${tKey}`) }}
    </component>
</template>

<style scoped></style>