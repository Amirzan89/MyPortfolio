<template>
    <!-- header -->
    <header class="sticky top-0 pointer-events-auto flex items-center justify-center bg-white dark:bg-dark_bg">
        <div class="flex flex-row phone:w-11/12 lg:w-7/8 justify-between items-center">
            <h1 v-if="route.path == '/'" class="phone:text-sm sm:text-xl md:text-3xl xl:text-4xl 2xl:text-5xl text-6xl text-primary dark:text-primary_dark_text font-bold">AmFik</h1>
            <NuxtLink v-else to="/" class="phone:text-sm sm:text-xl md:text-3xl xl:text-4xl 2xl:text-5xl text-6xl text-primary dark:text-primary_dark_text font-bold">AmFik</NuxtLink>
            <div class="flex flex-row phone:gap-2 sm:gap-5 md:gap-10">
                <ul class="flex flex-column text-l_pa_1 ml-13 sm:font-thin xl:font-medium items-center phone:gap-2 sm:gap-5 md:gap-7 lg:gap-10">
                    <template v-if="route.path == '/'">
                        <a :href="linkHref[0]" class="relative phone:text-2xs sm:text-sm md:text-lg lg:text-xl xl:text-2xl 2xl:text-2xl text-3xl font-semibold" :class="{
                            'text-black dark:text-white' : !isActive[0] && !isHover[0],
                            'text-primary dark:text-primary_dark_text' : isActive[0],
                            'hover:text-primary dark:hover:text-primary_dark_text' : isHover[0],
                        }" @mouseover="changeHover(0)" @mouseout="changeHover(0)" @click="changeActive(0)">Home</a>
                        <a :href="linkHref[1]" class="relative phone:text-2xs sm:text-sm md:text-lg lg:text-xl xl:text-2xl 2xl:text-2xl text-3xl font-semibold" :class="{
                            'text-black dark:text-white' : !isActive[1] && !isHover[1],
                            'text-primary dark:text-primary_dark_text' : isActive[1],
                            'hover:text-primary dark:hover:text-primary_dark_text' : isHover[1],
                        }" @mouseover="changeHover(1)" @mouseout="changeHover(1)" @click="changeActive(1)">About</a>
                        <a :href="linkHref[2]" class="relative phone:text-2xs sm:text-sm md:text-lg lg:text-xl xl:text-2xl 2xl:text-2xl text-3xl font-semibold" :class="{
                            'text-black dark:text-white' : !isActive[2] && !isHover[2],
                            'text-primary dark:text-primary_dark_text' : isActive[2],
                            'hover:text-primary dark:hover:text-primary_dark_text' : isHover[2],
                        }" @mouseover="changeHover(2)" @mouseout="changeHover(2)" @click="changeActive(2)">Projects</a>
                        <a :href="linkHref[3]" class="relative phone:text-2xs sm:text-sm md:text-lg lg:text-xl xl:text-2xl 2xl:text-2xl text-3xl font-semibold" :class="{
                            'text-black dark:text-white' : !isActive[3] && !isHover[3],
                            'text-primary dark:text-primary_dark_text' : isActive[3],
                            'hover:text-primary dark:hover:text-primary_dark_text' : isHover[3],
                        }" @mouseover="changeHover(3)" @mouseout="changeHover(3)" @click="changeActive(3)">Contact</a>
                    </template>
                </ul>
                <button class="" @click="changeMode()">
                    <img id="modeDark" src="~assets/icon/dark.svg" alt="" class="phone:w-4 sm:w-6 md:w-7 lg:w-9 xl:w-10 2xl:w-11 w-13">
                    <img id="modeLight" src="~assets/icon/light.svg" alt="" class="phone:w-8 sm:w-9 md:w-10 lg:w-12 xl:w-14 2xl:w-15 w-16">
                </button>
            </div>
        </div>
    </header>
    <!-- end header -->
</template>
<style scoped>
    header{
        z-index: 999;
        height: var(--paddTop);
        scroll-padding-top: var(--paddTop);
    }
    a{
        transition: color 0.2s ease-in;
    }
</style>
<script setup>
import { reactive } from "vue";
import { useDarkModeStore } from '~/store/DarkMode';
const route = useRoute();
const linkHref = ['#me', '#about', '#project', '#contact'];
const isActive = reactive([false, false, false, false]);
const isHover = reactive([false, false, false, false]);
const darkModeStore = useDarkModeStore();
const { $gsap } = useNuxtApp();
let header = null;
const changeHover = (item) => {
    isHover[item] = !isHover[item];
};
const changeActive = (item) => {
    isActive.forEach((active, index) => {
        if (active) isActive[index] = false;
    });
    isActive[item] = true;
};
const changeIcon = (cond = '') => {
    if(cond == 'light'){
        $gsap.set(header('img#modeLight'), { display: !darkModeStore.darkMode ? 'block':'none' });
    }else if(cond == 'dark'){
        $gsap.set(header('img#modeDark'), { display: darkModeStore.darkMode ? 'block':'none' });
    }else{
        $gsap.set(header('img#modeLight'), { display: !darkModeStore.darkMode ? 'block':'none' });
        $gsap.set(header('img#modeDark'), { display: darkModeStore.darkMode ?'block':'none' });
    }
}
onMounted(() => {
    header = $gsap.utils.selector('header');
    changeIcon();
    const index = linkHref.indexOf(route.hash);
    isActive[index === -1 ? 0 : index] = true;
});
const changeMode = () => {
    darkModeStore.toggleDarkMode();
    const tl = $gsap.timeline();
    if(darkModeStore.darkMode){
        tl.to(header('img#modeLight'), {
            onComplete: () => {
                changeIcon('light');
                changeIcon('dark');
                $gsap.set(header('img#modeLight'), { y: '0%', autoAlpha: 1 });
            },
            y:'50%',
            autoAlpha: 0,
            duration: darkModeStore.transitionTime/2,
        });
        tl.from(header('img#modeDark'), {
            onComplete: () => {
                $gsap.set(header('img#modeDark'), { y: '0%', autoAlpha: 1 });
            },
            y:'50%',
            autoAlpha: 0,
            duration: darkModeStore.transitionTime/2,
        })
    }else{
        tl.to(header('img#modeDark'), {
            onComplete: () => {
                changeIcon('light');
                changeIcon('dark');
                $gsap.set(header('img#modeDark'), { y: '0%', autoAlpha: 1 });
            },
            y:'50%',
            autoAlpha: 0,
            duration: darkModeStore.transitionTime/2,
        });
        tl.from(header('img#modeLight'), {
            onComplete: () => {
                $gsap.set(header('img#modeLight'), { y: '0%', autoAlpha: 1 }); 
            },
            y:'50%',
            autoAlpha: 0,
            duration: darkModeStore.transitionTime/2,
        });
    }
};
</script>