<template>
    <div class="min-h-screen">
        <section>
            <div class="relative left-1/2 -translate-x-1/2 flex 3xsphone:flex-col md:flex-row 3xsphone:gap-3 sm:gap-5 md:gap-10 w-11/12 items-start">
                <CarouselImageComponent v-if="!local.isLoading" :images="getImages"/>
                <div id="detailProject" class="flex flex-col flex-1 text-primary_text dark:text-primary_dark_text">
                    <h1 class="3xsphone:text-sm xsphone:text-base phone:text-lg sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl 2xl:text-5xl font-semibold">{{ capitalizeFirstLetter(local.fetchedDetailProject?.nama) }}</h1>
                    <p class="3xsphone:text-3xs phone:text-2xs sm:text-base md:text-sm lg:text-base xl:text-lg 2xl:text-xl 3xsphone:mt-1 phone:mt-3 sm:mt-5 font-normal" v-html="local.formattedDeskripsi"/>
                    <div class="flex flex-row 3xsphone:gap-1 sm:gap-3 md:gap-5 3xsphone:mt-1 sm:mt-1 xl:mt-3 ml-3">
                        <template v-for="(item, index) in filteredTechStack" :key="index">
                            <a :href=item.href target="_blank" class="flex items-center justify-center w-max">
                                <img :src=item.src :class="`max-w-sm object-cover ${item.width}`"/>
                            </a>
                        </template>
                    </div>
                    <template v-if="local.fetchedDetailProject != null">
                        <a :href="local.fetchedDetailProject?.link_project" target="_blank" id="btnPreview" class="3xsphone:ml-1 sm:ml-3 md:ml-3 2xl:ml-5 3xsphone:mt-2 2xsphone:mt-3 md:mt-5 xl:mt-7 2xl:mt-10 3xsphone:w-14 xsphone:w-17 phone:w-20 sm:w-27 md:w-27 lg:w-30 xl:w-37 3xsphone:h-4 xsphone:h-6 sm:h-9 md:h-8 lg:h-9 xl:h-12 3xsphone:rounded-sm xsphone:rounded-md xl:rounded-lg bg-primary dark:bg-primary_dark text-white flex items-center justify-center 3xsphone:text-2xs xsphone:text-xs phone:text-sm sm:text-lg md:text-lg lg:text-xl xl:text-2xl 3xsphone:font-medium md:font-semibold">Preview</a>
                    </template>
                </div>
            </div>
        </section>
        <section class="mt-10">
            <div class="flex relative left-1/2 -translate-x-1/2 justify-between items-center text-primary_text dark:text-primary_dark_text">
                <template v-if="local.fetchedOtherProject != null">
                    <span class="3xsphone:text-2xs 2xsphone:text-xs phone:text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl 2xl:text-3xl relative font-semibold">Projects</span>
                    <NuxtLink id="btnOthers" to="/projects" class="3xsphone:text-2xs 2xsphone:text-xs phone:text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl 2xl:text-3xl flex gap-2 items-center hover:text-red-500">
                        <span>Others</span>
                        <FontAwesomeIcon icon="fa-solid fa-arrow-right-long" class="3xsphone:text-2xs 2xsphone:text-xs phone:text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl 2xl:text-3xl"/> 
                    </NuxtLink>
                </template>
            </div>
            <ul class="conCard relative left-1/2 -translate-x-1/2 flex 3xsphone:mt-1 xl:mt-5 flex-wrap -blue-500 gap-5">
                <template v-for="(item, index) in local.fetchedOtherProject" :key="index">
                    <li class="cardI list-none relative" ref="cardRefs">
                        <NuxtLink :to="{ name: 'ProjectsDetail', params: { link:item.link }}" class="3xsphone:mb-2 sm:mb-7 md:mb-2 hover:bg-primary dark:hover:bg-primary_dark flex flex-col 3xsphone:rounded-md md:rounded-lg xl:rounded-xl text-primary_text dark:text-primary_dark_text hover:text-white dark:hover:text-white">
                            <img :src="publicConfig.baseURL + '/img/project/' + item.thumbnail" alt="" class="relative left-1/2 -translate-x-1/2 3xsphone:rounded-md md:rounded-lg 3xsphone:mt-1 md:mt-3 h-40">
                            <h3 class="relative 3xsphone:left-2 phone:left-3 sm:left-4 md:left-5 lg:left-4 xl:left-5 2xl:left-6 3xsphone:mt-5 xl:mt-7 2xl:mt-10 3xsphone:text-2xs phone:text-sm sm:text-base md:text-xl xl:text-2xl 2xl:text-xl font-semibold w-max">{{ item.nama }}</h3>
                            <span class="relative 3xsphone:left-2 phone:left-3 sm:left-4 md:left-5 lg:left-4 xl:left-5 2xl:left-6 3xsphone:mb-3 md:mb-4 xl:mb-5 3xsphone:text-3xs phone:text-xs sm:text-sm md:text-lg lg:text-base xl:text-lg 2xl:text-xl w-max">{{ item.category }}</span>
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
    </div>
</template>
<style lang="scss" scoped>
    @import '~/assets/css/detailProject.scss';
