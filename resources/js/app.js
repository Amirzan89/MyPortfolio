import './bootstrap'
// import { createApp } from 'vue'
import { createApp } from 'vue/dist/vue.esm-bundler.js'
import darkMode from './darkMode.vue'
import contact from './Components/contact.vue'
createApp(darkMode).mount('#darkMode')
const contactApp = createApp(contact).mount('#contact')