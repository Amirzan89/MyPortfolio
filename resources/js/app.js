import './bootstrap'
// import { createApp } from 'vue'
import { createApp } from 'vue/dist/vue.esm-bundler.js'
import darkMode from './darkMode.vue'
import contact from './Components/contact.vue'
const contactApp = createApp(contact).mount('#contact')
import darkModeStore from './darkModeStore'
import footer from './Components/footer.vue'
const darkModeApp = createApp(darkMode)
darkModeApp.use(darkModeStore).mount('#darkMode')
const footerApp = createApp(footer)
footerApp.use(darkModeStore).mount('#footer')