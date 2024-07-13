<template>
    <div class="sm:mb-4 flex flex-col items-center relative 3xsphone:left-1/2 md:left-0 3xsphone:-translate-x-1/2 md:-translate-x-0 whitespace-nowrap md:flex-1 w-10/12" ref="carouselRef">
        <!-- <div class="relative">
            <div class="absolute h-1 bg-black"></div>
        </div> -->
        <img :src="props.images[0]" alt="" ref="mainImageRef" class="object-contain 3xsphone:rounded-md sm:rounded-lg md:rounded-xl w-full">
        <div class="flex gap-1.5 mt-1 w-1/2 scrollable-container" ref="scrollableContainer" @mousedown="handleScrollEvent" @mousemove="handleScrollEvent" @mouseup="handleScrollEvent" @mouseleave="handleScrollEvent"
        >
            <template v-for="(item, index) in props.images" :key="index">
                <img :src="item" alt="" @click="updateImage(item, index)" ref="caItemRef" class="pointer-events-auto object-contain w-1/3 rounded-md border-3 border-transparent hover:border-primary dark:hover:border-primary_dark" draggable="false">
            </template>
        </div>
    </div>
</template>
<style scoped>
.scrollable-container{
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    scrollbar-width: none;
    -ms-overflow-style: none;
}
.scrollable-container::-webkit-scrollbar {
    width: 0;
    display: none;
}
</style>
<script setup>
import { ref } from 'vue';
const { $gsap } = useNuxtApp();
const mainImageRef = ref(null);
const scrollableContainer = ref(null);
const caItemRef = ref([]);
const local = reactive({
    isDragging: false,
    startX: 0,
    scrollLeft: 0,
    isActiveIndex: 0,
})
const props = defineProps({
    images:Object,
});
onMounted(() => {
    nextTick(() => {
        caItemRef.value[0].classList.add('active');
    })
});

const handleScrollEvent = (event) => {
    const container = scrollableContainer.value;
    if (event.type === 'mousedown') {
        local.isDragging = true;
        local.startX = event.pageX - container.offsetLeft;
        local.scrollLeft = container.scrollLeft;
        // container.style.cursor = 'grabbing';
    } else if (event.type === 'mousemove' && local.isDragging) {
        event.preventDefault();
        const x = event.pageX - container.offsetLeft;
        const walk = (x - local.startX) * 2; // Multiply by 2 for faster scrolling
        container.scrollLeft = local.scrollLeft - walk;
    } else if (event.type === 'mouseup' || event.type === 'mouseleave') {
        local.isDragging = false;
        // container.style.cursor = 'grab';
    }
}
const updateImage = (item, index) => {
    mainImageRef.value.src = item;
    const cl = $gsap.timeline();
    local.isActiveIndex = index;
}
</script>