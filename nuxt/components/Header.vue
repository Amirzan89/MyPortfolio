<template>
    <!-- header -->
    <header class="sticky top-0 pointer-events-auto flex items-center justify-center bg-white dark:bg-dark_bg" style="z-index: 999; height: 70px; scroll-padding-top: 70px;">
        <div class="flex flex-row w-7/8 justify-between items-center">
            <h1 class="text-4xl text-primary dark:text-primary_dark_text font-bold">AmFik</h1>
            <div class="flex flex-row gap-10">
                <ul class="flex flex-column text-l_pa_1 ml-13 sm:text-sm md:text-lg sm:font-thin xl:font-medium items-center">
                    <template v-if="route.path == '/'">
                        <a href="#me" class="relative ml-7 text-primary hover:text-primary-500 dark:text-primary_dark_text text-xl font-semibold">Home</a>
                        <a href="#about" class="relative ml-7 text-primary hover:text-primary-500 dark:text-primary_dark_text text-xl font-semibold">About</a>
                        <a href="#project" class="relative ml-7 text-primary hover:text-primary-500 dark:text-primary_dark_text text-xl font-semibold">Projects</a>
                        <a href="#contact" class="relative ml-7 text-primary hover:text-primary-500 dark:text-primary_dark_text text-xl font-semibold">Contact</a>
                    </template>
                    <template v-if="route.name == 'Projects'">
                        <NuxtLink to="/" class="relative ml-7 text-primary hover:text-primary-500 text-xl font-semibold">Home</NuxtLink>
                    </template>
                    <template v-if="route.name == 'ProjectsDetail'">
                        <NuxtLink to="/" class="relative ml-7 text-primary hover:text-primary-500 text-xl font-semibold">Home</NuxtLink>
                    </template>
                </ul>
                <button class="" @click="changeMode()">
                    <img src="~assets/icon/dark.svg" alt="" class="w-11" :class="darkModeStore.darkMode ? '': 'hidden'">
                    <img src="~assets/icon/light.svg" alt="" class="w-15" :class="darkModeStore.darkMode ? 'hidden': ''">
                </button>
            </div>
        </div>
    </header>
    <!-- end header -->
</template>
<script setup>
import { useDarkModeStore } from '~/store/DarkMode';
const route = useRoute();
const darkModeStore = useDarkModeStore();
const changeMode = () => {
    darkModeStore.toggleDarkMode();
};
// const changeMode = () => {
//     if (!darkMode) {
//         document.documentElement.classList.add('dark');
//         localStorage.setItem('dark-mode', 'enabled');
//         console.log('change to dark');
//         lightIcon.classList.add('hidden');
//         darkIcon.classList.remove('hidden');
//         darkMode = true;
//     } else {
//         document.documentElement.classList.remove('dark');
//         localStorage.setItem('dark-mode', null);
//         darkIcon.classList.add('hidden');
//         lightIcon.classList.remove('hidden');
//         console.log('change to light');
//         darkMode = false;
//     }
// }
</script>