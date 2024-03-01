<script setup>
import AppLayout from "~/Layouts/AppLayout.vue";
import { ON_CHECK } from "~/scripts/utils/utils.js";


const { subjects } = defineProps({
    subjects: {
        type: Array,
        required: true,
        default: []
    }
});
</script>

<template>
    <AppLayout title="quizzes">
        <b-row class="gy-3">
            <template v-for="(subject, index) in subjects.data">
                <b-col v-if="subject.quizzes.length" cols="12">
                    <BCard  no-body>
                        <BCardHeader v-b-toggle="`collapse-quizzes-${index}`" class="hover-element border-none">
                            <b-row>
                                <b-col cols="4">
                                    <div class="d-flex gap-2 align-items-center">
                                        <div>
                                            <b-img :src="subject?.image?.url" class="radius-12 wp-80 hp-60" />
                                        </div>
                                        <div>
                                            <div class="fs-16 fw-medium">{{ subject.name }}</div>
                                            <Text t-key="page.quizzes.student.practical-quizzes" class="fs-14 text-dim-gray" />
                                        </div>
                                    </div>
                                </b-col>
                                <b-col cols="8">
                                    <b-row>
                                        <b-col cols="12">
                                            <Text t-key="page.quizzes.student.mentor" class="fs-14 text-dim-gray pb-2" />
                                            <AvatarGroup :users="subject.users" />
                                        </b-col>
                                    </b-row>
                                </b-col>
                            </b-row>
                        </BCardHeader>

                        <BCollapse :id="`collapse-quizzes-${index}`">
                            <BCardBody>
                                <b-row class="gy-2">
                                    <b-col v-for="quiz in subject.quizzes" cols="12">
                                        <BCard>
                                            <b-row class="align-items-center">
                                                <b-col cols="3">
                                                    {{ quiz.name }}
                                                </b-col>
                                                <b-col cols="9">
                                                    <b-row class="justify-content-end">
                                                        <b-col>
                                                            <Text t-key="page.quizzes.student.quiz-grade" class="text-dim-gray pb-2" />
                                                            <div class="fw-medium">{{ quiz.total_score }}</div>
                                                        </b-col>
                                                        <b-col>
                                                            <Text t-key="page.quizzes.student.my-grade" class="text-dim-gray pb-2" />
                                                            <div class="fw-medium">{{ quiz.quiz_grade }}</div>
                                                        </b-col>
                                                        <b-col>
                                                            <Text t-key="page.quizzes.student.due-on" class="text-dim-gray pb-2" />
                                                            <div>
                                                                <i class="ri-calendar-line align-bottom me-2" />
                                                                <span class="fw-medium">{{ quiz.end_work_datetime_format_dmd }}</span>
                                                            </div>
                                                        </b-col>
                                                        <b-col>
                                                            <Text t-key="page.quizzes.student.status" class="text-dim-gray pb-2" />
                                                            <Status :value="quiz.status" use-icon />
                                                        </b-col>
                                                        <b-col class="d-flex align-items-center justify-content-end" cols="1">
                                                            <TdActions v-if="quiz.status !== ON_CHECK" tag="div">
                                                                <template #actions>
                                                                    <Link :href="route('quiz.answer.index', { 'quiz': quiz })">
                                                                        <BDropdownItem>
                                                                            <Text tag="span" icon="ri-eye-fill" icon-class="ri-play-circle-line" t-key="action.answer" />
                                                                        </BDropdownItem>
                                                                    </Link>
                                                                </template>
                                                            </TdActions>
                                                        </b-col>
                                                    </b-row>
                                                </b-col>
                                            </b-row>
                                        </BCard>
                                    </b-col>
                                </b-row>
                            </BCardBody>
                        </BCollapse>
                    </BCard>
                </b-col>
            </template>
        </b-row>
    </AppLayout>
</template>

<style scoped>

</style>