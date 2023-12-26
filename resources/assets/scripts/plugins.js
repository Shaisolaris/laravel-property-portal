if (document.querySelectorAll("[toast-list]").length > 0 ||
    document.querySelectorAll('[data-choices]').length > 0 ||
    document.querySelectorAll("[data-provider]").length > 0) {

    const scripts = [
        'https://cdn.jsdelivr.net/npm/toastify-js',
        'build/libs/choices.js/public/assets/scripts/choices.min.js',
        'build/libs/flatpickr/flatpickr.min.js',
        'build/libs/simplebar/simplebar.min.js',
        'build/libs/sweetalert2/sweetalert2.min.js'
    ];

    scripts.forEach(function (src) {
        let script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = src;
        document.body.appendChild(script);
    });
}