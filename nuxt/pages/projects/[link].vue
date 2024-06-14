<template>
    <section class="w-full" style="padding-top: 70px;">
        <div class="relative left-1/2 -translate-x-1/2 flex flex-row gap-10 w-11/12 items-start">
            <div class="carousel flex overflow-x-scroll relative whitespace-nowrap flex-1" ref="carouselRef">
                <img :src="publicConfig.baseURL + '/img/project/' + local.fetchedDetailProject?.foto[0]" alt="" ref="caItemRef" class="object-contain rounded-xl">
                <!-- <template v-for="(item, index) in local.fetchedDetailProject?.foto" :key="index">
                    <img :src="publicConfig.baseURL + '/img/project/' + item" alt="" ref="caItemRef" style="transition: 1s;" class="object-contain w-100">
                </template> -->
            </div>
            <div class="flex flex-col flex-1 text-primary_text dark:text-primary_dark_text">
                <div class="" v-html="local.formattedDeskripsi"></div>
                <div class="flex flex-row gap-5 mt-5">
                    <template v-for="(item, index) in filteredTechStack" :key="index">
                        <a :href=item.href target="_blank" class="flex items-center justify-center w-max">
                            <img :src=item.src class="max-w-sm object-cover w-13"/>
                        </a>
                    </template>
                </div>
                <a :href="local.fetchedDetailProject?.link_project" target="_blank" class="ml-5 mt-10 w-60 h-15 rounded-xl bg-primary dark:bg-primary_dark  text-white flex items-center justify-center text-4xl font-semibold">Demo Project</a>
            </div>
        </div>
        <!-- <div class="flex justify-center gap-4">
            <template v-for="(item, index) in local.fetchedDetailProject?.foto" :key="index">
                <img :src="publicConfig.baseURL + '/img/project/' + item" alt="" class="object-cover w-35 rounded-xl hover:border-red-500 border-5 pointer-events-auto cursor-pointer" ref="slideRef" @click="changeImg(index)">
            </template>
        </div> -->
    </section>
    <section style="padding-top: 70px;" class="otherss">
        <div class="flex relative left-1/2 -translate-x-1/2 justify-between items-center text-primary_text dark:text-primary_dark_text">
            <span class="text-3xl relative font-semibold">Other projects</span>
            <NuxtLink to="/projects" class="text-xl flex gap-2 items-center hover:text-red-500">
                <span>Others</span>
                <FontAwesomeIcon icon="fa-solid fa-arrow-right-long" class="text-2xl"/>
            </NuxtLink>
        </div>
        <ul class="conCard relative left-1/2 -translate-x-1/2 flex mt-5 mb-10 flex-wrap -blue-500 gap-5">
            <template v-for="(item, index) in local.fetchedOtherProject" :key="index">
                <li class="cardI list-none relative" ref="cardRefs">
                    <NuxtLink :to="{ name: 'ProjectsDetail', params: { link:item.link }}" class="mb-2 hover:bg-primary dark:hover:bg-primary_dark flex flex-col rounded-xl text-primary_text dark:text-primary_dark_text hover:text-white dark:hover:text-white">
                        <img :src="publicConfig.baseURL + '/img/project/' + item.thumbnail" alt="" class="relative left-1/2 -translate-x-1/2 object-cover rounded-lg mt-3">
                        <h3 class="relative left-5 mt-4 text-xl font-semibold w-max">{{ item.nama }}</h3>
                        <span class="relative left-5 mt-5 mb-10 w-max">{{ item.category }}</span>
                    </NuxtLink>
                    <div class="card-loading absolute top-0 left-0 flex flex-col bg-transparent w-full">
                        <div class="rounded-md relative left-1/2 -translate-x-1/2 items-loading" style="animation: 2.5s shine ease-in infinite; animation-delay: 0.25s;"/>
                        <h3 class="rounded-md relative left-5 mt-5 items-loading" style="animation: 2.5s shine ease-in infinite; animation-delay: 0.25s;"/>
                        <span class="relative left-5 mt-4 mb-10 rounded-md items-loading" style="animation: 2.5s shine ease-in infinite; animation-delay: 0.25s;"/>
                    </div>
                </li>
            </template>
        </ul>
    </section>
