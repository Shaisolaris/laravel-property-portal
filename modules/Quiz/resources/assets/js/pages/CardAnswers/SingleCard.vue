<script setup>
import Body from "$module@quiz/pages/CardAnswers/Partials/Body.vue";


const { form } = defineProps({
    form: Object,
    letters: Array,
    index: Number
});


const markCorrect = (answer_) => {
    form.answer = form.answer === answer_ ? null : answer_;
}
</script>

<template>
    <Body
        :form="form"
        :letters="letters"
        :index="index"
        type="single"
        @mark-correct="(answer) => markCorrect(answer)"
    />
</template>

<style scoped>

</style>