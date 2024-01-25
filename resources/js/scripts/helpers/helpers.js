import { useForm } from "@inertiajs/vue3";
import moment from "moment/moment";
import _ from "lodash";

const helpers = {
    LIMIT_LENGTH_INPUT_TEXT: 1000,

    formatDate: (date, format = "YYYY-MM-D") => moment(date).format(format),

    limitedLengthText: (length, limit = helpers.LIMIT_LENGTH_INPUT_TEXT) => limit - length,

    countString: (text, limit = helpers.LIMIT_LENGTH_INPUT_TEXT) => (text ? helpers.limitedLengthText(text.length, limit) : limit),

    cleanText: (text) => text.replace(/<\/?[^>]+(>|$)/g, ""),

    ucFirst: (string) => string.charAt(0).toUpperCase() + string.slice(1),

    trimmedString: (string, length = 50, separator = "...") =>
        string.length > length ? string.substring(0, length - 3) + separator : string,

    buildURLParamsToString: (data) => {
        const params = new URLSearchParams(data);
        return params.toString();
    },

    getParametersUrl: (search) =>
        new Proxy(new URLSearchParams(search), {
            get: (searchParams, prop) => searchParams.get(prop),
        }),

    incremetDateIfMore: (start, end, format = "YYYY-MM-D hh:mm:ss") => {
        if (moment(start).isSameOrAfter(end)) {
            end = moment(start).add(1, "day").format(format);
            notify({
                title: "Date has be change",
                text: "The end date cannot be less than the start date",
                type: "warn",
                duration: 10000,
            });
            return end;
        }
        return end;
    },

    sendForm: ({ form = useForm(), url, method = "post", toObject = false }, callback = function () {
    }) => {
        const processingForm = (form, status = true) => (form.processing = status);

        const request = (data) => {
            if (method === "get" || method === "delete") {
                // eslint-disable-next-line no-undef
                return axios[method](url + "?" + helpers.buildURLParamsToString(data));
            } else {
                // eslint-disable-next-line no-undef
                return axios[method](url, data, {
                    "Content-Type": "multipart/form-data",
                });
            }
        };

        processingForm(form);

        form.clearErrors();

        let formData = new FormData();

        if (toObject) {
            formData = form.data();
        } else {
            for (const [ key, value ] of Object.entries(form.data())) {
                formData.set(key, value !== "" && value !== null ? value : "");
            }
        }

        request(formData)
            .then((response) => {
                callback(response, null);
                processingForm(form, false);
            })
            .catch((errors) => {

                if (errors.response) {
                    let response = errors.response.data;
                    _.forEach(response.errors, (value, name) => form.setError(name, value[0]));
                    callback(null, response);
                } else {
                    callback(errors, null);
                }

                processingForm(form, false);
            });
    },

    base64toFile: (string, fileName = "image.png", get_blob = false) => {
        const base64Data = string.split(",")[1];

        const blob = new Blob(
            [
                new Uint8Array(
                    atob(base64Data)
                        .split("")
                        .map((data) => data.charCodeAt(0)),
                ),
            ],
            { type: "image/png" },
        );

        if (get_blob) {
            return blob;
        }

        return new File([ blob ], fileName, { type: "image/png" });
    },

    randomString: (length = 10, uppercase = false, withNumber = true) => {
        let result = "";

        let characters = "Zabcdefghijklmnopqrstuvwxyz";
        let upperCaserCharacters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

        if (uppercase) {
            characters = upperCaserCharacters;
        } else {
            characters = upperCaserCharacters + characters;
        }

        if (withNumber) {
            characters = characters + "0123456789";
        }

        const charactersLength = characters.length;
        let counter = 0;
        while (counter < length) {
            result += characters.charAt(Math.floor(Math.random() * charactersLength));
            counter += 1;
        }
        return result;
    },
};

export default helpers;
