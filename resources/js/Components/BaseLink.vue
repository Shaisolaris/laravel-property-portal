<script setup>

defineOptions({
    inheritAttrs: false,
});

defineProps({
    tKey: {
        type: String,
    },
    variant: {
        type: String,
        default: 'royal-blue'
    },
    href: {
        type: String,
        default: 'javascript:void(0);'
    },
    typeView: {
        type: String,
        default: 'Link'
    },
    icon: {
        type: String,
        default: ''
    }
});
</script>

<template>
    <Link v-if="typeView === 'Link'" v-bind="$attrs" :href="href" :class="`link-${variant}`">
        <slot name="text">
            {{ $t(`link.${tKey}`) }}
        </slot>
        <slot name="icon">
            <i v-if="icon" :class="[icon, 'ms-1 fs-14']"></i>
        </slot>
    </Link>

    <BLink v-else v-bind="$attrs" :href="href" :class="`link-${variant}`" :data-key="tKey">
        <slot name="text">
            {{ $t(`link.${tKey}`) }}
        </slot>
        <slot name="icon">
            <i v-if="icon" :class="[icon, 'ms-1 fs-14']"></i>
        </slot>
    </BLink>
</template>

<style scoped>

</style>