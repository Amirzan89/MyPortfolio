<template>
    <section>
        iki detail project
    </section>
</template>
<script setup>
import axios from 'axios';
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
    const res = await axios.get(publicConfig.baseURL + '/', {
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
watch(() => local.fetchedOtherProject, () => {
    if (local?.fetchedOtherProject !== undefined && typeof local.fetchedOtherProject === 'object' && Array.isArray(local.fetchedOtherProject) && Object.keys(local.fetchedOtherProject).length > 0) {
        nextTick(() => {
            local.fetchedOtherProject.forEach((item, index) => {
                let card = cardRefs.value[index];
                handleLoading(card);
            });
        });
    }
}, { immediate:true });
</script>