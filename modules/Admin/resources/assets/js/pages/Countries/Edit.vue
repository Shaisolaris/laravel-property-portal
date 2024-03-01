<script setup>
import AdminLayout from "$module@admin/layouts/AdminLayout.vue";
import { useForm } from "@inertiajs/vue3";
import SaveButton from "$module@admin/components/SaveButton.vue";


const { t } = useI18n();

const props = defineProps({
    country: {
        type: Object,
        required: false,
    },
});

const title = computed(function () {

    if (props.country) {
        return t('admin.page.country.title-edit', { name: props.country.name });
    }

    return t('admin.page.country.title-create');
});


const form = useForm({
    code: props.country?.code ?? null,
    name: props.country?.name ?? null,
    local_name: props.country?.local_name ?? null,
    is_free: props.country?.is_free ?? false,
    is_active: props.country?.is_active ?? false,
});

function submit() {

    if (props.country) {
        form.put(route('admin.country.update', { country: props.country }));
    } else {
        form.post(route('admin.country.store'));
    }

}

</script>

<template>
    <AdminLayout :header="title" class="admin-page-country-edit">

        <div class="card">
            <div class="card-body">
                <form @submit.prevent="submit()">
                    <b-row class="g-3">
                        <b-col cols="4" md="6">
                            <BaseInput
                                v-model="form.code"
                                :error="form.errors.code"
                                placeholder="enter-code"
                                label="code"
                            />
                        </b-col>
                        <b-col cols="12">
                            <BaseInput
                                v-model="form.name"
                                :error="form.errors.name"
                                placeholder="name"
                                label="name"
                            />
                        </b-col>
                        <b-col cols="12">
                            <BaseInput
                                v-model="form.local_name"
                                :error="form.errors.local_name"
                                placeholder="local_name"
                                label="local_name"
                                :required="false"
                            />
                        </b-col>
                        <b-col cols="12">
                            <b-row>
                                <b-col cols="3">
                                    <div class="w-100">
                                        <CheckboxRadio v-model="form.is_free" label="is-free" />
                                    </div>
                                </b-col>
                                <b-col cols="3">
                                    <div class="w-100">
                                        <CheckboxRadio v-model="form.is_active" label="is-active" />
                                    </div>
                                </b-col>
                            </b-row>
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
