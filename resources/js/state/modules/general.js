const state = {
    languages: [],
    languageCodes: [],
    locale: ""
};

const mutations = {
    setLanguageCodes(state, data) {
        data.forEach(element => {
            state.languageCodes.push(element?.code);
        })
    },
    setLanguages(state, data) {
        state.languages = data;
    },
    setLocale(state, data) {
        state.locale = data;
    }
};

const actions = {
    loadLanguages() {
        return axios.get('/api/get-languages');
    }
};

const getters = {
    getLanguages: state => state.languages,
    getLanguageCodes: state => state.languageCodes,
    getLocale: state => state.locale,
}

export default {
    namespaced: true,
    state,
    mutations,
    getters,
    actions,
};