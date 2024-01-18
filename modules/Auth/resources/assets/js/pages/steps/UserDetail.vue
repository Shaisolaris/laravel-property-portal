<script setup>
import AuthLayout from "../../layouts/AuthLayout.vue";
import FooterSteps from "./Partials/FooterSteps.vue";
import helpers from "~/scripts/utils/helpers.js";

let {sendForm} = helpers;

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
    !form.account_number.length > 0 ||
    !form.extra_information.length > 0 ||
    !form.registration_scan_path
);

const send = () => {
    sendForm({form, url: route("user-detail.store")},
        () => ''
    )
}

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
            <div class="container-fluid custom-container justify-content-between align-items-center mt-5">
                <b-row :no-gutters="true">
                    <b-col cols="12">
                        <div class="mb-5">
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
                                    <div class="mb-4">
                                        <BaseSelect
                                            v-model="form.account_type"
                                            :options="list"
                                            placeholder="organization"
                                            label="account-type"
                                        />
                                    </div>
                                    <div class="mb-4">
                                        <FileUploads v-model="form.business_document_path"
                                                     trigger="business_document_path"
                                                     label="business-document"/>
                                    </div>
                                    <div class="mb-4">
                                        <BaseInput
                                            v-model="form.account_holder_name"
                                            placeholder="organization"
                                            label="account-holder-name"
                                        />
                                    </div>
                                    <div class="mb-4">
                                        <MaskInput
                                            type="card_number"
                                            v-model="form.account_number"
                                            placeholder="enter-account-name"
                                            label="account-no"
                                        />
                                    </div>
                                    <div class="mb-4">
                                        <FileUploads v-model="form.registration_scan_path"
                                                     trigger="registration_scan_path"
                                                     label="registration-scan"/>
                                    </div>
                                    <div class="mb-4">
                                        <Editor v-model="form.extra_information"/>
                                    </div>
                                </Card>
                            </div>
                        </div>
                    </b-col>
                </b-row>
            </div>
            <FooterSteps :disabledSubmit="!disabledSubmit" @send="send"/>
        </template>
    </AuthLayout>
</template>

<style scoped>

</style>
