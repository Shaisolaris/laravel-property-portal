<script setup>
defineProps({
    tag: {
        type: String,
        default: 'ul'
    },
    horizontal: {
        type: String,
        default: 'md'
    },
});
</script>

<template>
    <BListGroup :tag="tag" :horizontal="horizontal">
        <slot name="body" />
    </BListGroup>
</template>

<style scoped>

</style>