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
    css: ['~/assets/css/tailwind.css', '~/assets/css/global.css', '@fortawesome/fontawesome-svg-core/styles.css'],
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
        '@pinia/nuxt',
    ],
})