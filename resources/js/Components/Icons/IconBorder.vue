<script setup>
import { reactive } from "vue";

const { size, rounded } = defineProps({
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
    padding: "12px",
    borderRadius: "12px",
});

</script>

<template>
    <div>
        <span class="border border-gainsboro bg-white" :style="stylesBase">
            <template v-if="iconType === 'default'">
                <i :class="[`align-bottom text-dim-gray fs-${size}`, icon, $attrs.class]" />
            </template>
            <template v-else>
                <img :src="icon" alt :height="size" :width="size" :class="$attrs.class">
            </template>
        </span>
    </div>
</template>
