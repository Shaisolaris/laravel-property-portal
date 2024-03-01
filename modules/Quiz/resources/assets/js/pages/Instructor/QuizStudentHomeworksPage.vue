<script setup>
import AppLayout from "~/Layouts/AppLayout.vue";


const { homeworks, eiQuiz } = defineProps({
    homeworks: {
        type: Array,
        required: true
    },
    eiQuiz: {
        type: Object,
        required: true
    }
});


const getHomeworks = (page) => {
    router.visit(route('quiz.student-homeworks', {
        quiz: eiQuiz,
        page
    }), {
        replace: true,
        preserveScroll: true,
        preserveState: true,
    });
};
</script>

<template>
    <AppLayout title="quiz-students">
        <BaseTable t-key-header="student-homeworks" :meta="homeworks.meta" :visit-page-function="(page) => getHomeworks(page)">
            <template #body>
                <tr v-for="homework in homeworks.data">
                    <td>
                        <UserAvatarWithName :user="homework.student" />
                    </td>
                    <td>
                        <Status :value="homework.status" use-icon />
                    </td>
                    <TdActions>
                        <template #actions>
                            <Link :href="route('quiz.answers', {'homework': homework})">
                                <BDropdownItem>
                                    <i class="mdi mdi-pencil me-2" />
                                    <Text tag="span" t-key="action.check-answers" />
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