import { defineStore } from "pinia";
export const useDarkModeStore = defineStore('darkMode', {
    state: () => {
        darkMode: false
    },
    actions: {
        toggleDarkMode() {
            this.darkMode = !this.darkMode
            if (this.darkMode) {
            document.documentElement.classList.add('dark')
            localStorage.setItem('dark-mode', 'enabled')
            } else {
            document.documentElement.classList.remove('dark')
            localStorage.setItem('dark-mode', null)
            }
        }
    },
});