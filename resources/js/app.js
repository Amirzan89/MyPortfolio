import './bootstrap'
import { createApp } from 'vue'
// import { createApp } from 'vue/dist/vue.esm-bundler.js'
import contact from './Components/contact.vue'
const contactApp = createApp(contact).mount('#contact')