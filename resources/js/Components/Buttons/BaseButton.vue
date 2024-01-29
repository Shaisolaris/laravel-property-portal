<script setup>
defineProps({
    type: {
        type: String,
        default: 'button'
    },
    tKey: {
        type: String,
    },
    icon:{
        type: String,
    },
    iconRight:{
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
        <i v-if="icon" :class="[icon,'me-2']"></i>
        <slot name="text">
            {{ $t(`button.${tKey}`) }}
        </slot>
        <i v-if="iconRight" :class="[icon,'me-2']"></i>
    </button>
</template>

<style scoped>

</style>
