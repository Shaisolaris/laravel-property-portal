<script setup lang="ts">
import { Sortable } from "sortablejs-vue3";

defineProps({
    elements: Array
})
</script>

<template>
    <Sortable
        :list="elements"
        item-key="id"
        tag="div"
    >
        <-- The Header and Footer templates below are optional -->
        <template #header>
            <header>
                <h1>SortableJS Vue3 Demo</h1>
            </header>
        </template>
        <template #item="{element, index}">
            <div class="draggable" :key="element.id">
                {{ element.name }}
            </div>
        </template>
        <template #footer>
            <footer class="draggable">A footer</footer>
        </template>
    </Sortable>
</template>

<style scoped>

</style>
