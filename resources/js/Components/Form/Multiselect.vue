<script setup>
const value = ref(null);
</script>

<template>
    <Multiselect class="form-control" v-model="value" mode="tags" :close-on-select="true" :searchable="true"
                 :create-option="true" :options="[
                  { value: 'UI/UX', label: 'UI/UX' },
                  { value: 'Figma', label: 'Figma' },
                  { value: 'HTML', label: 'HTML' },
                  { value: 'CSS', label: 'CSS' },
                  { value: 'Javascript', label: 'Javascript' },
                  { value: 'C#', label: 'C#' },
                  { value: 'Nodejs', label: 'Nodejs' },
                ]" />
</template>

<style scoped>

</style>