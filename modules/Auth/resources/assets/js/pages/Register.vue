<script setup>
import PasswordMeter from "vue-simple-password-meter";
import AuthLayout from "$module@auth/layouts/AuthLayout.vue";
import helpers from "~/scripts/helpers/helpers.js";


const { institutions } = defineProps({
    institutions: {
        type: Array
    }
});
let { sendForm } = helpers;

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
    role: '',
    institution_id: '',
    is_agreement: false
});

// For test
//Need dynamic data!
const list = reactive([
    {
        name: 'First Action',
        value: '10',
        disabled: false,
        active: true
    },
    {
        name: 'Second Action',
        value: '20',
        disabled: false,
        active: false
    },
    {
        name: 'Third Action',
        value: '30',
        disabled: false,
        active: false
    }
])
const phoneNumberValidated = ref(false);
let scorePassword = ref('');

const institutions_options = computed(() =>
    institutions.map(institution => {
        return {
            value: institution.id,
            label: institution.type + " - " + institution.name
        }
    }))

const submit = () => sendForm({ form, url: route("register"), toObject: true },
    (response, error) => {
        if (!error && response.data) window.location.reload();
    }
)

const onScore = (payload) => scorePassword.value = payload.strength;

const dropScore = (e) => {
    if (e.target.value.length <= 0) {
        scorePassword.value = '';
    }
}

const nameInstitution = () => {
    let institution = institutions.find((institution) => institution.id === form.institution_id)
    return institution.type + " - " + institution.name
}

const disabledSubmit = computed(
    () => !form.email ||
        !form.institution_id ||
        !form.role ||
        !form.first_name ||
        !form.last_name ||
        !form.phone ||
        !form.address ||
        !form.country ||
        !form.state ||
        !form.city ||
        !form.zip_code ||
        !form.password ||
        !phoneNumberValidated.value ||
        !form.is_agreement,
);

</script>

<template>
    <AuthLayout title="register" :withoutLEftContent="true">
        <template #right-content>
            <b-row :no-gutters="true" class="justify-content-center">
                <b-col cols="10" lg="8">
                    <div class="mb-5">
                        <h1 class="text-black">
                            <Text t-key="page.register.text-1" tag="span" />
                            <template v-if="form.institution_id"><p>{{ nameInstitution() }}</p></template>
                        </h1>
                        <p class="text-dim-gray fs-14 mt-3">
                            <Text t-key="page.register.text-2" />
                        </p>
                    </div>
                    <form @submit.prevent="submit">
                        <b-row class="g-3">
                            <b-col cols="12">
                                <b-row class="g-3" :no-gutters="true">
                                    <b-col>
                                        <TagLabel label="role" />

                                        <List>
                                            <template #body>
                                                <BListGroupItem
                                                    :class="[{'bg-light-blue text-white': form.role === 'student'}, 'hover-element text-dim-gray w-50']"
                                                    tag="li"
                                                    @click="form.role = 'student'"
                                                >
                                                    <Text t-key="label.student" />
                                                </BListGroupItem>
                                                <BListGroupItem
                                                    :class="[{'bg-light-blue text-white': form.role === 'instructor'}, 'hover-element text-dim-gray w-50']"
                                                    tag="li"
                                                    @click="form.role = 'instructor'"
                                                >
                                                    <Text t-key="label.instructor" />
                                                </BListGroupItem>
                                            </template>
                                        </List>

                                        <ErrorMessage :error="form.errors.role" />
                                    </b-col>
                                    <b-col>
                                        <BaseMultiselect
                                            v-model="form.institution_id"
                                            :error="form.errors.institution_id"
                                            :searchable="true"
                                            :options="institutions_options"
                                            mode="single"
                                            label="institution"
                                        />
                                        <ErrorMessage :error="form.errors.institution_id" />
                                    </b-col>
                                </b-row>
                            </b-col>

                            <b-col cols="6">
                                <BaseInput
                                    v-model="form.first_name"
                                    :error="form.errors.first_name"
                                    placeholder="enter-first-name"
                                    label="first-name"
                                />
                            </b-col>
                            <b-col cols="6">
                                <BaseInput
                                    v-model="form.last_name"
                                    :error="form.errors.last_name"
                                    placeholder="enter-last-name"
                                    label="last-name"
                                />
                            </b-col>
                            <b-col cols="6">
                                <BaseInput
                                    v-model="form.email"
                                    :error="form.errors.email"
                                    placeholder="enter-email"
                                    label="email"
                                />
                            </b-col>
                            <b-col cols="6">
                                <MaskInput
                                    v-model="form.phone"
                                    :error="form.errors.phone"
                                    placeholder="enter-mobile-on"
                                    label="mobile-on"
                                    @validate="(validate) => phoneNumberValidated = validate"
                                />
                            </b-col>
                            <b-col cols="12">
                                <BaseInput
                                    v-model="form.address"
                                    :error="form.errors.address"
                                    placeholder="enter-address-line"
                                    label="address-line"
                                />
                            </b-col>
                            <b-col cols="3">
                                <BaseSelect
                                    v-model="form.country"
                                    :error="form.errors.country"
                                    :options="list"
                                    placeholder="select"
                                    label="country"
                                />
                            </b-col>
                            <b-col cols="3">
                                <BaseSelect
                                    v-model="form.state"
                                    :error="form.errors.state"
                                    :options="list"
                                    placeholder="select"
                                    label="state"
                                />
                            </b-col>
                            <b-col cols="3">
                                <BaseInput
                                    v-model="form.city"
                                    :error="form.errors.city"
                                    placeholder="enter-city"
                                    label="city"
                                />
                            </b-col>
                            <b-col cols="3">
                                <BaseInput
                                    v-model="form.zip_code"
                                    :error="form.errors.zip_code"
                                    placeholder="enter-zip-code"
                                    label="zip-code"
                                />
                            </b-col>
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
                                <div>
                                    <ErrorMessage :error="form.errors?.need_verify" />
                                </div>
                            </div>

                            <div class="i-agree-box d-flex gap-2">
                                <CheckboxRadio v-model="form.is_agreement" label="want-get" />
                            </div>

                            <div class="pyc-40">
                                <BaseButton
                                    t-key="sign-up"
                                    type="submit"
                                    class="fs-20 fw-bold shadow-dark-blue border-2 border-black"
                                    :disabled="disabledSubmit || form.processing"
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
