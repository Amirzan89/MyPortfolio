<template>
    <!-- header -->
    <header class="sticky top-0 pointer-events-auto flex items-center justify-center bg-white dark:bg-dark_bg" style="z-index: 999; height: 70px; scroll-padding-top: 70px;">
        <div class="flex flex-row w-7/8 justify-between items-center">
            <h1 v-if="route.path == '/'" class="text-4xl text-primary dark:text-primary_dark_text font-bold">AmFik</h1>
            <NuxtLink v-else to="/" class="text-4xl text-primary dark:text-primary_dark_text font-bold">AmFik</NuxtLink>
            <div class="flex flex-row gap-10">
                <ul class="flex flex-column text-l_pa_1 ml-13 sm:text-sm md:text-lg sm:font-thin xl:font-medium items-center">
                    <template v-if="route.path == '/'">
                        <!-- <a href="#me" class="relative ml-7 text-primary dark:text-primary_dark_text text-xl font-semibold">Home</a> -->
                        <a :href="linkHref[0]" class="relative ml-7 text-xl font-semibold" :class="{
                            'text-black dark:text-white' : !isActive[0] && !isHover[0],
                            'text-primary dark:text-primary_dark_text' : isActive[0],
                            'hover:text-primary dark:hover:text-primary_dark_text' : isHover[0],
                        }" @mouseover="changeHover(0)" @mouseout="changeHover(0)" @click="changeActive(0)">Home</a>
                        <a :href="linkHref[1]" class="relative ml-7 text-xl font-semibold" :class="{
                            'text-black dark:text-white' : !isActive[1] && !isHover[1],
                            'text-primary dark:text-primary_dark_text' : isActive[1],
                            'hover:text-primary dark:hover:text-primary_dark_text' : isHover[1],
                        }" @mouseover="changeHover(1)" @mouseout="changeHover(1)" @click="changeActive(1)">About</a>
                        <a :href="linkHref[2]" class="relative ml-7 text-xl font-semibold" :class="{
                            'text-black dark:text-white' : !isActive[2] && !isHover[2],
                            'text-primary dark:text-primary_dark_text' : isActive[2],
                            'hover:text-primary dark:hover:text-primary_dark_text' : isHover[2],
                        }" @mouseover="changeHover(2)" @mouseout="changeHover(2)" @click="changeActive(2)">Projects</a>
                        <a :href="linkHref[3]" class="relative ml-7 text-xl font-semibold" :class="{
                            'text-black dark:text-white' : !isActive[3] && !isHover[3],
                            'text-primary dark:text-primary_dark_text' : isActive[3],
                            'hover:text-primary dark:hover:text-primary_dark_text' : isHover[3],
                        }" @mouseover="changeHover(3)" @mouseout="changeHover(3)" @click="changeActive(3)">Contact</a>
                    </template>
                </ul>
                <button class="" @click="changeMode()">
                    <img src="~assets/icon/dark.svg" alt="" class="w-9" :class="darkModeStore.darkMode ? '': 'hidden'">
                    <img src="~assets/icon/light.svg" alt="" class="w-14" :class="darkModeStore.darkMode ? 'hidden': ''">
                </button>
            </div>
        </div>
    </header>
    <!-- end header -->
</template>
<style scoped>
    a{
        transition: color 0.2s ease-in;
    }
</style>
<script setup>
import { useDarkModeStore } from '~/store/DarkMode';
import { reactive } from "vue";
const route = useRoute();
const linkHref = ['#me', '#about', '#project', '#contact'];
const isActive = reactive([false, false, false, false]);
const isHover = reactive([false, false, false, false]);
const baseURL = useRuntimeConfig().public.baseURL;
const darkModeStore = useDarkModeStore();
const changeHover = (item) => {
    isHover[item] = !isHover[item];
};
const changeActive = (item) => {
    isActive.forEach((active, index) => {
        if (active) isActive[index] = false;
    });
    isActive[item] = true;
};
onMounted(() => {
    const index = linkHref.indexOf(route.hash);
    isActive[index === -1 ? 0 : index] = true;
});
const changeMode = () => {
    darkModeStore.toggleDarkMode();
};
</script>