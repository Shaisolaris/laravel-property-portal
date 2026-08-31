<script setup>
defineProps({
    tKey: {
        type: String,
        required: true
    }
});
</script>

<template>
    <BAccordion class="accordion-not-border">
        <BAccordionItem
            v-for="(item, index) in $tm(`accordion.${tKey}`)"
            :title="item"
            :key="index"
        >
            <slot :name="`accordion-${item.toLowerCase()}-body`" />
        </BAccordionItem>
    </BAccordion>
</template>

<style scoped>

</style>