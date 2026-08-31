<script setup>
import AuthLayout from "../../layouts/AuthLayout.vue";
import FileUploads from "~/Components/Form/FileUploads.vue";
import FooterSteps from "./Partials/FooterSteps.vue";
import helpers from "~/scripts/helpers/helpers.js";

let {sendForm} = helpers;

const form = useForm({
    avatar: "",
    bio: "",
});

const disabledSubmit = computed(() => form.avatar != null && form.bio.length > 0);

const send = () => {
    sendForm({form, url: route("registration.profile-avatar.store")},
        () => window.location.reload()
    )
}
</script>

<template>
    <AuthLayout :withoutRightContent="true">
        <template #right-content>
            <div class="container-fluid custom-container justify-content-between align-items-center mt-5">
                <b-row :no-gutters="true">
                    <b-col cols="12">
                        <div class="mb-5">
                            <h1 class="text-black">
                                <Text t-key="page.register.text-14" tag="span"/>
                            </h1>
                            <b-col cols="5">
                                <p class="text-dim-gray fs-14 mt-3">
                                    <Text t-key="page.register.text-2" tag="span"/>
                                </p>
                            </b-col>
                        </div>
                        <div>
                            <FileUploads :simple="false" v-model="form.avatar"/>
                            <div class="mt-5">
                                <TagLabel label="add-your-bio" />
                                <Editor v-model="form.bio" title="Add Your Bio"/>
                            </div>
                        </div>
                    </b-col>
                </b-row>
            </div>
            <FooterSteps :disabledSubmit="disabledSubmit || form.processing" @send="send"/>
        </template>
    </AuthLayout>
</template>

<style scoped>

</style>
