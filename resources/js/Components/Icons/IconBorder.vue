<script setup>
import { reactive } from "vue";

const {size, rounded} = defineProps({
    size: {
        type: String,
        default: () => 12,
    },
    rounded: {
        type: String,
        default: () => 12,
    },
    icon: {
        type: String,
    },
    iconType: {
        type: String,
        default: () => "default",
    },
})

const stylesBase = reactive({
    padding: size + "px",
    borderRadius: rounded + "px",
});

</script>

<template>
<span class="border border-gainsboro bg-white" :style="stylesBase">
    <template v-if="iconType === 'default'">
        <i :class="[
            'align-bottom text-dim-gray fs-16',icon
        ]"/>
    </template>
    <template v-else>
        <img :src="icon" alt :height="size" :width="size">
    </template>
</span>
</template>
