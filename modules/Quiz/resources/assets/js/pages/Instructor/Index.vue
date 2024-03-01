<script setup>
import AppLayout from "~/Layouts/AppLayout.vue";


const { quizzes } = defineProps({
    quizzes: { type: Array, required: true }
});


const getQuizzes = (page) => {
    router.visit(route('quiz.index', {
        page,
    }), {
        replace: true,
        preserveScroll: true,
        preserveState: true,
    });
};
</script>

<template>
    <AppLayout title="quizzes">
        <BaseTable :meta="quizzes.meta" t-key-header="quizzes" :visit-page-function="(page) => getQuizzes(page)">
            <template #body>
                <tr v-for="(quiz, index) in quizzes.data">
                    <td class="text-dim-gray">
                        <div class="fs-16 fw-medium text-black">{{ quiz.name }}</div>
                        <div class="fs-12">{{ quiz.model_name }}</div>
                    </td>
                    <td class="text-dim-gray">
                        {{ quiz.questions_count }}
                    </td>
                    <td class="text-dim-gray">
                        {{ quiz.duration_minutes }}
                    </td>
                    <td class="text-dim-gray">
                        {{ quiz.total_score }}
                    </td>
                    <td class="text-dim-gray">
                        {{ quiz.pass_mark }}
                    </td>
                    <td class="text-dim-gray">
                        {{ quiz.students_count }}
                    </td>
                    <td class="text-dim-gray">
                        {{ quiz.start_work_datetime_format_dmy }}
                    </td>
                    <TdActions>
                        <template #actions>
                            <Link :href="route('quiz.student-homeworks', {'quiz': quiz})">
                                <BDropdownItem>
                                    <i class="ri-eye-fill me-2" />
                                    <Text tag="span" t-key="action.students" />
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