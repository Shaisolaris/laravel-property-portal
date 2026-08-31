<script setup>
import AppLayout from "~/Layouts/AppLayout.vue"


const { institution } = defineProps({
    institution: {
        type: Object,
        required: true
    }
});


const form = useForm({
    name: institution?.name,
    description: institution?.description,
});


const submit = () => {

}
</script>

<template>
    <AppLayout title="dashboard">
        <form @submit.prevent="submit">
            <div class="d-flex flex-column gap-3 col-12 col-md-8 col-lg-6">
                <BaseInput
                    v-model="form.name"
                    :error="form.errors.name"
                    label="education-institution-name"
                    placeholder="education-institution-name"
                />
                <BaseTextarea
                    v-model="form.description"
                    :error="form.errors.description"
                    label="education-institution-description"
                    placeholder="education-institution-description"
                />
                <BaseButton type="submit" t-key="save" />
            </div>
        </form>
    </AppLayout>
</template>

<style scoped>

</style>