<script setup>
defineProps({
    users: {
        type: Array,
        required: true,
    },
});
</script>

<template>
    <div class="avatar-group ps-0">
        <div v-if="users.length == 1" class="d-flex gap-2 align-items-center">
            <Avatar :path="users[0].avatar" :name="users[0].full_name" rounded="circle" size="xs" />
<!--            <b-img :src="users[0].avatar" class="rounded-circle avatar-xs" />-->
            {{ users[0].full_name }}
        </div>
        <div v-else v-for="user in users" class="avatar-group-item">
            <Avatar :path="users.avatar" :name="users.full_name" rounded="circle" size="xs" />
<!--            <b-img-->
<!--                v-b-tooltip.hover-->
<!--                :title="user.full_name"-->
<!--                :src="user.avatar"-->
<!--                class="rounded-circle avatar-xs"-->
<!--            />-->
        </div>
    </div>
</template>

<style scoped>

</style>
