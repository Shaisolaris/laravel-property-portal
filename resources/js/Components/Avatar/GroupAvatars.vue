<script setup>
defineProps({
    avatars: {
        type: Array,
        required: true,
        default: []
    },
    plusAmount: {
        type: Number,
        default: 0
    },
    limit: {
        type: Number,
        default: 5
    }
});

const count = ref(props.avatars.length);
const plusAmount_ = computed(() => count.value > props.limit ? Number(count.value) - Number(props.limit) : props.plusAmount);
const avatars_ = computed(() => count.value > props.limit ? props.avatars.splice(0, props.limit) : props.avatars);
</script>

<template>
    <div class="avatar-group">
        <span
            v-for="avatar in avatars_"
            class="avatar-group-item"
            data-bs-toggle="tooltip"
            data-bs-trigger="hover"
            data-bs-placement="top"
        >
            <span class="avatar-sm">
                <img :src="avatar" class="rounded-circle img-fluid" alt>
            </span>
        </span>
        <template v-if="count >= limit">
            <a
                href="javascript: void(0);"
                class="avatar-group-item"
                data-bs-toggle="tooltip"
                data-bs-trigger="hover"
                data-bs-placement="top"
            >
                <div class="avatar-sm">
                    <div class="avatar-title fs-16 rounded-circle bg-white text-black shadow-light-black fw-medium">
                        {{ `+${plusAmount_}` }}
                    </div>
                </div>
            </a>
        </template>
    </div>
</template>

<style scoped>

</style>