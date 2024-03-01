<script setup>

defineOptions({
    inheritAttrs: false,
});

defineProps({
    src: {
        type: String,
        required: true
    },
    size: {
        type: String,
        default: 'sm'
    },
    rounded: {
        type: String,
        default: '',
    },
    name: {
        type: String,
        default: '',
    }
});
</script>

<template>
    <b-img
        v-bind="$attrs"
        :src="src"
        :class="`${ rounded.length > 0 ? `rounded-${rounded}` : 'rounded' } ${$attrs.class}`"
    />
</template>

<style scoped>

</style>
