<script setup>
defineProps({
    tKey: {
        type: String,
        required: true
    }
});


const setSlotName = (baseName) => {
    let words = baseName.split(' ');

    if (words.length === 1) {
        words = words[0].toLowerCase();
    } else {
        words = words.map(word => word.toLowerCase()).join('-');
    }

    return `tab-${words}-body`
}
</script>

<template>
    <BTabs nav-class="mb-3 tabs" class="default-tabs" pills>
        <BTab
            v-for="(item, index) in $tm(`tabs.${tKey}`)"
            :active="index === 0"
            :key="index"
        >
            <template #title>
                <i v-if="item?.icon" :class="`${item.icon} align-middle me-2 fs-18`"></i>
                <Text :t-key="item?.name ? item.name : item" tag="span" />
            </template>

            <slot :name="setSlotName(item?.name ? item.name : item)" />
        </BTab>
    </BTabs>
</template>

<style scoped>

</style>