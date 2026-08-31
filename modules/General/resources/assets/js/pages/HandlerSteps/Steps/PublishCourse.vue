<script setup lang="ts">
defineProps({
    form: Object
});
</script>

<template>
    <div>
        <Editor v-model="form.message"
                placeholder="write-message"
                label="message"/>
    </div>
    <div>
        <CheckboxRadio v-model="form.i_agree" label="i-agree"/>
    </div>
</template>

<style scoped>

</style>
