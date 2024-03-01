<script setup>
import AdminLayout from "$module@admin/layouts/AdminLayout.vue";
import PasswordMeter from "vue-simple-password-meter";
import {useForm} from "@inertiajs/vue3";
import SaveButton from "$module@admin/components/SaveButton.vue";


const {t} = useI18n();

const props = defineProps({

});

const form = useForm({
    current_password: '',
    new_password: '',
    new_password_confirmation: '',
});

let scorePassword = ref('');

const onScore = (payload) => scorePassword.value = payload.strength;

const dropScore = (e) => {
    if (e.target.value.length <= 0) {
        scorePassword.value = '';
    }
}

function submit() {

    form.post(route('admin.profile.change-password.save'), {
        onSuccess: () => {
            form.reset();
        }
    });

}


</script>

<template>
    <AdminLayout :header="$t('admin.page.change-password.title')" class="admin-page-change-password">

        <div class="card">
            <div class="card-body">
                <form @submit.prevent="submit()">

                    <b-row class="g-3">
                        <b-col cols="8" md="12">


                            <BaseInput
                                v-model="form.current_password"
                                :error="form.errors.current_password"
                                placeholder="current-password"
                                label="current-password"
                                type="password"
                                @input="dropScore"
                            />
                            <div class="d-flex justify-content-between">
                                <PasswordMeter :password="form.password" @score="onScore" />
                                <div class="ms-4">{{ scorePassword.toLocaleString().capitalize() }}</div>
                            </div>
                        </b-col>
                        <b-col cols="8" md="12">
                            <BaseInput
                                v-model="form.new_password"
                                :error="form.errors.new_password"
                                placeholder="new-password"
                                label="new-password"
                                type="password"
                            />
                        </b-col>
                        <b-col cols="8" md="12">
                            <BaseInput
                                v-model="form.new_password_confirmation"
                                :error="form.errors.new_password_confirmation"
                                placeholder="confirm-password"
                                label="new-confirm-password"
                                type="password"
                            />
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
