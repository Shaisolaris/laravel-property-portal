<script setup>
import * as StatusConstants from "~/scripts/utils/utils.js";

defineOptions({
    inheritAttrs: false,
});

const props = defineProps({
    value: {
        type: String,
        required: true
    },
    useIcon: {
        type: Boolean,
        default: false
    },
    size: {
        type: String,
        default: ''
    },
    opacity: {
        type: Number,
        default: 100
    }
});

const statusColor = computed(() => {
    switch (props.value) {
        case StatusConstants.PENDING:
        case StatusConstants.IN_PROGRESS:
        case StatusConstants.EXPECTED:
        case StatusConstants.REVIEW:
        case StatusConstants.PROCESSING:
        case StatusConstants.ON_CHECK:
        case StatusConstants.ORGANIZER_REVIEW:
            return `text-copper bg-copper-${props.opacity}`;
        case StatusConstants.REFUND:
            return `text-white bg-emerald-green-${props.opacity}`;
        case StatusConstants.DRAFT:
        case StatusConstants.PRE_ACTIVE:
            return `text-white bg-secondary-${props.opacity}`;
        case StatusConstants.PAID:
        case StatusConstants.ACTIVE:
        case StatusConstants.ACCRUE:
        case StatusConstants.SUCCESS:
        case StatusConstants.ACCEPTED:
            return 'text-royal-blue bg-beige-blue';
        case StatusConstants.PASSED:
            return `text-black bg-light-blue-${props.opacity}`;
        case StatusConstants.BAN:
        case StatusConstants.FAIL:
        case StatusConstants.REJECT:
        case StatusConstants.CANCEL:
        case StatusConstants.DISABLED:
        case StatusConstants.REJECTED:
        case StatusConstants.INACTIVE:
        case StatusConstants.CANCELED:
        case StatusConstants.NOT_ACCEPTED:
            return `text-cherry-red bg-cherry-red-${props.opacity}`;
        default:
            return 'text-white bg-primary';
    }
});

const statusIcon = computed(() => {
    switch (props.value) {
        case StatusConstants.PENDING:
        case StatusConstants.IN_PROGRESS:
        case StatusConstants.EXPECTED:
        case StatusConstants.REVIEW:
        case StatusConstants.PROCESSING:
        case StatusConstants.ON_CHECK:
        case StatusConstants.ORGANIZER_REVIEW:
            return 'mdi mdi-progress-clock';
        case StatusConstants.DRAFT:
            return 'ri-file-copy-2-line';
        case StatusConstants.REFUND:
            return 'ri-refund-2-fill';
        case StatusConstants.ACCEPTED:
            return 'ri-checkbox-circle-line';
        case StatusConstants.BAN:
        case StatusConstants.FAIL:
        case StatusConstants.DISABLED:
        case StatusConstants.REJECTED:
        case StatusConstants.INACTIVE:
        case StatusConstants.CANCELED:
            return 'ri-file-copy-2-line';
        case StatusConstants.NOT_ACCEPTED:
            return 'ri-indeterminate-circle-line';
        default:
            return '';
    }
});
</script>

<template>
    <BBadge v-bind="$attrs" :class="`${size.length ? `badge-${size}` : ''} fs-14 ${statusColor}`">
        <i v-if="useIcon" :class="`${statusIcon} align-bottom fs-14 me-1`" />
        {{ value }}
    </BBadge>
</template>

<style scoped>

</style>
