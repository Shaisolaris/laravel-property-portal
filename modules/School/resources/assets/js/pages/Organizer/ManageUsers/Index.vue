<script setup>
import { ACTIVE } from "~/scripts/utils/utils.js";
import AppLayout from "~/Layouts/AppLayout.vue";


const { users, typeUsers } = defineProps({
    users: {
        type: Array,
        required: true
    },
    typeUsers: String
});
const title = ref(typeUsers === 'student' ? 'manage-students' : 'manage-teachers');


const getTKeyDocument = (mediaObj) => {
    switch (true) {
        case mediaObj?.custom_properties.hasOwnProperty("is_registration_scan"):
            return 'registration-scan-document';
        case mediaObj?.custom_properties.hasOwnProperty("is_diploma_certificate"):
            return 'diploma-certificate-document';
        case mediaObj?.custom_properties.hasOwnProperty("is_previous_employment_education"):
            return 'previous-employment-education-document';
        case mediaObj?.custom_properties.hasOwnProperty("is_teaching_experience"):
            return 'teaching-experience-document';
        case mediaObj?.custom_properties.hasOwnProperty("is_transcript"):
            return 'transcript-document';
        case mediaObj?.custom_properties.hasOwnProperty("is_additional_licences_permits"):
            return 'additional-licences-permits';
    }
}

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
    <AppLayout :title="title">
        <BaseTable t-key-header="organizer-users" :meta="users.meta" :text-empty="users.data.length > 0 ? '' : 'users'" :visit-page-function="(page) => getUsers(page)">
            <template #body>
                <tr v-for="user in users.data" :key="user.uuid">
                    <td>{{ user.full_name }}</td>
                    <td>{{ user.email }}</td>
                    <td>{{ user.phone }}</td>
                    <td>
                        <b-row class="gy-2">
                            <b-col v-for="media in user.detail?.media" cols="12" md="6" xl="4">
                                <a :href="media.url" target="_blank">
                                    <i class="ri-file-fill me-1" />
                                    <Text tag="span" :t-key="getTKeyDocument(media)" />
                                </a>
                            </b-col>
                        </b-row>
                    </td>
                    <td>
                        <Status :value="user.status" :key="user.status" />
                    </td>
                    <TdActions v-if="user.status !== ACTIVE">
                        <template #actions>
                            <Link :href="route('school.manage-user.status-change', { 'user': user, 'status': 'active', routePart: typeUsers })" method="post">
                                <BDropdownItem>
                                    <Text tag="span" icon="ri-check-double-fill" icon-class="text-success" t-key="action.approval" />
                                </BDropdownItem>
                            </Link>
                            <Link :href="route('school.manage-user.status-change', { 'user': user, 'status': 'rejected', routePart: typeUsers })" method="post">
                                <BDropdownItem>
                                    <Text tag="span" icon="ri-close-line" icon-class="text-danger" t-key="action.reject" />
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