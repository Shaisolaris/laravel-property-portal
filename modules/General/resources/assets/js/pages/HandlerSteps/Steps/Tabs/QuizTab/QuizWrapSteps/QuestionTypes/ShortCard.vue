<script setup>
defineProps({
    form: Object,
    formElementIndex: Number,
    quizIndex: Number,
    formElement: Object
});
</script>

<template>
    <BaseInput
        v-model="formElement.title"
        :error="form.errors[`quizzes.${quizIndex}.questions.short.${formElementIndex}.title`]"
        label="question-title"
        placeholder="question-title"
    />
</template>

<style scoped>

</style>?