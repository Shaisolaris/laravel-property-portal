<script setup>
import AdminLayout from "$module@admin/layouts/AdminLayout.vue";
import UserDocument from "$module@admin/pages/Users/partials/UserDocument.vue";

const {t} = useI18n();

const props = defineProps({
    user:    {
        type:     Object,
        required: false,
    },
});

</script>

<template>
    <AdminLayout :header="$t('admin.page.user-documents.title')" class="admin-page-user-documents">

        <div class="mb-1">
            <b>{{ $t('admin.page.user-documents.user') }}</b>
            {{ user.full_name }}
        </div>
        <div class="mb-3">
            <b>{{ $t('admin.page.user-documents.role') }}</b>
            {{ user.role.displayName }}
        </div>

        <div class="documents row">
            <div class="col-xl-3 col-lg-4 col-md-6 col-6" v-for="document in user.user_documents">
                <UserDocument :document="document" />
            </div>
        </div>
    </AdminLayout>
</template>

<style>

</style>
