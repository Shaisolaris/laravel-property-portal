<script setup>
const props = defineProps({
    amount: {
        type: Number,
        required: true
    },
    bgColor: {
        type: String,
        default: 'dim-gray'
    }
});
const range = [...Array(props.amount).keys()];
</script>

<template>
    <div class="d-flex d-inline-block">
        <div v-for="(item, index) in range">
            <div :class="`d-inline-block ${index !== range.length-1 ? 'me-1' : ''}`">
                <div :class="`bg-${bgColor} rounded-pill d-inline-block wp-8 hp-8`"></div>
            </div>
        </div>
    </div>

</template>

<style scoped>

</style>