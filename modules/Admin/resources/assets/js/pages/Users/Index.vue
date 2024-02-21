<script setup>
import AdminLayout from "$module@admin/layouts/AdminLayout.vue";
import swAlert from "$module@admin/services/swalert.js";
// import Pagination from "$module@admin/components/Pagination.vue";
import {useForm} from "@inertiajs/vue3";

const {t} = useI18n();

const props = defineProps({
    users:   {
        type: Object
    },
    filters: {
        type: Object,
    }
});

async function banUser(user) {

    if (!(await swAlert.question(t('admin.page.user.ban-confirm', {name: user.fullName})))) {
        return;
    }

    router.post(route('admin.user.ban', { user }));
}

async function unbanUser(user) {

    if (!(await swAlert.question(t('admin.page.user.unban-confirm', {name: user.fullName})))) {
        return;
    }

    router.post(route('admin.user.unban', { user }));
}

async function resendSetPasswordLink(user) {

    if (!(await swAlert.question(t('admin.page.user.send-password-link-confirm', {name: user.full_name})))) {
        return;
    }

    router.post(route('admin.user.resend-password-link', { user }));
}

const filtersForm = useForm({
    search: props.filters.search ?? '',
});

function submitFilters(page = null) {
    // console.log('submit filters', filtersForm);
    filtersForm
        .transform((data) => ({
            ...data,
            page,
        }))
        .submit('get', route('admin.user.index'));
}

function getUsers(page) {
    return submitFilters(page);
}
</script>

<template>
    <AdminLayout
        class="admin-page-user-list"
        :title="$t('admin.page.user.title-list')"
        :header="$t('admin.page.user.title-list')"
    >

        <div class="table-filters mb-3">
            <form @submit.prevent="submitFilters()">
                <div class="row">
                    <div class="col-sm-7 col-md-5 col-lg-4 col-xl-3">
                        <BaseInput placeholder="search-user" v-model="filtersForm.search"/>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-icon btn-secondary" type="submit">
                            <span class="mdi mdi-filter-outline"></span>
                        </button>
                    </div>
                    <div class="col-auto ms-auto">
                        <BaseButton :route="route('admin.user.create')" icon="mdi mdi-plus" t-key="create"/>
                    </div>
                </div>
            </form>
        </div>

        <BaseTable t-key-header="admin.user" view-type="table-striped">
            <template #pagination>
                <Pagination
                    :current-page="users.meta.current_page"
                    :per-page="users.meta.per_page"
                    :total-items="users.meta.total"
                    :last-page="users.meta.last_page"
                    @pagination-page-change="(page) => getUsers(page)"
                />
            </template>

            <template #body>
                <tr v-for="user in users.data">
                    <td>{{ user.full_name }}</td>
                    <td>{{ user.email }}</td>
                    <td>{{ user.birth_at }}</td>
                    <td>{{ user.gender_label }}</td>
                    <td>{{ user.role?.displayName }}</td>
                    <td>
                        <Status :value="user.status_label" />
                    </td>
                    <TdActions>
                        <template #actions>
                            <BDropdownItem @click="unbanUser(user)" v-if="user.status === 'ban'">
                                <i class="mdi mdi-restore"/>
                                {{ $t('admin.page.user.unban') }}
                            </BDropdownItem>
                            <BDropdownItem @click="banUser(user)" v-else>
                                <i class="mdi mdi-restore"/>
                                {{ $t('admin.page.user.ban') }}
                            </BDropdownItem>

                            <Link :href="route('admin.user.edit', {user})">
                                <BDropdownItem>
                                    <i class="mdi mdi-pencil"/>
                                    {{ $t('action.edit') }}
                                </BDropdownItem>
                            </Link>

                            <BDropdownItem @click="resendSetPasswordLink(user)" v-if="user.can_resend_password_link">
                                <i class="mdi mdi-email-sync-outline"/>
                                {{ $t('admin.page.user.send-password-link') }}
                            </BDropdownItem>
                        </template>
                    </TdActions>
                </tr>
            </template>

        </BaseTable>
    </AdminLayout>
</template>

<style scoped>

</style>
