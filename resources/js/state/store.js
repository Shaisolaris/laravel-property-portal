import Vuex from 'vuex';

import layout from './modules/layout';
import general from './modules/general';

const store = new Vuex.Store({
    modules: {
        layout: layout,
        general: general,
    },
});

export default store;

