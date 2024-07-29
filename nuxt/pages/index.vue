<template>
    <div>
        <!-- Hero section -->
        <section id="me" class=" w-full bg-cover 3xsphone:h-85 2xsphone:h-100 xsphone:h-120 phone:h-120 sm:h-125 md:h-screen relative flex items-center text-primary_text dark:text-primary_dark_text">
            <div class="relative 3xsphone:w-11/12 xl:w-7/8 mx-auto flex flex-row  justify-between items-center py-5" style="width: 90%;">
                <div class="flex justify-center flex-col relative">
                    <h3 class="3xsphone:text-xs xsphone:text-xs phone:text-sm md:text-xl lg:text-xl xl:text-2xl 2xl:text-3xl text-4xl 3xsphone:font-medium lg:font-bold">Hi I'm Amirzan Fikri</h3>
                    <h1 class="3xsphone:text-base 2xsphone:text-lg phone:text-xl sm:text-xl md:text-3xl lg:text-4xl xl:text-5xl 2xl:text-6xl text-7xl font-semibold lg:mt-2">Full stack Laravel developer</h1>
                    <div class="flex 3xsphone:gap-2 md:gap-4 lg:gap-5 2xl:gap-7 md:mt-1 ml-2">
                        <a href="https://github.com/Amirzan89" target="_blank" class="flex items-center justify-center"><FontAwesomeIcon icon="fa-brands fa-github" class="3xsphone:text-lg xsphone:text-xl sm:text-xl md:text-3xl lg:text-4xl xl:text-5xl 2xl:text-6xl text-7xl text-black dark:text-white"/></a>
                        <a href="https://www.linkedin.com/in/amirzan-fikri" target="_blank" class="flex items-center justify-center"><FontAwesomeIcon icon="fa-brands fa-linkedin" class="3xsphone:text-lg xsphone:text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl 2xl:text-6xl text-7xl text-blue-500"/></a>
                        <a href="https://upwork.com/freelancers/amirzanf" target="_blank" class="flex items-center justify-center"><FontAwesomeIcon icon="fa-brands fa-square-upwork" class="3xsphone:text-lg xsphone:text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl 2xl:text-6xl text-7xl text-green-700 dark:text-green-500"/></a>
                    </div>
                    <a href="#contact" id="btnContact" class="3xsphone:w-20 sm:w-30 md:w-35 lg:w-45 xl:w-57 2xl:w-60 3xsphone:h-6 sm:h-7 md:h-9 lg:h-12 xl:h-14 2xl:h-17 bg-primary dark:bg-primary_dark 3xsphone:rounded-md lg:rounded-xl xl:rounded-2xl flex justify-center items-center 3xsphone:ml-2 lg:ml-7 3xsphone:mt-3 md:mt-8 xl:mt-10 2xl:mt-12 text-white 3xsphone:font-normal font-semibold 3xsphone:text-xs sm:text-lg md:text-xl lg:text-2xl xl:text-3xl 2xl:text-4xl">Contact Me</a>
                </div>
                <img src="~assets/images/cv/profile.jpg" class="max-w-sm object-cover rounded-lg 3xsphone:w-30 sm:w-50 md:w-50 lg:w-70 xl:w-100 2xl:w-200 
                3xsphone:h-30 sm:h-55 md:h-55 lg:h-60 xl:h-100
                "/>
            </div>
        </section>
        <!-- end hero section -->
        <!--  About -->
        <section id="about" class="bg-greend-500 relative left-1/2 -translate-x-1/2 flex justify-center 3xsphone:mt-2 xl:mt-30">
            <div class="content 3xsphone:w-11/12 xl:w-7/8 flex flex-row cursor-default text-xl text-primary_text dark:text-primary_dark_text gap-10">
                <div class="flex flex-col">
                    <p class="text-normal 3xsphone:text-3xs 2xsphone:text-2xs xsphone:text-2xs phone:text-2xs sm:text-xs md:text-sm lg:text-lg xl:text-xl 2xl:text-2xl">
                        Hello there i'm web developer on laravel and vue. I offer expertise in website development, responsive design, front end using tailwind css & vue js or back end using laravel. I am committed to delivering high-quality work and collaborating with clients to create effective and functional websites that meet their needs. With a strong attention to detail and a passion for learning and staying up-to-date with industry trends, I am excited to work with you on your web development projects.
                    </p>
                    <div class="flex flex-row gap-5 2xsphone:mt-1 3xsphone:ml-1 sm:ml-3 md:ml-5">
                        <a href="https://laravel.com" target="_blank" class="flex items-center justify-center"><img src="~assets/icon/laravel.svg" class="object-cover 3xsphone:w-3 2xsphone:w-4 xsphone:w-4 phone:w-4 sm:w-5 md:w-7 lg:w-10 xl:w-11"/></a>
                        <a href="https://getbootstrap.com/" target="_blank" class="flex items-center justify-center"><img src="~assets/icon/bootstrap.svg" class="object-cover 3xsphone:w-4 2xsphone:w-6 xsphone:w-7 phone:w-7 sm:w-8 md:w-10 lg:w-13 xl:w-14 2xl:w-15"/></a>
                        <a href="https://tailwindcss.com" target="_blank" class="flex items-center justify-center"><img src="~assets/icon/tailwind.svg" class="object-fill 3xsphone:w-3 2xsphone:w-5 xsphone:w-5 phone:w-6 sm:w-6 md:w-8 lg:w-11 xl:w-12 2xl:w-13"/></a>
                        <a href="https://vuejs.org" target="_blank" class="flex items-center justify-center"><img src="~assets/icon/vue.svg" class="object-fill 3xsphone:w-3 2xsphone:w-2 xsphone:w-4 phone:w-5 sm:w-5 md:w-7 lg:w-10 xl:w-11"/></a>
                        <a href="https://nuxt.com" target="_blank" class="flex items-center justify-center"><img src="~assets/icon/nuxtjs.svg" class="object-fill 3xsphone:w-4 2xsphone:w-2 xsphone:w-5 phone:w-6 sm:w-6 md:w-8 lg:w-11 xl:w-12 2xl:w-13"/></a>
                    </div>
                    <a :href="baseURL + '/cv'" id="btnCV" target="_blank" class="3xsphone:w-17 2xsphone:w-22 xsphone:w-25 phone:w-30 sm:w-32 md:w-40 lg:w-50 xl:w-57 2xl:w-60 3xsphone:h-5 2xsphone:h-7 xsphone:h-8 phone:h-9 sm:h-10 md:h-13 lg:h-18 xl:h-19 2xl:h-20 bg-primary dark:bg-primary_dark 3xsphone:rounded-md 2xsphone:rounded-lg xsphone:rounded-lg md:rounded-xl lg:rounded-2xl flex justify-center items-center 3xsphone:ml-1 phone:ml-3 md:ml-5 lg:ml-7 text-white 3xsphone:font-normal xsphone:font-medium md:font-semibold 3xsphone:text-3xs 2xsphone:text-2xs xsphone:text-xs phone:text-sm sm:text-sm md:text-base lg:text-xl xl:text-2xl 2xl:text-3xl text-4xl 3xsphone:mt-3 sm:mt-5 md:mt-7 lg:mt-10 3xsphone:gap-0.5 phone:gap-1 md:gap-3 buttonLink">
                        <img src="~assets/icon/cv.svg" class="max-w-sm object-cover 3xsphone:w-3 2xsphone:w-4 xsphone:w-5 phone:w-6 sm:w-7 md:w-8 lg:w-12 xl:w-13 2xl:w-14"/>
                        <p class="block">Preview CV</p>
                    </a>
                </div>
            </div>
        </section>
        <!-- end about -->
        <!-- deliver -->
        <!-- <section>
            <div>what can i do</div>
        </section> -->
        <!-- end deliver -->
        <!-- project -->
        <section id="project" class="mt-25 flex flex-col">
            <div class="flex relative left-1/2 -translate-x-1/2 justify-between items-center text-primary_text dark:text-primary_dark_text">
                <span class="3xsphone:text-2xs 2xsphone:text-xs phone:text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl 2xl:text-3xl relative font-semibold">Projects</span>
                <NuxtLink id="btnOthers" to="/projects" class="3xsphone:text-2xs 2xsphone:text-xs phone:text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl 2xl:text-3xl flex gap-2 items-center hover:text-red-500">
                    <span>Others</span>
                    <FontAwesomeIcon icon="fa-solid fa-arrow-right-long" class="3xsphone:text-2xs 2xsphone:text-xs phone:text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl 2xl:text-3xl"/> 
                </NuxtLink>
            </div>
            <ul class="relative left-1/2 -translate-x-1/2 flex 3xsphone:mt-1 md:mt-5 mb-10 flex-wrap gap-5">
                <template v-for="(item, index) in local.fetchedViewData" :key="index">
                    <li class="cardI list-none relative pointer-events-none" ref="cardRefs">
                        <NuxtLink :to="{ name: 'ProjectsDetail', params: { link:item.link }}" class="mb-2 hover:bg-primary dark:hover:bg-primary_dark flex flex-col 3xsphone:rounded-md md:rounded-lg xl:rounded-xl text-primary_text dark:text-primary_dark_text hover:text-white dark:hover:text-white">
                            <img :src="baseURL + '/img/project/' + item.thumbnail" alt="" class="relative left-1/2 -translate-x-1/2 3xsphone:rounded-md md:rounded-lg 3xsphone:mt-1 md:mt-3 h-40">
                            <h3 class="relative 3xsphone:left-2 phone:left-3 sm:left-4 md:left-5 lg:left-4 xl:left-5 2xl:left-6 3xsphone:mt-5 xl:mt-7 2xl:mt-10 3xsphone:text-2xs phone:text-sm sm:text-base md:text-xl lg:text-lg xl:text-xl 2xl:text-xl font-semibold w-max">{{ item.nama }}</h3>
                            <span class="relative 3xsphone:left-2 phone:left-3 sm:left-4 md:left-5 lg:left-4 xl:left-5 2xl:left-6 3xsphone:mt-0.5 md:mt-1 2xl:mt-3 3xsphone:mb-3 md:mb-4 xl:mb-6 3xsphone:text-3xs phone:text-xs sm:text-sm md:text-lg lg:text-base xl:text-lg 2xl:text-xl w-max">{{ item.category }}</span>
                        </NuxtLink>
                        <div class="card-loading absolute top-0 left-0 flex flex-col bg-transparent w-full">
                            <div class="rounded-md relative left-1/2 -translate-x-1/2 items-loading h-10" style="animation: 2.5s shine ease-in infinite; animation-delay: 0.25s;"/>
                            <h3 class="3xsphone:rounded-sm lgg:rounded-md relative 3xsphone:left-2 phone:left-3 sm:left-4 md:left-5 lg:left-4 xl:left-5 2xl:left-6 items-loading" style="animation: 2.5s shine ease-in infinite; animation-delay: 0.25s;"/>
                            <span class="relative 3xsphone:left-2 phone:left-3 sm:left-4 md:left-5 lg:left-4 xl:left-5 2xl:left-6 mb-10 3xsphone:rounded-sm xl:rounded-md items-loading" style="animation: 2.5s shine ease-in infinite; animation-delay: 0.25s;"/>
                        </div>
                    </li>
                </template>
            </ul>
        </section>
        <!-- end project -->
        <!-- contact -->
        <section id="contact" class="3xsphone:mt-5 xl:mt-10 w-full 3xsphone:h-100 sm:h-120 md:h-150 lg:h-175 xl:h-200 pb-5">
            <div class="3xsphone:w-65 2xsphone:w-70 xsphone:w-80 phone:w-100 sm:w-110 md:w-140 lg:w-150 xl:w-175 2xl:w-200 relative top-2/4 -translate-y-2/4 left-2/4 -translate-x-2/4 3xsphone:px-3 3xsphone:py-2 sm:p-3 md:p-4 lg:p-5 xl:p-6 2xl:p-8 bg-primary dark:bg-primary_dark backdrop-filter backdrop-blur-lg 3xsphone:rounded-xl xl:rounded-2xl">
                <form class="relative 3xsphone:w-full 2xl:w-150 mx-auto h-2/4 flex flex-col 3xsphone:gap-2 phone:gap-3 xl:gap-5 align-center pointer-events-auto">
                    <span class="text-white 3xsphone:text-lg 2xsphone:text-lg xsphone:text-lg phone:text-xl sm:text-xl md:text-xl lg:text-3xl xl:text-4xl 2xl:text-5xl mx-auto">Contact Me !</span>
                    <div class="mx-auto 3xsphone:mt-0 2xl:mt-3 w-full">
                        <input type="text" placeholder="Email Address" class="w-full 3xsphone:h-6 phone:h-7 md:h-8 lg:h-10 xl:h-12 2xl:h-14 3xsphone:rounded-md xl:rounded-xl 3xsphone:pl-1.5 xl:pl-2 2xl:pl-5 3xsphone:text-xs phone:text-xs sm:text-base md:text-lg lg:text-lg xl:text-xl 2xl:text-2xl input hover:border-orange-500 dark:hover:border-blue-600 3xsphone:border-1 lg:border-3 xl:border-3 2xl:border-4 focus:outline-none 3xsphone:focus:border-2 lg:focus:border-4 xl:focus:border-4 2xl:focus:border-5 focus:border-orange-500 dark:focus:border-blue-600 transition duration-400 ease-in-out" ref="inpEmail" v-model="input.email" @input="inpChange('email')">
                    </div>
                    <div class="mx-auto w-full 3xsphone:h-6 phone:h-7 md:h-8 lg:h-10 xl:h-12 2xl:h-14 flex flex-row 3xsphone:gap-2 md:gap-4">
                        <div class="h-full flex-1">
                            <input type="text" placeholder="Full Name" class="w-full h-full 3xsphone:rounded-md xl:rounded-xl 3xsphone:pl-1.5 xl:pl-2 2xl:pl-4 3xsphone:text-xs phone:text-xs sm:text-base md:text-lg lg:text-lg xl:text-xl 2xl:text-xl input 3xsphone:border-1 lg:border-3 xl:border-3 2xl:border-4 hover:border-orange-500 dark:hover:border-blue-600 focus:outline-none 3xsphone:focus:border-2 lg:focus:border-4 xl:focus:border-4 2xl:focus:border-5 focus:border-orange-500 dark:focus:border-blue-600 transition duration-400 ease-in-out" ref="inpName" v-model="input.name" @input="inpChange('name')">
                        </div>
                        <div class="h-full flex-1">
                            <input type="text" placeholder="Subject" class="w-full h-full 3xsphone:rounded-md xl:rounded-xl 3xsphone:pl-1.5 xl:pl-2 2xl:pl-4 3xsphone:text-xs phone:text-xs sm:text-base md:text-lg lg:text-lg xl:text-xl 2xl:text-xl input 3xsphone:border-1 lg:border-3 xl:border-3 2xl:border-4 hover:border-orange-500 dark:hover:border-blue-600 focus:outline-none 3xsphone:focus:border-2 lg:focus:border-4 xl:focus:border-4 2xl:focus:border-5 focus:border-orange-500 dark:focus:border-blue-600 transition duration-400 ease-in-out" ref="inpSubject" v-model="input.subject" @input="inpChange('subject')">
                        </div>
                    </div>
                    <div class="mx-auto w-full 3xsphone:h-40 xl:h-50">
                        <textarea cols="" rows="" class="w-full h-full 3xsphone:pl-1.5 xl:pl-2 2xl:pl-4 3xsphone:rounded-lg xl:rounded-xl 3xsphone:pt-1 xl:pt-1.5 2xl:pt-2 3xsphone:text-xs phone:text-xs sm:text-base md:text-lg lg:text-lg xl:text-xl 2xl:text-lg input 3xsphone:border-1 lg:border-3 xl:border-3 2xl:border-4 hover:border-orange-500 dark:hover:border-blue-600 focus:outline-none 3xsphone:focus:border-2 lg:focus:border-4 xl:focus:border-4 2xl:focus:border-5 focus:border-orange-500 dark:focus:border-blue-600 resize-none transition duration-400 ease-in-out" placeholder="Your Message" ref="inpMessage" v-model="input.message" @input="inpChange('message')"></textarea>
                    </div>
                    <div class="mx-auto w-full lg:mt-2 xl:mt-4">
                        <button value="Send Message" class="3xsphone:w-2/5 sm:w-4/12 3xsphone:h-6 md:h-8 lg:h-10 xl:h-12 2xl:h-13 bg-second dark:bg-primary_dark_text 3xsphone:rounded-lg xl:rounded-xl relative left-2/4 -translate-x-2/4 cursor-pointer text-white dark:text-dark_bg font-semibold 3xsphone:text-sm sm: lg:text-xl xl:text-2xl 2xl:text-3xl" @click.prevent="sendEmail"> Contact Me</button>
                    </div>
                </form>
            </div>
        </section>
        <PopupComponent></PopupComponent>
        <!-- end contact -->
    </div>
