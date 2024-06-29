<template>
    <div v-if="showPreloader" class="fixed z-100 w-full h-full top-0 left-0">
        <div class="bg w-full h-full bg-blue-300/20 dark:"></div>
        <div class="inline-block absolute w-40 h-40 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 ">
            <div class="absolute left-2 w-10 bg-white custom-animation custom-animation-delay-long"></div>
            <div class="absolute left-18 w-10 bg-white custom-animation custom-animation-delay-short"></div>
            <div class="absolute left-35 w-10 bg-white custom-animation"></div>
        </div>
    </div>
</template>
<style>
@keyframes custom-animation {
    0%, 100% {
        top: 8px;
        height: 64px;
    }
    50% {
        top: 24px;
        height: 32px;
    }
    }

    .custom-animation {
    animation: custom-animation 1.2s cubic-bezier(0, 1, 0.5, 1) infinite;
    }

    .custom-animation-delay-long {
    animation-delay: -0.24s;
    }

    .custom-animation-delay-short {
    animation-delay: -0.12s;
    }
</style>
<script setup>
import { ref, onMounted } from 'vue';
import { eventBus } from '../app/eventBus';
const showPreloader = ref(false);
onMounted(() => {
    eventBus.on('showLoading',function(){
        showLoading();
    });
    eventBus.on('closeLoading',function(){
        closeLoading();
    });
});
const showLoading = () => {
    showPreloader.value = true;
};
const closeLoading = () => {
    showPreloader.value = false;
};
</script>