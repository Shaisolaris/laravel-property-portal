<script setup>
defineProps({
    type: {
        type: String,
        default: 'button'
    },
    tKey: {
        type: String,
    },
    variant: {
        type: String,
        default: 'light-blue'
    },
    routeName: {
        type: String,
        default: ''
    },
    size: {
        type: String,
        default: ''
    }
});
</script>

<template>
    <Link
        v-if="routeName.length > 0"
        type="button"
        :href="route(routeName)"
        :class="`btn btn-${variant} ${size.length > 0 ? `btn-${size}` : ''} w-100 text-black`"
        :data-key="tKey"
    >
        <slot name="text">
            {{ $t(`button.${tKey}`) }}
        </slot>
    </Link>

    <button v-else :type="type" :class="`btn btn-${variant} ${size.length > 0 ? `btn-${size}` : ''} w-100 text-black`" :data-key="tKey">
        <slot name="text">
            {{ $t(`button.${tKey}`) }}
        </slot>
    </button>
</template>

<style scoped>

</style>