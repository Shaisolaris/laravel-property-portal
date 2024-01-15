<script setup>
import AuthLayout from "~/Layouts/AuthLayout.vue";
import {useForm} from "@inertiajs/vue3";
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
let scorePassword = ref('')

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password'),
    });
};

const onScore = (payload) => {
    scorePassword.value = payload.strength;
}

const dropScore = (e) => {
    if(e.target.value.length <= 0) {
        scorePassword.value = '';
    }
}

</script>

<template>
    <AuthLayout>
        <template #right-content>
            <b-row class="justify-content-center" :no-gutters="true">
                <b-col cols="10" lg="8">
                    <div class="mb-5">
                        <h1 class="text-black">
                            <Text t-key="page.register.text-1"/>
                        </h1>
                        <p class="text-dim-gray fs-14 mt-3">
                            <Text t-key="page.register.text-2"/>
                        </p>
                    </div>
                    <form @submit.prevent="submit" class="row gy-3">
                        <b-row>
                            <b-col cols="6" class="mb-3">
                                <InputBase
                                    v-model="form.first_name"
                                    :error="form.errors.first_name"
                                    placeholder="enter-first-name"
                                    label="first-name"
                                />
                            </b-col>
                            <b-col cols="6" class="mb-3">
                                <InputBase
                                    v-model="form.last_name"
                                    :error="form.errors.last_name"
                                    placeholder="enter-last-name"
                                    label="last-name"
                                />
                            </b-col>
                            <b-col cols="6" class="mb-3">
                                <InputBase
                                    v-model="form.email"
                                    :error="form.errors.email"
                                    placeholder="enter-email"
                                    label="email"
                                />
                            </b-col>
                            <b-col cols="6" class="mb-3">
<!--                                <vue-tel-input v-model="form.number_phone" mode="international"></vue-tel-input>-->
                                <InputBase
                                    v-model="form.phone"
                                    :error="form.errors.phone"
                                    placeholder="enter-mobile-on"
                                    label="mobile-on"
                                />
                            </b-col>
                            <b-col cols="12" class="mb-3">
                                <InputBase
                                    v-model="form.address"
                                    :error="form.errors.address"
                                    placeholder="enter-address-line"
                                    label="address-line"
                                />
                            </b-col>
                            <b-col cols="3" class="mb-3">
                                <SelectBase
                                    :options="list"
                                    v-model="form.country"
                                    :error="form.errors.country"
                                    placeholder="select"
                                    label="country"
                                />
                            </b-col>
                            <b-col cols="3" class="mb-3">
                                <SelectBase
                                    :options="list"
                                    v-model="form.state"
                                    :error="form.errors.state"
                                    placeholder="select"
                                    label="state"
                                />
                            </b-col>
                            <b-col cols="3" class="mb-3">
                                <InputBase
                                    v-model="form.city"
                                    :error="form.errors.city"
                                    placeholder="enter-city"
                                    label="city"
                                />
                            </b-col>
                            <b-col cols="3" class="mb-3">
                                <InputBase
                                    v-model="form.zip_code"
                                    :error="form.errors.zip_code"
                                    placeholder="enter-zip-code"
                                    label="zip-code"
                                />
                            </b-col>
                            <div class="generator-pass">
                                <b-col cols="12" class="mb-3">
                                    <InputBase
                                        v-model="form.password"
                                        :error="form.errors.password"
                                        placeholder="enter-password"
                                        label="password"
                                        @input="dropScore"
                                        type="password"
                                    />
                                    <div class="d-flex justify-content-between">
                                        <PasswordMeter :password="form.password" @score="onScore" />
                                        <div class="ms-4">{{scorePassword.toLocaleString().capitalize()}}</div>
                                    </div>
                                </b-col>
                            </div>
                            <div class="i-agree-box d-flex gap-2">
                                <BFormCheckbox/>
                                <p class="text-dim-gray fs-12">
                                    <Text t-key="page.register.text-3"/>
                                </p>
                            </div>

                            <div class="pyc-40">
                                <BaseButton
                                    t-key="sign-up"
                                    type="submit"
                                    class="fs-20 fw-bold shadow-dark-blue border-2 border-black"
                                />
                            </div>

                            <div class="text-center">
                                <Text t-key="already-have-account" tag="span" class="text-dim-gray fs-16 me-2" />
                                <BaseLink :href="route('login')" t-key="sign-up" class="fs-16 fw-bold" />
                            </div>

                        </b-row>
                    </form>
                </b-col>
            </b-row>
        </template>
    </AuthLayout>
</template>

<style scoped>

</style>
