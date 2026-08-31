import { toast } from 'vue3-toastify';
import { useI18n } from "vue-i18n";

export function useToast() {
    const { t } = useI18n();

    const setMessage = (side, type, message) => {
        if (side !== 'frontend') {
            return message;
        }

        return t(`toast.${type}.${message}`);
    }


    return {
        baseToast(side = 'backend', messageType, message, options = { 'theme': 'colored', 'transition': 'slide' }) {
            if (typeof messageType === 'string' || messageType instanceof String) {
                options = Object.assign({ type: messageType }, options);
            }

            return toast(setMessage(side, 'success', message), options)
        },
        successMessage(side = 'backend', message, options = { 'theme': 'colored', 'transition': 'slide' }) {
            options = Object.assign({ type: 'success' }, options);
            return toast(setMessage(side, 'success', message), options)
        },
        errorMessage(side = 'backend', message, options = { 'theme': 'colored', 'transition': 'slide' }) {
            options = Object.assign({ type: 'error' }, options);
            return toast(setMessage(side, 'error', message), options);
        },
        warningMessage(side = 'backend', message, options = { 'theme': 'colored', 'transition': 'slide' }) {
            options = Object.assign({ type: 'warning' }, options);
            return toast(setMessage(side, 'warning', message), options);
        },
        infoMessage(side = 'backend', message, options = { 'theme': 'colored', 'transition': 'slide' }) {
            options = Object.assign({ type: 'info' }, options);
            return toast(setMessage(side, 'info', message), options);
        },
    };
}
