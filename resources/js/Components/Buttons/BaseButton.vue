<script setup>
defineProps({
    type: {
        type: String,
        default: 'button'
    },
    tKey: {
        type: String,
    },
    variant: {
        type: String,
        default: 'light-blue'
    }
});
</script>

<template>
    <button :type="type" :class="`btn btn-${variant} w-100 text-black`" :data-key="tKey">
        <slot name="text">
            {{ $t(`button.${tKey}`) }}
        </slot>
    </button>
</template>

<style scoped>

</style>