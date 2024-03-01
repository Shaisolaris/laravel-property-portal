<script setup>
import TagLabel from "~/Components/Partials/TagLabel.vue";

let { modelValue } = defineProps({
    label: {
        type: String,
    },
    modelValue: {
        type: Array,
        default: null,
    },
    errors: {
        type: Array,
        default: [],
    },
})

const emit = defineEmits([ "update:modelValue" ]);

let fields = reactive(typeof modelValue === 'string' ? JSON.parse(modelValue) : modelValue);

const newItem = () => {
    fields.push({ value: '', type: 'text' })
    input()
}

const remove = (index) => {
    fields.splice(index, 1)
    input()
}

const input = () => emit("update:modelValue", JSON.stringify(fields))

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
                        <BaseButton t-key="add-item" @click="newItem" variant="link" icon="ri-add-fill" />
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(field, index) in fields" :key="field.length" :id="index" class="product mb-3">
                    <td class="text-start w-100 pe-3">
                        <BaseInput
                            placeholder="write-benefit"
                            v-model="field.value"
                            @change="input"
                            :type="field.type"
                            viewType="counter"
                            maxCounter="150"
                            :class="{ 'is-invalid': errors['benefits.'+index+'.value'] && errors['benefits.'+index+'.value'].length > 0 }"
                        />
                    </td>
                    <td>
                        <BaseButton
                            :disabled="fields.length <= 1"
                            class="w-100"
                            t-key="delete"
                            variant="danger"
                            @click="remove(index)"
                        />
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
