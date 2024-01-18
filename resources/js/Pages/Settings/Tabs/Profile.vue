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

const stateEdit = ref({
    name: false,
    birth: false,
    gender: false,
    timezone: false,
    langs: false,
    password: false,
    email: false,
});

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


const changeStateEdit = (key) => {
    stateEdit.value = {
        name: false,
        birth: false,
        gender: false,
        timezone: false,
        langs: false,
        password: false,
        email: false,
    };

    stateEdit.value[key] = !stateEdit.value[key];
}


const submitUpload = () => {
    formImage.post(route('upload.profile-photo'), {
        onFinish: () => {
            formImage.reset();
        }
    });
}

const submitProfile = () => {
    formProfile.put(route('settings.profile'), {
        onSuccess: () => {
            stateEdit.value.name = false;
            stateEdit.value.birth = false;
            stateEdit.value.gender = false;
            stateEdit.value.timezone = false;
            stateEdit.value.langs = false;
        }
    });
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
                        <b-row class="align-items-center">
                            <b-col cols="3">
                                <Text
                                    t-key="page.settings.profile.basic-information.items.0"
                                    class="fs-14 fw-medium text-dim-gray"
                                />
                            </b-col>
                            <b-col cols="6">
                                <span v-if="!stateEdit.name" class="fs-14 fw-medium text-padding">
                                    {{ formProfile.first_name }} {{ formProfile.last_name }}
                                </span>
                                <div v-else class="d-flex w-100 gap-2">
                                    <BaseInput v-model="formProfile.first_name" :error="formProfile.errors.last_name" class="w-100" />
                                    <BaseInput v-model="formProfile.last_name" :error="formProfile.errors.last_name" class="w-100" />
                                </div>
                            </b-col>
                            <b-col cols="3" class="text-end">
                                <i
                                    v-if="!stateEdit.name"
                                    class="ri-edit-box-line text-royal-blue hover-element"
                                    @click="changeStateEdit('name')"
                                />

                                <div v-else class="d-flex justify-content-end gap-2">
                                    <BaseButton t-key="save" size="md" type="submit" />
                                    <BaseButton t-key="cancel-save" size="md" variant="light-yellow" @click="stateEdit.name = false" />
                                </div>

                            </b-col>
                        </b-row>
                    </b-col>
                    <b-col cols="12">
                        <b-row class="align-items-center">
                            <b-col cols="3">
                                <Text
                                    t-key="page.settings.profile.basic-information.items.1"
                                    class="fs-14 fw-medium text-dim-gray"
                                />
                            </b-col>
                            <b-col cols="6">
                                <span
                                    v-if="!stateEdit.birth"
                                    class="fs-14 fw-medium text-padding"
                                >
                                    {{ formProfile.birth_at ?? '-' }}
                                </span>
                                <DateTimePicker v-else v-model="formProfile.birth_at" />
                            </b-col>
                            <b-col cols="3" class="text-end">
                                <i
                                    v-if="!stateEdit.birth"
                                    class="ri-edit-box-line text-royal-blue hover-element"
                                    @click="changeStateEdit('birth')"
                                />

                                <div v-else class="d-flex justify-content-end gap-2">
                                    <BaseButton t-key="save" size="md" type="submit" />
                                    <BaseButton t-key="cancel-save" size="md" variant="light-yellow" @click="stateEdit.birth = false" />
                                </div>
                            </b-col>
                        </b-row>
                    </b-col>
                    <b-col cols="12">
                        <b-row class="align-items-center">
                            <b-col cols="3">
                                <Text
                                    t-key="page.settings.profile.basic-information.items.2"
                                    class="fs-14 fw-medium text-dim-gray"
                                />
                            </b-col>
                            <b-col cols="6">
                                <span
                                    v-if="!stateEdit.gender"
                                    class="fs-14 fw-medium text-padding"
                                >
                                    {{ formProfile?.gender ? formProfile.gender.capitalize() : '-' }}
                                </span>

                                <BaseSelect
                                    v-else
                                    v-model="formProfile.gender"
                                    :options="genders"
                                />
                            </b-col>
                            <b-col cols="3" class="text-end">
                                <i
                                    v-if="!stateEdit.gender"
                                    class="ri-edit-box-line text-royal-blue hover-element"
                                    @click="changeStateEdit('gender')"
                                />

                                <div v-else class="d-flex justify-content-end gap-2">
                                    <BaseButton t-key="save" size="md" type="submit" />
                                    <BaseButton t-key="cancel-save" size="md" variant="light-yellow" @click="stateEdit.gender = false" />
                                </div>
                            </b-col>
                        </b-row>
                    </b-col>
                    <b-col cols="12">
                        <b-row class="align-items-center">
                            <b-col cols="3">
                                <Text
                                    t-key="page.settings.profile.basic-information.items.3"
                                    class="fs-14 fw-medium text-dim-gray"
                                />
                            </b-col>
                            <b-col cols="6">
                                <span
                                    v-if="!stateEdit.timezone"
                                    class="fs-14 fw-medium text-padding"
                                >
                                    {{ formProfile?.timezone ? formProfile.timezone.capitalize() : '-' }}
                                </span>

                                <BaseSelect
                                    v-else
                                    v-model="formProfile.timezone"
                                    :options="timezones"
                                />
                            </b-col>
                            <b-col cols="3" class="text-end">
                                <i
                                    v-if="!stateEdit.timezone"
                                    class="ri-edit-box-line text-royal-blue hover-element"
                                    @click="changeStateEdit('timezone')"
                                />

                                <div v-else class="d-flex justify-content-end gap-2">
                                    <BaseButton t-key="save" size="md" type="submit" />
                                    <BaseButton t-key="cancel-save" size="md" variant="light-yellow" @click="stateEdit.timezone = false" />
                                </div>
                            </b-col>
                        </b-row>
                    </b-col>
                    <b-col cols="12">
                        <b-row class="align-items-center">
                            <b-col cols="3">
                                <Text
                                    t-key="page.settings.profile.basic-information.items.4"
                                    class="fs-14 fw-medium text-dim-gray"
                                />
                            </b-col>
                            <b-col cols="6">
                                <span
                                    v-if="!stateEdit.langs"
                                    class="fs-14 fw-medium text-padding"
                                >
                                    {{ formProfile?.languages ? formProfile.languages.capitalize() : '-' }}
                                </span>

                                <BaseSelect
                                    v-else
                                    v-model="formProfile.languages"
                                    :options="languages"
                                />
                            </b-col>
                            <b-col cols="3" class="text-end">
                                <i
                                    v-if="!stateEdit.langs"
                                    class="ri-edit-box-line text-royal-blue hover-element"
                                    @click="changeStateEdit('langs')"
                                />

                                <div v-else class="d-flex justify-content-end gap-2">
                                    <BaseButton t-key="save" size="md" type="submit" />
                                    <BaseButton t-key="cancel-save" size="md" variant="light-yellow" @click="stateEdit.langs = false" />
                                </div>
                            </b-col>
                        </b-row>
                    </b-col>
                </b-row>
            </form>
        </Card>
</template>

<style scoped>

</style>