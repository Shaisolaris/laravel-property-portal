<script setup>
const { formElement } = defineProps({
    form: Object,
    index: Number,
    formElement: Object,
    letters: Array,
});

const addAnswer = () => {
    formElement.answers.push({
        answer: null,
        is_correct: false
    });
}

const deleteAnswer = (index) => {
    formElement.answers.splice(index, 1);
}


const markCorrect = (index) => {
    formElement.answers.forEach((answer, elementIndex) => {
        answer.is_correct = elementIndex === index;
    });
}
</script>

<template>
    <BaseInput
        v-model="formElement.title"
        :error="form.errors[`questions.single.${index}.title`]"
        label="question-title"
        placeholder="question-title"
    />

    <div class="pt-4">
        <b-row class="gy-3">
            <b-col v-for="(answer, answerIndex) in formElement.answers" cols="12">
                <b-row class="g-3">
                    <b-col cols="12" sm="8" md="8" lg="9" xxl="10">
                        <div class="d-flex align-items-center flex-grow-1 gap-3">
                            <div class="flex-shrink-0 fs-16 fw-medium me-2">{{ letters[answerIndex] }}</div>
                            <div class="flex-grow-1">
                                <BaseInput
                                    v-model="answer.answer"
                                    :error="form.errors[`questions.single.${index}.answers.${answerIndex}.answer`]"
                                    placeholder="type-possible-answer"
                                />
                            </div>
                        </div>
                    </b-col>
                    <b-col cols="12" sm="4" md="4" lg="3" xxl="2">
                        <div class="d-flex text-end justify-content-end w-100 wc-md-84 gap-2">
                            <BaseButton
                                v-b-tooltip.hover
                                :title="`${$t('mark-correct-answer')}`"
                                :class="{'bg-white border-gainsboro': answer.is_correct}"
                                @click="markCorrect(answerIndex)"
                            >
                                <template #text>
                                    <i :class="['ri-check-line', {'text-royal-blue': answer.is_correct}]" />
                                </template>
                            </BaseButton>

                            <BaseButton class="bg-white border-gainsboro" @click="deleteAnswer(index)">
                                <template #text>
                                    <i class="ri-close-line" />
                                </template>
                            </BaseButton>
                        </div>
                    </b-col>
                </b-row>
                <div class="text-end">
                    <ErrorMessage :error="form.errors[`questions.single.${index}.answers.${answerIndex}.is_correct`]" />
                </div>
            </b-col>
        </b-row>

        <BaseButton
            t-key="add-answer"
            icon="ri-add-circle-line"
            class="default-text-color button-without-all pt-3"
            :disabled="formElement.answers.length === letters.length"
            @click="addAnswer"
        />

        <ErrorMessage :error="form.errors[`questions.single.${index}.answers`]" />
    </div>
</template>

<style scoped>

</style>