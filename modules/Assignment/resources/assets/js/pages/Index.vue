<script setup>
import AppLayout from "~/Layouts/AppLayout.vue"
</script>

<template>
    <AppLayout title="assignments">
        <Tabs t-key="assignments">
            <template v-slot:tab-reviewed-body>all</template>
            <template v-slot:tab-pending-review-body>pending-review</template>
        </Tabs>

        <BaseTable t-key-header="assignments">
            <template #body>
                <tr v-for="item in [...Array(3).keys()]">
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <TdActions />
                </tr>
            </template>
        </BaseTable>
    </AppLayout>
</template>

<style scoped>

</style>