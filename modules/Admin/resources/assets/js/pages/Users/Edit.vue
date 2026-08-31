<script setup>
import AdminLayout from "$module@admin/layouts/AdminLayout.vue";
import {useForm} from "@inertiajs/vue3";
import SaveButton from "$module@admin/components/SaveButton.vue";


const {t} = useI18n();

const props = defineProps({
    user:    {
        type:     Object,
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
        type: [Array, Object],
        required: true,
    },
    institutions:       {
        type:     Array,
        required: true,
    },
});

const title = computed(function () {

    if (props.user) {
        return t('admin.page.user.title-edit', {name: props.user.full_name});
    }

    return t('admin.page.user.title-create');
});


const form = useForm({

    email:          props.user?.email ?? null,
    first_name:     props.user?.first_name ?? null,
    last_name:      props.user?.last_name ?? null,
    // avatar:         props.user?.avatar ?? null,
    gender:         props.user?.gender ?? null,
    address:        props.user?.address ?? null,
    country:        props.user?.country ?? null,
    state:          props.user?.state ?? null,
    city:           props.user?.city ?? null,
    status:         props.user?.status ?? null,
    // timezone:       props.user?.timezone ?? null,
    phone:          props.user?.phone ?? null,
    // teaching_level: props.user?.teaching_level ?? null,
    bio:            props.user?.bio ?? null,
    // birth_at:       props.user?.birth_at ?? null,
    role_name:       props.user?.role?.name ?? null,
    institution_uuid:        null,
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
    return !props.user && ['student', 'instructor'].includes(form.role_name)
});

function submit(){

    if(props.user){
        form.put(route('admin.user.update', {user: props.user}));
    }else{
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
<!--                        <b-col cols="12">-->
<!--                            <b-row class="g-3" :no-gutters="true">-->
<!--                                <b-col>-->
<!--                                    <TagLabel label="role" />-->

<!--                                    <List>-->
<!--                                        <template #body>-->
<!--                                            <BListGroupItem-->
<!--                                                :class="[{'bg-light-blue text-white': form.role === 'student'}, 'hover-element text-dim-gray w-50']"-->
<!--                                                tag="li"-->
<!--                                                @click="form.role = 'student'"-->
<!--                                            >-->
<!--                                                <Text t-key="label.student" />-->
<!--                                            </BListGroupItem>-->
<!--                                            <BListGroupItem-->
<!--                                                :class="[{'bg-light-blue text-white': form.role === 'instructor'}, 'hover-element text-dim-gray w-50']"-->
<!--                                                tag="li"-->
<!--                                                @click="form.role = 'instructor'"-->
<!--                                            >-->
<!--                                                <Text t-key="label.instructor" />-->
<!--                                            </BListGroupItem>-->
<!--                                        </template>-->
<!--                                    </List>-->

<!--                                    <ErrorMessage :error="form.errors.role" />-->
<!--                                </b-col>-->
<!--&lt;!&ndash;                                <b-col>&ndash;&gt;-->
<!--&lt;!&ndash;                                    <BaseMultiselect&ndash;&gt;-->
<!--&lt;!&ndash;                                        v-model="form.institution_id"&ndash;&gt;-->
<!--&lt;!&ndash;                                        :error="form.errors.institution_id"&ndash;&gt;-->
<!--&lt;!&ndash;                                        :searchable="true"&ndash;&gt;-->
<!--&lt;!&ndash;                                        :options="institutions_options"&ndash;&gt;-->
<!--&lt;!&ndash;                                        mode="single"&ndash;&gt;-->
<!--&lt;!&ndash;                                        label="institution"&ndash;&gt;-->
<!--&lt;!&ndash;                                    />&ndash;&gt;-->
<!--&lt;!&ndash;                                    <ErrorMessage :error="form.errors.institution_id" />&ndash;&gt;-->
<!--&lt;!&ndash;                                </b-col>&ndash;&gt;-->
<!--                            </b-row>-->
<!--                        </b-col>-->

                        <b-col cols="4">
                            <BaseMultiselect
                                v-model="form.role_name"
                                :error="form.errors.role_name"
                                :searchable="true"
                                :options="rolesOptions"
                                placeholder="select"
                                mode="single"
                                label="role"
                            />
                            <ErrorMessage :error="form.errors.role_name" />
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
                                placeholder="select"
                                label="status"
                                :disabled="!user"
                            />
                            <ErrorMessage :error="form.errors.status" />
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
                                :options="genders"
                                placeholder="gender"
                                label="gender"
                                :required="false"
                            />
                            <ErrorMessage :error="form.errors.gender" />
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
                            <MaskInput
                                v-model="form.phone"
                                :error="form.errors.phone"
                                placeholder="enter-mobile-on"
                                label="mobile-on"
                                @validate="(validate) => phoneNumberValidated = validate"
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
                            <BaseInput
                                v-model="form.country"
                                :error="form.errors.country"
                                placeholder="select"
                                label="country"
                            />
                        </b-col>
                        <b-col cols="4">
                            <BaseInput
                                v-model="form.state"
                                :error="form.errors.state"
                                placeholder="select"
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
<!--                        <b-col cols="3">-->
<!--                            <BaseInput-->
<!--                                v-model="form.zip_code"-->
<!--                                :error="form.errors.zip_code"-->
<!--                                placeholder="enter-zip-code"-->
<!--                                label="zip-code"-->
<!--                            />-->
<!--                        </b-col>-->
<!--                        <div class="generator-pass">-->
<!--                            <b-col cols="12">-->
<!--                                <BaseInput-->
<!--                                    v-model="form.password"-->
<!--                                    :error="form.errors.password"-->
<!--                                    placeholder="enter-password"-->
<!--                                    label="password"-->
<!--                                    type="password"-->
<!--                                    @input="dropScore"-->
<!--                                />-->
<!--                                <div class="d-flex justify-content-between">-->
<!--                                    <PasswordMeter :password="form.password" @score="onScore" />-->
<!--                                    <div class="ms-4">{{ scorePassword.toLocaleString().capitalize() }}</div>-->
<!--                                </div>-->
<!--                            </b-col>-->
<!--                            <div>-->
<!--                                <ErrorMessage :error="form.errors?.need_verify" />-->
<!--                            </div>-->
<!--                        </div>-->

                        <b-col cols="12">
                            <BaseTextarea
                                v-model="form.bio"
                                :error="form.errors.bio"
                                placeholder="start-writing-something"
                                label="bio"
                                rows="5"
                            />
                        </b-col>

                    </b-row>

                    <div class="mx-auto mt-4 text-center">
                        <SaveButton :disabled="form.processing" />
                    </div>

                </form>
            </div>
        </div>


    </AdminLayout>
</template>

<style scoped>

</style>
