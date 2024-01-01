import { createStore } from 'vuex';
const darkModeStore = createStore({
    state: {
        isDark: false,
    },
    mutations: {
        toggleDarkMode(state) {
            state.isDark = !state.isDark;
        },
    },
    actions: {
        toggleDarkMode({ commit }) {
            commit('toggleDarkMode');
        },
    },
    getters: {
        isDark: (state) => state.isDark,
    },
});
export default darkModeStore