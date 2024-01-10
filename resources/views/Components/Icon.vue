<template>
    <svg :style="[{'margin-top': name.includes('crypto-icons') ? '-2px' : ''}]" aria-hidden="true">
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
        default: '#F9D9B2',
    },
});

const symbolId = computed(() => `#${props.prefix}-${props.name}`);
</script>
