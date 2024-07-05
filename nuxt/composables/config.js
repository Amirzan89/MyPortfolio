import { useNuxtApp } from '#app'
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