<script setup>
defineOptions({
    inheritAttrs: false,
});


defineProps({
    path: {
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
    }
});
</script>

<template>
    <img :src="path" :class="`avatar-${size} ${ rounded.length > 0 ? `rounded-${rounded}` : 'rounded' }`" alt>
</template>

<style scoped>

</style>