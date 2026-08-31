<script setup>
import ShortCard from "$module@quiz/pages/WrapSteps/QuestionStep/Cards/ShortCard.vue";
import SingleCard from "$module@quiz/pages/WrapSteps/QuestionStep/Cards/SingleCard.vue";
import YesOrNoCard from "$module@quiz/pages/WrapSteps/QuestionStep/Cards/YesOrNoCard.vue";
import MultipleCard from "$module@quiz/pages/WrapSteps/QuestionStep/Cards/MultipleCard.vue";


const { form, quizTypes } = defineProps({
    quizTypes: {
        type: Array,
        default: []
    },
    form: Object
});
const letters = [ 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z' ];


const createSection = (value) => {
    form.questions[value] = [];

    switch (value) {
        case 'single':
        case 'multiple':
            form.questions[value].push({
                title: null,
                point: null,
                answers: []
            });

            break;
        case 'yes_or_no':
            form.questions[value].push({
                title: null,
                point: null,
                answer: {
                    correct_answer: null,
                    incorrect_answer: null,
                }
            });

            break;
        case 'short':
            form.questions[value].push({
                title: null,
                point: null
            });

            break;
    }
}

const deleteQuestion = (key, index) => {
    if (form.questions[key] && form.questions[key][index] && form.questions[key][index]?.uuid) {
        router.delete(route('quiz.question.delete', {'quizQuestion': form.questions[key][index]}));
    }

    form.questions[key].splice(index, 1);
}

const getTypeName = (value) => {
    const find = quizTypes.find(quizType => quizType.value === `${value}`);

    return find?.name;
}
</script>

<template>
    <b-row class="g-3">
        <b-col cols="12" xl="4" xxl="3">
            <BCard class="default-bg-card">
                <Text t-key="block-title.add-question" class="fs-18 fw-medium pb-3" />

                <b-row class="g-3">
                    <b-col v-for="quizType in quizTypes" cols="12" md="6">
                        <BCard
                            class="text-center hover-element align-items-center h-100"
                            no-body
                            @click="createSection(quizType.value)"
                        >
                            <BCardBody class="p-2">
                                <div class="d-flex w-100 justify-content-center pb-2">
                                    <component v-bind="quizType.html.attributes" :is="quizType.html.tag" />
                                </div>
                                <span class="fs-12">{{ quizType.name }}</span>
                            </BCardBody>
                        </BCard>
                    </b-col>
                </b-row>
            </BCard>
        </b-col>
        <b-col cols="12" xl="8" xxl="9">
            <BCard class="default-bg-card">
                <b-row class="g-3">
                    <b-col cols="12">
                        <Text t-key="block-title.basic-details" class="fs-20 fw-medium" />
                    </b-col>
                    <b-col v-for="(formElement, index) in form.questions.single" cols="12">
                        <BCard>
                            <BCardHeader class="border-none p-0 pb-3">
                                <div class="d-flex flex-column hover-element">
                                    <div class="w-100 text-end pb-1">
                                        <i class="default-text-color ri-delete-bin-line" @click="deleteQuestion('single', index)" />
                                    </div>

                                    <div
                                        v-b-toggle="`collapse-single-${index}`"
                                        class="d-flex w-100 align-items-center justify-content-between"
                                    >
                                        <div class="d-flex align-items-center">
                                            <i class="las la-grip-lines"></i>
                                            <Text tag="span" t-key="question" class="fs-14 fw-medium mx-2" />
                                            <span class="fs-14">{{ index }} - {{ getTypeName('single') }}</span>
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

                                    <ErrorMessage :error="form.errors[`questions.single.${index}.point`]" class="text-end" />
                                </div>
                            </BCardHeader>

                            <BCollapse :id="`collapse-single-${index}`">
                                <SingleCard :form-element="formElement" :letters="letters" :index="index" :form="form" />
                            </BCollapse>
                        </BCard>
                    </b-col>
                    <b-col v-for="(formElement, index) in form.questions.multiple" cols="12">
                        <BCard>
                            <BCardHeader class="border-none p-0 pb-3">
                                <div class="d-flex flex-column hover-element">
                                    <div class="w-100 text-end pb-1">
                                        <i class="default-text-color ri-delete-bin-line" @click="deleteQuestion('multiple', index)" />
                                    </div>

                                    <div
                                        v-b-toggle="`collapse-multiple-${index}`"
                                        class="d-flex w-100 align-items-center justify-content-between"
                                    >
                                        <div class="d-flex align-items-center">
                                            <i class="las la-grip-lines"></i>
                                            <Text tag="span" t-key="question" class="fs-14 fw-medium mx-2" />
                                            <span class="fs-14">{{ index }} - {{ getTypeName('multiple') }}</span>
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

                                    <ErrorMessage :error="form.errors[`questions.multiple.${index}.point`]" class="text-end" />
                                </div>
                            </BCardHeader>

                            <BCollapse :id="`collapse-multiple-${index}`">
                                <MultipleCard :form-element="formElement" :letters="letters" :index="index" :form="form" />
                            </BCollapse>
                        </BCard>
                    </b-col>
                    <b-col v-for="(formElement, index) in form.questions.yes_or_no" cols="12">
                        <BCard>
                            <BCardHeader class="border-none p-0 pb-3">
                                <div class="d-flex flex-column hover-element">
                                    <div class="w-100 text-end pb-1">
                                        <i class="default-text-color ri-delete-bin-line" @click="deleteQuestion('yes_or_no', index)" />
                                    </div>

                                    <div
                                        v-b-toggle="`collapse-yes_or_no-${index}`"
                                        class="d-flex w-100 align-items-center justify-content-between"
                                    >
                                        <div class="d-flex align-items-center">
                                            <i class="las la-grip-lines"></i>
                                            <Text tag="span" t-key="question" class="fs-14 fw-medium mx-2" />
                                            <span class="fs-14">{{ index }} - {{ getTypeName('yes_or_no') }}</span>
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

                                    <ErrorMessage :error="form.errors[`questions.yes_or_no.${index}.point`]" class="text-end" />
                                </div>
                            </BCardHeader>

                            <BCollapse :id="`collapse-yes_or_no-${index}`">
                                <BCardBody>
                                    <YesOrNoCard :form-element="formElement" :letters="letters" :index="index" :form="form" />
                                </BCardBody>
                            </BCollapse>
                        </BCard>
                    </b-col>
                    <b-col v-for="(formElement, index) in form.questions.short" cols="12">
                        <BCard>
                            <BCardHeader class="border-none p-0 pb-3">
                                <div class="d-flex flex-column hover-element">
                                    <div class="w-100 text-end pb-1">
                                        <i
                                            class="default-text-color ri-delete-bin-line"
                                            @click="deleteQuestion('short', index)"
                                        />
                                    </div>

                                    <div
                                        v-b-toggle="`collapse-short-${index}`"
                                        class="d-flex w-100 align-items-center justify-content-between"
                                    >
                                        <div class="d-flex align-items-center">
                                            <i class="las la-grip-lines" />
                                            <Text tag="span" t-key="question" class="fs-14 fw-medium mx-2" />
                                            <span class="fs-14">{{ index }} - {{ getTypeName('short') }}</span>
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
                                    <ErrorMessage :error="form.errors[`questions.short.${index}.point`]" class="text-end" />
                                </div>
                            </BCardHeader>

                            <BCollapse :id="`collapse-short-${index}`">
                                <BCardBody>
                                    <ShortCard :form-element="formElement" :index="index" :form="form" />
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