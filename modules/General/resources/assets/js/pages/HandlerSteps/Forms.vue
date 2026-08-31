<script setup>
import AppLayout from "~/Layouts/AppLayout.vue";
import StepNavigation from "$module@general/pages/HandlerSteps/Partials/StepNavigation.vue";

const { t } = useI18n();

const props = defineProps({
    program: String,
    subject_uuid: String,
    categories: Array,
    levels: Array,
    tags: Array,
    content_types: Array,
    steps: Array,
    lectures: Array,
    grades: Array,
    quizTypes: Array,
    quiz: Array,
});

let actualStep = ref(props.steps[0].number)
let activeTabArrow = ref(actualStep.value);

const store = useStore();
const user = computed(() => usePage().props.auth);
const currentStep = computed(() => props.steps.find(step => step.number === activeTabArrow.value));
const languages = computed(() => store.getters['general/getLanguages']);
const program = reactive(props.program);

const form = useForm({
    title: '',
    type: '',
    language: '',
    seo_description: '',
    thumbnail: '',
    cover_image: '',
    base_duration: '',
    demo_video: '',
    description: '',
    benefits: [ { value: '', type: 'text' } ],

    advance_duration: '',
    tags: [],
    category_id: '',
    levels: [],
    languages: [],
    topics: [],

    i_agree: false,
    message: '',

    status: 'draft',
    model_id: props?.subject_uuid ?? null,

    contents: [{
        title: 'Section 1',
        name: "Section name",
        lectures: reactive([{
            id: parseInt(Math.random() * 1000),
            name: t('lecture-name'),
            video: "",
            description: "",
            note: "",
        }])
    }],

    assignments: [{
        id: parseInt(Math.random() * 1000),
        name: 'Assignment name',
        language: '',
        collapse: false,
        start_work_datetime: '',
        end_work_datetime: '',
        total_score: '',
        passing_score: '',
        description: '',
        materials: [{id: parseInt(Math.random() * 1000),video: '',file: ''}],
    }],

    name_step: 'base_information',
    program,
});


const emitToggle = (tab) => activeTabArrow.value = tab;

const send = () => {
    let url = route("general.institution.validate.step", [ program ]);

    form.name_step = currentStep.value.slug
    form.benefits = reactive(typeof form.benefits === 'string' ? JSON.parse(form.benefits) : form.benefits)

    form.post(url, {
        onSuccess: () => {
            activeTabArrow.value = activeTabArrow.value + 1;
            form.name_step = currentStep.value.slug
        }
    });
}

const submit = (status) => {
    let url = route("general.institution.add-step.store", [ program ]);

    form.name_step = currentStep.value.slug
    form.status = status;

    form.post(url);
}

const getComponentPath = (component_name) => {
    return defineAsyncComponent({
        loader: () => import('../HandlerSteps/Steps/'+component_name+'.vue'),
        // loadingComponent: import('~/components/Loaders/Spinner.vue'),
    })
}

const preview = () => {
    activeTabArrow.value = activeTabArrow.value - 1;
    form.name_step = currentStep.value.slug
}


</script>

<template>
    <AppLayout :title="'add.' + program ">
        <StepNavigation
            :tabsMenu="steps"
            :activeTabArrow="activeTabArrow"
            :lastNumberTab="steps.length"
            @step="emitToggle"
        />
        <b-col cols="12" md="10">
            <div class="create-form-material" :key="activeTabArrow">
            <div class="tab-content" :key="form.processing">
                <div
                    v-for="step in steps"
                    class="tab-pane fade"
                    :class="activeTabArrow === step.number && 'show active'"
                    id="steparrow-gen-info"
                    role="tabpanel"
                    aria-labelledby="steparrow-gen-info-tab"
                >
<!--                    <BasicInformation :form="form"-->
<!--                                      :tags="tags"-->
<!--                                      :languages="languages"-->
<!--                                      :levels="levels"-->
<!--                                      :content_types="content_types"-->
<!--                                      :categories="categories"/>-->
                    <component
                        :form="form"
                        :tags="tags"
                        :languages="languages"
                        :levels="levels"
                        :content_types="content_types"
                        :is="getComponentPath(step.component)"
                        :categories="categories"
                    />
                </div>
            </div>
            <div class="d-flex justify-content-between gap-3 mt-4">
                <BaseButton
                    :disabled="activeTabArrow <= actualStep"
                    icon="ri-arrow-left-line"
                    t-key="preview"
                    class="preview"
                    @click="preview"
                />
                <template v-if="currentStep.slug == 'assignments'">
                    <div class="d-flex gap-2">
                        <BaseButton @click="submit('review')" t-key="send-for-review" class="save" />
                        <BaseButton @click="submit('draft')" t-key="send-as-draft" class="save" />
                    </div>
                </template>
                <template v-else>
                    <BaseButton
                        :disabled="form.processing"
                        icon-right="ri-arrow-right-line"
                        t-key="continue"
                        class="continue"
                        @click="send"
                    />
                </template>
            </div>
        </div>
        </b-col>
    </AppLayout>
</template>

<style scoped>
.create-form-material {
    & .preview, & .continue {
        width: 120px !important;
    }

    & .save {
        width: 150px !important;
    }
}
</style>
