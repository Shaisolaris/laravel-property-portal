<script setup>
import AppLayout from "~/Layouts/AppLayout.vue";


defineProps({
    quizzes: { type: Array, required: true }
});
</script>

<template>
    <AppLayout title="quizzes">
        <div v-for="quiz in quizzes.data">
            <Link :href="route('school.my-class.quiz.edit', {'quiz': quiz})">{{ quiz.name }}</Link>
        </div>
        <!--    <BaseTable>-->
        <!--        -->
        <!--    </BaseTable>-->
    </AppLayout>
</template>

<style scoped>

</style>