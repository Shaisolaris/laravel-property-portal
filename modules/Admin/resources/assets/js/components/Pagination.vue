<script setup>
import {Link} from "@inertiajs/vue3";

const props = defineProps({
    meta: {
        type:    Object,
        default: null,
    },
});

function label(value){
    if(value.indexOf('&laquo;') !== -1){
        return '<i class="mdi mdi-chevron-left"></i>';
    }else if(value.indexOf('&raquo;') !== -1){
        return '<i class="mdi mdi-chevron-right"></i>';
    }else {
        return value;
    }
}

</script>
<template>

<!--    <ul class="pagination pagination-separated justify-content-center mb-0">-->
<!--        <li class="page-item disabled">-->
<!--            <a class="page-link" href="javascript:void(0);" target="_self"><i class="mdi mdi-chevron-left"></i></a></li>-->
<!--        <li class="page-item active"><a class="page-link" href="javascript:void(0);" target="_self">1</a></li>-->
<!--        <li class="page-item"><a class="page-link" href="javascript:void(0);" target="_self">2</a></li>-->
<!--        <li class="page-item"><a class="page-link" href="javascript:void(0);" target="_self">3</a></li>-->
<!--        <li class="page-item">-->
<!--            <a class="page-link" href="javascript:void(0);" target="_self"><i class="mdi mdi-chevron-right"></i></a>-->
<!--        </li>-->
<!--    </ul>-->


    <ul class="pagination pagination-separated justify-content-center mb-0" v-if="meta.total > meta.per_page">
        <li v-for="item in meta.links"
            class="page-item"
            :class="{disabled: !item.url, active: item.active}"
            :aria-current="item.active ? 'page' : null"
        >
            <Link class="page-link"
                  v-if="item.url"
                  :href="item.url"
                  v-html="label(item.label)"
            />
            <a class="page-link"
               v-else
               href="#"
               tabindex="-1"
               aria-disabled="true"
               v-html="label(item.label)"
               @click.prevent=""
            />
        </li>
    </ul>
</template>

<style>
.pagination-separated .page-link i{
    line-height: 1;
}
</style>


