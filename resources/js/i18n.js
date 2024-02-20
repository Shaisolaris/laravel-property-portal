import { createI18n } from 'vue-i18n';

import en from './lang/en.json';
import fa from './lang/fa.json';
import ps from './lang/ps.json';
import dr from './lang/dr.json';

const messages = { en, fa, ps, dr }
const locale = sessionStorage.getItem("locale");

export default createI18n({
    legacy: false,
    locale: locale || "en",
    fallbackLocale: "en",
    messages: messages
});