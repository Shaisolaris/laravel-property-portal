<script setup>
import AuthLayout from "../../layouts/AuthLayout.vue";
import FooterSteps from "./Partials/FooterSteps.vue";
import helpers from "~/scripts/helpers/helpers.js";
import {map} from "lodash";

let {sendForm} = helpers;

const store = useStore();
const {curriculum, genders, timezones} = defineProps({
    curriculum: Array,
    genders: Array,
    timezones: Array,
})

const user = computed(() => usePage().props.auth);
const languages = computed(() => store.getters['general/getLanguages']);

const form = useForm({
    registration_scan: "",
    transcript: "",

    diploma_certificate: "",
    previous_employment_education: "",
    teaching_experience: "",
    additional_licences_permits: "",

    extra_information: "",
    class_id: null,
    languages: null,
    gender: null,
    timezone: null,
});

const disabledSubmit = computed(() => {
    let status = !form.extra_information.length > 0 || !form.languages || !form.timezone || !form.gender
    if(user.value.is_student) {
        return status || !form.class_id
    } else {
        return status;
    }

});

const send = () => sendForm({form, url: route("registration.user-detail.store")},
    (response) => {
        if (response.data) {
            window.location.reload()
        }
    }
)

const curriculum_options = computed(() => curriculum.map(item => ({label: item.name, value: item.id})))

const genders_options = computed(() => map(genders, (label,value) => ({label, value})))
const timezone_options = computed(() => map(timezones, (label,value) => ({label: label+" ("+value+")", value })))

</script>

<template>
    <AuthLayout title="user-information-detail" :withoutRightContent="true">
        <template #right-content>
            <div>
                <div class="container-fluid custom-container justify-content-between align-items-center mt-5 pb-5">
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
                                <BCard>
                                    <b-row class="gy-3">
                                        <b-col cols="12">
                                            <b-row class="gy-3">
                                                <b-col md="4">
                                                    <BaseMultiselect
                                                        v-model="form.languages"
                                                        :error="form.errors.languages"
                                                        :options="languages"
                                                        label="language"
                                                        placeholder="language"
                                                    />
                                                </b-col>
                                                <b-col md="4">
                                                    <BaseMultiselect
                                                        v-model="form.gender"
                                                        :error="form.errors.gender"
                                                        :options="genders_options"
                                                        label="gender"
                                                        placeholder="gender"
                                                    />
                                                </b-col>
                                                <b-col md="4">
                                                    <BaseMultiselect
                                                        v-model="form.timezone"
                                                        :error="form.errors.timezone"
                                                        :options="timezone_options"
                                                        label="timezone"
                                                        placeholder="timezone"
                                                    />
                                                </b-col>
                                            </b-row>
                                        </b-col>
                                        <b-col v-if="user.is_student" cols="12">
                                            <BaseMultiselect
                                                v-model="form.class_id"
                                                :error="form.errors.class_id"
                                                :options="curriculum_options"
                                                label="select-class"
                                                placeholder="class"
                                            />
                                        </b-col>
                                        <b-col cols="12">
                                            <BaseTextarea
                                                v-model="form.extra_information"
                                                :error="form.errors.extra_information"
                                                placeholder="start-writing-something"
                                                label="extra-information"
                                            />
                                        </b-col>
                                        <b-col class="text-dim-gray" cols="12">
                                            <Text v-if="user.is_student" t-key="page.register.text-22" />
                                            <Text v-if="user.is_instructor" t-key="page.register.text-24" />
                                        </b-col>
                                        <b-col cols="12">
                                            <FileUploads
                                                :required="false"
                                                v-model="form.registration_scan"
                                                trigger="registration_scan_path"
                                                label="registration-scan"
                                            />
                                        </b-col>
                                        <b-col v-if="user.is_student" cols="12">
                                            <FileUploads
                                                :required="false"
                                                v-model="form.transcript"
                                                trigger="transcript"
                                                label="transcript"
                                            />
                                        </b-col>
                                        <b-col v-if="user.is_instructor" cols="12">
                                            <b-row class="gy-3">
                                                <b-col cols="12" md="6">
                                                    <FileUploads
                                                        :required="false"
                                                        v-model="form.diploma_certificate"
                                                        trigger="diploma_certificate"
                                                        label="diploma-certificate"
                                                    />
                                                </b-col>
                                                <b-col cols="12" md="6">
                                                    <FileUploads
                                                        :required="false"
                                                        v-model="form.additional_licences_permits"
                                                        trigger="additional_licences_permits"
                                                        label="additional-licences-permits"
                                                    />
                                                </b-col>
                                                <b-col cols="12" md="6">
                                                    <FileUploads
                                                        :required="false"
                                                        v-model="form.teaching_experience"
                                                        trigger="teaching_experience"
                                                        label="teaching-experience"
                                                    />
                                                </b-col>
                                                <b-col cols="12" md="6">
                                                    <FileUploads
                                                        :required="false"
                                                        v-model="form.previous_employment_education"
                                                        trigger="previous_employment_education"
                                                        label="previous-employment-education"
                                                    />
                                                </b-col>
                                            </b-row>
                                        </b-col>
                                        <b-col v-if="user.is_student" cols="12">
                                            <Text t-key="page.register.text-23"/>
                                        </b-col>
                                    </b-row>
                                </BCard>
                            </div>
                        </b-col>
                    </b-row>
                </div>
                <FooterSteps :disabledSubmit="!disabledSubmit || form.processing" @send="send"/>
            </div>
        </template>
    </AuthLayout>
</template>
