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
    },
    showButton: {
        type: Boolean,
        default: true
    }
});
</script>

<template>
    <div v-if="showButton" class="hstack gap-2 flex-wrap mb-3">
        <b-button v-b-toggle="`${id}`" :variant="variant">
            <Text :t-key="`button.${tKey}`" />
        </b-button>
    </div>

    <b-collapse :id="id" :visible="visible">
        <slot name="body" />
    </b-collapse>
</template>

<style scoped>

</style>