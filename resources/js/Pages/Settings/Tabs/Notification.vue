<script setup>
const user = computed(() => usePage().props.auth);
const form = useForm(user.value?.settings?.notification);


const submit = () => {
    setTimeout(() => {
        form.put(route('settings.notification'));
    }, 100);
}
</script>

<template>
    <Card v-for="item in Object.keys(user?.settings?.notification)">
        <b-row class="align-items-center">
            <b-col>
                <div class="text-dim-gray pb-1">
                    <i :class="[$t(`page.settings.notification.${item}.icon`), 'align-bottom me-2']" />
                    <Text :t-key="`page.settings.notification.${item}.title`" tag="span" />
                </div>

                <Text :t-key="`page.settings.notification.${item}.desc`" />
            </b-col>
            <b-col>
                <div class="d-flex justify-content-end">
                    <Switch
                        v-model="form[item]"
                        :checked="form[item]"
                        class="text-end"
                        @change="submit"
                    />
                </div>
            </b-col>
        </b-row>
    </Card>
</template>

<style scoped>

</style>