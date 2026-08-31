<script setup>
import AppLayout from "~/Layouts/AppLayout.vue";
// import BlocksAmountInfo from "~/Components/Elements/BlocksAmountInfo.vue";
import CardAdvance from "~/Components/Cards/CardAdvance.vue";
import InfiniteLoading from 'v3-infinite-loading';
import helpers from "~/scripts/helpers/helpers.js";

let {sendForm} = helpers;

const {courses, limit} = defineProps({
    courses: {
        type: Array,
    },
    limit: {
        type: Number,
    }
});

const items = [
    {text: 'course.total', icon: 'mdi mdi-file-chart', amount: 2},
    {text: 'course.hours', icon: 'mdi mdi-file-clock', amount: 23},
    {text: 'course.total-sale', icon: 'mdi mdi-file-check', amount: 3},
    {text: 'course.earned', icon: 'mdi mdi-file-remove', amount: 4}
];

let typeView = ref('list');
// let sortField = ref('desc');

const switchView = type => typeView.value = type

const handleScroll = async (state) => {

    let form = useForm({
        skip: courses.length + 5,
        // sortField,
        limit,
    })

    sendForm({form, url: route("api.academy.filter"), method: 'get'},
        (response, errors) => {
            if (!errors && response.data) {
                !response.data.length ? state.complete() : response.data.forEach((post) => courses.push(post));
            }
        });
}

</script>

<template>
    <AppLayout title="My Courses">
        <!--        <BlocksAmountInfo :items="items"/>-->
        <div>
            <div class="d-flex justify-content-end w-100 mb-2">
                <div class="d-flex">
                    <a @click="switchView('list')"
                       :class="[
                           typeView === 'list' ? 'bg-gainsboro' : '',
                           'btn-course btn waves-effect me-2',
                       ]">
                        <div class="listing">
                            <i class="ri-menu-line"></i>
                        </div>
                    </a>
                    <a @click="switchView('card')"
                       :class="[
                           typeView === 'card' ? 'bg-gainsboro' : '',
                           'btn-course btn waves-effect'
                       ]">
                        <div class="categoriesGrid">
                            <i class="ri-function-line"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div>
                <b-row :no-gutters="true" class="gap-3">
                    <template v-for="course in courses">
                        <CardAdvance :item="course" :view="typeView"/>
                    </template>
                    <InfiniteLoading @infinite="handleScroll">
                        <template #complete>
                            <span></span>
                        </template>
                    </InfiniteLoading>
                </b-row>
            </div>
        </div>
    </AppLayout>
</template>

<style scoped>
.btn-course {
    background: var(--in-white);
    padding: 12px;
    border: 1px solid var(--in-gainsboro);
    border-radius: 20px;
    height: 49px;
    width: 49px;

    &:hover {
        background: var(--in-light-beige);
    }
}
</style>
