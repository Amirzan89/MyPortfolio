<template>
    <!-- header -->
    <header class="sticky top-0 pointer-events-auto flex items-center bg-primary-100" style="z-index: 999; height: 70px; scroll-padding-top: 70px;">
        <h1 class="ml-15 text-4xl font-semibold">Amirzan</h1>
        <ul class="flex flex-column text-l_pa_1 ml-13 sm:text-sm md:text-lg sm:font-thin xl:font-medium items-center">
            <template v-if="route.path == '/'">
                <a href="#me" class="relative ml-7 hover:text-red-500 text-xl font-normal">Home</a>
                <a href="#about" class="relative ml-7 hover:text-red-500 text-xl font-normal">About</a>
                <a href="#service" class="relative ml-7 hover:text-red-500 text-xl font-normal">Services</a>
                <a href="#project" class="relative ml-7 hover:text-red-500 text-xl font-normal">Projects</a>
                <a href="#contact" class="relative ml-7 hover:text-red-500 text-xl font-normal">Contact</a>
            </template>
            <template v-if="route.name == 'Projects'">
                <a href="#me" class="relative ml-7 hover:text-red-500 text-xl font-normal">Home</a>
            </template>
            <template v-if="route.name == 'ProjectsDetail'">
                <a href="#me" class="relative ml-7 hover:text-red-500 text-xl font-normal">Home</a>
                <a href="#contact" class="relative ml-7 hover:text-red-500 text-xl font-normal">Contact</a>
            </template>
        </ul>
        <div/>
    </header>
    <!-- end header -->
</template>
<script setup>
const route = useRoute();
console.log(route);
console.log(route.fullPath);
</script>