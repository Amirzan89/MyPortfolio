import './bootstrap'
import { createApp } from 'vue/dist/vue.esm-bundler.js'
const app = createApp({
    data(){
        return{
            error:'',
        }
    },
    methods:{
        inputEmail(){
            console.log('email inputt');
        }
    }
});
app.mount('#contact');