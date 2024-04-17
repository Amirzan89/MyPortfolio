<template>
    <section class="relative left-1/2 -translate-x-1/2 flex flex-col gap-5" style="width: 80%; padding-top: 70px;">
        <div class="carousel flex overflow-x-scroll relative whitespace-nowrap" @scroll="handleCarouselScroll" @wheel="handleCarouselMouse">
            <template v-for="(item, index) in local.fetchedDetailProject?.foto" :key="index">
                <img :src="publicConfig.baseURL + '/img/project/' + item" alt="" ref="carouselRef" style="transition: 1s;" class="object-contain">
            </template>
        </div>
        <div class="flex justify-center gap-4">
            <template v-for="(item, index) in local.fetchedDetailProject?.foto" :key="index">
                <img :src="publicConfig.baseURL + '/img/project/' + item" alt="" class="object-cover w-35 rounded-xl hover:border-red-500 border-5 pointer-events-auto cursor-pointer" ref="slideRef" @click="changeImg(index)">
            </template>
        </div>
    </section>
    <section class="relative left-1/2 -translate-x-1/2 mt-5" style="width:75%; padding-top: 70px;">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, rerum beatae animi totam eligendi, eum quos libero molestiae nisi, ex molestias non voluptatibus tempora recusandae ab. Explicabo commodi quis temporibus!
        </p>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, rerum beatae animi totam eligendi, eum quos libero molestiae nisi, ex molestias non voluptatibus tempora recusandae ab. Explicabo commodi quis temporibus!
        </p>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, rerum beatae animi totam eligendi, eum quos libero molestiae nisi, ex molestias non voluptatibus tempora recusandae ab. Explicabo commodi quis temporibus!
        </p>
    </section>
    <section style="padding-top: 70px;">
        <div class="flex relative left-1/2 -translate-x-1/2 justify-between items-center" style="width:80%">
            <span class="text-3xl relative font-semibold">Other projects</span>
            <NuxtLink to="/projects" class="text-xl flex gap-2 items-center hover:text-red-500">
                <span>Others</span>
                <img :src="publicConfig.baseURL + '/img/icon/arrow-right.svg'" class="w-6">
            </NuxtLink>
        </div>
        <ul class="relative left-1/2 -translate-x-1/2 flex mt-5 mb-10 flex-wrap justify- -blue-500 gap-5" style="width:80%;">
            <template v-for="(item, index) in local.fetchedOtherProject" :key="index">
                <li class="list-none relative w-80" ref="cardRefs">
                    <NuxtLink :to="{ name: 'ProjectsDetail', params: { link:item.link }}" class="mb-2 hover:bg-red-500 flex flex-col rounded-xl">
                        <img :src="publicConfig.baseURL + '/img/project/' + item.thumbnail" alt="" class="relative left-1/2 -translate-x-1/2 object-cover rounded-lg mt-3 h-40" style="width:90%">
                        <h3 class="relative left-5 mt-4 text-xl font-semibold w-max">{{ item.nama }}</h3>
                        <span class="relative left-5 mt-5 mb-10 w-max">{{ item.category }}</span>
                    </NuxtLink>
                    <div class="card-loading absolute top-0 left-0 flex flex-col bg-transparent w-full">
                        <div class="h-40 mt-3 rounded-md relative left-1/2 -translate-x-1/2 items-loading" style="width: 90%; animation: 2.5s shine ease-in infinite; animation-delay: 0.25s;"/>
                        <h3 class="w-55 h-8 rounded-md relative left-5 mt-5 items-loading" style="animation: 2.5s shine ease-in infinite; animation-delay: 0.25s;"/>
                        <span class="w-30 h-7 relative left-5 mt-4 mb-10 rounded-md items-loading" style="animation: 2.5s shine ease-in infinite; animation-delay: 0.25s;"/>
                    </div>
                </li>
            </template>
        </ul>
    </section>
</template>
<style>
.carousel::-webkit-scrollbar {
    width: 0px;
    height: 00px;
}
</style>
<script setup>
import axios from 'axios';
import CarouselSlide from '~/composition/carouselSlide';
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
    local.fetchedOtherProject = res.data.other;
});
const local = reactive({
    fetchedDetailProject: null,
    fetchedOtherProject: null,
    thumbnail: '',
    indC: 0,
});
const carouselRef = ref([]);
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
watch(() => local.fetchedDetailProject, () => {
    if (local?.fetchedDetailProject !== undefined && local.fetchedDetailProject !== null && typeof local.fetchedDetailProject === 'object' && !Array.isArray(local.fetchedDetailProject) && Object.keys(local.fetchedDetailProject).length > 0) {
        local.thumbnail = local.fetchedDetailProject.thumbnail;
        nextTick(() => {
            carouselRef.value = CarouselSlide.initCarousel(carouselRef.value);
        })
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
const changeImg = (inpIndex) => {
    for(let i = 0; i < slideRef.value.length; i++){
        if(inpIndex == i){
            slideRef.value[i].classList.remove('hover:border-red-500');
            slideRef.value[inpIndex].classList.add('border-red-500');
        }else{
            slideRef.value[i].classList.remove('border-red-500');
            slideRef.value[i].classList.add('hover:border-red-500');
        }
    }
    carouselRef.value = CarouselSlide.changeCarousel(carouselRef.value, inpIndex);
}
const handleCarouselMouse = (event) => {
    event.preventDefault();
    console.log('mouse scroll');
    console.log('x ' +event.deltaX);
    console.log('y ' +event.deltaY);
    console.log('z ' +event.deltaZ);
    if(event.deltaX){
        carouselRef.value = CarouselSlide.scrollCarousel(carouselRef.value, event.deltaX);
    }else if(event.deltaY){
        carouselRef.value = CarouselSlide.scrollCarousel(carouselRef.value, event.deltaY);
    }
}
</script>