</template>
<style scoped>
    .carousel::-webkit-scrollbar {
        width: 0px;
        height: 0px;
    }
    section > div, ul{
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
        section > div, ul{
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
        section > div, ul{
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
        section > div, ul{
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
        section > div, ul{
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
        section > div, ul{
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
        section > div, ul{
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
import CarouselSlide from '~/composition/CarouselSlide';
const publicConfig = useRuntimeConfig().public;
const route = useRoute();
definePageMeta({
    name: 'ProjectsDetail',
    layout: 'home',
    validate: async(route) => { 
        return true;
        // if(route.params.link === ''){
        //     navigateTo('/projects');
        // }else{
        //     return true;
        // }
    }
});
useHead({
    title: route.params.link + ' | Amirzan Portfolio'
});
useAsyncData(async () => {
    const res = await axios.get(publicConfig.baseURL + '/projects/' + route.params.link, {
        headers: {
            'Accept': 'application/json',
        }
    });
    local.fetchedDetailProject = res.data.detailProject;
    local.formattedDeskripsi = local.fetchedDetailProject.deskripsi.split('\n').map(item => {
        return item.trim()!== ''? `<p>${item}</p>` : '<br>';
    }).join('');
    local.fetchedOtherProject = res.data.other;
});
const local = reactive({
    fetchedDetailProject: null,
    fetchedOtherProject: null,
    thumbnail: '',
    carouselSlide: null,
    formattedDeskripsi:'',
});
const techStack = {
    'laravel': {
        href: 'https://laravel.com',
        src: '/_nuxt/assets/icon/laravel.svg',
        name: 'laravel'
    },
    'bootstrap': {
        href: 'https://getbootstrap.com/',
        src: '/_nuxt/assets/icon/bootstrap.svg',
        name: 'bootstrap'
    },
    'tailwind': {
        href: 'https://tailwind.com',
        src: '/_nuxt/assets/icon/tailwind.svg',
        name: 'tailwind'
    },
    'vue': {
        href: 'https://vue.com',
        src: '/_nuxt/assets/icon/vue.svg',
        name: 'vue'
    },
    'nuxt': {
        href: 'https://nuxt.com',
        src: '/_nuxt/assets/icon/nuxt.svg',
        name: 'nuxt'
    },
};

const deskripsiRef = ref(null);
const carouselRef = ref(null);
const caItemRef = ref([]);
const slideRef = ref([]);
const cardRefs = ref([]);
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
const filteredTechStack = computed(() => {
    if (!local.fetchedDetailProject || local.fetchedDetailProject == null) {
        return [];
    }
    const result = [];
    local.fetchedDetailProject?.tech_stack?.split(',').map((item)=>{
        return item.trim();
    }).forEach(tech => {
        if (techStack[tech]) {
            result.push(techStack[tech]);
        }
    });
    return result;
});
watch(() => local.fetchedDetailProject, () => {
    if (local?.fetchedDetailProject !== undefined && local.fetchedDetailProject !== null && typeof local.fetchedDetailProject === 'object' && !Array.isArray(local.fetchedDetailProject) && Object.keys(local.fetchedDetailProject).length > 0) {
        local.thumbnail = local.fetchedDetailProject.thumbnail;
        nextTick(() => {
            // local.carouselSlide = new CarouselSlide(carouselRef.value, caItemRef.value, slideRef.value);
            // local.carouselSlide.initCarousel();
        });
    }
}, { immediate:true });
watch(() => local.fetchedOtherProject, () => {
    if (local?.fetchedOtherProject !== undefined && local.fetchedOtherProject !== null && typeof local.fetchedOtherProject === 'object' && Array.isArray(local.fetchedOtherProject) && Object.keys(local.fetchedOtherProject).length > 0) {
        nextTick(() => {
            local.fetchedOtherProject.forEach((item, index) => {
                let card = cardRefs.value[index];
                handleLoading(card);
            });
        });
    }
}, { immediate:true });
const changeImg = (index) => {
    for(let i = 0; i < slideRef.value.length; i++){
        if(index == i){
            slideRef.value[index].classList.remove('hover:border-red-500');
            slideRef.value[index].classList.add('border-red-500');
        }else{
            slideRef.value[i].classList.remove('border-red-500');
            slideRef.value[i].classList.add('hover:border-red-500');
        }
    }
    local.carouselSlide.changeCarousel(index);
}
slideRef.value = computed(() => local.carouselSlide.itemReff);
</script>