<template>
    <HeaderComponent></HeaderComponent>
    <!-- main -->
    <main class="dark:bg-l_pa_1 bg-primary-100 w-auto">
        <slot></slot>
        <FooterComponent></FooterComponent>
    </main>
    <!-- end main -->
</template>
<script setup>
import HeaderComponent from '~/components/Header.vue';
import FooterComponent from '~/components/Footer.vue';
</script>
<script>
</script>