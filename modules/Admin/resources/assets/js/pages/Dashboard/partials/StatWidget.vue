<script setup>
import AdminLayout from "$module@admin/layouts/AdminLayout.vue";
import UsersIcon from "@zhuowenli/vue-feather-icons/icons/UsersIcon.js";

const props = defineProps({
    title: {
        type: String,
        required: true,
    },
    value: {
        type: [Number, String],
        required: true,
    },
    diff: {
        type: Number,
    },
    diffText: {
        type: String,
    },
});

const slots = useSlots();

</script>

<template>
    <BCard no-body class="card-animate">
        <BCardBody>
            <div class="d-flex justify-content-between">
                <div>
                    <p class="fw-medium text-muted mb-0">{{ title }}</p>
                    <h2 class="mt-4 ff-secondary fw-semibold">
                        {{ value }}
                    </h2>
                </div>
                <div v-if="slots.icon">
                    <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-primary-subtle rounded-circle fs-2">
                            <slot name="icon" />
                        </span>
                    </div>
                </div>
            </div>
            <div v-if="diff">
                <p class="mb-0 text-muted">
                    <BBadge class="mb-0" :class="diff >= 0 ? 'bg-light text-success' : 'bg-secondary bg-light text-danger'">
                        <i class=" align-middle" :class="diff >= 0 ? 'ri-arrow-up-line' : 'ri-arrow-down-line'"></i>
                        {{ diff }} %
                    </BBadge>
                    {{ diffText }}
                </p>
            </div>
        </BCardBody>
    </BCard>
</template>

<style scoped>

</style>
