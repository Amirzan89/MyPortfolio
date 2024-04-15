<template>
<section class="relative min-h-screen">
    <div class="flex relative left-1/2 -translate-x-1/2 justify-between items-center" style="width:90%">
        <span class="text-3xl relative font-semibold">Projects</span>
        <NuxtLink to="/projects" class="text-xl flex gap-2 items-center hover:text-red-500">
            <span>Others</span>
            <img :src="publicConfig.baseURL + '/img/icon/arrow-right.svg'" class="w-6">
        </NuxtLink>
    </div>
    <ul class="relative left-1/2 -translate-x-1/2 flex mt-5 mb-10 flex-wrap justify-between bg-blue-500" style="width:95%;">
        <li class="list-none relative" style="width:31%;">
            <NuxtLink to="/projects" class="mb-2 hover:bg-red-500 flex flex-col rounded-xl">
                <img :src="publicConfig.baseURL + '/img/project/testing/1.jpg'" alt="" class="relative left-1/2 -translate-x-1/2 object-cover rounded-lg mt-3 h-40" style="width:90%">
                <h3 class="relative left-5 mt-4 text-xl font-semibold w-max">EduAksi</h3>
                <span class="relative left-5 mt-5 mb-10 w-max">Team Project</span>
            </NuxtLink>
            <div class="card-loading absolute top-0 left-0 flex flex-col bg-transparent w-full">
                <div class="h-40 mt-3 rounded-md relative left-1/2 -translate-x-1/2 items-loading" style="width: 90%; animation: 2.5s shine ease-in infinite; animation-delay: 0.25s;"/>
                <h3 class="w-55 h-8 rounded-md relative left-5 mt-5 items-loading" style="animation: 2.5s shine ease-in infinite; animation-delay: 0.25s;"/>
                <span class="w-30 h-7 relative left-5 mt-4 mb-10 rounded-md items-loading" style="animation: 2.5s shine ease-in infinite; animation-delay: 0.25s;"/>
            </div>
        </li>
        <li class="list-none relative" style="width:31%;">
            <NuxtLink to="/projects" class="mb-2 hover:bg-red-500 flex flex-col rounded-xl">
                <img :src="publicConfig.baseURL + '/img/project/testing/2.jpg'" alt="" class="relative left-1/2 -translate-x-1/2 object-cover rounded-lg mt-3 h-40" style="width:90%">
                <h3 class="relative left-5 mt-7 text-xl font-semibold w-max">File-sharing</h3>
                <span class="relative left-5 mt-3 mb-5 text-lg w-max">Self Project</span>
            </NuxtLink>
            <div class="card-loading absolute top-0 left-0 flex flex-col bg-transparent w-full">
                <div class="h-40 mt-3 rounded-md relative left-1/2 -translate-x-1/2 items-loading" style="width: 90%; animation: 2.5s shine ease-in infinite; animation-delay: 0.25s;"/>
                <h3 class="w-55 h-9 rounded-md relative left-5 mt-5 items-loading" style="animation: 2.5s shine ease-in infinite; animation-delay: 0.25s;"/>
                <span class="w-30 h-7 relative left-5 mt-4 mb-10 rounded-md items-loading" style="animation: 2.5s shine ease-in infinite; animation-delay: 0.25s;"/>
            </div>
        </li>
        <li class="list-none relative" style="width:31%;">
            <NuxtLink to="/projects" class="mb-2 hover:bg-red-500 flex flex-col rounded-xl">
                <img :src="publicConfig.baseURL + '/img/project/testing/3.png'" alt="" class="relative left-1/2 -translate-x-1/2 object-cover rounded-lg mt-3 h-40" style="width:90%">
                <h3 class="relative left-5 mt-7 text-xl font-semibold w-max">Smarttrashku</h3>
                <span class="relative left-5 mt-3 mb-5 text-lg w-max">Team Project</span>
            </NuxtLink>
            <div class="card-loading absolute top-0 left-0 flex flex-col bg-transparent w-full">
                <div class="h-40 mt-3 rounded-md relative left-1/2 -translate-x-1/2 items-loading" style="width: 90%; animation: 2.5s shine ease-in infinite; animation-delay: 0.25s;"/>
                <h3 class="w-55 h-9 rounded-md relative left-5 mt-5 items-loading" style="animation: 2.5s shine ease-in infinite; animation-delay: 0.25s;"/>
                <span class="w-30 h-7 relative left-5 mt-4 mb-10 rounded-md items-loading" style="animation: 2.5s shine ease-in infinite; animation-delay: 0.25s;"/>
            </div>
        </li>
    </ul>
</section>
</template>
<script setup>
const publicConfig = useRuntimeConfig().public;
definePageMeta({
    name: 'Projects',
    layout: 'home',
});
</script>