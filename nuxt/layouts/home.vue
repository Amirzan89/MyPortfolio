<template>
    <template v-if="useNotFoundStore().isNotFound" >
        <NotFoundComponent/>
    </template>
    <template v-else>
        <template v-if="useFetchDataStore().processFetch.isDone == 'success' || useFetchDataStore().processFetch.isDone == 'loading'">
            <HeaderComponent></HeaderComponent>
            <!-- main -->
            <main class="bg-white dark:bg-dark_bg">
                <slot/>
            </main>
            <!-- end main -->
            <Loading></Loading>
            <FooterComponent></FooterComponent>
        </template>
        <template v-else-if="useFetchDataStore().processFetch.isDone  == 'error'">
            <NotFoundComponent/>
        </template>
    </template>
</template>
<style>
.page-left-enter-active,
.page-right-enter-active,
.page-left-leave-active,
.page-right-leave-active{
    transition: all 0.3s linear;
}
.page-left-enter-from, .page-right-leave-to{
    transform: translateX(100%);
    opacity: 0;
}
.page-left-leave-to, .page-right-enter-from{
    transform: translateX(-100%);
    opacity: 0;
}
.page-left-enter-to, .page-right-enter-to{
    transform: translateX(0);
    opacity: 1;
}
</style>
<script setup>
import HeaderComponent from '~/components/Header.vue';
import FooterComponent from '~/components/Footer.vue';
import Loading from '~/components/Loading.vue';
import NotFoundComponent from '~/components/NotFound.vue';
import { useNotFoundStore } from '~/store/NotFound';
import { useFetchDataStore } from '~/store/FetchData';
</script>