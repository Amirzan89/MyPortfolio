<template>
    <div>
        <!-- Hero section -->
        <section id="me" class="w-full bg-cover h-screen relative flex items-center text-primary_text dark:text-primary_dark_text">
            <div class="relative w-7/8 mx-auto flex flex-row  justify-between items-center py-5" style="width: 90%;">
                <div class="flex justify-center flex-col relative">
                    <h3 class="text-2xl font-bold">Hi I'm Amirzan Fikri</h3>
                    <h1 class="text-6xl font-semibold mt-5">Full stack Laravel developer</h1>
                    <div class="flex gap-5 mt-2 ml-2">
                        <a href="https://github.com/Amirzan89" target="_blank" class="flex items-center justify-center"><FontAwesomeIcon icon="fa-brands fa-github" class="text-6xl text-black dark:text-white"/></a>
                        <a href="https://www.linkedin.com/in/amirzan-fikri" target="_blank" class="flex items-center justify-center"><FontAwesomeIcon icon="fa-brands fa-linkedin" class="text-6xl text-blue-500"/></a>
                        <a href="https://upwork.com/freelancers/amirzanf" target="_blank" class="flex items-center justify-center"><FontAwesomeIcon icon="fa-brands fa-square-upwork" class="text-6xl text-green-700 dark:text-green-500"/></a>
                    </div>
                    <a href="#contact" id="btnContact" class="w-60 h-15 bg-primary dark:bg-primary_dark rounded-2xl flex justify-center items-center ml-7 mt-20 text-white font-semibold text-4xl">Contact Me</a>
                </div>
                <img src="~assets/images/testing.png" class="max-w-sm object-cover rounded-lg w-200 h-100"/>
            </div>
        </section>
        <!-- end hero section -->
        <!--  About -->
        <section id="about" class="relative left-1/2 -translate-x-1/2 flex justify-center mt-30" style="padding-top: 70px;">
            <div class="content w-7/8 flex flex-row cursor-default text-xl text-primary_text dark:text-primary_dark_text gap-10">
                <!-- <img src="~assets/images/testing.png" class="max-w-sm object-cover rounded-lg w-200 h-100"/> -->
                <div class="flex flex-col">
                    <p class="text-normal text-2xl">
                        Hello there i'm web developer on laravel and vue. I offer expertise in website development, responsive design, front end using tailwind css & vue js or back end using laravel. I am committed to delivering high-quality work and collaborating with clients to create effective and functional websites that meet their needs. With a strong attention to detail and a passion for learning and staying up-to-date with industry trends, I am excited to work with you on your web development projects.
                    </p>
                    <div class="flex flex-row gap-5 mt-2 ml-5">
                        <a href="https://laravel.com" target="_blank" class="flex items-center justify-center"><img src="~assets/icon/laravel.svg" class="max-w-sm object-cover w-11"/></a>
                        <a href="https://getbootstrap.com/" target="_blank" class="flex items-center justify-center"><img src="~assets/icon/bootstrap.svg" class="max-w-sm object-cover w-15"/></a>
                        <a href="https://tailwindcss.com" target="_blank" class="flex items-center justify-center"><img src="~assets/icon/tailwind.svg" class="max-w-sm object-fill w-13"/></a>
                        <a href="https://vuejs.org" target="_blank" class="flex items-center justify-center"><img src="~assets/icon/vue.svg" class="max-w-sm object-fill w-11"/></a>
                        <a href="https://nuxt.com" target="_blank" class="flex items-center justify-center"><img src="~assets/icon/nuxtjs.svg" class="max-w-sm object-fill w-13"/></a>
                    </div>
                    <a :href="baseURL + '/cv'" id="btnCV" target="_blank" class="w-60 h-20 bg-primary dark:bg-primary_dark rounded-2xl flex justify-center items-center ml-7 text-white font-semibold text-3xl mt-10 gap-2 buttonLink">
                        <img src="~assets/icon/cv.svg" class="max-w-sm object-cover rounded-lg w-14"/>
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
        <section id="project" class="mt-10 flex flex-col" style="padding-top: 70px;">
            <div class="flex relative left-1/2 -translate-x-1/2 justify-between items-center text-primary_text dark:text-primary_dark_text">
                <span class="text-3xl relative font-semibold">Projects</span>
                <NuxtLink to="/projects" class="text-xl flex gap-2 items-center hover:text-red-500">
                    <span>Others</span>
                    <FontAwesomeIcon icon="fa-solid fa-arrow-right-long" class="text-2xl"/> 
                </NuxtLink>
            </div>
            <ul class="relative left-1/2 -translate-x-1/2 flex mt-5 mb-10 flex-wrap gap-5">
                <template v-for="(item, index) in local.fetchedViewData" :key="index">
                    <li class="cardI list-none relative" ref="cardRefs">
                        <NuxtLink :to="{ name: 'ProjectsDetail', params: { link:item.link }}" class="mb-2 text-primary_text dark:text-primary_dark_text hover:text-white dark:hover:text-white hover:bg-primary dark:hover:bg-primary_dark flex flex-col rounded-xl">
                            <img :src="baseURL + '/img/project/' + item.thumbnail" alt="" class="relative left-1/2 -translate-x-1/2 rounded-lg mt-3 h-40">
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
        <section id="contact" class="mt-10  w-full h-200 pb-5" style="padding-top: 70px;">
            <div class="w-200 relative top-2/4 -translate-y-2/4 left-2/4 -translate-x-2/4 p-8 bg-primary dark:bg-primary_dark backdrop-filter backdrop-blur-lg rounded-2xl">
                <form class="relative w-150 mx-auto h-2/4 flex flex-col gap-5 align-center pointer-events-auto">
                    <span class="text-white text-5xl mx-auto">Contact Me !</span>
                    <div class="mx-auto mt-3 w-full">
                        <input type="text" placeholder="Email Address" class="w-full h-14 rounded-xl pl-5 text-2xl input hover:border-orange-500 dark:hover:border-blue-600 border-4 focus:outline-none focus:border-5 focus:border-orange-500 dark:focus:border-blue-600 transition duration-400 ease-in-out" ref="inpEmail" v-model="input.email" @input="inpChange('email')">
                        <!-- <span v-if="isErrorEmail" class="ml-3 mt-2 text-red-500 font-semibold text-lg cursor-default">{{ errEmail }}</span> -->
                    </div>
                    <div class="mx-auto w-full h-18 flex flex-row gap-4">
                        <div class="h-full flex-1">
                            <input type="text" placeholder="Full Name" class="w-full h-3/4 rounded-xl pl-4 text-xl input border-4 hover:border-orange-500 dark:hover:border-blue-600 focus:outline-none focus:border-5 focus:border-orange-500 dark:focus:border-blue-600 transition duration-400 ease-in-out" ref="inpName" v-model="input.name" @input="inpChange('name')">
                            <!-- <span v-if="isErrorName" class="ml-3 mt-1 text-red-500 font-semibold text-lg cursor-default">{{ errName }}</span> -->
                        </div>
                        <div class="h-full flex-1">
                            <input type="text" placeholder="Subject" class="w-full h-3/4 rounded-xl pl-4 text-xl input border-4 hover:border-orange-500 dark:hover:border-blue-600 focus:outline-none focus:border-5 focus:border-orange-500 dark:focus:border-blue-600 transition duration-400 ease-in-out" ref="inpSubject" v-model="input.subject" @input="inpChange('subject')">
                            <!-- <span v-if="isErrorSubject" class="ml-3 mt-1 text-red-500 font-semibold text-lg cursor-default">{{ errSubject }}</span> -->
                        </div>
                    </div>
                    <div class="mx-auto w-full h-50">
                        <textarea cols="" rows="" class="w-full h-full pl-4 rounded-xl pt-3 text-lg input border-4 hover:border-orange-500 dark:hover:border-blue-600 focus:outline-none focus:border-5 focus:border-orange-500 dark:focus:border-blue-600 resize-none transition duration-400 ease-in-out" placeholder="Your Message" ref="inpMessage" v-model="input.message" @input="inpChange('message')"></textarea>
                    </div>
                    <div class="mx-auto w-full mt-10">
                        <button value="Send Message" class="w-2/5 h-13 bg-second dark:bg-primary_dark_text rounded-xl relative left-2/4 -translate-x-2/4 cursor-pointer text-white dark:text-dark_bg font-semibold text-3xl" @click.prevent="sendEmail"> Contact Me</button>
                    </div>
                </form>
            </div>
        </section>
        <PopupComponent></PopupComponent>
        <!-- end contact -->
    </div>
</template>
<style scoped>
@import '~/assets/css/index.css';
</style>
<script setup>
import { ref, watch } from "vue";
import PopupComponent from '~/components/Popup.vue';
import { eventBus } from '~/app/eventBus';
import { indexPage, contactMe } from '../composables/api/home';
import animationsComposable from '../composables/animations/index';
const route = useRoute();
const baseURL = useRuntimeConfig().public.baseURL;
definePageMeta({
    layout: 'home',
});
useHead({
    title:'Welcome | Amirzan Portfolio'
});
useAsyncData(async () => {
    const res = await indexPage();
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
const inpName = ref(null);
const inpSubject = ref(null);
const inpEmail = ref(null);
const inpMessage = ref(null);
const ctx = ref(null);
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
                }
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
        description: input.message,
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