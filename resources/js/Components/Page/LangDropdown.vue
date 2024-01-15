<script setup>
import { useI18n } from "vue-i18n";
import { computed } from "vue";

const { t, locale } = useI18n();

const languages = ref(['en', 'es']);
const lang = computed(() => t(`lang.${locale.value}`));

const setLanguage = (newLocale) =>  {
    locale.value = newLocale;
}

</script>

<template>
    <BDropdown size="sm" variant="" class="lang-dropdown">
        <template #button-content>
            <Text :t-key="lang" tag="span" class="fs-14 text-dim-gray" />
        </template>
        <template v-for="lang in languages">
            <BDropdownItem
                v-if="lang != locale"
                :data-lang="lang"
                href="javascript:void(0);"
                @click="setLanguage(lang)"
            >
                <span class="align-middle">{{ $t(`lang.${lang}`) }}</span>
            </BDropdownItem>
        </template>
    </BDropdown>
</template>

<style scoped>

</style>