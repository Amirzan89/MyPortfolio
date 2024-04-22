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
        <div class="flex relative left-1/2 -translate-x-1/2 justify-between items-center">
            <span class="text-3xl relative font-semibold">Projects</span>
            <NuxtLink to="/projects" class="text-xl flex gap-2 items-center hover:text-red-500">
                <span>Others</span>
                <img :src="publicConfig.baseURL + '/img/icon/arrow-right.svg'" class="w-6">
            </NuxtLink>
        </div>
        <ul class="relative left-1/2 -translate-x-1/2 flex mt-5 mb-10 flex-wrap gap-5 bg-blue-500">
            <template v-for="(item, index) in local.fetchedViewData" :key="index">
                <li class="cardI list-none relative" ref="cardRefs">
                    <NuxtLink :to="{ name: 'ProjectsDetail', params: { link:item.link }}" class="mb-2 hover:bg-red-500 flex flex-col rounded-xl">
                        <img :src="publicConfig.baseURL + '/img/project/' + item.thumbnail" alt="" class="relative left-1/2 -translate-x-1/2 object-cover rounded-lg mt-3 h-40">
                        <h3 class="relative left-5 mt-4 text-xl font-semibold w-max">{{ item.nama }}</h3>
                        <span class="relative left-5 mt-5 mb-10 w-max">{{ item.category }}</span>
                    </NuxtLink>
                    <div class="card-loading absolute top-0 left-0 flex flex-col bg-transparent w-full">
                        <div class="rounded-md relative left-1/2 -translate-x-1/2 items-loading" style="animation: 2.5s shine ease-in infinite; animation-delay: 0.25s;"/>
                        <h3 class="rounded-md relative left-5 items-loading" style="animation: 2.5s shine ease-in infinite; animation-delay: 0.25s;"/>
                        <span class="relative left-5 mb-10 rounded-md items-loading" style="animation: 2.5s shine ease-in infinite; animation-delay: 0.25s;"/>
                    </div>
                </li>
            </template>
        </ul>
    </section>
    <!-- end project -->
    <!-- contact -->
    <section class="mt-20  w-full h-200" style="padding-top: 70px;">
        <div class="w-200 relative top-2/4 -translate-y-2/4 left-2/4 -translate-x-2/4 p-8 bg-primary-200 bg--opacity-30 backdrop-filter backdrop-blur-lg rounded-md">
            <form id="contact" class="relative bg-500 w-150 mx-auto h-2/4 flex flex-col gap-5 align-center pointer-events-auto">
                <span class="text-white text-5xl mx-auto">Contact Me !</span>
                <div class="mx-auto mt-3 w-full">
                    <input type="text" placeholder="Email Address" name="email" class="w-full h-14 rounded-xl pl-5 text-2xl input border-4 focus:outline-none focus:border-5 transition duration-400 ease-in-out" ref="inpEmail" v-model="input.email" @input="inpChange('email')">
                    <!-- <span v-if="isErrorEmail" class="ml-3 mt-2 text-red-500 font-semibold text-lg cursor-default">{{ errEmail }}</span> -->
                </div>
                <div class="mx-auto w-full h-18 flex flex-row gap-4">
                    <div class="h-full flex-1">
                        <input type="text" placeholder="Full Name" name="name" class="w-full h-3/4 rounded-xl pl-4 text-xl input border-4 hover:border-blue-600 focus:outline-none focus:border-5 focus:border-blue-600 transition duration-400 ease-in-out" ref="inpName" v-model="input.name" @input="inpChange('name')">
                        <!-- <span v-if="isErrorName" class="ml-3 mt-1 text-red-500 font-semibold text-lg cursor-default">{{ errName }}</span> -->
                    </div>
                    <div class="h-full flex-1">
                        <input type="text" placeholder="Subject" name="subject" class="w-full h-3/4 rounded-xl pl-4 text-xl input border-4 hover:border-blue-600 focus:outline-none focus:border-5 focus:border-blue-600 transition duration-400 ease-in-out" ref="inpSubject" v-model="input.subject" @input="inpChange('subject')">
                        <!-- <span v-if="isErrorSubject" class="ml-3 mt-1 text-red-500 font-semibold text-lg cursor-default">{{ errSubject }}</span> -->
                    </div>
                </div>
                <div class="mx-auto w-full h-50">
                    <textarea name="message" cols="" rows="" class="w-full h-full pl-4 rounded-xl pt-3 text-lg input border-4 hover:border-blue-600 focus:outline-none focus:border-5 focus:border-blue-600 resize-none transition duration-400 ease-in-out" placeholder="Your Message" ref="inpMessage" v-model="input.message" @input="inpChange('message')"></textarea>
                    <!-- <span v-if="isErrorMessage" class="ml-3 mt-1 text-red-500 font-semibold text-lg cursor-default">{{ errMessage }}</span> -->
                </div>
                <div class="mx-auto w-full mt-10">
                    <button value="Send Message" class="w-1/3 h-10 bg-red-500 rounded-full relative left-2/4 -translate-x-2/4 cursor-pointer" @click.prevent="sendEmail"></button>
                </div>
            </form>
        </div>
    </section>
    <!-- end contact -->
