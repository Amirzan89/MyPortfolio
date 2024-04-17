<template>
    <section class="relative min-h-screen">
        <div class="flex relative left-1/2 -translate-x-1/2 justify-between items-center" style="width:90%">
            <span class="text-3xl relative font-semibold">Projects</span>
            <NuxtLink to="/projects" class="text-xl flex gap-2 items-center hover:text-red-500">
                <span>Others</span>
                <img :src="publicConfig.baseURL + '/img/icon/arrow-right.svg'" class="w-6">
            </NuxtLink>
        </div>
        <ul class="relative left-1/2 -translate-x-1/2 flex mt-5 mb-10 flex-wrap justify-between bg-blue-500" style="width:95%;">
            <template v-for="(item, index) in local.fetchedViewData" :key="index">
                <li class="list-none relative" style="width:31%;" ref="cardRefs">
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
    .items-loading{
        background: linear-gradient(135deg, #b9b9b9 0%, #cdcdcd 52%, #fff 52%, #fff 54%, #cdcdcd 54%, #b9b9b9 100%);
        background-size: 180% 180%; background-position: 100% 100%;
    }
    @keyframes shine {
        to {
            background-position: 0% 0%;
        }
    }
</style>
<script setup>
import axios from 'axios';
const publicConfig = useRuntimeConfig().public;
definePageMeta({
    name: 'Projects',
    layout: 'home',
});
useHead({
    title:'My Project | Amirzan Portfolio'
});
useAsyncData(async () => {
    const res = await axios.get(publicConfig.baseURL + '/projects', {
        headers: {
            'Accept': 'application/json',
        }
    });
    local.fetchedViewData = res.data.viewData;
});
const local = reactive({
    fetchedViewData: null,
});
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
watch(() => local.fetchedViewData, () => {
    if (local?.fetchedViewData !== undefined && typeof local.fetchedViewData === 'object' && Array.isArray(local.fetchedViewData) && Object.keys(local.fetchedViewData).length > 0) {
        nextTick(() => {
            local.fetchedViewData.forEach((item, index) => {
                let card = cardRefs.value[index];
                handleLoading(card);
            });
        });
    }
}, { immediate:true });
</script>