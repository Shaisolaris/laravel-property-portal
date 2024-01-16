<script setup>
import AuthLayout from "~/Layouts/AuthLayout.vue";
import { useForm } from "@inertiajs/vue3";
import { VueTelInput } from 'vue-tel-input';
import PasswordMeter from "vue-simple-password-meter";
import 'vue-tel-input/vue-tel-input.css';


const form = useForm({
    first_name: '',
    last_name: '',
    email: '',
    phone: '',
    address: '',
    country: '',
    state: '',
    city: '',
    zip_code: '',
    password: '',
    role: null,
    educational_type: null,
    is_agreement: false
});

// For test
const list = reactive([
    {
        name: 'First Action',
        value: 1,
        disabled: false,
        active: true
    },
    {
        name: 'Second Action',
        value: 2,
        disabled: false,
        active: false
    },
    {
        name: 'Third Action',
        value: 3,
        disabled: false,
        active: false
    }
])
let scorePassword = ref('');


const submit = () => {
    form
        .post(route('register'), {
            onFinish: () => form.reset('password'),
        });
};

const onScore = (payload) => {
    scorePassword.value = payload.strength;
}

const dropScore = (e) => {
    if (e.target.value.length <= 0) {
        scorePassword.value = '';
    }
}
</script>

<template>
    <AuthLayout title="register">
        <template #right-content>
            <b-row :no-gutters="true" class="justify-content-center">
                <b-col cols="10" lg="8">
                    <div class="mb-5">
                        <h1 class="text-black">
                            <Text t-key="page.register.text-1" />
                        </h1>
                        <p class="text-dim-gray fs-14 mt-3">
                            <Text t-key="page.register.text-2" />
                        </p>
                    </div>
                    <form @submit.prevent="submit">
                        <b-row class="gy-3">
                            <b-col cols="12">
                                <b-row class="gy-3" :no-gutters="true">
                                    <b-col cols="12">
                                        <TagLabel label="label.role" />
                                        <b-row class="g-3" :no-gutters="true">
                                            <b-col cols="2">
                                                <CheckboxRadio
                                                    v-model="form.role"
                                                    type="radio"
                                                    value="student"
                                                    label="student"
                                                />
                                            </b-col>
                                            <b-col cols="2">
                                                <CheckboxRadio
                                                    v-model="form.role"
                                                    type="radio"
                                                    value="instructor"
                                                    label="instructor"
                                                />
                                            </b-col>
                                            <b-col cols="2">
                                                <CheckboxRadio
                                                    v-model="form.role"
                                                    value="organizer"
                                                    type="radio"
                                                    label="organizer"
                                                />
                                            </b-col>
                                        </b-row>
                                        <ErrorMessage :error="form.errors.role" />
                                    </b-col>
                                    <b-col cols="12">
                                        <TagLabel label="label.educational-type" />

                                        <b-row class="g-3" :no-gutters="true">
                                            <b-col cols="2">
                                                <CheckboxRadio
                                                    v-model="form.educational_type"
                                                    type="radio"
                                                    value="school"
                                                    label="school"
                                                />
                                            </b-col>
                                            <b-col cols="2">
                                                <CheckboxRadio
                                                    v-model="form.educational_type"
                                                    type="radio"
                                                    value="academy"
                                                    label="academy"
                                                />
                                            </b-col>
                                        </b-row>

                                        <ErrorMessage :error="form.errors.educational_type" />
                                    </b-col>
                                </b-row>
                            </b-col>

                            <b-col cols="6">
                                <InputBase
                                    v-model="form.first_name"
                                    :error="form.errors.first_name"
                                    placeholder="enter-first-name"
                                    label="first-name"
                                />
                            </b-col>
                            <b-col cols="6">
                                <InputBase
                                    v-model="form.last_name"
                                    :error="form.errors.last_name"
                                    placeholder="enter-last-name"
                                    label="last-name"
                                />
                            </b-col>
                            <b-col cols="6">
                                <InputBase
                                    v-model="form.email"
                                    :error="form.errors.email"
                                    placeholder="enter-email"
                                    label="email"
                                />
                            </b-col>
                            <b-col cols="6">
                                <!--<vue-tel-input v-model="form.number_phone" mode="international"></vue-tel-input>-->
                                <InputBase
                                    v-model="form.phone"
                                    :error="form.errors.phone"
                                    placeholder="enter-mobile-on"
                                    label="mobile-on"
                                />
                            </b-col>
                            <b-col cols="12">
                                <InputBase
                                    v-model="form.address"
                                    :error="form.errors.address"
                                    placeholder="enter-address-line"
                                    label="address-line"
                                />
                            </b-col>
                            <b-col cols="3">
                                <SelectBase
                                    v-model="form.country"
                                    :error="form.errors.country"
                                    :options="list"
                                    placeholder="select"
                                    label="country"
                                />
                            </b-col>
                            <b-col cols="3">
                                <SelectBase
                                    v-model="form.state"
                                    :error="form.errors.state"
                                    :options="list"
                                    placeholder="select"
                                    label="state"
                                />
                            </b-col>
                            <b-col cols="3">
                                <InputBase
                                    v-model="form.city"
                                    :error="form.errors.city"
                                    placeholder="enter-city"
                                    label="city"
                                />
                            </b-col>
                            <b-col cols="3">
                                <InputBase
                                    v-model="form.zip_code"
                                    :error="form.errors.zip_code"
                                    placeholder="enter-zip-code"
                                    label="zip-code"
                                />
                            </b-col>
                            <div class="generator-pass">
                                <b-col cols="12">
                                    <InputBase
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
                            </div>

                            <div class="i-agree-box d-flex gap-2">
                                <CheckboxRadio v-model="form.is_agreement" label="want-get" />
                            </div>

                            <div class="pyc-40">
                                <BaseButton
                                    t-key="sign-up"
                                    type="submit"
                                    class="fs-20 fw-bold shadow-dark-blue border-2 border-black"
                                    :disabled="!form.is_agreement"
                                />
                            </div>

                            <div class="text-center">
                                <Text t-key="already-have-account" tag="span" class="text-dim-gray fs-16 me-2" />
                                <BaseLink :href="route('login')" t-key="sign-in" class="fs-16 fw-bold" />
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
