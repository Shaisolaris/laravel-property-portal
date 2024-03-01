<script setup lang="ts">
import AssignmentStatus from "$module@assignment/pages/partials/AssignmentStatus.vue";
// import {useForm} from "@inertiajs/vue3";

const props = defineProps({
    items: Array,
})

// const filtersForm = useForm({
//     search: props.filters.search ?? '',
// });

function submitFilters(page = null) {
    // filtersForm
    //     .transform((data) => ({
    //         ...data,
    //         page,
    //     })).submit('get', route('admin.institution.index'));
}

console.log(props.items)
</script>

<template>
    <BaseTable t-key-header="assignments">
<!--        <template #pagination>-->
<!--            <Pagination-->
<!--                :current-page="items.meta.current_page"-->
<!--                :per-page="items.meta.per_page"-->
<!--                :total-items="items.meta.total"-->
<!--                :last-page="items.meta.last_page"-->
<!--                @pagination-page-change="(page) => submitFilters(page)"-->
<!--            />-->
<!--        </template>-->
        <template #body>
            <tr v-for="assignment in items" :key="assignment.id">
                <td class="d-flex align-items-center gap-2">
                    <Avatar :path="assignment.student.avatar" :name="assignment.student.full_name" rounded="circle"/>
                    <div class="d-flex flex-column">
                        <div class="fs-16 fw-semibold">{{assignment.student.full_name}}</div>
                        <div class="fs-14">{{assignment.subject.name}}</div>
                    </div>
                </td>
                <td class="fw-semibold">{{assignment.end_work_datetime}}</td>
                <td>
                    <span class="fw-semibold fs-16">
                        {{assignment.status == 'accepted' || assignment.status == 'not_accepted' ? assignment.actual_score : '-'}}/{{assignment.total_score}}
                    </span>
                </td>
                <td><AssignmentStatus :value="assignment.status"/></td>
                <td class="d-flex gap-2 cursor-pointer">
                    <TdActions :showDropDown="false" tag="a" :href="route('institution.assignment.show',{assignment:assignment.uuid})" icon="ri-eye-line"/>
                </td>
            </tr>
        </template>
    </BaseTable>
</template>

<style scoped>

</style>
