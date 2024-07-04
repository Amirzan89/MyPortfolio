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
    css: ['~/assets/css/tailwind.css', '~/assets/css/global.css', '~/assets/css/transitions.css', '@fortawesome/fontawesome-svg-core/styles.css'],
    postcss: {
        plugins: {
            tailwindcss: {},
            autoprefixer: {},
        },
    },
    app: {
        pageTransition: false,
        layoutTransition: false
    },    
    components: [
        {
            path: '~/components',
            extensions: ['.vue'],
        }
    ],
    modules: [
        '@pinia/nuxt',
    ],
})