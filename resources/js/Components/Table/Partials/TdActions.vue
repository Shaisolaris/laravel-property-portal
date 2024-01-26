<script setup>

</script>

<template>
    <td>
        <BDropdown variant toggle-class="arrow-none p-0" no-caret>
            <template #button-content><i class="ri-more-2-fill"></i></template>
            <slot name="actions">
                <BDropdownItem href="#">
                    View
                </BDropdownItem>
                <BDropdownItem href="#">
                    Edit
                </BDropdownItem>
                <BDropdownItem href="#">
                    Delete
                </BDropdownItem>
            </slot>
        </BDropdown>
    </td>
</template>

<style scoped>

</style>