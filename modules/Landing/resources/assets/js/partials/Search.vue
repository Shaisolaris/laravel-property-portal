<script setup>
defineProps({
    icon: {
        type: String,
        default: 'ri-search-2-line'
    },
    buttonTKey: {
        type: String,
        default: 'search'
    },
    placeholder: {
        type: String,
        default: 'what-do-you-want'
    }
});
</script>

<template>
    <form class="d-flex align-items-center justify-content-between border bg-white border-2 border-black rounded p-2 w-100">
        <div class="d-flex align-items-center gap-2 ms-3">
            <i :class="`${icon} align-bottom fs-3`" />
            <BaseInput :placeholder="placeholder" class="border-0 ps-0" />
        </div>
        <div class="text-end">
            <BaseButton :t-key="buttonTKey" />
        </div>
    </form>
</template>

<style scoped>

</style>