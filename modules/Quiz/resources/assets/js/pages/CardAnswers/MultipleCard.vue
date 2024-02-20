<script setup>
import Body from "$module@quiz/pages/CardAnswers/Partials/Body.vue";


const { form } = defineProps({
    form: Object,
    letters: Array,
    index: Number
});


const markCorrect = (answer_) => {
    const index = form.answer.indexOf(answer_);

    if (index !== -1) {
        form.answer.splice(index, 1);
    } else {
        form.answer.push(answer_);
    }
}
</script>
<template>
    <Body
        :form="form"
        :letters="letters"
        :index="index"
        type="multiple"
        @mark-correct="(answer) => markCorrect(answer)"
    />
</template>

<style scoped>

</style>