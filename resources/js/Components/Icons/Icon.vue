<template>
    <svg  aria-hidden="true">
        <use
            :href="symbolId"
            :color="color"
        />
    </svg>
</template>

<script setup>
import { defineProps, computed } from 'vue';

const props = defineProps({
    prefix: {
        type: String,
        default: 'icon',
    },
    name: {
        type: String,
        required: true,
    },
    color: {
        type: String,
        default: '#000000',
    },
});

const symbolId = computed(() => `#${props.prefix}-${props.name}`);
</script>