</template>
<style scoped>
    #project > div, ul{
        width: 92%;
    }
    .cardI{
        width: 46.2%;
    }
    .cardI div div{
        margin-top: 12px;
        width: 90%;
        height: 100px;
    }
    .cardI div h3{
        margin-top: 12px;
        width: 50%;
        height: 32px;
    }
    .cardI div span{
        margin-top: 20px;
        width: 30%;
        height: 28px;
    }
    .cardI a img{
        margin-top: 16px;
        width: 90%;
        height: 70px;
    }
    @media (min-width: 360px) {
        /* :root {
            --phone: 360px;
        } */
        #project > div, ul{
            width: 92%;
        }
        .cardI{
            width: 46.2%;
        }
        .cardI div div{
            margin-top: 12px;
            height: 100px;
        }
        .cardI div h3{
            margin-top: 12px;
            width: 50%;
            height: 32px;
        }
        .cardI div span{
            margin-top: 20px;
            width: 30%;
            height: 28px;
        }
        .cardI a img{
            margin-top: 16px;
            width: 90%;
            height: 70px;
        }
        .cardI a img{
            width: 90%;
            height: 90px;
        }
    }
    @media (min-width: 640px) {
        /* :root {
            --sm: 640px;
        } */
        #project > div, ul{
            width: 90%;
        }
        .cardI{
            width: 48%;
        }
        .cardI div div{
            margin-top: 12px;
            height: 140px;
        }
        .cardI div h3{
            margin-top: 12px;
            width: 60%;
            height: 32px;
        }
        .cardI div span{
            margin-top: 16px;
            width: 40%;
            height: 28px;
        }
        .cardI a img{
            margin-top: 16px;
            width: 90%;
            height: 70px;
        }
        .cardI a img{
            width: 90%;
            height: 130px;
        }
    }
    @media (min-width: 768px) {
        /* :root {
            --md: 768px;
        } */
        #project > div, ul{
            width: 90%;
        }
        .cardI{
            width: 48%;
        }
        .cardI div div{
            margin-top: 12px;
            height: 190px;
        }
        .cardI div h3{
            margin-top: 12px;
            width: 55%;
            height: 32px;
        }
        .cardI div span{
            margin-top: 15px;
            width: 35%;
            height: 28px;
        }
        .cardI a img{
            margin-top: 16px;
            width: 90%;
            height: 70px;
        }
        .cardI a img{
            width: 90%;
            height: 180px;
        }
    }
    @media (min-width: 1024px) {
        /* :root {
            --lg: 1024px;
        } */
        #project > div, ul{
            width: 90%;
        }
        .cardI{
            width: 31.5%;
        }
        .cardI div div{
            margin-top: 12px;
            height: 155px;
        }
        .cardI div h3{
            margin-top: 12px;
            width: 60%;
            height: 32px;
        }
        .cardI div span{
            margin-top: 20px;
            width: 40%;
            height: 28px;
        }
        .cardI a img{
            margin-top: 16px;
            width: 90%;
            height: 70px;
        }
        .cardI a img{
            width: 90%;
            height: 150px;
        }
    }
    @media (min-width: 1280px) {
        /* :root {
            --xl: 1280px;
        } */
        #project > div, ul{
            width: 90%;
        }
        .cardI{
            width: 32%;
        }
        .cardI div div{
            margin-top: 12px;
            height: 190px;
        }
        .cardI div h3{
            margin-top: 10px;
            width: 50%;
            height: 32px;
        }
        .cardI div span{
            margin-top: 14px;
            width: 30%;
            height: 28px;
        }
        .cardI a img{
            margin-top: 16px;
            width: 90%;
            height: 70px;
        }
        .cardI a img{
            width: 90%;
            height: 185px;
        }
    }
    @media (min-width: 1536px) {
        /* :root {
            --2xl: 1536px;
        } */
        #project > div, ul{
            width: 90%;
        }
        .cardI{
            width: 32.3%;
        }
        .cardI div div{
            margin-top: 12px;
            height: 240px;
        }
        .cardI div h3{
            margin-top: 12px;
            width: 50%;
            height: 32px;
        }
        .cardI div span{
            margin-top: 20px;
            width: 30%;
            height: 28px;
        }
        .cardI a img{
            margin-top: 16px;
            width: 90%;
            height: 70px;
        }
        .cardI a img{
            width: 90%;
            height: 230px;
        }
    }
