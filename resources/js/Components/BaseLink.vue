<script setup>
defineProps({
    tKey: {
        type: String,
    },
    variable: {
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
    <BLink :href="href" :class="`link-${variable}`" :data-key="tKey">
        <slot name="text">
            {{ $t(`link.${tKey}`) }}
        </slot>
    </BLink>
</template>

<style scoped>

</style>