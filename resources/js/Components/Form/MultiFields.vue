<script setup>
import TagLabel from "~/Components/Partials/TagLabel.vue";

defineProps({
    items: {
        type: Array
    },
    label: {
        type: String,
    }
})

let fields =  reactive([
    {value: '', type: 'text'}
]);

const newItem  = () => fields.push({value: '', type: 'text'})

const remove = (index) =>  fields.splice(index, 1)
</script>

<template>
    <div class="table-responsive fields-multiple" :key="fields.length">
        <table class="invoice-table table table-borderless table-nowrap mb-0">
            <thead class="align-middle">
                <tr>
                    <th>
                        <TagLabel :label="label" />
                    </th>
                    <th scope="col" style="width: 105px">
                        <BaseButton t-key="add-item" @click="newItem" variant="link" icon="ri-add-fill"/>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(field, index) in fields" :key="index" :id="index" class="product mb-3">
                    <td class="text-start w-100">
                        <BaseInput placeholder="write-benefit" v-model="field.value" :type="field.type" viewType="counter" maxCounter="150"/>
                    </td>
                    <td>
                        <BaseButton t-key="delete" :disabled="fields.length <= 1" @click="remove(index)" variant="success"/>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<style>
.fields-multiple {
    & table th {
        padding: 0;
    }
    & table td {
        padding: 0 0 10px 0;
    }
}
</style>
