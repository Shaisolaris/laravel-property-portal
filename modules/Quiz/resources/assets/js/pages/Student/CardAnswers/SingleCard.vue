<script setup>
import Body from "$module@quiz/pages/Student/CardAnswers/Partials/Body.vue";


const { form } = defineProps({
    form: Object,
    letters: Array,
    index: Number,
    showButtons: Boolean
});


const markCorrect = (answer_) => {
    form.answer = form.answer === answer_ ? '' : answer_;
}
</script>

<template>
    <Body
        :form="form"
        :letters="letters"
        :index="index"
        :show-buttons="showButtons"
        type="single"
        @mark-correct="(answer) => markCorrect(answer)"
    />
</template>

<style scoped>

</style>