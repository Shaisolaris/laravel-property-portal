<script setup>
import AppLayout from "~/Layouts/AppLayout.vue"

const show = ref(false);

</script>

<template>
    <AppLayout title="grades">
        <template #breadcrumbs-right>
            <div class="d-flex text-dim-gray align-items-center gap-2">
                <div class="d-flex align-items-center gap-2">
                    <div class="hp-15 wp-15 rounded-pill bg-cherry-red"></div> <span class="fw-medium fs-12">< 40</span>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <div class="hp-15 wp-15 rounded-pill bg-copper"></div> <span class="fw-medium fs-12">40 <Text tag="span" t-key="to" /> 70</span>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <div class="hp-15 wp-15 rounded-pill bg-royal-blue"></div> <span class="fw-medium fs-12">>70</span>
                </div>
            </div>
        </template>
        <BaseTable t-key-header="grades">
            <template #body>
                <tr>
                    <td>
                        <div class="d-flex align-items-center gap-2">
                            <Avatar size="xs" rounded="circle" :path="$page.props.auth.avatar" />
                            <span>Mrs. Doe</span>
                        </div>
                    </td>
                    <td>
                        <div class="rounded bg-beige-blue text-royal-blue fs-16 py-2 fw-medium text-center w-100">
                            95
                        </div>
                    </td>
                    <td>
                        <div class="rounded bg-copper bg-opacity-25 text-copper fs-16 py-2 fw-medium text-center w-100">
                            85
                        </div>
                    </td>
                    <td>
                        <div class="rounded bg-cherry-red bg-opacity-25 text-cherry-red fs-16 py-2 fw-medium text-center w-100">
                            75
                        </div>
                    </td>
                    <td>
                        <div class="d-flex gap-3">
                            <div class="text-white text-center fs-16 fw-medium rounded wc-15 bg-cherry-red p-2">10,5</div>
                            <div class="text-white text-center fs-16 fw-medium rounded wc-15 bg-copper p-2">45,5</div>
                            <div class="text-white text-center fs-16 fw-medium rounded wc-15 bg-royal-blue p-2">80,5</div>
                        </div>
                    </td>
                    <td>
                        <i :class="[show ? 'ri-arrow-up-s-line' : 'ri-arrow-right-s-line', 'fs-20 fw-semibold']" @click="show = !show" />
                    </td>
                </tr>

                <tr v-if="show">
                    <td colspan="6" class="border-t-0">
                        <BaseTable t-key-header="gradesWithoutAction" view-type="table-without-border">
                            <template #body>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <Avatar size="xs" rounded="circle" :path="$page.props.auth.avatar" />
                                            <span>Mrs. Doe</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="rounded bg-beige-blue text-royal-blue fs-16 py-2 fw-medium text-center w-100">
                                            95
                                        </div>
                                    </td>
                                    <td>
                                        <div class="rounded bg-copper bg-opacity-25 text-copper fs-16 py-2 fw-medium text-center w-100">
                                            85
                                        </div>
                                    </td>
                                    <td>
                                        <div class="rounded bg-cherry-red bg-opacity-25 text-cherry-red fs-16 py-2 fw-medium text-center w-100">
                                            75
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex gap-3">
                                            <div class="text-white text-center fs-16 fw-medium rounded wc-15 bg-cherry-red p-2">10,5</div>
                                            <div class="text-white text-center fs-16 fw-medium rounded wc-15 bg-copper p-2">45,5</div>
                                            <div class="text-white text-center fs-16 fw-medium rounded wc-15 bg-royal-blue p-2">80,5</div>
                                        </div>
                                    </td>
                                </tr>
                            </template>
                        </BaseTable>
                    </td>
                </tr>
            </template>

            <template #pagination>

            </template>
        </BaseTable>
    </AppLayout>
</template>

<style scoped>
/* Добавьте свои стили здесь */
.grades-table {
    width: 100%;
    border-collapse: collapse;
}

.grades-table th, .grades-table td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

.grades-table tr:nth-child(even){background-color: #f2f2f2;}

.grades-table tr:hover {background-color: #ddd;}

.grades-table th {
    padding-top: 12px;
    padding-bottom: 12px;
    background-color: #4CAF50;
    color: white;
}

.details-table {
    width: 100%;
    border-collapse: collapse;
}

.details-table th, .details-table td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

.details-table tr:nth-child(even){background-color: #f9f9f9;}
</style>