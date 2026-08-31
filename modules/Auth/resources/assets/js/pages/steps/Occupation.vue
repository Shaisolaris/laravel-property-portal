<script setup>
import AuthLayout from "../../layouts/AuthLayout.vue";
import helpers from "~/scripts/helpers/helpers.js";
import FooterSteps from "./Partials/FooterSteps.vue";

let {sendForm} = helpers;

defineProps({
    occupations: Object,
    experience_levels: Object,
})

const form = useForm({
    occupations: [],
    experience_level: "",
});

let disabledSubmit = computed(() => form.occupations.length > 0 && form.experience_level != "")

const selectOccupation = (occupation) => {

    const {id,name} = occupation;

    if (!checkIsSetOccupation(id)) {
        form.occupations.push({name, id})
    } else {
        form.occupations = form.occupations.filter(occupation => occupation.id != id)
    }
}

const checkIsSetOccupation = (id) => form.occupations.find(occupation => occupation.id === id)

const send = () => sendForm({form, url: route("registration.occupations.store"), toObject: true},
    (response) => {
        if (response.data) {
            window.location.reload()
        }
    }
)
</script>

<template>
    <AuthLayout :withoutRightContent="true">
        <template #right-content>
            <div class="container-fluid custom-container justify-content-between align-items-center mt-5">
                <b-row :no-gutters="true">
                    <b-col cols="12">
                        <div class="mb-5">
                            <h1 class="text-black">
                                <Text t-key="page.register.text-10" tag="span"/>
                            </h1>
                            <b-col cols="5">
                                <p class="text-dim-gray fs-14 mt-3">
                                    <Text t-key="page.register.text-2" tag="span"/>
                                </p>
                            </b-col>
                        </div>
                        <div class="mb-5">
                            <h4 class="text-black mb-4">
                                <Text t-key="page.register.text-12" tag="span"/>
                            </h4>
                            <div class="gap-3">
                                <div v-for="(occupation) in occupations"
                                     :key="occupation.id"
                                     @click="selectOccupation(occupation)"
                                     :class="[
                                         checkIsSetOccupation(occupation.id) ? 'active shadow-dark-blue' : '',
                                         'occupation-btn btn border-2 border-black m-1'
                                     ]">
                                    <span>
                                        <Icon name="svg-experience" width="24" height="24" />
                                    </span>
                                    <span class="mx-2">{{ occupation.name }}</span>
                                    <span class="box-checker"><i class="ri-checkbox-circle-line"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5">
                            <h4 class="text-black mb-4">
                                <Text t-key="page.register.text-13" tag="span"/>
                            </h4>
                            <div>
                                <div v-for="(value, level) in experience_levels"
                                     :key="level"
                                     :class="[
                                         form.experience_level === level ? 'active shadow-dark-blue' : '',
                                         'occupation-btn btn border-2 border-black m-1'
                                     ]"
                                     @click="form.experience_level = level">
                                    <div class="d-flex justify-content-center align-items-center gap-2">
                                        <div class="circle-box">
                                            <div class="circle-box-body"></div>
                                        </div>
                                        <span>{{ value }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </b-col>
                </b-row>
            </div>
            <FooterSteps :disabledSubmit="disabledSubmit || form.processing" @send="send"/>
        </template>
    </AuthLayout>
</template>

<style scoped lang="scss">
.occupation-btn, .experience_level-btn {
    border-radius: 20px;
    padding: 20px;
    background: #F7F6F2;
    font-size: 16px;

    &.active {
        background: var(--in-light-blue);
        color: white;

        & .circle-box .circle-box-body {
            background: #001427;
            height: 11px;
            width: 11px;
            border-radius: 50%;
        }
    }

    & .circle-box {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 17px;
        height: 17px;
        border-radius: 50%;

        border: 1px solid rgba(var(--in-black-rgb), var(--in-border-opacity));
    }

    & .box-checker {
        color: #F7F6F2
    }
}
</style>
