<script setup>
const { formElement } = defineProps({
    form: Object,
    index: Number,
    formElement: Object,
    letters: Array
});
</script>

<template>
    <BaseInput v-model="formElement.title" :error="form.errors[`questions.yes_or_no.${index}.title`]" label="question-title" placeholder="question-title" />

    <div class="pt-4">
        <b-row class="gy-3">
            <b-col cols="12">
                <div class="d-flex align-items-center gap-2 justify-content-between">
                    <div class="d-flex align-items-center flex-grow-1">
                        <div class="flex-shrink-0 fs-16 fw-medium me-2">{{ letters[0] }}</div>
                        <div class="flex-grow-1">
                            <BaseInput v-model="formElement.answer.correct_answer" :error="form.errors[`questions.yes_or_no.${index}.answer.correct_answer`]" placeholder="yes" />
                        </div>
                    </div>
                </div>
            </b-col>
            <b-col cols="12">
                <div class="d-flex align-items-center gap-2 justify-content-between">
                    <div class="d-flex align-items-center flex-grow-1">
                        <div class="flex-shrink-0 fs-16 fw-medium me-2">{{ letters[1] }}</div>
                        <div class="flex-grow-1">
                            <BaseInput v-model="formElement.answer.incorrect_answer" :error="form.errors[`questions.yes_or_no.${index}.answer.incorrect_answer`]" placeholder="no" />
                        </div>
                    </div>
                </div>
            </b-col>
        </b-row>
    </div>
</template>

<style scoped>

</style>