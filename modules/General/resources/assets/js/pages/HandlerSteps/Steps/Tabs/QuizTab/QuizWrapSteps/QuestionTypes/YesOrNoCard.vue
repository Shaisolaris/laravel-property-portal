<script setup>
const { formElement } = defineProps({
    form: Object,
    formElementIndex: Number,
    quizIndex: Number,
    formElement: Object,
    letters: Array
});
</script>

<template>
    <BaseInput
        v-model="formElement.title"
        :error="form.errors[`quizzes.${quizIndex}.questions.yes_or_no.${formElementIndex}.title`]"
        label="question-title"
        placeholder="question-title"
    />

    <div class="pt-4">
        <b-row class="gy-3">
            <b-col v-for="(answer, answerIndex) in formElement.answers" cols="12">
                <b-row class="g-3">
                    <b-col cols="12">
                        <div class="d-flex align-items-center flex-grow-1 gap-3">
                            <div class="flex-shrink-0 fs-16 fw-medium me-2">{{ letters[answerIndex] }}</div>
                            <div class="flex-grow-1">
                                <BaseInput
                                    v-model="answer.answer"
                                    :error="form.errors[`questions.yes_or_no.${quizIndex}.answers.${answerIndex}.answer`]"
                                    placeholder="type-possible-answer"
                                    disabled
                                />
                            </div>
                        </div>
                    </b-col>
                </b-row>
                <div class="text-end">
                    <ErrorMessage :error="form.errors[`questions.yes_or_no.${quizIndex}.answers.${answerIndex}.is_correct`]" />
                </div>
            </b-col>
        </b-row>

<!--        <b-row class="gy-3">-->
<!--            <b-col cols="12">-->
<!--                <div class="d-flex align-items-center gap-2 justify-content-between">-->
<!--                    <div class="d-flex align-items-center flex-grow-1">-->
<!--                        <div class="flex-shrink-0 fs-16 fw-medium me-2">{{ letters[0] }}</div>-->
<!--                        <div class="flex-grow-1">-->
<!--                            <BaseInput-->
<!--                                v-model="formElement.answer.correct_answer"-->
<!--                                :error="form.errors[`quizzes.${quizIndex}.questions.yes_or_no.${formElementIndex}.answer.correct_answer`]"-->
<!--                                placeholder="yes"-->
<!--                                disabled-->
<!--                            />-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </b-col>-->
<!--            <b-col cols="12">-->
<!--                <div class="d-flex align-items-center gap-2 justify-content-between">-->
<!--                    <div class="d-flex align-items-center flex-grow-1">-->
<!--                        <div class="flex-shrink-0 fs-16 fw-medium me-2">{{ letters[1] }}</div>-->
<!--                        <div class="flex-grow-1">-->
<!--                            <BaseInput-->
<!--                                v-model="formElement.answer.incorrect_answer"-->
<!--                                :error="form.errors[`quizzes.${quizIndex}.questions.yes_or_no.${formElementIndex}.answer.incorrect_answer`]"-->
<!--                                placeholder="no"-->
<!--                                disabled-->
<!--                            />-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </b-col>-->
<!--        </b-row>-->
    </div>
</template>

<style scoped>

</style>