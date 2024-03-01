<script setup>
import AdminLayout from "$module@admin/layouts/AdminLayout.vue";
import UsersIcon from "@zhuowenli/vue-feather-icons/icons/UsersIcon.js";
import StatWidget from "$module@admin/pages/Dashboard/partials/StatWidget.vue";
import DollarSignIcon from "@zhuowenli/vue-feather-icons/icons/DollarSignIcon.js";

const props = defineProps({
    widgets: {
        type: Object
    }
});

</script>

<template>
    <AdminLayout title="dashboard.title" class="admin-page-dashboard">
        <span>Dashboard</span>
    </AdminLayout>
</template>

<style scoped>

</style>
