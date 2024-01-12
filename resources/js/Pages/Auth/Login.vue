<script setup>
import AuthLayout from "~/Layouts/AuthLayout.vue";

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
        })).post(route('fortify-login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <AuthLayout class="overflow-x-hidden">
        <b-row style="padding-top: 67px">
            <b-col>
                <div class=" fontf-McLaren bg">
                    <div class="fs-3 fw-medium text-center py-5">
                        Empowering Afghan Dreams: Education for Everyone
                    </div>
                </div>
            </b-col>
            <b-col>
                <div class="text-center">
                    Sign In
                    Welcome back! You have been missed!
                </div>
                <form @submit.prevent="submit" class="row gy-3">
                    <InputBase v-model="form.email" :error="form.errors.email" placeholder="" label="" />
                    <InputBase v-model="form.password" :error="form.errors.password" type="password" placeholder="" label="" />

                    <div class="mb-3">
                        <CheckboxRadio v-model="form.remember" label="Remember me" value="" />

                        <div class="float-end">
                            <Link :href="route('password.request')" class="text-muted">
                                Forgot your password?
                            </Link>
                        </div>
                    </div>
                </form>

                <div class="text-center">
                    Already have an account?
                </div>
            </b-col>
        </b-row>
    </AuthLayout>
</template>

<style scoped>
.bg {
    background: url('@/images/page/auth/img-1.svg') no-repeat;
    width: 650px;
    height: 920px;
}
</style>