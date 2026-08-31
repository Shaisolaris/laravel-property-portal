<script setup>
import AppLayout from "~/Layouts/AppLayout.vue";

defineProps({
    quizzes: {
        type: Array,
        required: true
    }
});
</script>

<template>
    <AppLayout title="quizzes">
<!--        <Tabs t-key="quizzes">-->
<!--            <template v-slot:tab-all-body>all</template>-->
<!--            <template v-slot:tab-active-body>active</template>-->
<!--        </Tabs>-->

        <b-row class="gy-3">
            <b-col v-for="quiz in quizzes.data" cols="12">
                <Link :href="route('quiz.answer.index', {'quiz': quiz})">
                    <BCard>
                        <div class="d-flex align-items-center gap-5">
                            <div class="flex-shrink-0">
                                {{ quiz.name }}
                            </div>
                            <div class="flex-grow-1">
                                <b-row>
                                    <b-col>
                                        <Text t-key="page.quizzes.mentor" class="text-dim-gray" />
                                        <div>MR</div>
                                    </b-col>
                                    <b-col>
                                        <Text t-key="page.quizzes.due-on" class="text-dim-gray" />
                                        <div>
                                            <i class="ri-calendar-line me-2" />
                                            {{ quiz.end_work_datetime_format_dmy }}
                                        </div>
                                    </b-col>
                                    <b-col>
                                        <Text t-key="page.quizzes.status" class="text-dim-gray" />
                                        <div>MR</div>
                                    </b-col>
                                </b-row>
                            </div>
                            <div>
                                submit
                            </div>
                        </div>
                    </BCard>
                </Link>
            </b-col>
        </b-row>
    </AppLayout>
</template>

<style scoped>

</style>