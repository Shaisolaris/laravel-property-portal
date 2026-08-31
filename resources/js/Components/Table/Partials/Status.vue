<script setup>
import * as StatusConstants from "~/scripts/utils/utils.js";


defineOptions({
    inheritAttrs: false,
});


const { value } = defineProps({
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
        default: 'md'
    }
});


const statusColor = computed(() => {
    switch (value) {
        case StatusConstants.REVIEW:
        case StatusConstants.PENDING:
        case StatusConstants.PROCESSING:
        case StatusConstants.ORGANIZER_REVIEW:
            return 'text-black bg-light-yellow';
        case StatusConstants.PAID:
        case StatusConstants.ACTIVE:
        case StatusConstants.ACCRUE:
        case StatusConstants.SUCCESS:
            return 'text-white bg-success';
        case StatusConstants.DRAFT:
        case StatusConstants.PRE_ACTIVE:
            return 'bg-secondary text-white';
        case StatusConstants.REFUND:
            return 'bg-info text-white';
        case StatusConstants.PASSED:
            return 'bg-light-blue text-black';
        case StatusConstants.BAN:
        case StatusConstants.FAIL:
        case StatusConstants.DISABLED:
        case StatusConstants.REJECTED:
        case StatusConstants.REJECT:
        case StatusConstants.INACTIVE:
        case StatusConstants.CANCELED:
        case StatusConstants.CANCEL:
            return 'bg-danger text-white';
        default:
            return 'text-white bg-primary';
    }
});

const statusIcon = computed(() => {
    switch (value) {
        case 'Review':
        case 'Pending':
        case 'Processing':
        case 'Pre Active':
        case 'Organizer Review':
            return 'bx bxs-hourglass-top';
        case 'Draft':
            return 'ri-file-copy-2-line';
        case 'Refund':
            return 'ri-refund-2-fill';
        case 'Ban':
        case 'Fail':
        case 'Disabled':
        case 'Rejected':
        case 'Inactive':
        case 'Canceled':
            return 'ri-file-copy-2-line';
        default:
            return '';
    }
});
</script>

<template>
    <BBadge :class="`badge-${size} fs-15 ${statusColor} ${$attrs?.class}`">
        <i v-if="useIcon" :class="`${statusIcon} align-bottom fs-15`" />
        {{ value }}
    </BBadge>
</template>

<style scoped>

</style>