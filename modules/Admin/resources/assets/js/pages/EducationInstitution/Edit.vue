<script setup>
import AdminLayout from "$module@admin/layouts/AdminLayout.vue";
import {useForm} from "@inertiajs/vue3";
import SaveButton from "$module@admin/components/SaveButton.vue";


const {t} = useI18n();

const props = defineProps({
    institution:      {
        type:     Object,
        required: false,
    },
    institutionTypes: {
        type:     Object,
        required: true,
    },
    organizers:       {
        type:     Array,
        required: true,
    },
    statuses:       {
        type:     Array,
        required: true,
    },
});

const title = computed(function () {

    if (props.institution) {
        return t('admin.page.institution.title-edit', {name: props.institution.name});
    }

    return t('admin.page.institution.title-create');
});

const form = useForm({

    name:                          props.institution?.name ?? null,
    description:                   props.institution?.description ?? null,
    slug:                          props.institution?.slug ?? null,
    status:                        props.institution?.status ?? null,
    education_institution_type_id: props.institution?.education_institution_type_id ?? null,
    organizers_uuids:              props.institution?.organizers?.map(o => o.uuid) ?? null,
});


watch(
    () => props.institution,
    (institution) => {
        form.slug = institution.slug;
    }
);

const organizersList = computed(() => props.organizers.map(o => {
    return {
        value: o.uuid,
        label: o.full_name,
    };
}));

function submit() {

    form.post(route('admin.institution.save', {institution: props.institution}));

}

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
                                :required="false"
                                :disabled="!institution"
                            />
                        </b-col>
                        <b-col cols="6">
                            <BaseMultiselect
                                v-model="form.status"
                                :error="form.errors.status"
                                :options="statuses"
                                mode="single"
                                label="status"
                            />
                        </b-col>
                        <b-col cols="6">
                            <BaseMultiselect
                                v-model="form.education_institution_type_id"
                                :error="form.errors.education_institution_type_id"
                                :options="institutionTypes"
                                mode="single"
                                label="type"
                            />
                        </b-col>
                        <b-col cols="12">
                            <BaseMultiselect
                                v-model="form.organizers_uuids"
                                :error="form.errors.organizers_uuids"
                                :options="organizersList"
                                mode="tags"
                                label="organizer"
                            />
                        </b-col>

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
