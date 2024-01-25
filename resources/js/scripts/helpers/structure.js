import { useI18n } from "vue-i18n";


export default function useStructure() {
    const { t } = useI18n();

    const setPlaceholder = (originPlaceholder) => {
        return originPlaceholder && originPlaceholder.length > 0 ? t(`placeholder.${originPlaceholder}`) : '';
    }

    return {
        setPlaceholder
    }
}