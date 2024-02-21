<script setup>
import { defineEmits } from "vue";

const { visitPageFunction, visitPageRoute } = defineProps({
    tKeyHeader: {
        type: String,
        required: true
    },
    viewType: {
        type: String,
        default: 'table-separate'
    },
    textEmpty: {
        type: String,
        default: ''
    },
    headerClassMap: {
        type: String,
        default: ''
    },
    meta: {
        type: Object,
        default: {}
    },
    visitPageFunction: {
        type: Function,
        required: false,
    },
    visitPageRoute: {
        type: String,
        default: ''
    }
});
const emit = defineEmits([ 'visitPage' ]);


const visitPage = (page) => {
    // if (visitPageFunction === undefined) {
    //     console.log('if')
    //     return router.visit(visitPageRoute, {
    //         page,
    //
    //     });
    // }

    visitPageFunction(page);
}
</script>
<template>
    <BCard class="radius-20">
        <template v-if="textEmpty.length === 0">
            <div class="table-responsive">
                <table :class="`table align-middle table-nowrap mb-0 ${viewType}`">
                    <thead :class="headerClassMap">
                    <tr>
                        <slot name="header">
                            <th v-for="item in $tm(`table.header.${tKeyHeader}`)" scope="col">
                                {{ item }}
                            </th>
                        </slot>
                    </tr>
                    </thead>
                    <tbody>
                        <slot name="body" />
                    </tbody>
                </table>
            </div>

            <div v-if="meta && meta.total >= 10" class="d-flex justify-content-between align-items-center mt-3">
                <div class="text-black fs-12 fw-medium">
                    <Text t-key="pagination-page" tag="span" />
                    {{ meta.current_page }}
                    <Text t-key="of" tag="span" />
                    {{ meta.last_page }}
                </div>

                <div class="pagination-wrap hstack">
                    <slot name="pagination">
                        <Pagination
                            :current-page="meta.current_page"
                            :per-page="meta.per_page"
                            :total-items="meta.total"
                            :last-page="meta.last_page"
                            @pagination-page-change="(page) => visitPage(page)"
                        />
                    </slot>
                </div>
            </div>
        </template>

        <Text v-else :t-key="`empty-text.${textEmpty}`" tag="p" class="text-muted mt-2 fs-14" />
    </BCard>
</template>

<style scoped>

</style>
