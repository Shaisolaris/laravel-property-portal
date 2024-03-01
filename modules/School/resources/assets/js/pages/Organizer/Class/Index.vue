<script setup>
import AppLayout from "~/Layouts/AppLayout.vue";
import Swal from "sweetalert2";
import useStructure from "~/scripts/helpers/structure.js";


const { classes } = defineProps({
    classes: { type: Array, default: [] }
});
const { t } = useI18n();
const { getOptionsSwal } = useStructure();


const confirmDeleteClass = (eiClass) => {
    Swal.fire(getOptionsSwal('delete-class')).then((result) => {
        if (result.value) {
            router.delete(route('school.class.delete', { 'eiClass': eiClass }));
        }
    });
}

const getClasses = (page) => {
    router.visit(route('school.class.list', {
        page,
    }), {
        replace: true,
        preserveScroll: true,
        preserveState: true,
    });
};
</script>

<template>
    <AppLayout title="classes">
        <template #breadcrumbs-right>
            <BaseButton :route="route('school.class.create')" t-key="create-class" />
        </template>

        <BaseTable
            t-key-header="classes"
            :meta="classes.meta"
            :visit-page-function="(page) => getClasses(page)"
            :text-empty="classes?.data.length ? '' : 'classes'"
        >
            <template #body>
                <tr v-for="classItem in classes.data">
                    <td>{{ classItem.name }}</td>
                    <td>{{ classItem.show_price }}</td>
                    <td>{{ classItem.capacity }}</td>
                    <td>{{ classItem.students_count }}</td>
                    <td>{{ classItem.instructors_count }}</td>
                    <td>{{ classItem.subjects_count }}</td>
                    <TdActions>
                        <template #actions>
                            <Link :href="route('school.class.edit', {'eiClass': classItem})">
                                <BDropdownItem>
                                    <i class="ri-pencil-fill align-bottom me-2 text-royal-blue" />
                                    <Text tag="span" t-key="action.edit" />
                                </BDropdownItem>
                            </Link>

                            <BDropdownItem href="javascript:void(0)">
                                <div @click="confirmDeleteClass(classItem)">
                                    <i class="ri-delete-bin-line align-bottom me-2 text-danger" />
                                    <Text tag="span" t-key="action.delete" />
                                </div>
                            </BDropdownItem>
                        </template>
                    </TdActions>
                </tr>
            </template>
        </BaseTable>
    </AppLayout>
</template>

<style scoped>

</style>