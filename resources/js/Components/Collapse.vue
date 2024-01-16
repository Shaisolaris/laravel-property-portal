<script setup>
defineProps({
    tKey: {
        type: String,
        required: true
    },
    id: {
        type: String,
        required: true
    },
    visible: {
        type: Boolean,
        default: false
    },
    variant: {
        type: String,
        default: 'light-blue'
    }
});
</script>

<template>
    <div class="hstack gap-2 flex-wrap mb-3">
        <BButton v-b-toggle="`${id}`" :variant="variant">
            <Text :t-key="`button.${tKey}`" />
        </BButton>
    </div>
    <BCollapse :id="id" :visible="visible">
        <slot name="body" />
    </BCollapse>
</template>

<style scoped>

</style>