<script setup>
const { form } = defineProps({
    form: Object,
    letters: Array,
    index: Number,
    type: {
        type: String,
        required: true
    }
});
const emit = defineEmits(['markCorrect']);

const checkCorrectAnswer = (answer, checkAnswer) => {
    if (typeof answer === 'object') {
        return answer.includes(checkAnswer);
    } else {
        return answer === checkAnswer;
    }
}

const markCorrect = (variant) => {
    emit('markCorrect', variant);
}
</script>

<template>
    <div
        v-b-toggle="`collapse-${type}-${index}`"
        class="d-flex w-100 align-items-center justify-content-between hover-element"
    >
        <div class="d-flex align-items-center ">
            <i class="las la-grip-lines me-2" />
            {{ form.title }} ?
        </div>
    </div>

    <BCollapse :id="`collapse-${type}-${index}`" visible>
        <b-row class="gy-3 pt-3">
            <b-col v-for="(variant, index) in form.variants_answers" cols="12">
                <b-row class="g-3">
                    <b-col cols="12" sm="8" md="8" lg="11" xxl="11">
                        <div class="d-flex align-items-center flex-grow-1 gap-3">
                            <div class="flex-shrink-0 fs-16 fw-medium me-2">{{ letters[index] }}</div>
                            <div class="flex-grow-1">
                                <BaseInput :model-value="variant" disabled />
                            </div>
                        </div>
                    </b-col>
                    <b-col cols="12" sm="4" md="4" lg="1" xxl="1">
                        <div class="d-flex text-end justify-content-end w-100 wc-md-84 wc-xl-96 gap-2">
                            <BaseButton
                                v-b-tooltip.hover
                                :title="`${$t('mark-correct-answer')}`"
                                :class="{'bg-white border-gainsboro': checkCorrectAnswer(form.answer , variant)}"
                                @click="markCorrect(variant)"
                            >
                                <template #text>
                                    <i :class="['ri-check-line', {'text-royal-blue': checkCorrectAnswer(form.answer , variant)}]" />
                                </template>
                            </BaseButton>
                        </div>
                    </b-col>
                </b-row>
            </b-col>
        </b-row>
    </BCollapse>
</template>

<style scoped>

</style>