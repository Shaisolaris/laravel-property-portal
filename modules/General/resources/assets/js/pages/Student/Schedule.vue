<script setup>
import AppLayout from "~/Layouts/AppLayout.vue";


const { events } = defineProps({
    events: {
        type: Array,
        required: true
    }
});
</script>

<template>
    <AppLayout title="schedule">
        <BaseSchedule
            :events="events"
            :key="events"
            :enable-move-events="false"
        />
    </AppLayout>
</template>

<style scoped>

</style>