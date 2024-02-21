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

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <StatWidget title="Users" :value="widgets.users.value" :diff="widgets.users.diff" diff-text="vs. previous month">
                    <template #icon>
                        <UsersIcon class="text-info icon-md" />
                    </template>
                </StatWidget>
            </div>
            <div class="col-lg-4 col-md-6">
                <StatWidget title="Earnings" :value="widgets.earnings.value" :diff="widgets.earnings.diff" diff-text="vs. previous month">
                    <template #icon>
                        <DollarSignIcon class="text-info icon-md" />
                    </template>
                </StatWidget>
            </div>
        </div>
<!--        <pre>{{ JSON.stringify($page.props.auth, null, 4) }}</pre>-->
<!--        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate eaque eligendi esse facilis illum itaque laboriosam magni maxime modi mollitia nam nisi non pariatur, perferendis recusandae. A natus omnis vel?</span>-->
    </AdminLayout>
</template>

<style scoped>

</style>
