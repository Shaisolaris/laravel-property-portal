import { useI18n } from "vue-i18n";



export default function useStructure() {
    const { t } = useI18n();

    const defaultSettingSwal = {
        showCancelButton: true,
        confirmButtonColor: "#00A185",
        cancelButtonColor: "#cc563d",
        confirmButtonText: t('sweet-alert.confirm'),
        cancelButtonText: t('sweet-alert.cancel'),
    };

    const setPlaceholder = (originPlaceholder, tagType = 'default') => {
        return originPlaceholder && originPlaceholder.length > 0 ? tagType === 'select' ? `${t('placeholder.select')}  ${t(`placeholder.${originPlaceholder}`)}` : t(`placeholder.${originPlaceholder}`) : '';
    }

    const getOptionsSwal = (key) => {
        switch (key) {
            case 'schedule-delete-event':
                return {
                    title: t('sweet-alert.delete-event-schedule.title'),
                    text: t('sweet-alert.delete-event-schedule.text'),
                    icon: "warning",
                   ...defaultSettingSwal
                }
            case 'delete-class':
                return {
                    title: t('sweet-alert.delete-class.title'),
                    text: t('sweet-alert.delete-class.text'),
                    icon: "warning",
                   ...defaultSettingSwal
                }
            case 'delete-subject':
                return {
                    title: t('sweet-alert.delete-subject.title'),
                    text: t('sweet-alert.delete-subject.text'),
                    icon: "warning",
                   ...defaultSettingSwal
                }
        }
    }

    return {
        setPlaceholder,
        getOptionsSwal,
    }
}