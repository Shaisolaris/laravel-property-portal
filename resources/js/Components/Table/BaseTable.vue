<script setup>
defineProps({
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
});
const slots = useSlots();

const showHeaders = computed(() => {
    return !!slots['header'];
});
</script>
<template>
    <BCard class="radius-20">
        <template v-if="textEmpty.length === 0">
            <table :class="`table table-responsive align-middle table-nowrap mb-0 ${viewType}`">
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

            <div class="d-flex justify-content-end mt-3">
                <div class="pagination-wrap hstack">
                    <slot name="pagination" />
                </div>
            </div>
        </template>

        <Text v-else :t-key="textEmpty" tag="p" class="text-muted mt-2 fs-14" />
    </BCard>
</template>

<style scoped>

</style>