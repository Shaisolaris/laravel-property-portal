<script setup>
defineOptions({
    inheritAttrs: false,
});

// const images = import.meta.glob([ '../../../assets/images/**/*.svg', '../../../assets/images/**/*.png' , '../../../assets/images/**/*.jpg'], { eager: true });

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
    <MediaImage :src="path" :classes="`avatar-${size} ${ rounded.length > 0 ? `rounded-${rounded}` : 'rounded' } ${$attrs.class}`"/>
</template>

<style scoped>

</style>
