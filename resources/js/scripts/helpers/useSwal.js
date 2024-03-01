import Swal from "sweetalert2";
import { useI18n } from "vue-i18n";

export function useSwal() {
    const { t } = useI18n();

    const defaultSettingSwal = {
        showCancelButton: true,
        confirmButtonColor: "#00A185",
        cancelButtonColor: "#cc563d",
        confirmButtonText: t('sweet-alert.confirm'),
        cancelButtonText: t('sweet-alert.cancel'),
    };

    const base = (title, text, icon) => {
        const options = {
            title: title.length ? t(`sweet-alert.${title}`) : '',
            text: text.length ? t(`sweet-alert.${text}`) : '',
            icon: icon,
            ...defaultSettingSwal
        }

        return Swal.fire(options).then((result) => {
            return !!result.value;
        });
    }

    return {
        question(title = '', text = '') {
            return base(title, text, 'question');
        },
        warning(title = '', text = '') {
            return base(title, text, 'warning');
        },
        success(title = '', text = '') {
            return base(title, text, 'success');
        },
        error(title = '', text = '') {
            return base(title, text, 'warning');
        },
    }
}