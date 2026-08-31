<script setup>
import { useI18n } from "vue-i18n";
import { usePage } from "@inertiajs/vue3";

const store = useStore();
const { locale } = useI18n();


onBeforeMount(async () => {
    if (store.getters['general/getLanguages'].length < 1) {
        const { data: { languages, appLocale } } = await store.dispatch('general/loadLanguages');

        store.commit('general/setLanguages', languages);
        store.commit('general/setLanguageCodes', languages);
        store.commit('general/setLocale', appLocale);

        locale.value = appLocale;
    }

    const element = document.getElementsByTagName('html');

    if (element.length) {
        element[0].setAttribute('data-role-name', usePage().props.auth?.role_name);
        element[0].setAttribute('data-institution-name', usePage().props.auth?.institution_type);
    }
});
</script>

<template>
    <slot />
</template>

<style scoped>

</style>