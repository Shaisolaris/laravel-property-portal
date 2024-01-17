<script setup>
import { useForm } from "@inertiajs/vue3";


const { user } = defineProps({
    user: {
        type: Object,
        required: true
    }
});

const stateEdit = ref({
    email: false,
    password: false,
});


const formPassword = useForm({
    current_password: null,
    new_password: null,
    new_password_confirmation: null,
});

const formEmail = useForm({
    email: user?.email,
});


const submitEmail = () => {
    formEmail.put(route('settings.email-password'), {
        onSuccess: () => {
            stateEdit.value.email = false;
        }
    });
}

const submitPassword = () => {
    formPassword.put(route('settings.email-password'), {
        onSuccess: () => {
            stateEdit.value.password = false;
        }
    });
}
</script>

<template>
    <b-col cols="12" md="8">
        <Card>
            <b-row class="g-3">
                <b-col cols="12">
                    <form @submit.prevent="submitEmail" class="d-flex flex-column gap-3">
                        <b-row class="align-items-center">
                            <b-col cols="3">
                                <Text t-key="label.email" class="text-dim-gray fs-14 fw-medium" />
                            </b-col>
                            <b-col cols="6">
                                <span
                                    v-if="!stateEdit.email"
                                    class="fs-14 fw-medium text-padding"
                                >
                                    {{ formEmail.email }}
                                </span>
                                <BaseInput
                                    v-else
                                    v-model="formEmail.email"
                                    :error="formEmail.errors.email"
                                />
                            </b-col>
                            <b-col cols="3" class="text-end">
                                <Text
                                    v-if="!stateEdit.email"
                                    t-key="action.change"
                                    class="text-royal-blue fs-14 fw-medium hover-element"
                                    @click="stateEdit.email = !stateEdit.email"
                                />

                                <template v-else>
                                    <button type="submit" class="button-without-all">
                                        <i class="ri-check-line text-success fs-18"></i>
                                    </button>

                                    <button
                                        type="button"
                                        class="button-without-all"
                                        @click="stateEdit.email = false"
                                    >
                                        <i class="ri-close-fill text-danger fs-18"></i>
                                    </button>
                                </template>
                            </b-col>
                        </b-row>
                    </form>
                </b-col>
                <b-col cols="12">
                    <form @submit.prevent="submitPassword" class="d-flex flex-column gap-3">
                        <b-row :class="{'align-items-center': !stateEdit.password}">
                            <b-col cols="3">
                                <Text t-key="label.password" class="text-dim-gray fs-14 fw-medium" />
                            </b-col>
                            <b-col cols="6">
                                            <span
                                                v-if="!stateEdit.password"
                                                class="fs-14 fw-medium text-padding"
                                            >
                                                *********
                                            </span>
                                <div v-else class="d-flex flex-column gap-3">
                                    <BaseInput
                                        v-model="formPassword.current_password"
                                        :error="formPassword.errors.current_password"
                                        type="password"
                                        placeholder="current_password"
                                    />
                                    <BaseInput
                                        v-model="formPassword.new_password"
                                        :error="formPassword.errors.new_password"
                                        type="password"
                                        placeholder="new_password"
                                    />
                                    <BaseInput
                                        v-model="formPassword.new_password_confirmation"
                                        :error="formPassword.errors.new_password_confirmation"
                                        type="password"
                                        placeholder="new_password_confirmation"
                                    />
                                </div>
                            </b-col>
                            <b-col cols="3" class="text-end">
                                <Text
                                    v-if="!stateEdit.password"
                                    t-key="action.update"
                                    class="text-royal-blue fs-14 fw-medium hover-element"
                                    @click="stateEdit.password = !stateEdit.password"
                                />
                                <template v-else>
                                    <button type="submit" class="button-without-all">
                                        <i class="ri-check-line text-success fs-18"></i>
                                    </button>

                                    <button
                                        type="button"
                                        class="button-without-all"
                                        @click="stateEdit.password = false; formPassword.reset()"
                                    >
                                        <i class="ri-close-fill text-danger fs-18"></i>
                                    </button>
                                </template>
                            </b-col>
                        </b-row>
                    </form>
                </b-col>
            </b-row>
        </Card>
    </b-col>
</template>

<style scoped>

</style>