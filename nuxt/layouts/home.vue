<template>
    <HeaderComponent></HeaderComponent>
    <!-- main -->
    <main class="bg-white dark:bg-dark_bg">
        <slot></slot>
        <FooterComponent></FooterComponent>
    </main>
    <!-- end main -->
    <Loading></Loading>
</template>
<script setup>
import HeaderComponent from '~/components/Header.vue';
import FooterComponent from '~/components/Footer.vue';
import Loading from '~/components/Loading.vue';
</script>
<script>
</script>