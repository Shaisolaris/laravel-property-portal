<script setup>
import AppLayout from "~/Layouts/AppLayout.vue";
defineProps({
    program: {
        type: String,
    }
})
</script>

<template>
    <AppLayout :title="'add.' + program ">
            test
    </AppLayout>
</template>

<style scoped>

</style>
