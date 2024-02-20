<script setup>
defineProps({
    value: {
        type: Number,
        default: () => 0,
    },
    discount: {
        type: Number,
        default: () => null,
    },
    classes: {
        type: String,
        default: () => "",
    },
})

</script>

<template>
    <div :class="['price-format fs-18', classes]">
        <template v-if="value > 0 || discount > 0">
            ${{value}}
            <span v-if="discount" class="text-dim-gray fs-14 text-decoration-line-through">
                ${{discount}}
            </span>
        </template>
        <template v-else>
            Free
        </template>
    </div>
</template>
