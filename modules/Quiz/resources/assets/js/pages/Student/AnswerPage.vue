<script setup>
import AppLayout from "~/Layouts/AppLayout.vue";
import animationData from "~/json/widgets/kbtmbyzy.json";
import ShortCard from "$module@quiz/pages/Student/CardAnswers/ShortCard.vue";
import SingleCard from "$module@quiz/pages/Student/CardAnswers/SingleCard.vue";
import YesOrNoCard from "$module@quiz/pages/Student/CardAnswers/YesOrNoCard.vue";
import MultipleCard from "$module@quiz/pages/Student/CardAnswers/MultipleCard.vue";
import { EXPECTED } from "~/scripts/utils/utils.js";


const props = defineProps({
    quiz: {
        type: Object,
        required: true
    },
    answers: {
        type: Object,
        required: true
    },
    homeworkData: {
        type: Object,
        required: true
    },
    answerGroupViewType: String
});
const defaultOptions = ref({ animationData: animationData });
const letters = computed(() => useStore().getters['general/getLetters']);
const statistics = ref([
    {
        icon: 'ri-question-line',
        value: props.quiz.questions.length,
        tKey: 'block-statistics.quiz.0'
    },
    {
        icon: 'mdi mdi-file-clock',
        value: props.quiz.pass_mark,
        tKey: 'block-statistics.quiz.1'
    },
    {
        icon: 'bx bx-pointer',
        value: `${props.homeworkData.attempts}/${props.quiz.attempts}`,
        tKey: 'block-statistics.quiz.2'
    },
    {
        icon: 'ri-time-fill',
        value: props.quiz.duration_minutes,
        tKey: 'block-statistics.quiz.3'
    },
]);
const form = useForm({
    answers: props.answers,
});


const setClassCard = (student_answer) => {
    return props.homeworkData.is_question_answers ? `is-correct-answer-${student_answer.is_correct}` : '';
}

const startTracking = () => {
    router.post(route('quiz.answer.start', { 'quiz': props.quiz }));
}

const submit = () => {
    form.post(route('quiz.answer.submit-answer', { 'quiz': props.quiz }), {
        onError: errors => console.log(errors),
    });
}

const timeOver = () => {
    submit();
}
</script>

