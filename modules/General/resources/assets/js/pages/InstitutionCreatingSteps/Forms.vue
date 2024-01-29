<script setup>
import AppLayout from "~/Layouts/AppLayout.vue";
import StepNavigation from "$module@general/pages/InstitutionCreatingSteps/Partials/StepNavigation.vue";
import helpers from "~/scripts/helpers/helpers.js";

const {program} = defineProps({
    program: {
        type: String,
    }
})

let { sendForm } = helpers;

let activeTabArrow = ref(1)

const user = computed(() => usePage().props.auth);

const steps = [
    {number:1, name: 'Basic Information', component: defineAsyncComponent({loader: () => import('../InstitutionCreatingSteps/Steps/BasicInformation.vue')})},
    {number:2, name: 'Advance Information', component: defineAsyncComponent({loader: () => import('../InstitutionCreatingSteps/Steps/AdvanceInformation.vue')})},
    {number:3, name: 'Curriculum', component: defineAsyncComponent({loader: () => import('../InstitutionCreatingSteps/Steps/Curriculum.vue')})},
    {number:4, name: 'Assignments', component: defineAsyncComponent({loader: () => import('../InstitutionCreatingSteps/Steps/Assignments.vue')})},
    {number:5, name: 'Publish Course', component: defineAsyncComponent({loader: () => import('../InstitutionCreatingSteps/Steps/PublishCourse.vue')})},
]

const form = useForm({
    title: '',
    course_type: '',
    language: '',
    seo_description: '',
    thumbnail: '',
    cover_image: '',
    duration_minutes: '',
    demo_video: '',
    description: '',
    program,

    duration: '',
    tags:[],
    category_id:[],
    category_filters:[],
});

const emitToggle = (tab) => activeTabArrow.value = tab;

const disabledBtn = computed(() => {
    //
    // if(activeTabArrow.value === 1) {
    //     return false;
    // }
    //
    // if(activeTabArrow.value === 2) {
    //     return false;
    // }
    //
    // return true;
})

const send = () => {
    activeTabArrow.value = activeTabArrow.value + 1;
    // sendForm({ form, url: route("general."+user.value.institution_type+".add-step.store"), toObject: true },
    //     (response, error) => {
            // if (!error && response.data) window.location.reload();
        // }
    // )
}

const preview = () => activeTabArrow.value = activeTabArrow.value - 1;

</script>

<template>
    <AppLayout :title="'add.' + program ">
        <StepNavigation @step="emitToggle" :tabsMenu="steps" :activeTabArrow="activeTabArrow" :lastNumberTab="steps.length"/>
        <div class="create-form-material">
            <div class="tab-content">
                <div v-for="step in steps" class="tab-pane fade" :class="activeTabArrow === step.number && 'show active'"
                     id="steparrow-gen-info" role="tabpanel" aria-labelledby="steparrow-gen-info-tab">
                    <div class="step-component">
                        <KeepAlive>
                            <component :is="step.component" :item="step" :form="form"/>
                        </KeepAlive>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between gap-3 mt-4">
                <BaseButton icon="ri-arrow-left-line" @click="preview" :disabled="activeTabArrow  <= 1" t-key="preview" class="preview" />
                <BaseButton icon="ri-arrow-right-line" @click="send" :disabled="disabledBtn || activeTabArrow > steps.length" t-key="continue" class="continue" />
            </div>
        </div>
    </AppLayout>
</template>

<style scoped>
.create-form-material {
    & .preview, & .continue {
        width: 120px !important;
    }
}
</style>
