<script setup>
import QuizTab from "$module@general/pages/HandlerSteps/Steps/Tabs/QuizTab/QuizTab.vue";
import AssignmentTab from "$module@general/pages/HandlerSteps/Steps/Tabs/AssignmentTab.vue";

const { form } = defineProps({
    form: Object,
    lectures: Array,
    grades: Array,
    quizTypes: Array,
    languages: Array,
})

const store = useStore();
const languages = computed(() => store.getters['general/getLanguages']);
</script>

<template>
    <Tabs t-key="assignments-quizzes-steps">
        <template #tab-assignments-body>
            <AssignmentTab
                :form="form"
                :lectures="lectures"
                :languages="languages"
            />
        </template>
        <template #tab-quizzes-body>
            <QuizTab
                :form="form"
                :lectures="lectures"
                :languages="languages"
                :grades="grades"
                :quizTypes="quizTypes"
            />
        </template>
    </Tabs>
</template>

<style scoped></style>

