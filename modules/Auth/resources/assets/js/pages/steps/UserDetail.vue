<script setup>
import AuthLayout from "../../layouts/AuthLayout.vue";
import FooterSteps from "./Partials/FooterSteps.vue";
import helpers from "~/scripts/helpers/helpers.js";

let { sendForm } = helpers;

const {curriculum} = defineProps({
    curriculum: Array,
})

const user = computed(() => usePage().props.auth);

const form = useForm({
    business_document_path: "",
    registration_scan_path: "",
    extra_information: "",
    class_id: null,
});

const disabledSubmit = computed(() => !form.extra_information.length > 0);

const send = () => sendForm({ form, url: route("registration.user-detail.store") },
    (response) => {
        if (response.data) {
            window.location.reload()
        }
    }
)

const curriculum_options = computed(() => curriculum.map(item => {
    return {
        label:item.name,
        value:item.id,
    }
}))

</script>

<template>
    <AuthLayout :withoutRightContent="true">
        <template #right-content>
            <div>
                <div class="container-fluid custom-container justify-content-between align-items-center mt-5">
                    <b-row :no-gutters="true">
                        <b-col cols="12">
                            <div class="mb-4">
                                <h1 class="text-black">
                                    <Text t-key="page.register.text-18" tag="span" />
                                </h1>
                                <b-col cols="5">
                                    <p class="text-dim-gray fs-14 mt-3">
                                        <Text t-key="page.register.text-2" tag="span" />
                                    </p>
                                </b-col>
                            </div>
                            <div>
                                <div>
                                    <Card>
                                        <template v-if="user.is_student">
                                            <div class="mb-3">
                                                <BaseMultiselect
                                                    v-model="form.class_id"
                                                    :error="form.errors.class_id"
                                                    :options="curriculum_options"
                                                    label="select-class"
                                                />
                                            </div>
                                        </template>

                                        <div class="mb-3">
                                            <BaseTextarea
                                                v-model="form.extra_information"
                                                :error="form.errors.extra_information"
                                                placeholder="start-writing-something"
                                                label="extra-information"
                                            />
                                        </div>
                                        <p class="text-dim-gray mt-3">
                                            <Text t-key="page.register.text-22"/>
                                        </p>
                                        <div class="mb-3">
                                            <FileUploads
                                                v-model="form.business_document_path"
                                                trigger="business_document_path"
                                                label="business-document"
                                            />
                                        </div>
                                        <div class="mb-3">
                                            <FileUploads
                                                v-model="form.registration_scan_path"
                                                trigger="registration_scan_path"
                                                label="registration-scan"
                                            />
                                        </div>
                                        <p class="text-dim-gray mt-3">
                                            <Text t-key="page.register.text-23"/>
                                        </p>
                                    </Card>
                                </div>
                            </div>
                        </b-col>
                    </b-row>
                </div>
                <FooterSteps :disabledSubmit="!disabledSubmit || form.processing" @send="send" />
            </div>
        </template>
    </AuthLayout>
</template>
