<script setup>
import AppLayout from "~/Layouts/AppLayout.vue";


const { events, classes } = defineProps({
    events: {
        type: Array,
        required: true
    },
    classes: {
        type: Array,
        required: true
    }
});

const selectClass = ref(Object.keys(events)[0] ?? null);
</script>

<template>
    <AppLayout title="schedule">
        <b-row class="justify-content-start pb-3">
            <b-col cols="2">
                <BaseMultiselect v-model="selectClass" :options="classes" label="select-class" />
            </b-col>
        </b-row>

        <BaseSchedule
            :events="events[selectClass]"
            :key="events[selectClass]"
            :enable-move-events="false"
        />
    </AppLayout>
</template>

<style scoped>

</style>