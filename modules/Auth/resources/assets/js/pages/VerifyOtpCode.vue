<script setup>
import AuthLayout from "../layouts/AuthLayout.vue";
import helpers from "~/scripts/helpers/helpers.js";

let {sendForm} = helpers;

defineProps({
    otp_code: Number,
})

const {props: {auth: user}} = usePage()

let showMessageResent = ref(false);
let chunks = reactive(new Array(6).fill(""))
let disabledSubmit = computed(() => !chunks.every(elem => elem !== ""))
let form = useForm({otp: ""})

const limiter = (e, index) => {
    let value = parseInt(e.target.value);

    form.clearErrors();

    if (index != 5) {
        document.getElementById('chunk_' + (index + 1)).focus()
    }

    if (value > 9) {
        chunks[index] = 9;
        e.target.value = 9
    }
    if (value < 0) {
        chunks[index] = 0;
        e.target.value = 0
    }
}

const dropCode = () => {
    chunks.fill("", 0, 6)
}

const verify = () => {
    form.otp = chunks.join(' ').replace(/\s/g, '');

    sendForm({form, url: route("registration.verify")},
        (response, errors) => {
            if (!errors && response.data) {
                window.location.reload()
            }
        });
}

const resend = () => {
    sendForm({form, url: route("registration.resend")}, () => {
        showMessageResent.value = true
        setTimeout(function () {
            showMessageResent.value = false;
        }, 5000)
    })
};

const cancel = () => {
    sendForm({form, url: route("registration.cancel")},
        (response, errors) => {
            if (!errors && response.data) {
                window.location.reload()
            }
        })
}
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
                        <p class="text-dim-gray fs-14 mt-3">
                            <span>Tmp otp-code for enter to the system: {{otp_code}}</span>
                        </p>
                    </div>
                    <div class="mb-5 position-relative">
                        <div class="d-flex gap-3">
                            <BaseInput
                                :id="'chunk_'+index"
                                class="chunk_code_otp"
                                @input="limiter($event,index)"
                                v-for="(chunk, index) in chunks"
                                v-model="chunks[index]"
                                placeholder="_"
                                label=""
                            />
                        </div>
                        <span class="position-absolute text-danger mt-2">{{ form.errors.otp }}</span>
                        <Text
                            v-if="!disabledSubmit"
                            @click="dropCode"
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

<style>
.chunk_code_otp {
    width: 85px;
    height: 85px;
    text-align: center;
    border-radius: 10px;
    font-size: 28px;
}
</style>
