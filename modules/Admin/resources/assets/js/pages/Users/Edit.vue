<script setup>
import AdminLayout from "$module@admin/layouts/AdminLayout.vue";
import { useForm } from "@inertiajs/vue3";
import SaveButton from "$module@admin/components/SaveButton.vue";


const { t } = useI18n();

const props = defineProps({
    user: {
        type: Object,
        required: false,
    },
    genders: {
        type: Object,
        required: true,
    },
    roles: {
        type: Object,
        required: true,
    },
    statuses: {
        type: [ Array, Object ],
        required: true,
    },
    institutions: {
        type: Array,
        required: true,
    },
    countries: {
        type: Array,
        required: true,
    },
});

const title = computed(function () {

    if (props.user) {
        return t('admin.page.user.title-edit', { name: props.user.full_name });
    }

    return t('admin.page.user.title-create');
});


const form = useForm({

    email: props.user?.email ?? null,
    first_name: props.user?.first_name ?? null,
    last_name: props.user?.last_name ?? null,
    gender: props.user?.gender ?? null,
    address: props.user?.address ?? null,
    country_id: props.user?.country_id ?? null,
    state: props.user?.state ?? null,
    city: props.user?.city ?? null,
    status: props.user?.status ?? null,
    phone: props.user?.phone ?? null,
    bio: props.user?.bio ?? null,
    role_name: props.user?.role?.name ?? null,
    institution_uuid: null,
});


const rolesOptions = computed(() =>
    props.roles.map(role => ({
        value: role.name,
        label: role.displayName
    }))
);

const institutionsOptions = computed(() =>
    props.institutions.map(institution => ({
        value: institution.uuid,
        label: institution.institution_type_name + " - " + institution.name
    }))
);

const showInstitution = computed(() => {
    return !props.user && [ 'student', 'instructor', 'organizer' ].includes(form.role_name)
});


const phoneNumberValid = ref(false);
const formSubmitted = ref(false);

const phoneError = computed(() => {

    if(form.errors.phone) {
        return form.errors.phone;
    } else if(!phoneNumberValid.value && formSubmitted.value ) {
        return 'Phone not valid';
    }
});


function submit() {
    formSubmitted.value = true;

    if(!phoneNumberValid.value){
        return;
    }

    if (props.user) {
        form.put(route('admin.user.update', { user: props.user }));
    } else {
        form.post(route('admin.user.store'));
    }

}

</script>

<template>
    <AdminLayout :title="title" :header="title" class="admin-page-user-edit">
        <div class="card">
            <div class="card-body">
                <form @submit.prevent="submit()">
                    <b-row class="g-3">
                        <b-col cols="4">
                            <BaseMultiselect
                                v-model="form.role_name"
                                :error="form.errors.role_name"
                                :searchable="true"
                                :options="rolesOptions"
                                placeholder="role"
                                mode="single"
                                label="role"
                            />
                        </b-col>
                        <b-col cols="4">
                            <BaseInput
                                v-model="form.email"
                                :error="form.errors.email"
                                placeholder="enter-email"
                                label="email"
                            />
                        </b-col>
                        <b-col cols="4">
                            <BaseMultiselect
                                v-model="form.status"
                                :options="statuses"
                                :disabled="!user"
                                placeholder="select"
                                label="status"
                                :required="false"
                            />
                        </b-col>
                        <b-col cols="4">
                            <BaseInput
                                v-model="form.first_name"
                                :error="form.errors.first_name"
                                placeholder="enter-first-name"
                                label="first-name"
                            />
                        </b-col>
                        <b-col cols="4">
                            <BaseInput
                                v-model="form.last_name"
                                :error="form.errors.last_name"
                                placeholder="enter-last-name"
                                label="last-name"
                            />
                        </b-col>
                        <b-col cols="4">
                            <BaseMultiselect
                                v-model="form.gender"
                                :error="form.errors.gender"
                                :options="genders"
                                placeholder="gender"
                                label="gender"
                            />
                        </b-col>
                        <b-col cols="6" v-if="showInstitution">
                            <BaseMultiselect
                                v-model="form.institution_uuid"
                                :error="form.errors.institution_uuid"
                                :searchable="true"
                                :options="institutionsOptions"
                                label="institution"
                            />
                        </b-col>
                        <b-col cols="6">
                            <BasePhoneInput
                                v-model="form.phone"
                                :error="phoneError"
                                placeholder="enter-mobile-on"
                                label="mobile-on"
                                @validate="(validate) => phoneNumberValid = validate"
                            />
                        </b-col>
                        <b-col cols="12">
                            <BaseInput
                                v-model="form.address"
                                :error="form.errors.address"
                                placeholder="enter-address-line"
                                label="address-line"
                            />
                        </b-col>
                        <b-col cols="4">
                            <BaseMultiselect
                                v-model="form.country_id"
                                :error="form.errors.country_id"
                                :options="countries"
                                label="country"
                                placeholder="country"
                            />
                        </b-col>
                        <b-col cols="4">
                            <BaseInput
                                v-model="form.state"
                                :error="form.errors.state"
                                placeholder="enter-state"
                                label="state"
                            />
                        </b-col>
                        <b-col cols="4">
                            <BaseInput
                                v-model="form.city"
                                :error="form.errors.city"
                                placeholder="enter-city"
                                label="city"
                            />
                        </b-col>
                        <b-col cols="12">
                            <BaseTextarea
                                v-model="form.bio"
                                :error="form.errors.bio"
                                placeholder="start-writing-something"
                                label="admin.bio"
                                rows="5"
                                :required="false"
                            />
                        </b-col>
                    </b-row>
                    <div class="mx-auto mt-4 text-center">
                        <SaveButton :disabled="form.processing || (formSubmitted && !phoneNumberValid)" />
                    </div>
                </form>

            </div>
        </div>
    </AdminLayout>
</template>

<style scoped>

</style>
