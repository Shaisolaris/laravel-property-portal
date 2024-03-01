const state = {
    languages: [],
    languageCodes: [],
    locale: "",
    letters: [ 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z' ],
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
    getLetters: state => state.letters,
}

export default {
    namespaced: true,
    state,
    mutations,
    getters,
    actions,
};