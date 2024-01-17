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
            :active="index === 0"
            :key="index"
        >
            <template #title>
                <i v-if="item?.icon" :class="`${item.icon} align-bottom me-2`"></i>
                <Text :t-key="item?.name ? item.name : item" tag="span" />
            </template>

            <slot :name="item?.name ? `tab-${item.name.toLowerCase()}-body` : `tab-${item.toLowerCase()}-body`" />
        </BTab>
    </BTabs>
</template>

<style scoped>

</style>