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
    <AppLayout title="dashboard">
        <b-row>
            <b-col cols="8"></b-col>
            <b-col cols="4">
                <MySchedule :events="events" with-class />
            </b-col>
        </b-row>
    </AppLayout>
</template>

<style scoped>

</style>