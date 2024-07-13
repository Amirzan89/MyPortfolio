<template>
    <section class="relative  h-[calc(100vh)]">
        <div class="flex relative left-1/2 -translate-x-1/2 items-center">
            <span class="3xsphone:text-2xs 2xsphone:text-xs phone:text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl 2xl:text-3xl relative font-semibold text-primary_text dark:text-primary_dark_text">Projects</span>
        </div>
        <ul class="relative left-1/2 -translate-x-1/2 flex mt-5 mb-10 flex-wrap gap-5">
            <template v-for="(item, index) in local.fetchedViewData" :key="index">
                <li class="cardI list-none relative" ref="cardRefs">
                    <NuxtLink :to="{ name: 'ProjectsDetail', params: { link:item.link }}" class="mb-2 hover:bg-primary dark:hover:bg-primary_dark flex flex-col 3xsphone:rounded-md md:rounded-lg xl:rounded-xl text-primary_text dark:text-primary_dark_text hover:text-white dark:hover:text-white">
                        <img :src="baseURL + '/img/project/' + item.thumbnail" alt="" class="relative left-1/2 -translate-x-1/2 3xsphone:rounded-md md:rounded-lg 3xsphone:mt-1 md:mt-3 h-40">
                        <h3 class="relative 3xsphone:left-2 phone:left-3 sm:left-4 md:left-5 lg:left-4 xl:left-5 2xl:left-6 3xsphone:mt-5 xl:mt-7 2xl:mt-10 3xsphone:text-2xs phone:text-sm sm:text-base md:text-xl xl:text-2xl 2xl:text-xl font-semibold w-max">{{ item.nama }}</h3>
                        <span class="relative 3xsphone:left-2 phone:left-3 sm:left-4 md:left-5 lg:left-4 xl:left-5 2xl:left-6 3xsphone:mb-3 md:mb-4 xl:mb-5 3xsphone:text-3xs phone:text-xs sm:text-sm md:text-lg lg:text-base xl:text-lg 2xl:text-xl w-max">{{ item.category }}</span>
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
@import '~/assets/css/projects.css';
</style>
<script setup>
import { ref, watch } from "vue";
import { useFetchDataStore } from "~/store/FetchData";
import animationsComposable from '../composables/animations/projects/index';
const baseURL = useRuntimeConfig().public.baseURL;
definePageMeta({
    name: 'Projects',
    layout: 'home',
});
useHead({
    title:'My Project | Amirzan Portfolio'
});
const local = reactive({
    fetchedViewData: null,
});
const cardRefs = ref([]);
const ctx = ref(null);
useAsyncData(async () => {
    const res = await useFetchDataStore().fetchData();
    local.fetchedViewData = res.data.viewData;
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
watch(() => local.fetchedViewData, () => {
    if (local?.fetchedViewData !== undefined && typeof local.fetchedViewData === 'object' && Array.isArray(local.fetchedViewData) && Object.keys(local.fetchedViewData).length > 0) {
        nextTick(() => {
            const { $gsap } = useNuxtApp();
            $gsap.from(cardRefs.value, {
                opacity: 0,
                y:'70%',
                duration: 1.5,
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
</script>