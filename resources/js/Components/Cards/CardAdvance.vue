<script setup>
import CardBase from "~/Components/Cards/Card.vue";
import CardInfo from "~/Components/Cards/Partials/Info.vue";
import CardPrice from "~/Components/Cards/Partials/Price.vue";
import Starts from "~/Components/Elements/Starts.vue";
import {v4 as uuidv4} from "uuid";

const { value } = defineProps({
    item: {
        type: Object,
        default: () => false,
    },
    view: {
        type: String,
        default: 'list',
    }
})

const classesData = (view) => {

    let classes = reactive({});

    if(view === 'card') {
        classes.image = "col-md-12"
        classes.box = "col-md-12"
        classes.col = "col-lg-4 col-md-6"
    } else {
        classes = {
            image: "col-md-5",
            box: "col-md-7",
            col: "col-md-12"
        }
    }

    return classes;
};
</script>

<template>
    <CardBase :class="['card-advance p-0', classesData(view).col]">
        <div class="row g-0" :key="view">
            <div :class="[classesData(view).image,'content-image']">
                <MediaImage :src="item.image" class="rounded-start img-fluid"/>
            </div>
            <div :class="[classesData(view).box,'p-4 d-flex align-items-center']">
                <div class="position-absolute end-0 top-0 me-4 mt-4 cursor-pointer">
                    <i class="las la-ellipsis-h fs-20"></i>
                </div>
                <div>
                    <a href="#">
                        <h2 class="card-title fw-bold mb-3">{{item.title}}</h2>
                    </a>
                    <div class="d-flex">
                        <Starts value="3.5"/>
                        <div class="text-dim-gray mx-2">({{item.rate}})</div>
                    </div>
                    <div class="mt-3">
                        <CardPrice value="13"/>
                    </div>
                    <div class="mt-3 d-flex gap-5">
                        <div>
                            <div class="text-dim-gray">item ID:</div>
                            <div class="text-black fw-bold fs-16 mb-3">{{item.id}}</div>
                        </div>
                        <div>
                            <div class="text-dim-gray">Category:</div>
                            <div class="text-black fw-bold fs-16 mb-3">{{item.category}}</div>
                        </div>
                        <div>
                            <div class="text-dim-gray">Sale:</div>
                            <div class="text-black fw-bold fs-16 mb-3">22</div>
                        </div>
                    </div>
                    <div class="d-flex gap-3">
                        <template v-for="item in item.info">
                            <CardInfo :name="item.name" :icon="item.icon"/>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </CardBase>
</template>

<style lang="scss">
.content-image {
    height: 277px;
}
</style>
