<script setup>
import AppLayout from "~/Layouts/AppLayout.vue";
import { ACTIVE } from "~/scripts/utils/utils.js";


const { users } = defineProps({
    users: {
        type: Array,
        required: true
    }
});


const getUsers = (page) => {
    router.visit(route('school.manage-user.index', {
        page,
    }), {
        replace: true,
        preserveScroll: true,
        preserveState: true,
    });
};
</script>

<template>
    <AppLayout title="manage-users">
        <BaseTable t-key-header="organizer-users" :meta="users.meta" :visit-page-function="getUsers">
            <template #body>
                <tr v-for="user in users.data" :key="user.uuid">
                    <td>{{ user.full_name }}</td>
                    <td>{{ user.email }}</td>
                    <td>{{ user.phone }}</td>
                    <td>
                        <b-row class="gy-2">
                            <b-col v-for="media in user.detail?.media" cols="12">
                                <a :href="media.url" target="_blank">
                                    <i class="ri-file-fill me-1" />
                                    <Text tag="span" :t-key="`${media.custom_properties.is_registration_scan ? 'registration-scan' : 'business-documents'}`" />
                                </a>
                            </b-col>
                        </b-row>
                    </td>
                    <td>
                        <Link v-if="user?.class" :href="route('school.class.edit', {'eiClass': user?.class})">
                            {{ user?.class?.name }}
                        </Link>
                    </td>
                    <td>
                        {{ user?.role_name.capitalize() }}
                    </td>
                    <td>
                        <Status :value="user.status" :key="user.status" />
                    </td>
                    <TdActions v-if="user.status !== ACTIVE">
                        <template #actions>
                            <Link :href="route('school.manage-user.status-change', { 'user': user, 'status': 'active' })" method="post">
                                <BDropdownItem>
                                    <Text tag="span" icon="ri-check-double-fill" icon-class="text-success" t-key="action.approval" />
                                </BDropdownItem>
                            </Link>
                            <Link :href="route('school.manage-user.status-change', { 'user': user, 'status': 'rejected' })" method="post">
                                <BDropdownItem>
                                    <Text tag="span" icon="ri-close-line" icon-class="text-danger" t-key="action.reject" />
                                </BDropdownItem>
                            </Link>
                        </template>
                    </TdActions>
                    <TdActions v-else>
                        <template #actions>
                            <Link :href="route('school.manage-user.status-change', { 'user': user, 'status': 'exclude' })" method="post">
                                <BDropdownItem>
                                    <Text tag="span" icon=" ri-indeterminate-circle-fill" icon-class="text-danger" t-key="action.exclude" />
                                </BDropdownItem>
                            </Link>
                        </template>
                    </TdActions>
                </tr>
            </template>
        </BaseTable>
    </AppLayout>
</template>

<style scoped>

</style>