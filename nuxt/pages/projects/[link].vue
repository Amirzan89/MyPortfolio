<template>
    <div>
        <section class="w-full" style="padding-top: 70px;">
            <div class="relative left-1/2 -translate-x-1/2 flex flex-row gap-10 w-11/12 items-start">
                <div class="carousel flex overflow-x-scroll relative whitespace-nowrap flex-1" ref="carouselRef">
                    <img :src="publicConfig.baseURL + '/img/project/' + local.fetchedDetailProject?.foto[0]" alt="" ref="caItemRef" class="object-contain rounded-xl">
                    <!-- <template v-for="(item, index) in local.fetchedDetailProject?.foto" :key="index">
                        <img :src="publicConfig.baseURL + '/img/project/' + item" alt="" ref="caItemRef" style="transition: 1s;" class="object-contain w-100">
                    </template> -->
                </div>
                <div class="flex flex-col flex-1 text-primary_text dark:text-primary_dark_text">
                    <h1 class="text-5xl font-semibold">{{ capitalizeFirstLetter(local.fetchedDetailProject?.nama) }}</h1>
                    <div class="mt-5 font-normal" v-html="local.formattedDeskripsi"></div>
                    <div class="flex flex-row gap-5 mt-5">
                        <template v-for="(item, index) in filteredTechStack" :key="index">
                            <a :href=item.href target="_blank" class="flex items-center justify-center w-max">
                                <img :src=item.src class="max-w-sm object-cover w-13"/>
                            </a>
                        </template>
                    </div>
                    <a :href="local.fetchedDetailProject?.link_project" target="_blank" class="ml-5 mt-10 w-35 h-11 rounded-lg bg-primary dark:bg-primary_dark text-white flex items-center justify-center text-2xl font-semibold">Preview</a>
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
                <span class="text-2xl relative font-semibold">Other projects</span>
                <NuxtLink to="/projects" class="text-xl flex gap-2 items-center hover:text-red-500">
                    <span>Others</span>
                    <FontAwesomeIcon icon="fa-solid fa-arrow-right-long" class="text-2xl"/>
                </NuxtLink>
            </div>
            <ul class="conCard relative left-1/2 -translate-x-1/2 flex mt-5 mb-10 flex-wrap -blue-500 gap-5">
                <template v-for="(item, index) in local.fetchedOtherProject" :key="index">
                    <li class="cardI list-none relative" ref="cardRefs">
                        <NuxtLink :to="{ name: 'ProjectsDetail', params: { link:item.link }}" class="mb-2 hover:bg-primary dark:hover:bg-primary_dark flex flex-col rounded-xl text-primary_text dark:text-primary_dark_text hover:text-white dark:hover:text-white">
                            <img :src="publicConfig.baseURL + '/img/project/' + item.thumbnail" alt="" class="relative left-1/2 -translate-x-1/2 rounded-xl mt-3">
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
    </div>
</template>
<style scoped>
    @import '~/assets/css/detailProject.css';
    .page-enter-active,
    .page-leave-active {
        transition: all 0.4s;
    }
    .page-enter-from,
    .page-leave-to {
        opacity: 0;
        filter: blur(1rem);
    }
</style>
<script setup>
import { ref, watch } from "vue";
import { useNotFoundStore } from '~/store/NotFound';
import CarouselSlide from '~/composables/CarouselSlide';
import { projectDetailPage } from '../composables/api/home';
import animationsComposable from '../composables/animations/projects/detail';
import laravelIcon from '~/assets/icon/laravel.svg';
import bootstrapicon from '~/assets/icon/bootstrap.svg';
import tailwindicon from '~/assets/icon/tailwind.svg';
import vueicon from '~/assets/icon/vue.svg';
import nuxtIcon from '~/assets/icon/nuxtjs.svg';
const publicConfig = useRuntimeConfig().public;
const route = useRoute();
definePageMeta({
    name: 'ProjectsDetail',
    layout: 'home',
    validate: async(route) => { 
        if(route.params.link === '/'){
                navigateTo('/projects');
        }else{
            return true;
        }
    }
});
const capitalizeFirstLetter = (inp) => {
    if(inp == null) return '';
    return inp.charAt(0).toUpperCase() + inp.slice(1);
}
useHead({
    title: capitalizeFirstLetter(route.params.link) + ' | Amirzan Portfolio'
});
const techStack = {
    'laravel': {
        href: 'https://laravel.com',
        src: laravelIcon,
        name: 'laravel'
    },
    'bootstrap': {
        href: 'https://getbootstrap.com/',
        src: bootstrapicon,
        name: 'bootstrap'
    },
    'tailwind': {
        href: 'https://tailwind.com',
        src: tailwindicon,
        name: 'tailwind'
    },
    'vue': {
        href: 'https://vue.com',
        src: vueicon,
        name: 'vue'
    },
    'nuxt': {
        href: 'https://nuxt.com',
        src: nuxtIcon,
        name: 'nuxt'
    },
};
const local = reactive({
    fetchedDetailProject: null,
    fetchedOtherProject: null,
    thumbnail: '',
    carouselSlide: null,
    formattedDeskripsi:'',
});
const carouselRef = ref(null);
const caItemRef = ref([]);
const slideRef = ref([]);
const cardRefs = ref([]);
useLazyAsyncData(async () => {
    const res = await projectDetailPage(route.params.link);
    if(res.status == 'success'){
        local.fetchedDetailProject = res.data.detailProject;
        local.formattedDeskripsi = local.fetchedDetailProject.deskripsi.split('\n').map(item => {
            return item.trim()!== ''? `<p>${item}</p>` : '<br>';
        }).join('');
        local.fetchedOtherProject = res.data.other;
    } else {
        useNotFoundStore().setIsNotFound(true, '/projects','Data not found');
    }
});
const ctx = ref(null);
onMounted(() => {
    const { gsapContext } = animationsComposable();
    ctx.value = gsapContext.value;
});
onUnmounted(() => {
    ctx.value?.kill()
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
// const changeImg = (index) => {
//     for(let i = 0; i < slideRef.value.length; i++){
//         if(index == i){
//             slideRef.value[index].classList.remove('hover:border-red-500');
//             slideRef.value[index].classList.add('border-red-500');
//         }else{
//             slideRef.value[i].classList.remove('border-red-500');
//             slideRef.value[i].classList.add('hover:border-red-500');
//         }
//     }
//     local.carouselSlide.changeCarousel(index);
// }
// slideRef.value = computed(() => local.carouselSlide.itemReff);
</script>