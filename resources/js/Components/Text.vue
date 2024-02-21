<script setup>

defineProps({
    tKey: {
        type: String,
        required: false
    },
    tag: {
        type: String,
        default: 'div'
    },
    icon: {
        type: String,
        default: ''
    },
    iconClass: {
        type: String,
        default: ''
    }
});
</script>

<template>
    <i v-if="icon.length" :class="`${icon} align-bottom me-2 ${iconClass}`" />

    <component v-bind="$attrs"  :is="tag" :data-key="`${tKey}`">
        <slot name="text">
            {{ $t(`${tKey}`) }}
        </slot>
    </component>
</template>

<style scoped></style>