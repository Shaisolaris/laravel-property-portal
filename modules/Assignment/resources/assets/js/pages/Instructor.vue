<script setup>
import AppLayout from "~/Layouts/AppLayout.vue";
import Assignments from "$module@assignment/pages/partials/InstructorAssignments.vue";

const {assignments} = defineProps({
    assignments: Array
})

const sorted_assignments = computed(() => {
    return {
        active: assignments.filter(assignment => assignment.status === 'expected'),
        reviewed: assignments.filter(assignment => assignment.status === 'accepted' || assignment.status === 'not_accepted'),
        pending: assignments.filter(assignment => assignment.status === 'on_check'),
    }
});

</script>

<template>
    <AppLayout title="assignments">
        <Tabs t-key="assignments-instructor">
            <template v-slot:tab-assignments-body>
                <Assignments :items="sorted_assignments.active"/>
            </template>
            <template v-slot:tab-reviewed-body>
                <Assignments :items="sorted_assignments.reviewed"/>
            </template>
            <template v-slot:tab-pending-review-body>
                <Assignments :items="sorted_assignments.pending"/>
            </template>
        </Tabs>
    </AppLayout>
</template>

<style scoped></style>
