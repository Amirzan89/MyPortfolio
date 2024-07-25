export default defineNuxtConfig({
    devtools: {
        enabled: true,
        timeline: {
            enabled: true,
        },
    },
    runtimeConfig:{
        public: {
            baseURL: process.env.APP_URL || 'https://amirzanfikri.my.id',
            // baseURL: process.env.APP_URL || 'http://localhost:8000',
        },
    },
    ssr: false,
    css: ['~/assets/css/tailwind.css', '~/assets/css/global.scss', '@fortawesome/fontawesome-svg-core/styles.css'],
    app:{
        head:{
            script:[
                //for polyfilss.js
                // {
                //     src: 'https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/7.6.0/polyfill.min.js',
                //     nomodule: true,
                //     crossorigin: 'anonymous'
                // },
                // {
                // src: 'https://cdnjs.cloudflare.com/polyfill/v3/polyfill.min.js?features=Object.assign%2CElement.prototype.append%2CNodeList.prototype.forEach%2CCustomEvent%2Csmoothscroll',
                // nomodule: true,
                // crossorigin: 'anonymous'
                // }
            ],
        },
    },
    postcss: {
        plugins: {
            tailwindcss: {},
            autoprefixer: {},
        },
    },
    components: [
        {
            path: '~/components',
            extensions: ['.vue'],
        }
    ],
    modules: [
        '@pinia/nuxt', '@hypernym/nuxt-gsap',
    ],
    gsap:{
        extraPlugins:{
            scrollTrigger: true,
            draggable:true,
        }
    }
})