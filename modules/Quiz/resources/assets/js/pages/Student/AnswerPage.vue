<script setup>
import AppLayout from "~/Layouts/AppLayout.vue";
import animationData from "~/json/widgets/kbtmbyzy.json";
import ShortCard from "$module@quiz/pages/CardAnswers/ShortCard.vue";
import MultipleCard from "$module@quiz/pages/CardAnswers/MultipleCard.vue";
import SingleCard from "$module@quiz/pages/CardAnswers/SingleCard.vue";
import YesOrNoCard from "$module@quiz/pages/CardAnswers/YesOrNoCard.vue";


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
    }
});
const defaultOptions = ref({ animationData: animationData });
const letters = [ 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z' ];
const form = useForm({
    answers: props.answers
});


const startTracking = () => {
    router.post(route('quiz.answer.start', { 'quiz': props.quiz }));
}

const componentName = (name) => {
    switch (name) {
        case 'single':
            return defineAsyncComponent({ loader: () => import('$module@quiz/pages/WrapSteps/QuestionStep/Cards/SingleCard.vue') });
        case 'multiple':
            return defineAsyncComponent({ loader: () => import('$module@quiz/pages/WrapSteps/QuestionStep/Cards/MultipleCard.vue') });
        case 'yes_or_no':
            return defineAsyncComponent({ loader: () => import('$module@quiz/pages/WrapSteps/QuestionStep/Cards/YesOrNoCard.vue') });
        case 'short':
            return defineAsyncComponent({ loader: () => import('$module@quiz/pages/WrapSteps/QuestionStep/Cards/ShortCard.vue') });
    }
}


const submit = () => {
    form.post(route('quiz.answer.submit-answer', {'quiz': props.quiz}), {
        onError: errors => console.log(errors),
    });
}

const items = ref([
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
        value: `${props.homeworkData.attempts}/${props.quiz.number_attempts}`,
        tKey: 'block-statistics.quiz.2'
    },
    {
        icon: 'ri-time-fill',
        value: props.quiz.duration_minutes,
        tKey: 'block-statistics.quiz.3'
    },
]);
</script>

<template>
    <AppLayout title="quiz">
        <template #breadcrumbs-right>
            quizzesList-Link
        </template>

        <StatisticsBlock :items="items" cols="col-12 col-md-6 col-lg-3" />

        <b-row class="py-3">
            <b-col xxl="3">
                <BCard no-body>
                    <BCardBody class="text-center">
                        <h6 class="card-title mb-3 flex-grow-1 text-start">
                            <Text tag="span" t-key="time-tracking" />
                        </h6>
                        <template v-if="homeworkData.timer.max_time_seconds">
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
                                />
                                <Text tag="span" t-key="min" class="ms-2" />
                            </h3>
                        </template>

                        <div v-if="!homeworkData.timer.max_time_seconds" class="hstack gap-2 justify-content-center">
                            <BaseButton size="sm" icon="ri-play-circle-line" t-key="start" variant="beige-blue" @click="startTracking" />
                        </div>
                    </BCardBody>
                </BCard>
            </b-col>
        </b-row>

        <form v-if="homeworkData.timer.max_time_seconds" @submit.prevent="submit">
            <BCard>
                <b-row class="pt-3 gy-3">
                    <b-col cols="12">
                        <b-row class="gy-3">
                            <b-col v-for="(question, typeIndex) in form.answers" cols="12">
                                <b-row class="gy-3">
                                    <b-col v-for="(item, itemIndex) in question" cols="12">
                                        <BCard class="default-bg-card">
                                            <ShortCard v-if="typeIndex === 'short'" :form="form.answers[typeIndex][itemIndex]" :index="itemIndex" />
                                            <SingleCard v-if="typeIndex === 'single'" :form="form.answers[typeIndex][itemIndex]" :letters="letters" :index="itemIndex" />
                                            <MultipleCard v-if="typeIndex === 'multiple'" :form="form.answers[typeIndex][itemIndex]" :letters="letters" :index="itemIndex" />
                                            <YesOrNoCard v-if="typeIndex === 'yes_or_no'" :form="form.answers[typeIndex][itemIndex]" :letters="letters" :index="itemIndex" />
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
                    :disabled="form.processing"
                    t-key="submit"
                    size="lg"
                    type="submit"
                />
            </div>
        </form>
    </AppLayout>
</template>

<style scoped>

</style>