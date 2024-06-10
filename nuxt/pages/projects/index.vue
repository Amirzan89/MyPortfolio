<template>
    <section style="padding-top: 70px;" class="relative min-h-screen">
        <div class="flex relative left-1/2 -translate-x-1/2 justify-between items-center">
            <span class="text-3xl relative font-semibold text-primary_text dark:bg-primary_dark_text">Projects</span>
        </div>
        <ul class="relative left-1/2 -translate-x-1/2 flex mt-5 mb-10 flex-wrap gap-5">
            <template v-for="(item, index) in local.fetchedViewData" :key="index">
                <li class="cardI list-none relative" ref="cardRefs">
                    <NuxtLink :to="{ name: 'ProjectsDetail', params: { link:item.link }}" class="mb-2 hover:bg-primary dark:bg-primary_dark flex flex-col rounded-xl hover:text-white dark:hover:bg-primary_dark_text">
                        <img :src="publicConfig.baseURL + '/img/project/' + item.thumbnail" alt="" class="relative left-1/2 -translate-x-1/2 object-cover rounded-lg mt-3 h-40">
                        <h3 class="relative left-5 mt-4 text-xl font-semibold w-max">{{ item.nama }}</h3>
                        <span class="relative left-5 mt-5 mb-10 w-max flex-1">{{ item.category }}</span>
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