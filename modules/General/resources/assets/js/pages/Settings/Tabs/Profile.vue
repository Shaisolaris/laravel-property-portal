<script setup>
defineProps({
    timezones: {
        type: Array,
        required: true
    },
    genders: {
        type: Array,
        required: true
    },
    languages: {
        type: Array,
        required: true
    }
});

const user = computed(() => usePage().props.auth);

const formProfile = useForm({
    first_name: user.value?.firstName,
    last_name: user.value?.lastName,
    gender: user.value?.gender ?? null,
    timezone: user.value?.timezone ?? null,
    birth_at: user.value?.birthAt ?? null,
    languages: user.value?.languages ?? null,
});

const formImage = useForm({
    photo: null,
});


const submitUpload = () => {
    formImage.post(route('upload.profile-photo'), {
        onFinish: () => {
            formImage.reset();
        }
    });
}

const submitProfile = () => {
    formProfile.put(route('general.settings.profile'));
}


watch(
    () => formImage.photo,
    () => {
        submitUpload();
    }
);
</script>

<template>
    <Card>
        <Text t-key="page.settings.profile.profile-photo" class="fw-medium pb-3" />

        <div class="d-flex gap-4">
            <Avatar :path="user?.avatar" rounded="circle" size="xl" />

            <div class="pt-3 w-100 h-auto d-flex flex-column">
                <div class="text-dim-gray fs-14">{{ user?.bio }}</div>
                <div class="text-end mt-auto">
                    <UploadImage v-model="formImage.photo">
                        <template #body>
                            <span class="text-royal-blue fw-medium">
                                <i class="ri-upload-2-line me-2" />
                                <Text t-key="action.upload" tag="span" />
                            </span>
                        </template>
                    </UploadImage>
                </div>
            </div>
        </div>

        <Line />

        <Text t-key="page.settings.profile.basic-information.title" class="fw-medium pb-3" />

        <form @submit.prevent="submitProfile">
            <b-row class="gy-3">
                <b-col cols="12">
                    <Collapse :show-button="false" id="collapse-name" class="multi-collapse" visible>
                        <template #body>
                            <b-row class="align-items-center">
                                <b-col cols="3">
                                    <Text
                                        t-key="page.settings.profile.basic-information.items.0"
                                        class="fs-14 fw-medium text-dim-gray"
                                    />
                                </b-col>
                                <b-col cols="6">
                                    <span class="fs-14 fw-medium text-padding">
                                        {{ formProfile.first_name }} {{ formProfile.last_name }}
                                    </span>
                                </b-col>
                                <b-col cols="3" class="text-end">
                                    <i
                                        v-b-toggle.collapse-name.collapse-name-edit
                                        class="ri-edit-box-line text-royal-blue hover-element"
                                    />
                                </b-col>
                            </b-row>
                        </template>
                    </Collapse>
                    <Collapse :show-button="false" id="collapse-name-edit" class="multi-collapse">
                        <template #body>
                            <b-row class="align-items-center">
                                <b-col cols="3">
                                    <Text
                                        t-key="page.settings.profile.basic-information.items.0"
                                        class="fs-14 fw-medium text-dim-gray"
                                    />
                                </b-col>
                                <b-col cols="6">
                                    <div class="d-flex w-100 gap-2">
                                        <BaseInput
                                            v-model="formProfile.first_name"
                                            :error="formProfile.errors.last_name"
                                            class="w-100"
                                        />
                                        <BaseInput
                                            v-model="formProfile.last_name"
                                            :error="formProfile.errors.last_name"
                                            class="w-100"
                                        />
                                    </div>
                                </b-col>
                                <b-col cols="3" class="text-end">
                                    <div class="d-flex justify-content-end gap-2">
                                        <BaseButton
                                            v-b-toggle.collapse-name.collapse-name-edit
                                            t-key="save"
                                            size="md"
                                            type="submit"
                                        />
                                        <BaseButton
                                            v-b-toggle.collapse-name.collapse-name-edit
                                            t-key="cancel-save"
                                            size="md"
                                            variant="light-yellow"
                                        />
                                    </div>
                                </b-col>
                            </b-row>
                        </template>
                    </Collapse>
                </b-col>
                <b-col cols="12">
                    <Collapse :show-button="false" id="collapse-birth" class="multi-collapse" visible>
                        <template #body>
                            <b-row class="align-items-center">
                                <b-col cols="3">
                                    <Text
                                        t-key="page.settings.profile.basic-information.items.1"
                                        class="fs-14 fw-medium text-dim-gray"
                                    />
                                </b-col>
                                <b-col cols="6">
                                    <span class="fs-14 fw-medium text-padding">
                                        {{ formProfile.birth_at ?? '-' }}
                                    </span>
                                </b-col>
                                <b-col cols="3" class="text-end">
                                    <i
                                        v-b-toggle.collapse-birth.collapse-birth-edit
                                        class="ri-edit-box-line text-royal-blue hover-element"
                                    />
                                </b-col>
                            </b-row>
                        </template>
                    </Collapse>
                    <Collapse :show-button="false" id="collapse-birth-edit" class="multi-collapse">
                        <template #body>
                            <b-row class="align-items-center">
                                <b-col cols="3">
                                    <Text
                                        t-key="page.settings.profile.basic-information.items.1"
                                        class="fs-14 fw-medium text-dim-gray"
                                    />
                                </b-col>
                                <b-col cols="6">
                                    <DateTimePicker v-model="formProfile.birth_at" />
                                </b-col>
                                <b-col cols="3" class="text-end">
                                    <div class="d-flex justify-content-end gap-2">
                                        <BaseButton
                                            v-b-toggle.collapse-birth.collapse-birth-edit
                                            t-key="save"
                                            size="md"
                                            type="submit"
                                        />
                                        <BaseButton
                                            v-b-toggle.collapse-birth.collapse-birth-edit
                                            t-key="cancel-save"
                                            size="md"
                                            variant="light-yellow"
                                        />
                                    </div>
                                </b-col>
                            </b-row>
                        </template>
                    </Collapse>
                </b-col>
                <b-col cols="12">
                    <Collapse :show-button="false" id="collapse-gender" class="multi-collapse" visible>
                        <template #body>
                            <b-row class="align-items-center">
                                <b-col cols="3">
                                    <Text
                                        t-key="page.settings.profile.basic-information.items.2"
                                        class="fs-14 fw-medium text-dim-gray"
                                    />
                                </b-col>
                                <b-col cols="6">
                                    <span class="fs-14 fw-medium text-padding">
                                        {{ formProfile?.gender ? formProfile.gender.capitalize() : '-' }}
                                    </span>
                                </b-col>
                                <b-col cols="3" class="text-end">
                                    <i
                                        v-b-toggle.collapse-gender.collapse-gender-edit
                                        class="ri-edit-box-line text-royal-blue hover-element"
                                    />
                                </b-col>
                            </b-row>
                        </template>
                    </Collapse>
                    <Collapse :show-button="false" id="collapse-gender-edit" class="multi-collapse">
                        <template #body>
                            <b-row class="align-items-center">
                                <b-col cols="3">
                                    <Text
                                        t-key="page.settings.profile.basic-information.items.2"
                                        class="fs-14 fw-medium text-dim-gray"
                                    />
                                </b-col>
                                <b-col cols="6">
                                    <BaseSelect
                                        v-model="formProfile.gender"
                                        :options="genders"
                                    />
                                </b-col>
                                <b-col cols="3" class="text-end">
                                    <div class="d-flex justify-content-end gap-2">
                                        <BaseButton
                                            v-b-toggle.collapse-gender.collapse-gender-edit
                                            t-key="save"
                                            size="md"
                                            type="submit"
                                        />
                                        <BaseButton
                                            v-b-toggle.collapse-gender.collapse-gender-edit
                                            t-key="cancel-save"
                                            size="md"
                                            variant="light-yellow"
                                        />
                                    </div>
                                </b-col>
                            </b-row>
                        </template>
                    </Collapse>
                </b-col>
                <b-col cols="12">
                    <Collapse :show-button="false" id="collapse-timezone" class="multi-collapse" visible>
                        <template #body>
                            <b-row class="align-items-center">
                                <b-col cols="3">
                                    <Text
                                        t-key="page.settings.profile.basic-information.items.3"
                                        class="fs-14 fw-medium text-dim-gray"
                                    />
                                </b-col>
                                <b-col cols="6">
                                    <span class="fs-14 fw-medium text-padding">
                                        {{ formProfile?.timezone ? formProfile.timezone.capitalize() : '-' }}
                                    </span>
                                </b-col>
                                <b-col cols="3" class="text-end">
                                    <i
                                        v-b-toggle.collapse-timezone.collapse-timezone-edit
                                        class="ri-edit-box-line text-royal-blue hover-element"
                                    />
                                </b-col>
                            </b-row>
                        </template>
                    </Collapse>
                    <Collapse :show-button="false" id="collapse-timezone-edit" class="multi-collapse">
                        <template #body>
                            <b-row class="align-items-center">
                                <b-col cols="3">
                                    <Text
                                        t-key="page.settings.profile.basic-information.items.3"
                                        class="fs-14 fw-medium text-dim-gray"
                                    />
                                </b-col>
                                <b-col cols="6">
                                    <BaseSelect
                                        v-model="formProfile.timezone"
                                        :options="timezones"
                                    />
                                </b-col>
                                <b-col cols="3" class="text-end">
                                    <div class="d-flex justify-content-end gap-2">
                                        <BaseButton
                                            v-b-toggle.collapse-timezone.collapse-timezone-edit
                                            t-key="save"
                                            size="md"
                                            type="submit"
                                        />
                                        <BaseButton
                                            v-b-toggle.collapse-timezone.collapse-timezone-edit
                                            t-key="cancel-save"
                                            size="md"
                                            variant="light-yellow"
                                        />
                                    </div>
                                </b-col>
                            </b-row>
                        </template>
                    </Collapse>
                </b-col>
                <b-col cols="12">
                    <Collapse :show-button="false" id="collapse-language" class="multi-collapse" visible>
                        <template #body>
                            <b-row class="align-items-center">
                                <b-col cols="3">
                                    <Text
                                        t-key="page.settings.profile.basic-information.items.4"
                                        class="fs-14 fw-medium text-dim-gray"
                                    />
                                </b-col>
                                <b-col cols="6">
                                    <span class="fs-14 fw-medium text-padding">
                                        {{ formProfile?.languages ? formProfile.languages.capitalize() : '-' }}
                                    </span>
                                </b-col>
                                <b-col cols="3" class="text-end">
                                    <i
                                        v-b-toggle.collapse-language.collapse-language-edit
                                        class="ri-edit-box-line text-royal-blue hover-element"
                                    />
                                </b-col>
                            </b-row>
                        </template>
                    </Collapse>
                    <Collapse :show-button="false" id="collapse-language-edit" class="multi-collapse">
                        <template #body>
                            <b-row class="align-items-center">
                                <b-col cols="3">
                                    <Text
                                        t-key="page.settings.profile.basic-information.items.4"
                                        class="fs-14 fw-medium text-dim-gray"
                                    />
                                </b-col>
                                <b-col cols="6">
                                    <BaseSelect
                                        v-model="formProfile.languages"
                                        :options="languages"
                                    />
                                </b-col>
                                <b-col cols="3" class="text-end">
                                    <div class="d-flex justify-content-end gap-2">
                                        <BaseButton
                                            v-b-toggle.collapse-language.collapse-language-edit
                                            t-key="save"
                                            size="md"
                                            type="submit"
                                        />
                                        <BaseButton
                                            v-b-toggle.collapse-language.collapse-language-edit
                                            t-key="cancel-save"
                                            size="md"
                                            variant="light-yellow"
                                        />
                                    </div>
                                </b-col>
                            </b-row>
                        </template>
                    </Collapse>
                </b-col>
            </b-row>
        </form>
    </Card>
</template>

<style scoped>

</style>