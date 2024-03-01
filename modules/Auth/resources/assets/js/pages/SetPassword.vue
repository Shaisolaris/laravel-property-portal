<script setup>
import PasswordMeter from "vue-simple-password-meter";
import AuthLayout from "$module@auth/layouts/AuthLayout.vue";

const { uuid, token } = defineProps({
    uuid: {
        type: String,
    },
    token: {
        type: String,
    },
});

const form = useForm({
    password: '',
    password_confirmation: '',
});

let scorePassword = ref('');

function submit(){
    // console.log('submeit', form, uuid, token);
    form.post(route('register.set-password.save', {
        uuid,
        token,
        expires: route().params.expires,
        signature: route().params.signature,
    }));
}

const onScore = (payload) => scorePassword.value = payload.strength;

const dropScore = (e) => {
    if (e.target.value.length <= 0) {
        scorePassword.value = '';
    }
}

const disabledSubmit = computed(
    () => !form.password || !form.password_confirmation /*|| form.password_confirmation !== form.password*/
);

</script>

<template>
    <AuthLayout title="set-password" :withoutLEftContent="true">
        <template #right-content>
            <b-row :no-gutters="true" class="justify-content-center">
                <b-col cols="10" lg="8">
                    <div class="mb-5">
                        <h1 class="text-black">
                            <Text t-key="page.set-password.title" tag="span" />
                        </h1>
                        <p class="text-dim-gray fs-14 mt-3">
                            <Text t-key="page.set-password.sub-title" />
                        </p>
                    </div>
                    <form @submit.prevent="submit">
                        <b-row class="g-3">
                            <div class="generator-pass">
                                <b-col cols="12">
                                    <BaseInput
                                        v-model="form.password"
                                        :error="form.errors.password"
                                        placeholder="enter-password"
                                        label="password"
                                        type="password"
                                        @input="dropScore"
                                    />
                                    <div class="d-flex justify-content-between">
                                        <PasswordMeter :password="form.password" @score="onScore" />
                                        <div class="ms-4">{{ scorePassword.toLocaleString().capitalize() }}</div>
                                    </div>
                                </b-col>
                                <b-col cols="12">
                                    <BaseInput
                                        v-model="form.password_confirmation "
                                        :error="form.errors.password_confirmation "
                                        placeholder="confirm-password"
                                        label="confirm-password"
                                        type="password"
                                    />
                                </b-col>
                            </div>

                            <div class="pyc-40">
                                <BaseButton
                                    t-key="save"
                                    type="submit"
                                    class="fs-20 fw-bold shadow-dark-blue border-2 border-black w-100"
                                    :disabled="disabledSubmit || form.processing"
                                />
                            </div>

                        </b-row>
                    </form>
                </b-col>
            </b-row>
        </template>
    </AuthLayout>
</template>

<style>
.form-control {
    border-radius: 10px !important;
}
</style>
