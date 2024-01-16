<script setup>
defineProps({
    tKey: {
        type: String,
    },
    variant: {
        type: String,
        default: 'royal-blue'
    },
    href: {
        type: String,
        default: 'javascript:void(0);'
    }
});
</script>

<template>
    <BLink :href="href" :class="`link-${variant}`" :data-key="tKey">
        <slot name="text">
            {{ $t(`link.${tKey}`) }}
        </slot>
    </BLink>
</template>

<style scoped>

</style>