<template>
    <!-- Hero section -->
    <section id="me" class="w-full bg-cover h-screen dark:bg-white relative flex items-center" style="padding-top: 70px;">
        <div class="flex justify-center flex-col mb-30 ml-15">
            <h3 class="text-2xl font-bold">Hi I'm Amirzan Fikri</h3>
            <h1 class="text-5xl font-semibold mt-5">Full stack Laravel developer</h1>
        </div>
        <img :src="publicConfig.baseURL + '/img/profile/testing.png'" class="max-w-sm ml-25 object-cover rounded-lg h-100"/>
    </section>
    <!-- end hero section -->
    <!--  About -->
    <section id="about" class="relative left-1/2 -translate-x-1/2 flex justify-center mt-30" style="padding-top: 70px;">
        <div class="content w-5/6 flex flex-col cursor-default text-xl">
            Hello there i'm web developer on laravel and vue. I offer expertise in website development, responsive design, front end using tailwind css & vue js or back end using laravel. I am committed to delivering high-quality work and collaborating with clients to create effective and functional websites that meet their needs. With a strong attention to detail and a passion for learning and staying up-to-date with industry trends, I am excited to work with you on your web development projects.
        </div>
    </section>
    <!-- end about -->
    <!-- service -->
    <section id="service" class="mt-50 flex flex-col bg-purple-500" style="padding-top: 70px;">
        <div class="relative left-1/2 -translate-x-1/2 flex gap-10 justify-center">
            <div class="w-50 h-50 bg-green-500 flex justify-center items-center">
                <!-- <img src="" alt=""> -->
                <span>Lorem ipsum dolor sit</span>
            </div>
            <div class="w-50 h-50 bg-green-500 flex justify-center items-center">
                <!-- <img src="" alt=""> -->
                <span>Lorem ipsum dolor sit</span>
            </div>
            <div class="w-50 h-50 bg-green-500 flex justify-center items-center">
                <!-- <img src="" alt=""> -->
                <span>Lorem ipsum dolor sit</span>
            </div>
        </div>
    </section>
    <!-- end service -->
    <!-- deliver -->
    <!-- <section>
        <div>what can i do</div>
    </section> -->
    <!-- end deliver -->
    <!-- project -->
    <section id="project" class="mt-50 flex flex-col" style="padding-top: 70px;">
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
    <!-- end project -->
    <!-- contact -->
    <section class="mt-20  w-full h-200" style="padding-top: 70px;">
    <!-- <section id="contact" class="mt-20 bg-purple-400"> -->
        <div class="w-200 relative top-2/4 -translate-y-2/4 left-2/4 -translate-x-2/4 p-8 bg-primary-200 bg--opacity-30 backdrop-filter backdrop-blur-lg rounded-md">
            <form v-on:submit.prevent="sendEmail" id="contact" class="relative bg-500 w-150 mx-auto h-2/4 flex flex-col gap-5 align-center pointer-events-auto">
                <span class="text-white text-5xl mx-auto">Contact Me !</span>
                <div class="mx-auto mt-3 w-full">
                    <input type="text" placeholder="Email Address" name="email" class="w-full h-14 rounded-xl pl-5 text-2xl input border-4 focus:outline-none focus:border-5 transition duration-400 ease-in-out" :class="{
                        'hover:border-blue-600 focus:border-blue-600' : !isErrorEmail && !isValidEmail,
                        'border-popup_error hover:border-popup_error focus:border-popup_error' : isErrorEmail,
                        'border-popup_success hover:border-popup_success focus:border-popup_success' : isValidEmail }" v-model="inpEmail" @input="handleInput('email')">
                    <span v-if="isErrorEmail" class="ml-3 mt-2 text-red-500 font-semibold text-lg cursor-default">{{ errEmail }}</span>
                </div>
                <div class="mx-auto w-full h-18 flex flex-row gap-4">
                    <div class="h-full flex-1">
                        <input type="text" placeholder="Full Name" name="name" class="w-full h-3/4 rounded-xl pl-4 text-xl input border-4 hover:border-blue-600 focus:outline-none focus:border-5 focus:border-blue-600 transition duration-400 ease-in-out" :class="{
                        'hover:border-blue-600 focus:border-blue-600' : !isErrorName && !isValidName,
                        'border-popup_error hover:border-popup_error focus:border-popup_error' : isErrorName,
                        'border-popup_success hover:border-popup_success focus:border-popup_success' : isValidName }" v-model="inpName" @input="handleInput('name')">
                        <span v-if="isErrorName" class="ml-3 mt-1 text-red-500 font-semibold text-lg cursor-default">{{ errName }}</span>
                    </div>
                    <div class="h-full flex-1">
                        <input type="text" placeholder="Subject" name="subject" class="w-full h-3/4 rounded-xl pl-4 text-xl input border-4 hover:border-blue-600 focus:outline-none focus:border-5 focus:border-blue-600 transition duration-400 ease-in-out" :class="{
                        'hover:border-blue-600 focus:border-blue-600' : !isErrorSubject && !isValidSubject,
                        'border-popup_error hover:border-popup_error focus:border-popup_error' : isErrorSubject,
                        'border-popup_success hover:border-popup_success focus:border-popup_success' : isValidSubject }" v-model="inpSubject" @input="handleInput('subject')">
                        <span v-if="isErrorSubject" class="ml-3 mt-1 text-red-500 font-semibold text-lg cursor-default">{{ errSubject }}</span>
                    </div>
                </div>
                <div class="mx-auto w-full h-50">
                    <textarea name="message" cols="" rows="" class="w-full h-full pl-4 rounded-xl pt-3 text-lg input border-4 hover:border-blue-600 focus:outline-none focus:border-5 focus:border-blue-600 resize-none transition duration-400 ease-in-out" placeholder="Your Message" :class="{
                        'hover:border-blue-600 focus:border-blue-600' : !isErrorMessage && !isValidMessage,
                        'border-popup_error hover:border-popup_error focus:border-popup_error' : isErrorMessage,
                        'border-popup_success hover:border-popup_success focus:border-popup_success' : isValidMessage }" v-model="inpMessage" @input="handleInput('message')"></textarea>
                    <span v-if="isErrorMessage" class="ml-3 mt-1 text-red-500 font-semibold text-lg cursor-default">{{ errMessage }}</span>
                </div>
                <div class="mx-auto w-full mt-10">
                    <input type="submit" value="Send Message" class="w-1/3 h-10 bg-red-500 rounded-full relative left-2/4 -translate-x-2/4 cursor-pointer">
                </div>
            </form>
            <div class="fixed z-100 w-full h-full top-0 left-0" v-if="isLoading">
                <div class="bg w-full h-full bg-blue-300/20"></div>
                <div class="inline-block absolute w-40 h-40 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 ">
                    <div class="absolute left-2 w-10 bg-white custom-animation custom-animation-delay-long"></div>
                    <div class="absolute left-18 w-10 bg-white custom-animation custom-animation-delay-short"></div>
                    <div class="absolute left-35 w-10 bg-white custom-animation"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact -->
