<script setup>
import { isEmpty } from "lodash";
import { useToast } from "~/scripts/helpers/useToast.js";
import AppLayout from "~/Layouts/AppLayout.vue";

const { lectures, grades, quizTypes, quiz } = defineProps({
    lectures: { type: Array, required: true },
    grades: { type: Array, required: true },
    quizTypes: { type: Array, required: true },
    quiz: { type: Object, default: {} }
});
const { errorMessage } = useToast();
const store = useStore();
const currentStep = ref(1);
const activeTabArrow = ref(1);
const steps = ref([
    {
        number: 1,
        component: defineAsyncComponent({ loader: () => import('$module@quiz/pages/WrapSteps/BasicStep.vue') })
    },
    {
        number: 2,
        component: defineAsyncComponent({ loader: () => import('$module@quiz/pages/WrapSteps/QuestionStep/Index.vue') })
    },
    {
        number: 3,
        component: defineAsyncComponent({ loader: () => import('$module@quiz/pages/WrapSteps/ScoringStep.vue') })
    },
]);
const form = useForm({
    title: quiz?.name ?? '',
    lecture_id: quiz?.lecture_id ?? '',
    language: quiz?.language ?? '',
    grade: quiz?.grade ?? '',
    grade_passing_score: quiz?.grade_passing_score ?? '',
    description: quiz?.description ?? '',
    start_work_datetime: quiz?.start_work_datetime ?? '',
    end_work_datetime: quiz?.end_work_datetime ?? '',
    pass_mark: quiz?.pass_mark ?? 0,
    time: quiz?.duration_minutes ?? 0,
    points_no_answer: quiz?.points_no_answer ?? 0,
    points_wrong_answer: quiz?.points_wrong_answer ?? 0,
    number_attempts: quiz?.number_attempts ?? 0,

    questions: !isEmpty(quiz?.questions) ? quiz.questions : {},
});

const isEmptyForm = computed(() => {
    let obj = {};

    switch (currentStep.value) {
        case 1:
        case 3:
            obj = form;
            break;
        case 2:
            obj = form.questions;
            break;
    }

    if (Object.keys(obj).length < 1) {
        return true;
    }

    if (currentStep.value === 2 && (
        (obj.hasOwnProperty('single') ? Object.keys(obj['single']).length < 1 : true)
        && (obj.hasOwnProperty('multiple') ? Object.keys(obj['multiple']).length < 1 : true)
        && (obj.hasOwnProperty('yes_or_no') ? Object.keys(obj['yes_or_no']).length < 1 : true)
        && (obj.hasOwnProperty('short') ? Object.keys(obj['short']).length < 1 : true)
    )) {
        return true;
    }

    if (currentStep.value === 0) {
        for (const [ key, value ] of Object.entries(obj)) {
            if (value === null || value.length < 1) {
                return true;
            }
        }
    }

    return false;
});


const preview = () => {
    currentStep.value -= 1;
    activeTabArrow.value = currentStep.value;
}

const next = () => {
    currentStep.value += 1;
    activeTabArrow.value = currentStep.value;
}

const checkStepErrors = (errors) => {
    for (const key in errors) {
        if ([ 'title', 'section', 'language', 'grade', 'grade_passing_score', 'description' ].includes(key)) {
            errorMessage('frontend', 'quiz-step-1');
            break;
        }
    }

    for (const key in errors) {
        if (key.includes('questions') || key.includes('single.') || key.includes('multiple.') || key.includes('yes_or_no.') || key.includes('short.')) {
            errorMessage('frontend', 'quiz-step-2');
            break;
        }
    }

    for (const key in errors) {
        if ([ 'pass_mark', 'time', 'number_attempts', 'expiry_date', 'points_no_answer', 'points_wrong_answer' ].includes(key)) {
            errorMessage('frontend', 'quiz-step-3');
            break;
        }
    }
}

const submit = () => {
    if (!isEmpty(quiz))
        form.put(route('quiz.update', { 'quiz': quiz }), {
            onError: errors => checkStepErrors(errors)
        });
    else
        form.post(route('quiz.create'), {
            onError: errors => checkStepErrors(errors)
        });
}
</script>

<template>
    <AppLayout :title="!isEmpty(quiz) ? 'quiz-edit' : 'quiz-create'">
        <form @submit.prevent="submit">
            <div class="d-flex align-items-center justify-content-between gap-3 mt-4">
                <div class="position-relative">
                    <BaseButton
                        variant="light"
                        icon="ri-arrow-left-line"
                        t-key="back"
                        size="sm"
                        class="rounded-pill btn-outline-gainsboro"
                    />
                </div>

                <div class="d-flex gap-3 pb-3">
                    <BaseButton
                        t-key="preview"
                        :disabled="activeTabArrow  <= 1"
                        variant="light-yellow"
                        @click="preview"
                    />
                    <BaseButton
                        t-key="save"
                        :disabled="form.processing"
                        @click="submit"
                    />
                </div>
            </div>

            <div v-for="step in steps">
                <component
                    v-if="currentStep === step.number"
                    :form="form"
                    :is="step.component"
                    :quiz-types="quizTypes"
                    :lectures="lectures"
                    :grades="grades"
                >
                    <template #button>
                        <div class="d-flex justify-content-end pt-3">
                            <BaseButton
                                :disabled="form.processing || activeTabArrow >= steps.length || isEmptyForm"
                                icon-right="ri-arrow-right-line"
                                t-key="continue"
                                @click="next"
                            />
                        </div>
                    </template>
                </component>
            </div>
        </form>
    </AppLayout>
</template>

<style scoped>

</style>