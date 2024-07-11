<template>
    <div class="carousel flex overflow-x-scroll relative whitespace-nowrap flex-1" ref="carouselRef">
        <img :src="props.images[0]" alt="" ref="caItemRef" class="object-contain 3xsphone:rounded-md md:rounded-xl">
        <template v-for="(item, index) in props.images" :key="index">
            <img :src="item" alt="" ref="caItemRef" style="transition: 1s;" class="object-contain w-100">
        </template>
    </div>
</template>
<style scoped>
</style>
<script setup>
import { ref } from 'vue';
const props = defineProps({
    images:Object,
});

</script>