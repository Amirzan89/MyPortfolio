<template>
    <HeaderComponent></HeaderComponent>
    <!-- main -->
    <main class="dark:bg-l_pa_1 bg-primary-100 w-auto">
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