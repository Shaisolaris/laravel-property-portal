<script setup>
defineProps({
    user: {
        type: Object,
        required: true
    }
});
</script>

<template>
    <div class="d-flex align-items-center">
        <div class="flex-shrink-0 chat-user-img online align-self-center me-2 ms-0">
            <img
                :src="user.avatar"
                class="avatar-xxs rounded-circle img-fluid userprofile"
                alt
            >
        </div>
        <div class="flex-grow-1 overflow-hidden text-truncate">
            {{ user.full_name }}
        </div>
        <div class="flex-shrink-0"><span class="badge bg-dark-subtle bg-dark-subtle text-body rounded p-1"></span></div>
    </div>
</template>

<style scoped>

</style>