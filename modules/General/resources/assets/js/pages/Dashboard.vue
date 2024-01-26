<script setup>
import AppLayout from "~/Layouts/AppLayout.vue"
</script>

<template>
    <AppLayout title="dashboard">
        <Link :href="route('general.schedule')">schedule</Link>
    </AppLayout>
</template>

<style scoped>

</style>