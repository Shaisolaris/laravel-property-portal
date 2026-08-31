import Swal from "sweetalert2";

const swAlert = {
    show(text, title = null, options) {
        options = {
            title:            title,
            text:             text,
            icon:             'question',
            showCancelButton: true,
            // cancelButtonColor: props.cancelButtonColor,
            // confirmButtonColor: props.confirmButtonColor,
            // confirmButtonText: props.confirmButtonText,
            ...options
        }

        return Swal.fire(options).then((result) => {
            return !!result.value;
        });
    },
    question(text, title = null, options) {
        return this.show(text, title = null, {
            icon:             'question',
            showCancelButton: true,
            ...options
        });
    },
    warning(text, title = null, options) {
        return this.show(text, title = null, {
            icon: 'warning',
            ...options
        });
    },
    success(text, title = null, options) {
        return this.show(text, title = null, {
            icon: 'success',
            ...options
        });
    },
    error(text, title = null, options) {
        return this.show(text, title = null, {
            icon: 'warning',
            ...options
        });
    },
};

export default swAlert;
