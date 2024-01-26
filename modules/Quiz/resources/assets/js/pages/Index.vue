<script setup>
import AppLayout from "~/Layouts/AppLayout.vue"
</script>

<template>
    <AppLayout title="quizzes">
        <Tabs t-key="quizzes">
            <template v-slot:tab-all-body>all</template>
            <template v-slot:tab-active-body>active</template>
        </Tabs>

        <BaseTable t-key-header="quizzes">
            <template #body>
                <tr v-for="item in [...Array(3).keys()]">
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    <TdActions />
                </tr>
            </template>
        </BaseTable>
    </AppLayout>
</template>

<style scoped>

</style>