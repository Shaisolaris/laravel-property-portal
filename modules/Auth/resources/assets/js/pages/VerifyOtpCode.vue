<script setup>

import AuthLayout from "../layouts/AuthLayout.vue";
import {useForm, usePage} from "@inertiajs/vue3";
import helpers from "~/Utils/helpers";

let {sendForm} = helpers;

defineProps({
    otp_code: Number,
})

const {props: {auth: user}} = usePage()

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
        (response,errors) => {
            if(!errors && response.data ) {
                window.location.reload()
            }
        });
}

const resend = () => sendForm({form, url: route("registration.resend")});

</script>

<template>
    <AuthLayout>
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
                        <Text v-if="!disabledSubmit"
                              @click="dropCode"
                              class="text-royal-blue mt-2 me-3 cursor-pointer position-absolute end-0"
                              t-key="page.register.text-8"
                              tag="div"/>
                    </div>
                    <div class="mb-5 fs-14">
                        <Text class="text-dim-gray" t-key="page.register.text-5" tag="span"/>
                        :
                        <Text class="text-royal-blue ms-2 cursor-pointer" @click="resend" t-key="page.register.text-6"
                              tag="span"/>
                    </div>
                    <BaseButton
                        @click="verify"
                        t-key="confirm"
                        type="submit"
                        class="fs-20 fw-bold shadow-dark-blue border-2 border-black"
                    />
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
