<script setup>
import AdminLayout from "$module@admin/layouts/AdminLayout.vue";
import {useForm} from "@inertiajs/vue3";
import SaveButton from "$module@admin/components/SaveButton.vue";


const {t} = useI18n();

const props = defineProps({
    profile: {
        type:     Object,
        required: false,
    },
    countries:       {
        type:     Array,
        required: true,
    },
});

const avatarImage = computed(() => {
    if (!props.profile.avatar) {
        return null;
    }

    return {
        url:  props.profile.avatar,
        name: t('placeholder.select'),
    }
});

const phoneNumberValidated = ref(false);

const form = useForm({

    first_name: props.profile?.first_name ?? null,
    last_name:  props.profile?.last_name ?? null,
    avatar:     null,
    address:    props.profile?.address ?? null,
    country_id: props.profile?.country_id ?? null,
    state:      props.profile?.state ?? null,
    city:       props.profile?.city ?? null,
    phone:      props.profile?.phone ?? null,
    bio:        props.profile?.bio ?? null,
});


watch(
    () => usePage().props.profile,
    (profile) => {
        form.first_name = profile.first_name ?? null;
        form.last_name = profile.last_name ?? null;
        form.avatar = null;
        form.address = profile.address ?? null;
        form.country_id = profile.country_id ?? null;
        form.state = profile.state ?? null;
        form.city = profile.city ?? null;
        form.phone = profile.phone ?? null;
        form.bio = profile.bio ?? null;
    }
);

function submit() {

    console.log('submit', form.data());

    form.post(route('admin.profile.save'));

}


</script>

<template>
    <AdminLayout :header="$t('admin.page.profile.title')" class="admin-page-profile">

        <div class="card">
            <div class="card-body">
                <form @submit.prevent="submit()">

                    <div class="mb-4">
                        <FileUploads
                            v-model="form.avatar"
                            :simple="false"
                            :file="avatarImage"
                            :required="false"
                            label="profile-photo"
                            view-type="input-avatar"
                        />
                    </div>
                    <b-row class="g-3">
                        <b-col cols="6">
                            <BaseInput
                                v-model="form.first_name"
                                :error="form.errors.first_name"
                                placeholder="enter-first-name"
                                label="first-name"
                            />
                        </b-col>
                        <b-col cols="6">
                            <BaseInput
                                v-model="form.last_name"
                                :error="form.errors.last_name"
                                placeholder="enter-last-name"
                                label="last-name"
                            />
                        </b-col>
                        <b-col cols="6">
                            <BaseInput
                                v-model="profile.email"
                                label="email"
                                readonly
                                disabled
                            />
                        </b-col>
                        <!--                        <b-col cols="6">-->
                        <!--                            <MaskInput-->
                        <!--                                v-model="form.phone"-->
                        <!--                                :error="form.errors.phone"-->
                        <!--                                placeholder="enter-mobile-on"-->
                        <!--                                label="mobile-on"-->
                        <!--                                @validate="(validate) => phoneNumberValidated = validate"-->
                        <!--                            />-->
                        <!--                        </b-col>-->
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
                        <b-col cols="12">

                            <TagLabel label="add-your-bio"/>
                            <Editor v-model="form.bio" title="Add Your Bio"/>
                            <ErrorMessage :error="form.errors.bio" :show-error="true"/>

                        </b-col>

                    </b-row>
                    <div class="mt-4 text-end">
                        <SaveButton :disabled="form.processing"/>
                    </div>

                </form>
            </div>
        </div>


    </AdminLayout>
</template>

<style scoped>

</style>
