import { useNuxtApp } from '#app'
import { ref } from 'vue';
import resolveConfig from 'tailwindcss/resolveConfig';
import tailwindConfig from '~/tailwind.config';
const fullConfig = resolveConfig(tailwindConfig);
export function getNuxtApp(){
    const nuxtApp = useNuxtApp();
    return nuxtApp;
}
export function getGsap(){
    return useNuxtApp().$gsap;
}
export function getScrollTrigger(){
    return useNuxtApp().$ScrollTrigger
}
export function useScreenConfig() {
    const screenCon = ref([]);
    const screenSize = ref(window.innerWidth);
    screenCon.value = Object.values(fullConfig.theme.screens).map((item) => {
        return parseInt(item.replace('px', ''));
    });
    window.onresize = () => {
        screenSize.value = window.innerWidth;
    };
    return { screenCon, screenSize };
}