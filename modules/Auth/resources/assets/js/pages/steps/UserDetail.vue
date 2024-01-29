<script setup>
import AuthLayout from "../../layouts/AuthLayout.vue";
import FooterSteps from "./Partials/FooterSteps.vue";
import helpers from "~/scripts/helpers/helpers.js";

let {sendForm} = helpers;
let isComplete = ref(false);

const form = useForm({
    account_type: "",
    business_document_path: "",
    account_holder_name: "",
    account_number: "",
    registration_scan_path: "",
    extra_information: "",
});

const disabledSubmit = computed(() =>
    !form.account_type ||
    !form.business_document_path ||
    !form.account_holder_name.length > 0 ||
    !form.account_number.length >= 16 ||
    !form.extra_information.length > 0 ||
    !form.registration_scan_path
);

const send = () => sendForm({form, url: route("registration.user-detail.store")},
    (response) => {
        if(response.data) {
            isComplete.value = true;
            setTimeout(function() {
                window.location.reload()
            },10000)
        }
    }
)
2
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
</script>

<template>
    <AuthLayout :withoutRightContent="true">
        <template #right-content>
            <div v-if="!isComplete">
                <div class="container-fluid custom-container justify-content-between align-items-center mt-5">
                    <b-row :no-gutters="true">
                        <b-col cols="12">
                            <div class="mb-4">
                                <h1 class="text-black">
                                    <Text t-key="page.register.text-18" tag="span"/>
                                </h1>
                                <b-col cols="5">
                                    <p class="text-dim-gray fs-14 mt-3">
                                        <Text t-key="page.register.text-2" tag="span"/>
                                    </p>
                                </b-col>
                            </div>
                            <div>
                                <div>
                                    <Card>
                                        <div class="mb-3">
                                            <BaseSelect
                                                v-model="form.account_type"
                                                :error="form.errors.account_type"
                                                :options="list"
                                                placeholder="organization"
                                                label="account-type"
                                            />
                                        </div>
                                        <div class="mb-3">
                                            <FileUploads v-model="form.business_document_path"
                                                         trigger="business_document_path"
                                                         label="business-document"/>
                                        </div>
                                        <div class="mb-3">
                                            <BaseInput
                                                v-model="form.account_holder_name"
                                                :error="form.errors.account_holder_name"
                                                placeholder="organization"
                                                label="account-holder-name"
                                            />
                                        </div>
                                        <div class="mb-3">
                                            <MaskInput
                                                type="card_number"
                                                v-model="form.account_number"
                                                :error="form.errors.account_number"
                                                placeholder="enter-account-name"
                                                label="account-no"
                                            />
                                        </div>
                                        <div class="mb-3">
                                            <FileUploads v-model="form.registration_scan_path"
                                                         trigger="registration_scan_path"
                                                         label="registration-scan"/>
                                        </div>
                                        <div class="mb-3">
                                            <TextareaBase
                                                v-model="form.extra_information"
                                                :error="form.errors.extra_information"
                                                placeholder="start-writing-something"
                                                label="extra-information"
                                            />
                                        </div>
                                    </Card>
                                </div>
                            </div>
                        </b-col>
                    </b-row>
                </div>
                <FooterSteps :disabledSubmit="!disabledSubmit || form.processing" @send="send"/>
            </div>
            <div v-else class="container-fluid h-100 custom-container d-flex justify-content-center align-items-center mt-5 pb-4 success-screen">
                <div>
                    <div class="mb-4 text-center">
                        <div class="mb-4">
                            <img src="/images/complete-check.svg" alt="done-check">
                        </div>
                        <h1 class="text-black">
                            <Text t-key="page.register.text-19" tag="span"/>
                        </h1>
                        <p class="text-dim-gray fs-14 mt-3 w-75 m-auto">
                            <Text t-key="page.register.text-20" tag="span"/>
                        </p>
                    </div>
                    <div class="d-flex gap-4">
                        <BaseButton
                            t-key="go-to-dashboard"
                            routeName="general.dashboard"
                            type="submit"
                            class="fs-20 fw-bold shadow-dark-blue border-2 border-black"
                        />
                    </div>
                </div>
            </div>
        </template>
    </AuthLayout>
</template>
<style>
.success-screen {
    height: calc(100vh - 170px) !important;
}
</style>
