<script setup>
import { useToast } from "~/scripts/helpers/useToast.js";
import { map, flatMap } from "lodash";
import AppLayout from "~/Layouts/AppLayout.vue";
import StepNavigation from "$module@general/pages/HandlerSteps/Partials/StepNavigation.vue";

const props = defineProps({
    program: String,
    subject: String,
    eiClass: String,
    title: String,
    categories: Array,
    assignments: {type: Array, default: [] },
    quizzes: {type: Array, default: [] },
    contents: Array,
    levels: Array,
    tags: Array,
    content_types: Array,
    steps: Array,
    grades: Array,
    quizTypes: Array,
    quiz: Array,
});
const { t } = useI18n();
const { errorMessage } = useToast();

let actualStep = ref(props.steps[0].number)
let activeTabArrow = ref(actualStep.value);
let stepsComponent = ref();
let lectures = ref([]);

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
    status: 'draft',
    subject: props?.subject ?? null,
    eiClass: props?.eiClass ?? null,
    contents: props.contents,

    assignments: props?.assignments.length ? props.assignments : [{
        id: parseInt(Math.random() * 1000),
        name: 'Assignment name',
        language: '',
        lecture_id: '',
        is_expanded: false,
        start_work_datetime: '',
        end_work_datetime: '',
        total_score: '',
        passing_score: '',
        description: '',
        materials: [ { id: parseInt(Math.random() * 1000), video: '', file: '' } ],
    }],

    quizzes: props?.quizzes.length ? props.quizzes : [
        {
            name: 'Quiz 1',
            lecture_id: '',
            language: '',
            grade: '',
            total_score: '',
            description: '',
            start_work_datetime: '',
            end_work_datetime: '',
            pass_mark: 0,
            duration_minutes: 0,
            points_no_answer: 0,
            points_wrong_answer: 0,
            attempts: 0,
            questions: {}
        }
    ],

    name_step: 'base_information',
    program,
});

const emitToggle = (tab) => activeTabArrow.value = tab;

const stepErrors = (errors) => {
    for (const key in errors) {
        if ([ 'assignments' ].includes(key) || key.includes('assignments.')) {
            errorMessage('frontend', 'assignments');
            break;
        }

        if ([ 'quizzes' ].includes(key) || key.includes('quizzes.')) {
            errorMessage('frontend', 'quizzes');
            break;
        }
    }
}

const send = () => {
    let url = route("general.institution.validate.step", [ program ]);

    form.name_step = currentStep.value.slug
    form.benefits = reactive(typeof form.benefits === 'string' ? JSON.parse(form.benefits) : form.benefits)

    form.post(url, {
        preserveScroll: false,
        onSuccess: () => {
            activeTabArrow.value = activeTabArrow.value + 1;
            form.name_step = currentStep.value.slug
            mountComponent()
        },
        onError: errors => stepErrors(errors)
    });
}

const submit = (status) => {
    let url = route("general.institution.add-step.store", [ program ]);

    form.name_step = currentStep.value.slug
    form.status = status;

    form.post(url, {
        onError: errors => stepErrors(errors)
    });
}

const preview = () => {
    activeTabArrow.value = activeTabArrow.value - 1;
    form.name_step = currentStep.value.slug
    mountComponent()
}

const setLectures = () => {
    lectures.value = flatMap(form.contents, section =>
        map(section.lectures, lecture => ({
            label: lecture.name,
            value: lecture.id
        }))
    );
}

const mountComponent = () => {
    stepsComponent.value = defineAsyncComponent({
        loader: () => import('../HandlerSteps/Steps/' + currentStep.value.component + '.vue'),
        // loadingComponent: import('~/components/Loaders/Spinner.vue'),
    })
}

onMounted(() => {
    mountComponent()
    setLectures()
})

watch(
    () => form.contents,
    () => {
        setLectures();
    }, { deep: true }
);

</script>

<template>
    <AppLayout :title="title">
        <StepNavigation
            :tabsMenu="steps"
            :activeTabArrow="activeTabArrow"
            :lastNumberTab="steps.length"
            @step="emitToggle"
        />
        <b-col cols="12" md="10">
            <keep-alive>
                <div :key="activeTabArrow">
                    <div class="tab-content">
                        <div
                            v-for="step in steps"
                            class="tab-pane fade"
                            :class="activeTabArrow === step.number && 'show active'"
                            id="steparrow-gen-info"
                            role="tabpanel"
                            aria-labelledby="steparrow-gen-info-tab">
                                <component
                                    :is="stepsComponent"
                                    :form="form"
                                    :tags="tags"
                                    :languages="languages"
                                    :levels="levels"
                                    :content_types="content_types"
                                    :categories="categories"
                                    :lectures="lectures"
                                    :grades="grades"
                                    :quizTypes="quizTypes"
                                />
                        </div>
                    </div>
                    <div class="d-flex justify-content-between gap-3 mt-4">
                        <BaseButton
                            :disabled="activeTabArrow <= actualStep"
                            icon="ri-arrow-left-line"
                            t-key="preview"
                            class="wp-120"
                            @click="preview"
                        />
                        <template v-if="currentStep.slug == 'assignments'">
                            <div class="d-flex gap-2">
                                <BaseButton @click="submit('review')" t-key="send-for-review" class="wp-150" />
                                <BaseButton @click="submit('draft')" t-key="send-as-draft" class="wp-150" />
                            </div>
                        </template>
                        <BaseButton
                            v-else
                            :disabled="form.processing"
                            icon-right="ri-arrow-right-line"
                            t-key="continue"
                            class="wp-120"
                            @click="send"
                        />
                    </div>
                </div>
            </keep-alive>
        </b-col>
    </AppLayout>
</template>

<style scoped>
.v-enter-active,
.v-leave-active {
    transition: opacity 0.5s ease;
}

.v-enter-from,
.v-leave-to {
    opacity: 0;
}
</style>
