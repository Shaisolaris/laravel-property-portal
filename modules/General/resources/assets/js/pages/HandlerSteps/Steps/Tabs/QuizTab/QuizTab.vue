<script setup>
import simplebar from "simplebar-vue";
import { useSwal } from "~/scripts/helpers/useSwal.js";


const { form } = defineProps({
    form: Object,
    lectures: Array,
    grades: Array,
    quizTypes: Array,
    languages: Array,
});
const { question } = useSwal();
const editQuizModal = ref(false);
const editQuizIndex = ref(0);
const currentStep = ref(1);
const activeTabArrow = ref(1);
const steps = ref([
    {
        number: 1,
        component: defineAsyncComponent({ loader: () => import('$module@general/pages/HandlerSteps/Steps/Tabs/QuizTab/QuizWrapSteps/BasicStep.vue') })
    },
    {
        number: 2,
        component: defineAsyncComponent({ loader: () => import('$module@general/pages/HandlerSteps/Steps/Tabs/QuizTab/QuizWrapSteps/QuestionStep.vue') })
    },
    {
        number: 3,
        component: defineAsyncComponent({ loader: () => import('$module@general/pages/HandlerSteps/Steps/Tabs/QuizTab/QuizWrapSteps/ScoringStep.vue') })
    },
]);


const preview = () => {
    currentStep.value -= 1;
    activeTabArrow.value = currentStep.value;
}

const next = () => {
    if (currentStep.value >= 3) {
        editQuizModal.value = false;
        return;
    }

    currentStep.value += 1;
    activeTabArrow.value = currentStep.value;
}

const addQuiz = () => {
    form.quizzes.push({
        name: 'Quiz ' + (form.quizzes.length + 1),
        lecture_id: '',
        language: '',
        grade: '',
        total_score: '',
        description: '',
        start_work_datetime: '',
        end_work_datetime: '',
        pass_mark: 0,
        duration_minutes: 0,
        points_no_answer: 0,
        points_wrong_answer: 0,
        attempts: 0,
        questions: {}
    });
}

const checkError = (index) => {
    return JSON.stringify(form.errors).includes(`quizzes.${index}.`);
}

const deleteQuiz = async (quiz, index) => {
    if (form.quizzes.length > 1 && await question('delete-quiz.title')) {
        form.quizzes.splice(index, 1);
    }
}

const editQuiz = (index) => {
    currentStep.value = 1;
    editQuizModal.value = true;
    editQuizIndex.value = index;
}
</script>

<template>
    <div class="pb-3 hover-element text-end" @click="addQuiz">
        <i class="ri-add-circle-line me-2"></i>
        <Text tag="span" t-key="button.add-new-quiz" />
    </div>
    <b-row class="g-3">
        <b-col v-for="(quiz, index) in form.quizzes" cols="12" class="hover-element" @click="editQuiz(index)">
            <BCard :class="['default-bg-card rounded-0', {'is-error-border': checkError(index)}]">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center justify-content-start gap-2">
                        <div class="fs-14 fw-medium">
                            <i class="las la-grip-lines me-2" />
                            <Text tag="span" t-key="title.quizzes" />: {{ parseInt(index + 1) }}
                        </div>
                        <div class="text-dim-gray">{{ quiz.name }}</div>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <i class="ri-edit-box-line hover-element default-text-color fs-18" @click.stop="editQuiz(index)" />
                        <i
                            :class="['ri-delete-bin-line hover-element default-text-color fs-18', {'opacity-25': form.quizzes.length <= 1}]"
                            @click.stop="deleteQuiz(quiz, index)"
                        />
                    </div>
                </div>
            </BCard>
        </b-col>
    </b-row>

    <BOffcanvas
        v-model="editQuizModal"
        :title="$t('modal.edit-quiz')"
        class="bOffCanvasWidth"
        placement="end"
        header-class="border-bottom"
        body-class="overflow-hidden"
        backdrop
    >
        <simplebar data-simplebar>
            <div class="d-flex justify-content-start gap-3 pb-3">
                <BaseButton
                    :disabled="activeTabArrow <= 1"
                    t-key="preview"
                    variant="light-yellow"
                    @click="preview"
                />

                <BaseButton
                    icon-right="ri-arrow-right-line"
                    t-key="continue"
                    @click="next"
                />
            </div>

            <div v-for="step in steps">
                <component
                    v-if="currentStep === step.number"
                    :is="step.component"
                    :form="form"
                    :quiz-index="editQuizIndex"
                    :quiz-types="quizTypes"
                    :lectures="lectures"
                    :languages="languages"
                    :grades="grades"
                />
            </div>
        </simplebar>
    </BOffcanvas>
</template>

<style lang="scss" scoped>

</style>