</template>
<style lang="scss" scoped>
    @import '~/assets/css/index.scss';
</style>
<script setup>
import { ref, watch } from "vue";
import PopupComponent from '~/components/Popup.vue';
import { eventBus } from '~/app/eventBus';
import { useFetchDataStore } from "~/store/FetchData";
import animationsComposable from '~/composables/animations/index';
import { contactMe } from "~/composables/api/home";
const route = useRoute();
const baseURL = useRuntimeConfig().public.baseURL;
definePageMeta({
    layout: 'home',
});
useHead({
    title:'Welcome | Amirzan Portfolio'
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
const inpName = ref(null);
const inpSubject = ref(null);
const inpEmail = ref(null);
const inpMessage = ref(null);
const ctx = ref(null);
useAsyncData(async () => {
    const res = await useFetchDataStore().fetchData();
    local.fetchedViewData = res.data.viewData;
});
onBeforeRouteUpdate(() => {
    useFetchDataStore().resetFetchData();
});
onMounted(() => {
    const { gsapContext, isAnimateComplete } = animationsComposable();
    ctx.value = gsapContext.value;
    if(isAnimateComplete.value){
        if (route.hash) document.querySelector(route.hash)?.scrollIntoView({ behavior: "smooth" });
    }
});
onUnmounted(() => {
    ctx.value?.kill();
});
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
            const { $gsap } = useNuxtApp();
            $gsap.from(cardRefs.value, {
                opacity: 0,
                y:'20%',
                delay: 0.3,
                duration: 1,
                scrollTrigger: {
                    trigger: 'section#project',
                    start: 'top 60%',
                    end: 'top none',
                },
                stagger:{
                    from: 'start',
                    each: 0.3,
                },
                onComplete: () => cardRefs.value.forEach(item => item.classList.remove('pointer-events-none')),
            });
            local.fetchedViewData.forEach((item, index) => {
                let card = cardRefs.value[index];
                handleLoading(card);
            });
        });
    }
}, { immediate:true });
const inpChange = (cond) => {
    switch(cond){
        case 'email':
            inpEmail.value.classList.remove('border-popup_error','hover:border-popup_error','focus:border-popup_error');
            inpEmail.value.classList.add('border-orange-500', 'hover:border-orange-500', 'focus:border-orange-500', 'dark:border-blue-600', 'dark:hover:border-blue-600', 'dark:focus:border-blue-600');
        break;
        case 'name':
            inpName.value.classList.remove('border-popup_error','hover:border-popup_error','focus:border-popup_error');
            inpName.value.classList.add('border-orange-500', 'hover:border-orange-500', 'focus:border-orange-500', 'dark:border-blue-600', 'dark:hover:border-blue-600', 'dark:focus:border-blue-600');
        break;
        case 'subject':
            inpSubject.value.classList.remove('border-popup_error','hover:border-popup_error','focus:border-popup_error');
            inpSubject.value.classList.add('border-orange-500', 'hover:border-orange-500', 'focus:border-orange-500', 'dark:border-blue-600', 'dark:hover:border-blue-600', 'dark:focus:border-blue-600');
        break;
        case 'message':
            inpMessage.value.classList.remove('border-popup_error','hover:border-popup_error','focus:border-popup_error');
            inpMessage.value.classList.add('border-orange-500', 'hover:border-orange-500', 'focus:border-orange-500', 'dark:border-blue-600', 'dark:hover:border-blue-600', 'dark:focus:border-blue-600');
        break;
    }
    if(input.name === null || input.name === ''){
        inpName.value.classList.remove('border-orange-500', 'dark:border-blue-600');
    }
    if(input.subject === null || input.subject === ''){
        inpSubject.value.classList.remove('border-orange-500', 'dark:border-blue-600');
    }
    if(input.email === null || input.email === ''){
        inpEmail.value.classList.remove('border-orange-500', 'dark:border-blue-600');
    }
    if(input.message === null || input.message === ''){
        inpMessage.value.classList.remove('border-orange-500', 'dark:border-blue-600');
    }
};
const isValidEmail = (email) => {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
};
const sendEmail = async(event) => {
    event.preventDefault();
    let errMessage = '';
    if(input.email === null || input.email === ''){
        inpEmail.value.classList.remove('border-orange-500', 'hover:border-orange-500', 'focus:border-orange-500', 'dark:border-blue-600', 'dark:hover:border-blue-600', 'dark:focus:border-blue-600');
        inpEmail.value.classList.add('border-popup_error','hover:border-popup_error','focus:border-popup_error');
        if (!errMessage) errMessage = 'Email must filled !';
    }else{
        if (!isValidEmail(input.email)) {
            inpEmail.value.classList.remove('border-orange-500', 'hover:border-orange-500', 'focus:border-orange-500', 'dark:border-blue-600', 'dark:hover:border-blue-600', 'dark:focus:border-blue-600');
            inpEmail.value.classList.add('border-popup_error','hover:border-popup_error','focus:border-popup_error');
            if (!errMessage) errMessage = 'Invalid Email!';
        }
    }
    if(input.name === null || input.name === ''){
        inpName.value.classList.remove('border-orange-500', 'hover:border-orange-500', 'focus:border-orange-500', 'dark:border-blue-600', 'dark:hover:border-blue-600', 'dark:focus:border-blue-600');
        inpName.value.classList.add('border-popup_error','hover:border-popup_error','focus:border-popup_error');
        if (!errMessage) errMessage = 'Name must filled !';
    }
    if(input.subject === null || input.subject === ''){
        inpSubject.value.classList.remove('border-orange-500', 'hover:border-orange-500', 'focus:border-orange-500', 'dark:border-blue-600', 'dark:hover:border-blue-600', 'dark:focus:border-blue-600');
        inpSubject.value.classList.add('border-popup_error','hover:border-popup_error','focus:border-popup_error');
        if (!errMessage) errMessage = 'Subject must filled !';
    }
    if(input.message === null || input.message === ''){
        inpMessage.value.classList.remove('border-orange-500', 'hover:border-orange-500', 'focus:border-orange-500', 'dark:border-blue-600', 'dark:hover:border-blue-600', 'dark:focus:border-blue-600');
        inpMessage.value.classList.add('border-popup_error','hover:border-popup_error','focus:border-popup_error');
        if (!errMessage) errMessage = 'Message must filled !';
    }
    if(errMessage != ''){
        eventBus.emit('showRedPopup', errMessage);
        return;
    }
    eventBus.emit('showLoading');
    let contactRes = await contactMe({
        name: input.name,
        subject: input.subject,
        email: input.email,
        message: input.message,
    });
    if(contactRes.status === 'success'){
        eventBus.emit('closeLoading');
        eventBus.emit('showGreenPopup', contactRes.message);
    }else if(contactRes.status === 'error'){
        eventBus.emit('closeLoading');
        eventBus.emit('showRedPopup', contactRes.message);
    }
}
</script>