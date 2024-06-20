<template>
    <template v-if="useNotFoundStore().isNotFound" >
        <NotFoundComponent/>
    </template>
    <template v-else>
        <HeaderComponent></HeaderComponent>
        <!-- main -->
        <main class="bg-white dark:bg-dark_bg">
            <slot/>
            <FooterComponent></FooterComponent>
        </main>
        <!-- end main -->
        <Loading></Loading>
    </template>
</template>
<script setup>
import HeaderComponent from '~/components/Header.vue';
import FooterComponent from '~/components/Footer.vue';
import Loading from '~/components/Loading.vue';
import NotFoundComponent from '~/components/NotFound.vue';
import { useNotFoundStore } from '~/store/NotFound';
</script>