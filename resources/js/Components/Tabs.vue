<script setup>
defineProps({
    tKey: {
        type: String,
        required: true
    }
});
</script>

<template>
    <BTabs nav-class="nav-primary mb-3 tabs" pills>
        <BTab
            v-for="(item, index) in $tm(`tabs.${tKey}`)"
            :title="item"
            :active="index === 0"
            :key="index"
        >
            <slot :name="`tab-${item.toLowerCase()}-body`" />
        </BTab>
    </BTabs>
</template>

<style scoped>

</style>