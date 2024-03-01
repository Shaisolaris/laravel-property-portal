<script setup>
import ShortCard from "$module@general/pages/HandlerSteps/Steps/Tabs/QuizTab/QuizWrapSteps/QuestionTypes/ShortCard.vue";
import SingleCard from "$module@general/pages/HandlerSteps/Steps/Tabs/QuizTab/QuizWrapSteps/QuestionTypes/SingleCard.vue";
import YesOrNoCard from "$module@general/pages/HandlerSteps/Steps/Tabs/QuizTab/QuizWrapSteps/QuestionTypes/YesOrNoCard.vue";
import MultipleCard from "$module@general/pages/HandlerSteps/Steps/Tabs/QuizTab/QuizWrapSteps/QuestionTypes/MultipleCard.vue";


const { form, quizTypes, quizIndex } = defineProps({
    quizTypes: {
        type: Array,
        default: []
    },
    form: Object,
    quizIndex: Number,
});
const letters = computed(() => useStore().getters['general/getLetters']);


const createQuestion = (questionType) => {
    if (form.quizzes[quizIndex].questions.length < 1) {
        form.quizzes[quizIndex].questions = {};
    }

    if (!form.quizzes[quizIndex].questions[questionType] || !form.quizzes[quizIndex].questions[questionType].length) {
        form.quizzes[quizIndex].questions[questionType] = [];
    }

    switch (questionType) {
        case 'single':
        case 'multiple':
            form.quizzes[quizIndex].questions[questionType].push({
                title: null,
                point: null,
                answers: []
            });

            break;
        case 'yes_or_no':
            form.quizzes[quizIndex].questions[questionType].push({
                title: null,
                point: null,
                answers: [
                    {
                        answer: 'Yes',
                        is_correct: true,
                    },
                    {
                        answer: 'No',
                        is_correct: false,
                    }
                ]
            });

            break;
        case 'short':
            form.quizzes[quizIndex].questions[questionType].push({
                title: null,
                point: null
            });

            break;
    }
}

const deleteQuestion = (key, index_) => {
    if (form.quizzes[quizIndex].questions[key] && form.quizzes[quizIndex].questions[key][index_] && form.quizzes[quizIndex].questions[key][index_]?.uuid) {
        router.delete(route('quiz.question.delete', { 'quizQuestion': form.quizzes[quizIndex].questions[key][index_] }));
    }

    form.quizzes[quizIndex].questions[key].splice(index_, 1);
}

const getTypeName = (value) => {
    const find = quizTypes.find(quizType => quizType.value === `${value}`);

    return find?.name;
}
</script>

