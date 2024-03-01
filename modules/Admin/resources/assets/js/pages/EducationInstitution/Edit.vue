<script setup>
import AdminLayout from "$module@admin/layouts/AdminLayout.vue";
import SaveButton from "$module@admin/components/SaveButton.vue";


const { t } = useI18n();

const props = defineProps({
    institution: {
        type: Object,
        required: false,
    },
    institutionTypes: {
        type: Object,
        required: true,
    },
    organizers: {
        type: Array,
        required: true,
    },
    statuses: {
        type: Array,
        required: true,
    },
});
const title = computed(function () {
    if (props.institution) {
        return t('admin.page.institution.title-edit', { name: props.institution.name });
    }

    return t('admin.page.institution.title-create');
});

const organizersList = computed(() => props.organizers.map(o => {
    return {
        value: o.uuid,
        label: o.full_name,
    };
}));
const image = computed(() => {
    if (!props.institution?.image_url) {
        return null;
    }

    return {
        url: props.institution?.image_url,
        name: t('placeholder.select'),
    }
});
const form = useForm({
    image: props.institution?.image ?? null,
    name: props.institution?.name ?? null,
    description: props.institution?.description ?? null,
    slug: props.institution?.slug ?? null,
    status: props.institution?.status ?? null,
    education_institution_type_id: props.institution?.education_institution_type_id ?? null,
    // organizers_uuids: props.institution?.organizers?.map(o => o.uuid) ?? null,
    // organizer_uuid: props.institution?.organizer?.uuid ?? null,
});

function submit() {
    form.post(route('admin.institution.save', { institution: props.institution }), {
        onError: errors => console.log(errors)
    });
}

watch(
    () => props.institution,
    (institution) => {
        form.slug = institution.slug;
        form.image = institution.image;
    }
);
</script>

<template>
    <AdminLayout :title="title" :header="title" class="admin-page-institution-edit">
        <div class="card">
            <div class="card-body">
                <form @submit.prevent="submit()">
                    <b-row class="g-3">
                        <b-col cols="6">
                            <BaseInput
                                v-model="form.name"
                                :error="form.errors.name"
                                placeholder="enter-name"
                                label="name"
                            />
                        </b-col>
                        <b-col cols="6">
                            <BaseInput
                                v-model="form.slug"
                                :error="form.errors.slug"
                                label="slug"
                                :required="institution"
                                :disabled="!institution"
                                v-if="institution"
                            />

                        </b-col>
                        <b-col cols="12">
                            <div class="mb-4">
                                <FileUploads
                                    v-model="form.image"
                                    :error="form.errors.image"
                                    :simple="false"
                                    :image="image"
                                    :required="false"
                                    label="image"
                                    view-type="input-avatar"
                                />
                            </div>
                        </b-col>
                        <b-col cols="6">
                            <BaseMultiselect
                                v-model="form.status"
                                :error="form.errors.status"
                                :options="statuses"
                                mode="single"
                                label="status"
                                placeholder="status"
                            />
                        </b-col>
                        <b-col cols="6">
                            <BaseMultiselect
                                v-model="form.education_institution_type_id"
                                :error="form.errors.education_institution_type_id"
                                :options="institutionTypes"
                                mode="single"
                                label="type"
                                placeholder="type"
                            />
                        </b-col>
<!--                        <b-col cols="6">-->
<!--                            <BaseMultiselect-->
<!--                                v-model="form.organizer_uuid"-->
<!--                                :error="form.errors.organizer_uuid"-->
<!--                                :options="organizersList"-->
<!--                                mode="single"-->
<!--                                label="organizer"-->
<!--                            />-->
<!--                        </b-col>-->
                        <b-col cols="12">
                            <BaseTextarea
                                v-model="form.description"
                                :error="form.errors.description"
                                placeholder="start-writing-something"
                                label="description"
                                rows="5"
                            />
                        </b-col>
                    </b-row>
                    <div class="mt-4 text-end">
                        <SaveButton :disabled="form.processing" />
                    </div>
                </form>
            </div>
        </div>
    </AdminLayout>
</template>

<style scoped>

</style>
