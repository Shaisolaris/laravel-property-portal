<script setup>
import AppLayout from "~/Layouts/AppLayout.vue";
import BlocksAmountInfo from "~/Components/Elements/BlocksAmountInfo.vue";
import CardAdvance from "~/Components/Cards/CardAdvance.vue";

defineProps({
    courses:{
        type: Object,
    }
});

const items =  [
    {text: 'course.total', icon: 'mdi mdi-file-chart', amount: 2},
    {text: 'course.hours', icon: 'mdi mdi-file-clock', amount: 23},
    {text: 'course.total-sale', icon: 'mdi mdi-file-check', amount: 3},
    {text: 'course.earned', icon: 'mdi mdi-file-remove', amount: 4}
];

</script>

<template>
    <AppLayout title="My Courses">
        <BlocksAmountInfo :items="items"/>
        <div>
            <div class="d-flex justify-content-between row_gap_20 flex-sm-row flex-column-reverse align-items-center w-100 mb-2">
                <div class="listTabing d-flex gap-2">
                    <a class="btn btn-light waves-effect" href="{{ url('/academy/dashboard/courses') }}">
                        <div class="listing">
<!--                            <img src="/design/img/courseList/list.svg"/>-->
                        </div>
                    </a>
                    <a class="btn btn-light waves-effect" href="{{ url('/academy/dashboard/courses') }}">
                        <div class="categoriesGrid">
<!--                            <img src="/design/img/courseList/grid.svg"/>-->
                        </div>
                    </a>
                    <a class="btn btn-light waves-effect" href="{{ url('/academy/dashboard/courses') }}">
                        <div class="categoriesGrid">
<!--                            <img src="/design/img/courseList/refresh.svg"/>-->
                        </div>
                    </a>
                </div>
            </div>
            <div>
                <template v-for="course in courses">
                    <CardAdvance :item="course"/>
                </template>
            </div>
        </div>
    </AppLayout>
</template>
