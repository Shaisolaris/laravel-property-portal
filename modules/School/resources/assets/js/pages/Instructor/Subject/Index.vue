<script setup>
import AppLayout from "~/Layouts/AppLayout.vue";


const { eiClass } = defineProps({
    subjects: { type: Array, required: true, default: [] },
    eiClass: { type: Object, required: false }
});


const getSubjects = (page) => {
    router.visit(route('school.my-class.subject.index', {
        'eiClass': eiClass,
        page,
    }), {
        replace: true,
        preserveScroll: true,
        preserveState: true,
    });
}
</script>

<template>
    <AppLayout title="my-subjects">
        <BaseTable :meta="subjects.meta" :text-empty="subjects.data.length ? '' : 'subjects'" :visit-page-function="(page) => getSubjects(page)" t-key-header="instructor-subjects">
            <template #body>
                <tr v-for="subject in subjects.data">
                    <td>{{ subject.name }}</td>
                    <td>{{ subject.sections_count }}</td>
                    <td>{{ subject.section_lectures_count }}</td>
                    <TdActions>
                        <template #actions>
                            <Link :href="route('school.my-class.subject.curriculum', {'subject': subject})">
                                <BDropdownItem>
                                    <i class="ri-pencil-fill align-bottom me-2 text-royal-blue" />
                                    <Text tag="span" t-key="action.curriculum" />
                                </BDropdownItem>
                            </Link>
                        </template>
                    </TdActions>
                </tr>
            </template>
        </BaseTable>
    </AppLayout>
</template>

<style scoped>

</style>
