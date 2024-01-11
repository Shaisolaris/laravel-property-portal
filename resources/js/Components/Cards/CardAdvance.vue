<script setup>
import CardBase from "~/Components/Cards/Base.vue";
import CardInfo from "~/Components/Cards/Partials/Info.vue";
import CardPrice from "~/Components/Cards/Partials/Price.vue";
import Starts from "~/Components/Elements/Starts.vue";

const { value } = defineProps({
    info: {
        type: Array,
        default: () => [],
    },
    item: {
        type: Object,
        // required: true,
        default: () => false,
    }
})

</script>

<template>
    <CardBase>
        <div class="row g-0 position-relative h-25">
            <div class="col-md-5">
                <img src="https://inoura-lms.invo.zone/store/1014/blog3.jpg" alt="test" class="rounded-start img-fluid"/>
            </div>
            <div class="col-md-7 p-4 d-flex align-items-center">
                <div class="position-absolute end-0 top-0 me-4 mt-4 cursor-pointer">
                    <i class="las la-ellipsis-h fs-20"></i>
                </div>
                <div>
                    <a href="#">
                        <h2 class="card-title fw-bold mb-3">Become a Straight-A Student</h2>
                    </a>
                    <div class="d-flex">
                        <Starts value="3.5"/>
                        <div class="text-dim-gray mx-2 fs-12">(203)</div>
                    </div>
                    <div class="mt-3">
                        <CardPrice value="13"/>
                    </div>
                    <div class="mt-3 d-flex gap-5">
                        <div>
                            <div class="text-dim-gray">item ID:</div>
                            <div class="text-black fw-bold fs-16 mb-3">2</div>
                        </div>
                        <div>
                            <div class="text-dim-gray">Category:</div>
                            <div class="text-black fw-bold fs-16 mb-3">Category</div>
                        </div>
                        <div>
                            <div class="text-dim-gray">number name:</div>
                            <div class="text-black fw-bold fs-16 mb-3">22</div>
                        </div>
                    </div>
                    <div class="d-flex gap-3">
                        <template v-for="item in info">
                            <CardInfo :name="item.name" :icon="item.icon"/>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </CardBase>
</template>
