<script setup>
defineProps({
    tKey: {
        type: String,
        default: ''
    },
    color: {
        type: String,
        default: '#000000'
    },
    width: {
        type: Number,
        default: 263
    },
    height: {
        type: Number,
        default: 14
    },
    strokeWidth: {
        type: Number,
        default: 4
    }
});
</script>

<template>
    <svg
        :width="width"
        :height="height"
        :viewBox="`0 0 ${width} ${height}`"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
    >
        <path
            :stroke="color"
            :stroke-width="strokeWidth"
            d="M2 5.04488C12.9143 11.0508 50.8656 1.7461 115.668 9.13464C198.077 18.5307 236.719 -5.32896 261 5.04488"
            stroke-linecap="round"
        />
    </svg>
</template>

<style scoped>

</style>