</style>
<script setup>
import axios from 'axios';
import { eventBus } from '~/app/eventBus';
const publicConfig = useRuntimeConfig().public;
definePageMeta({
    layout: 'home',
});
useHead({
    title:'Welcome | Amirzan Portfolio'
});
useAsyncData(async () => {
    const res = await axios.get(publicConfig.baseURL + '/', {
        headers: {
            'Accept': 'application/json',
        }
    });
    local.fetchedViewData = res.data.viewData;
});
const local = reactive({
    fetchedViewData: null,
});
const input = reactive({
    name: '',
    subject: '',
    email: '',
    message: '',
});
const cardRefs = ref([]);
const popup = ref(null);
const inpName = ref(null);
const inpSubject = ref(null);
const inpEmail = ref(null);
const inpMessage = ref(null);
const handleLoading = (card) => {
    const image = card.querySelector('img');
    image.addEventListener('load', () => {
        const cardLoading = card.querySelector('.card-loading');
        if (cardLoading) {
            cardLoading.remove();
        }
    });
    let hasError = false;
    image.addEventListener('error', () => {
        hasError = true;
    });
    if (hasError && (image.complete || image.naturalWidth === 0)) {
        const cardLoading = card.querySelector('.card-loading');
        if (cardLoading) {
            cardLoading.remove();
        }
    }
}
watch(() => local.fetchedViewData, () => {
    if (local?.fetchedViewData !== undefined && typeof local.fetchedViewData === 'object' && Array.isArray(local.fetchedViewData) && Object.keys(local.fetchedViewData).length > 0) {
        nextTick(() => {
            local.fetchedViewData.forEach((item, index) => {
                let card = cardRefs.value[index];
                // handleLoading(card);
            });
        });
    }
}, { immediate:true });
const inpChange = (div) => {
    if(!popup.value.classList.contains('invisible')){
        popup.value.classList.add('fade-out');
        setTimeout(function(){
            popup.value.classList.remove('fade-out');
        }, 750);
        popup.value.classList.add('invisible');
    }
    errMessage.value = '';
    if(div == 'name'){
        inpName.value.classList.remove('border-popup_error','hover:border-popup_error','focus:border-popup_error');
        inpName.value.classList.add('border-black','hover:border-black','focus:border-black');
    }else if(div == 'subject'){
        inpSubject.value.classList.remove('border-popup_error','hover:border-popup_error','focus:border-popup_error');
        inpSubject.value.classList.add('border-black','hover:border-black','focus:border-black');
    }else if(div == 'email'){
        inpEmail.value.classList.remove('border-popup_error','hover:border-popup_error','focus:border-popup_error');
        inpEmail.value.classList.add('border-black','hover:border-black','focus:border-black');
    }else if(div == 'message'){
        inpMessage.value.classList.remove('border-popup_error','hover:border-popup_error','focus:border-popup_error');
        inpMessage.value.classList.add('border-black','hover:border-black','focus:border-black');
    }
};
const sendEmail = async(event) => {
    event.preventDefault();
    if(input.email === null || input.email === ''){
        inpEmail.value.classList.remove('border-black','hover:border-black','focus:border-black');
        inpEmail.value.classList.add('border-popup_error','hover:border-popup_error','focus:border-popup_error');
        errMessage.value = 'Email Harus diisi !';
    }
    if(input.password === null || input.password === ''){
        inpPassword.value.classList.remove('border-black','hover:border-black','focus:border-black');
        inpPassword.value.classList.add('border-popup_error','hover:border-popup_error','focus:border-popup_error');
        errMessage.value = 'Password Harus diisi !';
    }
    if(errMessage.value != ''){
        popup.value.classList.remove('invisible');
        return;
    }
    eventBus.emit('showLoading');
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