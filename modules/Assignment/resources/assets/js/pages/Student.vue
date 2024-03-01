<script setup>
import AppLayout from "~/Layouts/AppLayout.vue";
import Assignments from "$module@assignment/pages/partials/StudentAssignments.vue";

const {assignments} = defineProps({
    assignments: Array,
})

const sorted_assignments = computed(() => {
    return {
        active: assignments.filter(assignment => assignment.status === 'expected'),
        completed: assignments.filter(assignment => assignment.status === 'accepted' || assignment.status === 'not_accepted'),
        all: assignments.filter(assignment => assignment.status === 'on_check'),
    }
});
</script>

<template>
    <AppLayout title="assignments">
        <Tabs t-key="assignments-student">
            <template v-slot:tab-all-body>
                <template v-for="assignment in sorted_assignments.all">
                    <Assignments :item="assignment" class="mb-2"/>
                </template>
            </template>
            <template v-slot:tab-active-body>
                <template v-for="assignment in sorted_assignments.active">
                    <Assignments :item="assignment" class="mb-2"/>
                </template>
            </template>
            <template v-slot:tab-completed-body>
                <template v-for="assignment in sorted_assignments.completed">
                    <Assignments :item="assignment" class="mb-2"/>
                </template>
            </template>
        </Tabs>
    </AppLayout>
</template>

<style scoped>

</style>
