<script setup>
defineProps({
    tag: {
        type: String,
        default: 'td'
    },
    icon: {
        type: String,
        default: 'ri-more-2-fill'
    },
    showDropDown: {
        type: Boolean,
        default: true,
    }
})
</script>

<template>
    <component :is="tag">
        <BDropdown
            v-if="showDropDown"
            toggle-class="arrow-none p-0 default-text-color border-none"
            menu-class="table-td-actions-min-height"
            variant=""
            no-caret
            boundary="viewport"
        >
            <template #button-content>
                <i :class="icon" class="border-none" />
            </template>
            <slot name="actions" />
        </BDropdown>
        <i v-else :class="icon" class="border-none default-text-color" />
    </component>
</template>

<style lang="scss" scoped>

</style>
