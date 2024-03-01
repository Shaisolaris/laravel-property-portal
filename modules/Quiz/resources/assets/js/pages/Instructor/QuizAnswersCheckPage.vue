<script setup>
import AppLayout from "~/Layouts/AppLayout.vue";
import { ON_CHECK } from "~/scripts/utils/utils.js";


const { answers, homework } = defineProps({
    answers: Array,
    homework: Object,
});

const form = useForm({
    status: '',
    question: '',
});


const submit = (answer, status_) => {
    form.status = status_;
    form.question = answer.question_uuid;
    form.put(route('quiz.update-answer', { 'homework': homework, 'studentHomeworkQuizAnswer': answer }));
}
</script>

<template>
    <AppLayout title="quiz-one">
        <b-row class="gy-3">
            <b-col v-for="(answer, index) in answers" cols="12">
                <BCard no-body>
                    <BCardHeader v-b-toggle="`collapse-${index}`" class="border-none hover-element">
                        <b-row>
                            <b-col cols="10">
                                <UserAvatarWithName :user="answer.user" />
                                <div class="d-flex align-items-center justify-content-between pt-2">
                                    <div class="fs-14 text-dim-gray">
                                        <Text tag="span" t-key="assigned" />
                                        : {{ answer.assigned }}
                                    </div>
                                    <div class="fs-14 text-dim-gray">
                                        <Text tag="span" t-key="deadline" />
                                        : {{ answer.deadline }}
                                    </div>
                                </div>
                            </b-col>
                            <b-col cols="2">
                                <BCard class="default-bg-card text-center radius-20 pc-18" no-body>
                                    <Text t-key="total-score" class="fs-16 text-dim-gray" />
                                    <div class="fs-20 fw-semibold">{{ answer.total_score }}</div>
                                </BCard>
                            </b-col>
                        </b-row>
                    </BCardHeader>

                    <BCollapse :id="`collapse-${index}`">
                        <BCardBody>
                            <div class="pb-2">{{ answer.question }} ?</div>

                            <div v-if="typeof answer.answers === 'string'">
                                <BaseTextarea v-model="answer.answers" class="pointer-events-none" />

                                <div v-if="answer.status === ON_CHECK && answer.is_correct === null" class="d-flex justify-content-end gap-3 pt-3">
                                    <BaseButton
                                        t-key="accepted"
                                        variant="success"
                                        @click="submit(answer, 'accepted')"
                                    />
                                    <BaseButton
                                        t-key="not-accepted"
                                        variant="danger"
                                        @click="submit(answer, 'not_accepted')"
                                    />
                                </div>
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
        </b-row>
    </AppLayout>
</template>

<style scoped>

</style>