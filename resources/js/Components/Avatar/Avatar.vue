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
    },
    name: {
        type: String,
        default: '',
    }
});
</script>

<template>
    <MediaImage
        v-bind="$attrs"
        :src="path"
        :name="name"
        :classes="`avatar-${size} ${ rounded.length > 0 ? `rounded-${rounded}` : 'rounded' } ${$attrs.class}`"
    />
</template>

<style scoped>

</style>