<template>
    <b-row v-if="form.quizzes && form.quizzes.length" class="g-3">
        <b-col cols="12" xl="4">
            <BCard class="default-bg-card">
                <Text t-key="block-title.add-question" class="fs-18 fw-medium pb-3" />

                <b-row class="g-3">
                    <b-col v-for="quizType in quizTypes" cols="12" md="6">
                        <BCard
                            class="text-center hover-element align-items-center h-100"
                            no-body
                            @click="createQuestion(quizType.value)"
                        >
                            <BCardBody class="p-2">
                                <div class="d-flex w-100 justify-content-center pb-2">
                                    <component v-bind="quizType.html.attributes" :is="quizType.html.tag" />
                                </div>
                                <span class="fs-12">{{ quizType.name }}</span>
                            </BCardBody>
                        </BCard>
                    </b-col>
                    <b-col cols="12">
                        <ErrorMessage :error="form.errors[`quizzes.${quizIndex}.questions`]" />
                    </b-col>
                </b-row>
            </BCard>
        </b-col>
        <b-col cols="12" xl="8">
            <BCard class="default-bg-card">
                <b-row class="g-3">
                    <b-col cols="12">
                        <Text t-key="block-title.basic-details" class="fs-20 fw-medium" />
                    </b-col>
                    <b-col v-for="(formElement, quizSingleIndex) in form.quizzes[quizIndex].questions.single" cols="12">
                        <BCard>
                            <BCardHeader class="border-none p-0 pb-3">
                                <div class="d-flex flex-column hover-element">
                                    <div class="w-100 text-end pb-1">
                                        <i
                                            class="default-text-color ri-delete-bin-line"
                                            @click="deleteQuestion('single', quizSingleIndex)"
                                        />
                                    </div>

                                    <div
                                        v-b-toggle="`collapse-single-${quizSingleIndex}`"
                                        class="d-flex w-100 align-items-center justify-content-between"
                                    >
                                        <div class="d-flex align-items-center">
                                            <i class="las la-grip-lines" />
                                            <Text tag="span" t-key="question" class="fs-14 fw-medium mx-2" />
                                            <span class="fs-14">
                                                {{ quizSingleIndex }} - {{ getTypeName('single') }}
                                            </span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <Text tag="span" t-key="point" class="fs-14 fw-medium me-2" />

                                            <input
                                                v-model="formElement.point"
                                                type="number"
                                                class="default-bg-card border-none rounded-1 wp-50 hp-25 action-all-none text-center"
                                                @click.stop
                                            >
                                        </div>
                                    </div>

                                    <ErrorMessage
                                        :error="form.errors[`quizzes.${quizIndex}.questions.single.${quizSingleIndex}.point`]"
                                        class="text-end"
                                    />
                                </div>
                            </BCardHeader>

                            <BCollapse :id="`collapse-single-${quizSingleIndex}`">
                                <SingleCard
                                    :form-element="formElement"
                                    :letters="letters"
                                    :form-element-index="quizSingleIndex"
                                    :quizIndex="quizIndex"
                                    :form="form"
                                />
                            </BCollapse>
                        </BCard>
                    </b-col>
                    <b-col v-for="(formElement, quizMultipleIndex) in form.quizzes[quizIndex].questions.multiple" cols="12">
                        <BCard>
                            <BCardHeader class="border-none p-0 pb-3">
                                <div class="d-flex flex-column hover-element">
                                    <div class="w-100 text-end pb-1">
                                        <i
                                            class="default-text-color ri-delete-bin-line"
                                            @click="deleteQuestion('multiple', quizMultipleIndex)"
                                        />
                                    </div>

                                    <div
                                        v-b-toggle="`collapse-multiple-${quizMultipleIndex}`"
                                        class="d-flex w-100 align-items-center justify-content-between"
                                    >
                                        <div class="d-flex align-items-center">
                                            <i class="las la-grip-lines"></i>
                                            <Text tag="span" t-key="question" class="fs-14 fw-medium mx-2" />
                                            <span class="fs-14">{{ quizMultipleIndex }} - {{ getTypeName('multiple') }}</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <Text tag="span" t-key="point" class="fs-14 fw-medium me-2" />

                                            <input
                                                v-model="formElement.point"
                                                type="number"
                                                class="form-control border-none rounded-1 wp-50 hp-25 action-all-none text-center"
                                                disabled
                                                @click.stop
                                            >
                                        </div>
                                    </div>

                                    <ErrorMessage
                                        :error="form.errors[`quizzes.${quizIndex}.questions.multiple.${quizMultipleIndex}.point`]"
                                        class="text-end"
                                    />
                                </div>
                            </BCardHeader>

                            <BCollapse :id="`collapse-multiple-${quizMultipleIndex}`">
                                <MultipleCard
                                    :form-element="formElement"
                                    :letters="letters"
                                    :form-element-index="quizMultipleIndex"
                                    :quizIndex="quizIndex"
                                    :form="form"
                                />
                            </BCollapse>
                        </BCard>
                    </b-col>
                    <b-col v-for="(formElement, quizYesOrNoIndex) in form.quizzes[quizIndex].questions.yes_or_no" cols="12">
                        <BCard>
                            <BCardHeader class="border-none p-0 pb-3">
                                <div class="d-flex flex-column hover-element">
                                    <div class="w-100 text-end pb-1">
                                        <i
                                            class="default-text-color ri-delete-bin-line"
                                            @click="deleteQuestion('yes_or_no', quizYesOrNoIndex)"
                                        />
                                    </div>

                                    <div
                                        v-b-toggle="`collapse-yes_or_no-${quizYesOrNoIndex}`"
                                        class="d-flex w-100 align-items-center justify-content-between"
                                    >
                                        <div class="d-flex align-items-center">
                                            <i class="las la-grip-lines"></i>
                                            <Text tag="span" t-key="question" class="fs-14 fw-medium mx-2" />
                                            <span class="fs-14">{{ quizYesOrNoIndex }} - {{ getTypeName('yes_or_no') }}</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <Text tag="span" t-key="point" class="fs-14 fw-medium me-2" />

                                            <input
                                                v-model="formElement.point"
                                                type="number"
                                                class="default-bg-card border-none rounded-1 wp-50 hp-25 action-all-none text-center"
                                                @click.stop
                                            >
                                        </div>
                                    </div>

                                    <ErrorMessage
                                        :error="form.errors[`quizzes.${quizIndex}.questions.yes_or_no.${quizYesOrNoIndex}.point`]"
                                        class="text-end"
                                    />
                                </div>
                            </BCardHeader>

                            <BCollapse :id="`collapse-yes_or_no-${quizYesOrNoIndex}`">
                                <BCardBody>
                                    <YesOrNoCard
                                        :form-element="formElement"
                                        :letters="letters"
                                        :form-element-index="quizYesOrNoIndex"
                                        :quizIndex="quizIndex"
                                        :form="form"
                                    />
                                </BCardBody>
                            </BCollapse>
                        </BCard>
                    </b-col>
                    <b-col v-for="(formElement, quizShortIndex) in form.quizzes[quizIndex].questions.short" cols="12">
                        <BCard>
                            <BCardHeader class="border-none p-0 pb-3">
                                <div class="d-flex flex-column hover-element">
                                    <div class="w-100 text-end pb-1">
                                        <i
                                            class="default-text-color ri-delete-bin-line"
                                            @click="deleteQuestion('short', quizShortIndex)"
                                        />
                                    </div>

                                    <div
                                        v-b-toggle="`collapse-short-${quizShortIndex}`"
                                        class="d-flex w-100 align-items-center justify-content-between"
                                    >
                                        <div class="d-flex align-items-center">
                                            <i class="las la-grip-lines" />
                                            <Text tag="span" t-key="question" class="fs-14 fw-medium mx-2" />
                                            <span class="fs-14">{{ quizShortIndex }} - {{ getTypeName('short') }}</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <Text tag="span" t-key="point" class="fs-14 fw-medium me-2" />

                                            <input
                                                v-model="formElement.point"
                                                type="number"
                                                :class="['default-bg-card border-none rounded-1 wp-50 hp-25 action-all-none text-center', {'is-invalid': form.errors[`questions.short.${index}.point`]?.length}]"
                                                required
                                                @click.stop
                                            >
                                        </div>
                                    </div>
                                    <ErrorMessage
                                        :error="form.errors[`quizzes.${quizIndex}.quizzes.${index}.questions.short.${quizShortIndex}.point`]"
                                        class="text-end"
                                    />
                                </div>
                            </BCardHeader>

                            <BCollapse :id="`collapse-short-${quizShortIndex}`">
                                <BCardBody>
                                    <ShortCard
                                        :form-element="formElement"
                                        :quizIndex="quizIndex"
                                        :form-element-index="quizShortIndex"
                                        :form="form"
                                    />
                                </BCardBody>
                            </BCollapse>
                        </BCard>
                    </b-col>
                </b-row>

                <slot name="button" />
            </BCard>
        </b-col>
    </b-row>
</template>

<style lang="scss" scoped>

</style>