<template>
    <AppLayout title="quiz">
        <template #breadcrumbs-right>
            <BaseButton :route="route('quiz.index')" t-key="quiz-list" icon="ri-arrow-left-line" />
        </template>

        <StatisticsBlock :items="statistics" cols="col-12 col-md-6 col-lg-3" />

        <b-row class="pt-3">
            <b-col v-if="homeworkData.is_timer" xxl="3">
                <BCard no-body>
                    <BCardBody class="text-center">
                        <h6 class="card-title mb-3 flex-grow-1 text-start">
                            <Text tag="span" t-key="time-tracking" />
                        </h6>

                        <template v-if="homeworkData.timer.max_time_seconds && homeworkData.status === EXPECTED">
                            <div class="mb-2">
                                <lottie
                                    colors="primary:#25a0e2,secondary:#00bd9d"
                                    :options="defaultOptions"
                                    :height="90"
                                    :width="90"
                                />
                            </div>
                            <h3 class="mb-2">
                                <Timer
                                    :max-time-seconds="homeworkData.timer.max_time_seconds"
                                    :time-limit="homeworkData.timer.time_limit"
                                    :datatime-value="homeworkData.started_at"
                                    @time-over="timeOver"
                                />
                                <Text tag="span" t-key="min" class="ms-2" />
                            </h3>
                        </template>

                        <div
                            v-if="!homeworkData.timer.max_time_seconds || quiz.is_available_attempts"
                            class="hstack gap-2 justify-content-start"
                        >
                            <BaseButton
                                size="sm"
                                icon="ri-play-circle-line"
                                t-key="start"
                                variant="beige-blue"
                                @click="startTracking"
                            />
                        </div>
                    </BCardBody>
                </BCard>
            </b-col>
        </b-row>

        <template v-if="answerGroupViewType === 'default'">
            <form
                v-if="homeworkData.timer.max_time_seconds || (homeworkData.is_questions || homeworkData.is_question_answers)"
                class="pt-3"
                @submit.prevent="submit"
            >
                <BCard>
                    <b-row class="pt-3 gy-3">
                        <b-col cols="12">
                            <b-row class="gy-3">
                                <b-col v-for="(question, typeIndex) in form.answers" cols="12">
                                    <b-row class="gy-3">
                                        <b-col v-for="(item, itemIndex) in question" cols="12">
                                            <BCard class="default-bg-card" :class="setClassCard(item.student_answer)">
                                                <ShortCard
                                                    v-if="typeIndex === 'short'"
                                                    :form="form.answers[typeIndex][itemIndex]"
                                                    :index="itemIndex"
                                                    :show-buttons="homeworkData.enabled_buttons"
                                                />
                                                <SingleCard
                                                    v-if="typeIndex === 'single'"
                                                    :form="form.answers[typeIndex][itemIndex]"
                                                    :letters="letters"
                                                    :index="itemIndex"
                                                    :show-buttons="homeworkData.enabled_buttons"
                                                />
                                                <MultipleCard
                                                    v-if="typeIndex === 'multiple'"
                                                    :form="form.answers[typeIndex][itemIndex]"
                                                    :letters="letters"
                                                    :index="itemIndex"
                                                    :show-buttons="homeworkData.enabled_buttons"
                                                />
                                                <YesOrNoCard
                                                    v-if="typeIndex === 'yes_or_no'"
                                                    :form="form.answers[typeIndex][itemIndex]"
                                                    :letters="letters"
                                                    :index="itemIndex"
                                                    :show-buttons="homeworkData.enabled_buttons"
                                                />
                                            </BCard>
                                        </b-col>
                                    </b-row>
                                </b-col>
                            </b-row>
                        </b-col>
                    </b-row>
                </BCard>

                <div class="d-flex justify-content-end pt-3">
                    <BaseButton
                        v-if="homeworkData.is_questions"
                        :disabled="form.processing || !homeworkData.is_questions"
                        t-key="submit"
                        size="lg"
                        type="submit"
                        @click="form.type = 'manually'"
                    />
                </div>
            </form>
        </template>
        <template v-else>
            <b-col v-for="(answer, index) in answers" cols="12" class="pt-3">
                <BCard no-body>
                    <BCardHeader v-b-toggle="`collapse-${index}`" class="border-none hover-element">
                        <div
                            class="d-flex w-100 align-items-center justify-content-between hover-element"
                        >
                            <div class="d-flex align-items-center ">
                                <i class="las la-grip-lines me-2" />
                                {{ answer.question }} ?
                            </div>
                        </div>
                    </BCardHeader>

                    <BCollapse :id="`collapse-${index}`" :visible="true">
                        <BCardBody>
                            <div v-if="typeof answer.answers === 'string'">
                                <BaseTextarea v-model="answer.answers" class="pointer-events-none" />
                            </div>

                            <b-row class="gy-3" v-else>
                                <b-col v-for="(answerItem, answerItemIndex) in answer.answers" cols="12">
                                    <div class="d-flex align-items-center gap-3 justify-content-between">
                                        <div class="flex-grow-1">
                                            <BaseInput v-model="answerItem.answer" class="pointer-events-none" />
                                        </div>
                                        <div>
                                            <BaseButton :class="['pointer-events-none', {'bg-white border-gainsboro': answerItem.is_correct}]">
                                                <template #text>
                                                    <i :class="['ri-check-line', {'text-royal-blue': answerItem.is_correct}]" />
                                                </template>
                                            </BaseButton>
                                        </div>
                                    </div>
                                </b-col>
                            </b-row>
                        </BCardBody>
                    </BCollapse>
                </BCard>
            </b-col>
        </template>
    </AppLayout>
</template>

<style scoped>
.is-correct-answer-yes {
    border: 1px solid #1B9930 !important;
}

.is-correct-answer-no {
    border: 1px solid #f06548 !important;
}

.is-correct-answer-partially {
    border: 1px solid #FFBC0A !important;
}
</style>