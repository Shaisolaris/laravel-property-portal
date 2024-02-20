<script setup>
import AppLayout from "~/Layouts/AppLayout.vue";


defineProps({
    quizzes: { type: Array, required: true }
});
</script>

<template>
    <AppLayout title="quizzes">
        Quizzes -
        Questions -
        Students -

        <BaseTable t-key-header="quizzes" :meta="quizzes.meta">
            <template #body>
                <tr v-for="quiz in quizzes.data">
                    <td>{{ quiz.name }}</td>
                    <td>2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <TdActions></TdActions>
                </tr>
            </template>
        </BaseTable>

<!--        <div v-for="quiz in quizzes.data">-->
<!--            <Link :href="route('school.my-class.quiz.edit', {'quiz': quiz})">{{ quiz.name }}</Link>-->
<!--        </div>-->
    </AppLayout>
</template>

<style scoped>

</style>