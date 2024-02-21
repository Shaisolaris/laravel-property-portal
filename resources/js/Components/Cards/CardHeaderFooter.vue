<script setup>

defineProps({
    classMapHeader: {
        type: String,
        default: ''
    },
    classMapBody: {
        type: String,
        default: ''
    },
    classMapFooter: {
        type: String,
        default: ''
    },
});

const slots = useSlots();

const showHeader = computed(() => {
    return !!slots['header']
});

const showBody = computed(() => {
    return !!slots['body']
});

const showFooter = computed(() => {
    return !!slots['footer']
});
</script>

<template>
    <BCard no-body class="h-100">
        <BCardHeader v-if="showHeader" :class="classMapHeader">
            <slot name="header" />
        </BCardHeader>
        <BCardBody v-if="showBody" :class="classMapBody">
            <slot name="body" />
        </BCardBody>
        <BCardFooter v-if="showFooter" :class="classMapFooter">
            <slot name="footer" />
        </BCardFooter>
    </BCard>
</template>

<style scoped>

</style>