</template>
<style>
    .items-loading{
        background: linear-gradient(135deg, #b9b9b9 0%, #cdcdcd 52%, #fff 52%, #fff 54%, #cdcdcd 54%, #b9b9b9 100%);
        background-size: 180% 180%; background-position: 100% 100%;
    }
    @keyframes shine {
        to {
            background-position: 0% 0%;
        }
    }
    @keyframes custom-animation {
    0%, 100% {
        top: 8px;
        height: 64px;
    }
    50% {
        top: 24px;
        height: 32px;
    }
    }

    .custom-animation {
    animation: custom-animation 1.2s cubic-bezier(0, 1, 0.5, 1) infinite;
    }

    .custom-animation-delay-long {
    animation-delay: -0.24s;
    }

    .custom-animation-delay-short {
    animation-delay: -0.12s;
    }
</style>
<script setup>
import axios from 'axios';
const publicConfig = useRuntimeConfig().public;
definePageMeta({
    layout: 'home',
});
// useAsyncData(async () => {
//     const res = await axios.get(publicConfig.baseURL + '/', {
//         headers: {
//             'Accept': 'application/json',
//         }
//     });
//     local.fetchedSelfProject = res.data.self_project;
//     local.fetchedTeamProject = res.data.team_project;
// });
// watch(() => local.fetchedSelfProject, () => {
// }, { immediate:true });
// watch(() => local.fetchedTeamProject, () => {
// }, { immediate:true });
const local = reactive({
    fetchedSelfProject: null,
    fetchedTeamProject: null,
});
const input = reactive({
    name: '',
    subject: '',
    email: '',
    message: '',
});
const sendEmail = async() => {
    const res = await axios.post(publicConfig.baseURL + '/send-email', {
        name: input.name,
        subject: input.subject,
        email: input.email,
        message: input.message,
    });
    if(res.status === 'success'){
        eventBus.emit('closeLoading');
        eventBus.emit('showGreenPopup', res.message);
        setTimeout(function(){
            navigateTo('/dashboard');
        }, 1500);
    }else if(res.status === 'error'){
        eventBus.emit('closeLoading');
        popup.value.classList.remove('invisible');
        errMessage.value = res.message;
    }
}
</script>