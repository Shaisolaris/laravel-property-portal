<script setup>


defineProps({
    type: {
        type: String,
        default: 'button'
    },
    tKey: {
        type: String,
        default: ''
    },
    icon: {
        type: String,
        default: ''
    },
    iconRight: {
        type: String,
    },
    variant: {
        type: String,
        default: 'light-blue'
    },
    route: {
        type: String,
        default: ''
    },
    size: {
        type: String,
        default: ''
    },
    methods: {
        type: String,
        default: 'GET'
    },
    isTagA: {
        type: Boolean,
        default: false
    }
});
</script>

<template>
    <BLink v-if="isTagA" :href="route" :data-key="tKey" :class="`btn btn-${variant} ${size.length > 0 ? `btn-${size}` : ''} w-100 text-black ${$attrs.class ?? ''}`">
        <slot name="icon">
            <i v-if="icon" :class="[icon, 'me-1 fs-14']"></i>
        </slot>

        <slot name="text">
            <template v-if="tKey">{{ $t(`button.${tKey}`) }}</template>
        </slot>

        <slot name="iconRight">
            <i v-if="iconRight" :class="[iconRight, 'ms-1 fs-14']"></i>
        </slot>
    </BLink>

    <Link
        v-else-if="route && !isTagA"
        :href="route"
        :class="`btn btn-${variant} ${size.length > 0 ? `btn-${size}` : ''} w-100 text-black ${$attrs.class ?? ''}`"
        :data-key="tKey"
        type="button"
        :methods="methods"
    >
        <slot name="icon">
            <i v-if="icon" :class="[icon, 'me-1 fs-14']"></i>
        </slot>

        <slot name="text">
            <template v-if="tKey">{{ $t(`button.${tKey}`) }}</template>
        </slot>

        <slot name="iconRight">
            <i v-if="iconRight" :class="[iconRight, 'ms-1 fs-14']"></i>
        </slot>
    </Link>

    <button
        v-else
        :type="type"
        :class="`btn ${size.length > 0 ? `btn-${size}` : ''} btn-${variant}  text-black ${$attrs.class ?? ''}`"
        :data-key="tKey"
    >
        <slot name="icon">
            <i v-if="icon" :class="[icon, 'me-1 fs-14']"></i>
        </slot>

        <slot name="text">
            <template v-if="tKey">{{ $t(`button.${tKey}`) }}</template>
        </slot>

        <slot name="iconRight">
            <i v-if="iconRight" :class="[iconRight, 'ms-1 fs-14']"></i>
        </slot>
    </button>
</template>

<style scoped>

</style>
