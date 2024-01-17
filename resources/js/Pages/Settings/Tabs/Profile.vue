<script setup>
import { useForm } from "@inertiajs/vue3";


const { user } = defineProps({
    user: {
        type: Object,
        required: true
    },
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
    first_name: user?.firstName,
    last_name: user?.lastName,
    gender: user?.gender ?? null,
    timezone: user?.timezone ?? null,
    birth_at: user?.birthAt ?? null,
    languages: user?.languages ?? null,
});


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
</script>

<template>
    <b-col cols="12" md="8">
        <Card>
            <Text t-key="page.settings.profile.profile-photo" class="fw-medium pb-3" />

            <div class="d-flex gap-4">
                <Avatar size="xl" rounded="circle" />

                <div class="pt-3 w-75 h-auto d-flex flex-column">
                    <div class="text-dim-gray fs-14">{{ user?.bio }}</div>
                    <div class="text-end mt-auto">
                        Upload
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
                                    @click="stateEdit.name = !stateEdit.name"
                                />

                                <template v-else>
                                    <button type="submit" class="button-without-all">
                                        <i class="ri-check-line text-success fs-18"></i>
                                    </button>
                                    <button
                                        type="button"
                                        class="button-without-all"
                                        @click="stateEdit.name = false"
                                    >
                                        <i class="ri-close-fill text-danger fs-18"></i>
                                    </button>
                                </template>

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
                                    @click="stateEdit.birth = !stateEdit.birth"
                                />

                                <template v-else>
                                    <button type="submit" class="button-without-all">
                                        <i class="ri-check-line text-success fs-18"></i>
                                    </button>
                                    <button
                                        type="button"
                                        class="button-without-all"
                                        @click="stateEdit.birth = false"
                                    >
                                        <i class="ri-close-fill text-danger fs-18"></i>
                                    </button>
                                </template>
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
                                    @click="stateEdit.gender = !stateEdit.gender"
                                />

                                <template v-else>
                                    <button type="submit" class="button-without-all">
                                        <i class="ri-check-line text-success fs-18"></i>
                                    </button>
                                    <button
                                        type="button"
                                        class="button-without-all"
                                        @click="stateEdit.gender = false"
                                    >
                                        <i class="ri-close-fill text-danger fs-18"></i>
                                    </button>
                                </template>
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
                                    :options="timezones.data"
                                />
                            </b-col>
                            <b-col cols="3" class="text-end">
                                <i
                                    v-if="!stateEdit.timezone"
                                    class="ri-edit-box-line text-royal-blue hover-element"
                                    @click="stateEdit.timezone = !stateEdit.timezone"
                                />

                                <template v-else>
                                    <button type="submit" class="button-without-all">
                                        <i class="ri-check-line text-success fs-18"></i>
                                    </button>
                                    <button
                                        type="button"
                                        class="button-without-all"
                                        @click="stateEdit.timezone = false"
                                    >
                                        <i class="ri-close-fill text-danger fs-18"></i>
                                    </button>
                                </template>
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
                                    @click="stateEdit.langs = !stateEdit.langs"
                                />

                                <template v-else>
                                    <button type="submit" class="button-without-all">
                                        <i class="ri-check-line text-success fs-18"></i>
                                    </button>
                                    <button
                                        type="button"
                                        class="button-without-all"
                                        @click="stateEdit.langs = false"
                                    >
                                        <i class="ri-close-fill text-danger fs-18"></i>
                                    </button>
                                </template>
                            </b-col>
                        </b-row>
                    </b-col>
                </b-row>
            </form>
        </Card>
    </b-col>
</template>

<style scoped>

</style>