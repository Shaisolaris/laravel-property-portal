<script setup>
const { formElement } = defineProps({
    form: Object,
    index: Number,
    formElement: Object,
    letters: Array
});

const addAnswer = () => {
    formElement.answers.push({
        answer: null,
        is_correct: false,
        point: 0
    });
}

const deleteAnswer = (index) => {
    formElement.answers.splice(index, 1);
}

const setCorrectAnswer = (index) => {
    formElement.answers[index].is_correct = !formElement.answers[index].is_correct;

    if (!formElement.answers[index].is_correct) {
        formElement.answers[index].point = 0;
    }
}

watch(
    () => formElement.answers,
    (answers) => {
        let sum = 0;

        for (const answer of answers) {
            if (answer.is_correct && answer.point > 0) {
                sum += answer.point;
            }
        }

        formElement.point = sum;
    },
    {
        deep: true
    }
);
</script>

<template>
    <BaseInput
        v-model="formElement.title"
        :error="form.errors[`questions.multiple.${index}.title`]"
        label="question-title"
        placeholder="question-title"
    />

    <div class="pt-4">
        <b-row class="gy-3">
            <b-col v-for="(answer, answerIndex) in formElement.answers" cols="12">
                <b-row class="g-3">
                    <b-col cols="12" sm="8" md="8" lg="9" xxl="10">
                        <div class="d-flex align-items-center flex-grow-1 gap-3">
                            <div class="flex-shrink-0 fs-16 fw-medium ">{{ letters[answerIndex] }}</div>
                            <input
                                v-model="answer.point"
                                type="number"
                                step="1"
                                min="0"
                                max="100"
                                :disabled="!answer.is_correct"
                                :class="['border-none rounded-1 wp-45 hp-35 action-all-none text-center mx-2', !answer.is_correct ? 'form-control' : 'default-bg-card']"
                            >
                            <div class="flex-grow-1">
                                <BaseInput
                                    v-model="answer.answer"
                                    :error="form.errors[`questions.multiple.${index}.answers.${answerIndex}.answer`]"
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
                                @click="setCorrectAnswer(answerIndex)"
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
            </b-col>
        </b-row>

        <BaseButton
            t-key="add-answer"
            icon="ri-add-circle-line"
            class="default-text-color button-without-all pt-3"
            :disabled="formElement.answers.length === letters.length"
            @click="addAnswer"
        />

        <ErrorMessage :error="form.errors[`questions.multiple.${index}.answers`]" />
    </div>
</template>

<style scoped>

</style>