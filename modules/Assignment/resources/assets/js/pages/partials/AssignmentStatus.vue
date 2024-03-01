<script setup>
defineProps({
    value: String
})

const convert = status => status.split('_').map(word => word.charAt(0).toUpperCase() + word.slice(1)).join(' ');

const statusIcon = (status) => {
    if(status === 'accepted') {
        return 'ri-check-double-line';
    }
    if(status === 'on_check') {
        return 'ri-time-line';
    }
    if(status === 'not_accepted') {
        return 'ri-close-circle-line';
    }
    if(status === 'expected') {
        return 'ri-hourglass-2-fill';
    }

    return '';
}
</script>

<template>
    <div class="d-flex mt-2">
        <div class="d-flex align-items-center gap-2 mark rounded-4" :class="value">
            <i class="fs-18" :class="statusIcon(value)"></i>
            <div class="fw-semibold">{{convert(value)}}</div>
        </div>
    </div>
</template>

<style scoped>
.mark {
    padding: 4px 12px;
    border: 1px solid #23232320;

    &.score {
        padding: 10px 24px;
    }

    &.expected {
        background-color: #D88A150A;
        color: #D88A15;
    }

    &.on_check {
        background-color: #D88A150A;
        color: #D88A15;
    }

    &.accepted {
        background-color: #F3F6FD;
        color: #154BD8;
    }

    &.not_accepted {
        background-color: #D815440A;
        color: #D81544;
    }
}
</style>
