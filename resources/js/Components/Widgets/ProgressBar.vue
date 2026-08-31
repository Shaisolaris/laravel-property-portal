<script setup>
defineOptions({
    inheritAttrs: false,
});

const props = defineProps({
    percentage: {
        type: Number,
        default: 0
    },
    variant: {
        type: String,
        default: 'primary'
    },
});
</script>

<template>
    <BProgress v-bind="$attrs" :value="percentage" :variant="variant" striped />
</template>

<style scoped>

</style>