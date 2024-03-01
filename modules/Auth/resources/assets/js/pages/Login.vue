<script setup>
import AuthLayout from "../layouts/AuthLayout.vue";

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form
        .transform((data) => ({
            ...data,
            remember: data.remember ? 'on' : '',
        }))
        .post(route('login'), {
            onFinish: () => form.reset('password'),
        });
};
</script>

<template>
    <AuthLayout title="login">
        <template #right-content>
            <b-row class="justify-content-center" :no-gutters="true">
                <b-col cols="10" lg="8">
                    <div class="text-center">
                        <img src="@/images/logo/logo.svg" width="102" height="40" alt>

                        <div class="pbc-48 ptc-32">
                            <Text t-key="sign-in" class="fw-bold fs-2 pb-2" />
                            <Text t-key="page.login.text-2" class="text-dim-gray" />
                        </div>
                    </div>
                    <form @submit.prevent="submit" class="row gy-3">
                        <BaseInput
                            v-model="form.email"
                            :error="form.errors.email"
                            placeholder="enter-email"
                            label="email"
                        />

                        <BaseInput
                            v-model="form.password"
                            :error="form.errors.password"
                            type="password"
                            placeholder="enter-password"
                            label="password"
                        />

                        <div>
                            <CheckboxRadio v-model="form.remember" label="remember-me" />

                            <div class="float-end">
                                <BaseLink href="#" t-key="forgot-password" />
                            </div>
                        </div>

                        <div class="pyc-40">
                            <BaseButton
                                :disabled="form.processing"
                                t-key="sign-in"
                                type="submit"
                                class="fs-20 fw-bold shadow-dark-blue border-2 border-black w-100"
                            />
                        </div>
                    </form>

                    <div class="text-center">
                        <Text t-key="dont-have-account" tag="span" class="text-dim-gray fs-16 me-2" />
                        <BaseLink :href="route('register')" t-key="sign-up" class="fs-16 fw-bold" />
                    </div>
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

