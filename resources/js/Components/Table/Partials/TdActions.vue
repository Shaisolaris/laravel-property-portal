<script setup>
defineProps({
    tag: {
        type: String,
        default: 'td'
    }
})
</script>

<template>
    <component :is="tag">
        <BDropdown variant="" toggle-class="arrow-none p-0 default-text-color border-none" menu-class="table-td-actions-min-height" no-caret>
            <template #button-content>
                <i class="ri-more-2-fill border-none"></i>
            </template>
            <slot name="actions" />
        </BDropdown>
    </component>
</template>

<style lang="scss" scoped>

</style>