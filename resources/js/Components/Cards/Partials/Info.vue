<script setup>
defineProps({
    icon: {
        type: Object,
        default: () => "",
    },
    name: {
        type: Object,
        default: () => "",
    }
})
</script>

<template>
    <div class="px-3 py-2 card-beige text-dim-gray rounded-2 d-flex align-items-center gap-1">
        <i :class="[
           'fs-18',icon
        ]"/>
        <span>{{name}}</span>
    </div>
</template>

<style scoped>

</style>