</style>
<script setup>
import { ref, watch, computed } from "vue";
import { useNotFoundStore } from '~/store/NotFound';
import { useFetchDataStore } from "~/store/FetchData";
import CarouselImageComponent from '~/components/CarouselImage.vue';
import animationsComposable from '~/composables/animations/projects/detail';
import laravelIcon from '~/assets/icon/laravel.svg';
import bootstrapicon from '~/assets/icon/bootstrap.svg';
import tailwindicon from '~/assets/icon/tailwind.svg';
import vueicon from '~/assets/icon/vue.svg';
import nuxtIcon from '~/assets/icon/nuxtjs.svg';
const route = useRoute();
const publicConfig = useRuntimeConfig().public;
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
        name: 'laravel',
        width: '3xsphone:w-3 2xsphone:w-4 xsphone:w-5 phone:w-6 sm:w-8 md:w-7 lg:w-8 xl:w-11',
    },
    'bootstrap': {
        href: 'https://getbootstrap.com/',
        src: bootstrapicon,
        name: 'bootstrap',
        width: '3xsphone:w-4 2xsphone:w-5 xsphone:w-7 phone:w-8 sm:w-10 md:w-9 lg:w-11 xl:w-14 2xl:w-15',
    },
    'tailwind': {
        href: 'https://tailwind.com',
        src: tailwindicon,
        name: 'tailwind',
        width: '3xsphone:w-3 2xsphone:w-5 xsphone:w-6 phone:w-7 sm:w-8 md:w-8 lg:w-9 xl:w-12 2xl:w-13',
    },
    'vue': {
        href: 'https://vue.com',
        src: vueicon,
        name: 'vue',
        width: '3xsphone:w-3 2xsphone:w-2 xsphone:w-5 phone:w-6 sm:w-7 md:w-7 lg:w-9 xl:w-11',
    },
    'nuxt': {
        href: 'https://nuxt.com',
        src: nuxtIcon,
        name: 'nuxt',
        width: '3xsphone:w-4 2xsphone:w-2 xsphone:w-6 phone:w-7 sm:w-9 md:w-8 lg:w-10 xl:w-12 2xl:w-13',
    },
};
const local = reactive({
    fetchedDetailProject: null,
    fetchedOtherProject: null,
    thumbnail: '',
    carouselImage: [],
    isLoading: true,
    formattedDeskripsi:'',
});
const carouselRef = ref(null);
const caItemRef = ref([]);
const slideRef = ref([]);
const cardRefs = ref([]);
const ctx = ref(null);
useAsyncData(async () => {
    const res = await useFetchDataStore().fetchData();
    if(res.status == 'success'){
        local.fetchedDetailProject = res.data.detailProject;
        local.formattedDeskripsi = local.fetchedDetailProject.deskripsi.split('\n').map(item => {
            return item.trim()!== ''? `<p>${item}</p>` : '<br>';
        }).join('');
        local.fetchedOtherProject = res.data.other;
    } else {
        useNotFoundStore().setIsNotFound(true, '/projects','Projects not found');
    }
});
onBeforeRouteUpdate(() => {
    useFetchDataStore().resetFetchData();
});
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
            const { $gsap } = useNuxtApp();
            const tl = $gsap.timeline();
            const first = $gsap.utils.selector('section:first-child div');
            tl.from(first('a:not(#btnPreview'), {
                y:'300%',
                opacity: 0,
                delay: 0.7,
                duration: 1,
                stagger: {
                    from: 'start',
                    each: 0.3,
                },
            }, 0);
            tl.from(first('a#btnPreview'), {
                y:'300%',
                opacity: 0,
                delay: 0.5,
                duration: 1,
            }, 0);
            const link = publicConfig.baseURL + '/img/project/';
            local.carouselImage = local.fetchedDetailProject.foto.map((item) => {
                return link + item;
            });
            local.isLoading = false;
        });
    }
}, { immediate:true });
watch(() => local.fetchedOtherProject, () => {
    if (local?.fetchedOtherProject !== undefined && local.fetchedOtherProject !== null && typeof local.fetchedOtherProject === 'object' && Array.isArray(local.fetchedOtherProject) && Object.keys(local.fetchedOtherProject).length > 0) {
        nextTick(() => {
            const { $gsap } = useNuxtApp();
            const lastChi = $gsap.utils.selector('section:last-child');
            $gsap.from(lastChi('span'), {
                x:'-100%',
                opacity: 0,
                delay: 2.2,
                duration: 1.3,
            }, 0);
            $gsap.from(lastChi('a#btnOthers'), {
                x:'100%',
                opacity: 0,
                delay: 2.2,
                duration: 1.3,
            }, 0);
            $gsap.from(cardRefs.value, {
                opacity: 0,
                y:'20%',
                delay: 0.25,
                duration: 1,
                scrollTrigger: {
                    trigger: 'section:last-child',
                    start: 'top 60%',
                    end: 'top none',
                },
                stagger:{
                    from: 'start',
                    each: 0.3,
                }
            });
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
const getImages = computed(() => {
    return local.carouselImage;
});
</script>