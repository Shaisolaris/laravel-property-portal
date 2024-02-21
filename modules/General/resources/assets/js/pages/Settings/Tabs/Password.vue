<script setup>
const user = computed(() => usePage().props.auth);

const formPassword = useForm({
    current_password: null,
    new_password: null,
    new_password_confirmation: null,
});

const formEmail = useForm({
    email: user.value?.email,
});


const submitEmail = () => {
    formEmail.put(route('general.settings.email-password'));
}

const submitPassword = () => {
    formPassword.put(route('general.settings.email-password'), {
        onSuccess: () => {
            formPassword.reset();
        }
    });
}
</script>

<template>
    <BCard>
        <b-row class="g-3">
            <b-col cols="12">
                <form @submit.prevent="submitEmail">
                    <Collapse :show-button="false" id="collapse-email" class="multi-collapse" visible>
                        <template #body>
                            <b-row class="align-items-center">
                                <b-col cols="3">
                                    <Text t-key="label.email" class="text-dim-gray fs-14 fw-medium" />
                                </b-col>
                                <b-col cols="6">
                                <span class="fs-14 fw-medium text-padding">
                                    {{ formEmail.email }}
                                </span>
                                </b-col>
                                <b-col cols="3" class="text-end">
                                    <BaseButton
                                        v-b-toggle.collapse-email.collapse-email-edit
                                        class="button-without-all p-0"
                                    >
                                        <template #text>
                                            <Text
                                                tag="span"
                                                t-key="action.change"
                                                class="text-royal-blue fs-14 fw-medium hover-element"
                                            />
                                        </template>
                                    </BaseButton>
                                </b-col>
                            </b-row>
                        </template>
                    </Collapse>
                    <Collapse :show-button="false" id="collapse-email-edit" class="multi-collapse">
                        <template #body>
                            <b-row class="align-items-center">
                                <b-col cols="3">
                                    <Text t-key="label.email" class="text-dim-gray fs-14 fw-medium" />
                                </b-col>
                                <b-col cols="6">
                                    <BaseInput
                                        v-model="formEmail.email"
                                        :error="formEmail.errors.email"
                                    />
                                </b-col>
                                <b-col cols="3" class="text-end">
                                    <div class="d-flex justify-content-end gap-2">
                                        <BaseButton
                                            v-b-toggle.collapse-email.collapse-email-edit
                                            t-key="save"
                                            size="md"
                                            type="submit"
                                        />

                                        <BaseButton
                                            v-b-toggle.collapse-email.collapse-email-edit
                                            t-key="cancel-save"
                                            size="md"
                                            variant="light-yellow"
                                        />
                                    </div>
                                </b-col>
                            </b-row>
                        </template>
                    </Collapse>
                </form>
            </b-col>
            <b-col cols="12">
                <form @submit.prevent="submitPassword">
                    <Collapse :show-button="false" id="collapse-password" class="multi-collapse" visible>
                        <template #body>
                            <b-row class="align-items-center">
                                <b-col cols="3">
                                    <Text t-key="label.password" class="text-dim-gray fs-14 fw-medium" />
                                </b-col>
                                <b-col cols="6">
                                    <span class="fs-14 fw-medium text-padding">
                                        *********
                                    </span>
                                </b-col>
                                <b-col cols="3" class="text-end">
                                    <BaseButton
                                        v-b-toggle.collapse-password.collapse-password-edit
                                        class="button-without-all p-0"
                                    >
                                        <template #text>
                                            <Text
                                                tag="span"
                                                t-key="action.update"
                                                class="text-royal-blue fs-14 fw-medium hover-element"
                                            />
                                        </template>
                                    </BaseButton>
                                </b-col>
                            </b-row>
                        </template>
                    </Collapse>

                    <Collapse :show-button="false" id="collapse-password-edit" class="multi-collapse">
                        <template #body>
                            <b-row>
                                <b-col cols="3">
                                    <Text t-key="label.password" class="text-dim-gray fs-14 fw-medium" />
                                </b-col>
                                <b-col cols="6">
                                    <div class="d-flex flex-column gap-3">
                                        <BaseInput
                                            v-model="formPassword.current_password"
                                            :error="formPassword.errors.current_password"
                                            type="password"
                                            placeholder="current-password"
                                        />
                                        <BaseInput
                                            v-model="formPassword.new_password"
                                            :error="formPassword.errors.new_password"
                                            type="password"
                                            placeholder="new-password"
                                        />
                                        <BaseInput
                                            v-model="formPassword.new_password_confirmation"
                                            :error="formPassword.errors.new_password_confirmation"
                                            type="password"
                                            placeholder="new-password-confirmation"
                                        />
                                    </div>
                                </b-col>
                                <b-col cols="3" class="text-end">
                                    <div class="d-flex justify-content-end gap-2">
                                        <BaseButton
                                            v-b-toggle.collapse-password.collapse-password-edit
                                            t-key="save"
                                            size="md"
                                            type="submit"
                                        />
                                        <BaseButton
                                            v-b-toggle.collapse-password.collapse-password-edit
                                            t-key="cancel-save"
                                            size="md"
                                            variant="light-yellow"
                                            @click="formPassword.reset()"
                                        />
                                    </div>
                                </b-col>
                            </b-row>
                        </template>
                    </Collapse>
                </form>
            </b-col>
        </b-row>
    </BCard>
</template>

<style scoped>

</style>