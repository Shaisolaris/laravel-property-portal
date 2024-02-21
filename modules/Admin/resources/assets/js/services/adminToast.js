import { toast } from 'vue3-toastify';


export function adminToast() {
    return {
        toast(options, message) {
            if (typeof options === 'string' || options instanceof String){
                options = {type: options};
            }

            return toast(message, options)
        },
        success(options, message) {
            options = Object.assign({type: 'success'}, options);

            return toast(message, options)
        },
        error(options, message) {
            options = Object.assign({type: 'error'}, options);

            return toast(message, options)
        },
        warning(options, message) {
            options = Object.assign({type: 'warning'}, options);

            return toast(message, options)
        },
        info(options, message) {
            options = Object.assign({type: 'info'}, options);

            return toast(message, options)
        },
    };
}
