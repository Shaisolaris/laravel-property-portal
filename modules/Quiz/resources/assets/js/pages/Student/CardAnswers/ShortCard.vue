<script setup>
defineProps({
    form: Object,
    index: Number,
    showButtons: Boolean
});
</script>

<template>
    <div
        v-b-toggle="`collapse-short-${index}`"
        class="d-flex w-100 align-items-center justify-content-between hover-element"
    >
        <div class="d-flex align-items-center">
            <i class="las la-grip-lines me-2" />
            {{ form.title }} ?
        </div>
    </div>

    <BCollapse v-if="showButtons" :id="`collapse-short-${index}`" visible>
        <div class="pt-3">
            <BaseTextarea v-model="form.answer" placeholder="start-writing-something" />
        </div>
    </BCollapse>
</template>

<style scoped>

</style>