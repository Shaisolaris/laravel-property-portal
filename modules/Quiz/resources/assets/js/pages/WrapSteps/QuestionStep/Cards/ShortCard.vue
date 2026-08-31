<script setup>
defineProps({
    form: Object,
    index: Number,
    formElement: Object
});
</script>

<template>
    <BaseInput
        v-model="formElement.title"
        :error="form.errors[`questions.short.${index}.title`]"
        label="question-title"
        placeholder="question-title"
    />
</template>

<style scoped>

</style>?