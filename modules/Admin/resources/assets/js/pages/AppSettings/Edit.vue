<script setup>
import AdminLayout from "$module@admin/layouts/AdminLayout.vue";
import {useForm} from "@inertiajs/vue3";
import SaveButton from "$module@admin/components/SaveButton.vue";


const {t} = useI18n();

const props = defineProps({
    settings: {
        type:     Object,
        required: true,
    },
});


const form = useForm({
    user_invite_lifetime: props.settings?.user_invite_lifetime ?? null,
    percentage_payment_organization: props.settings?.percentage_payment_organization ?? null,
});


function submit() {

    form.post(route('admin.settings.save'));
}

</script>

<template>
    <AdminLayout :title="$t('admin.page.settings.title')" :header="$t('admin.page.settings.title')" class="admin-page-settings">

        <form @submit.prevent="submit()">
            <b-row class="g-3">

                <b-col cols="6">
                    <BaseInput
                        v-model="form.percentage_payment_organization"
                        :error="form.errors.percentage_payment_organization"
                        placeholder="enter-number-hours"
                        label="admin.percentage_payment_organization"
                    />
                </b-col>
                <b-col cols="6">
                    <BaseInput
                        v-model="form.user_invite_lifetime"
                        :error="form.errors.user_invite_lifetime"
                        placeholder="enter-number-hours"
                        label="admin.user_invite_lifetime"
                    />
                </b-col>

            </b-row>
            <b-row>
                <b-col cols="4" class="mx-auto mt-4">
                    <SaveButton :disabled="form.processing" />
                </b-col>
            </b-row>

        </form>

    </AdminLayout>
</template>

<style scoped>

</style>
