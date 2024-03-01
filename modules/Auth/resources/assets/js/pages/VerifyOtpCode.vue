<script setup>
import AuthLayout from "../layouts/AuthLayout.vue";
import helpers from "~/scripts/helpers/helpers.js";
import VOtpInput from "vue3-otp-input";

let {sendForm} = helpers;

const {props: {auth: user}} = usePage()

const otpInput = ref("");
const bindModal = ref("");

let showMessageResent = ref(false);
let disabledSubmit = computed(() => otpInput.value?.value?.length < 6)
let form = useForm({otp: ""})


const verify = () => {
    form.otp = otpInput.value.value;
    sendForm({form, url: route("registration.otp.verify")},
        (response, errors) => {
            if (!errors && response.data) {
                window.location.reload()
            }
        });
}

const resend = () => {
    sendForm({form, url: route("registration.otp.resend")}, () => {
        showMessageResent.value = true
        clearInput();
        setTimeout(function () {
            showMessageResent.value = false;
        }, 5000)
    })
};

const cancel = () => {
    sendForm({form, url: route("registration.otp.cancel")},
        (response, errors) => {
            if (!errors && response.data) {
                window.location.reload()
            }
        })
}

const clearInput = () => otpInput?.value.clearInput();
</script>

<template>
    <AuthLayout title="verify-email">
        <template #right-content>
            <b-row :no-gutters="true" class="justify-content-center">
                <b-col cols="10" lg="9">
                    <div class="mb-5">
                        <h1 class="text-black">
                            <Text t-key="page.register.text-3" tag="span"/>
                        </h1>
                        <p class="text-dim-gray fs-14 mt-3">
                            <Text t-key="page.register.text-4" tag="span"/>
                            <span class="ms-2 text-royal-blue">{{ user.email }}</span>
                        </p>
                    </div>
                    <div class="mb-5 position-relative">
                        <div class="otp-input-fields">
                            <v-otp-input
                                ref="otpInput"
                                v-model:value="bindModal"
                                input-classes="chunk_code_otp form-control"
                                separator=""
                                :num-inputs="6"
                                :should-auto-focus="true"
                                input-type="number"
                                :placeholder="['_','_','_','_','_','_']"
                            />
                        </div>
                        <span class="position-absolute text-danger mt-2">{{ form.errors.otp }}</span>
                        <Text
                            v-if="!disabledSubmit"
                            @click="clearInput()"
                            class="text-royal-blue mt-2 me-3 cursor-pointer position-absolute end-0"
                            t-key="page.register.text-8"
                            tag="div"
                        />
                    </div>
                    <div class="mb-5 fs-14">
                        <Text class="text-dim-gray" t-key="page.register.text-5" tag="span"/>
                        :
                        <Text
                            class="text-royal-blue ms-2 cursor-pointer"
                            @click="resend"
                            t-key="page.register.text-6"
                            :class="[form.processing ? 'opacity-75' : '']"
                            tag="span"
                        />
                        <span class="ms-3 text-success" v-if="showMessageResent">Code resent</span>
                    </div>
                    <BaseButton
                        @click="verify"
                        t-key="confirm"
                        type="submit"
                        :disabled="form.processing || disabledSubmit"
                        class="fs-20 fw-bold shadow-dark-blue border-2 border-black w-100"
                    />
                    <div class="text-dim-gray mt-5 fs-16 cursor-pointer" @click="cancel">
                        <i class="ri-arrow-left-line"></i> Back to Sign Up
                    </div>
                </b-col>
            </b-row>
        </template>
    </AuthLayout>
</template>

<style lang="scss">
.otp-input-fields {
    & > div {
        gap: 1rem;
    }
}
.chunk_code_otp {
    width: 85px;
    height: 85px;
    text-align: center;
    border-radius: 10px;
    font-size: 28px;
    border: var(--in-border-width) solid var(--in-input-border-custom);

    &::placeholder {
        text-align: center;
    }
}
</style>
