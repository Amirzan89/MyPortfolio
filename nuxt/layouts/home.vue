<template>
    <HeaderComponent></HeaderComponent>
    <!-- main -->
    <main class="absolute dark:bg-l_pa_1 bg-black w-auto">
        <slot></slot>
        <section class="mt-50  w-full h-400 bg-d_black">
            <ContactComponent></ContactComponent>
        </section>
        <FooterComponent></FooterComponent>
    </main>
    <!-- end main -->
</template>
<script setup>
import HeaderComponent from '~/components/Header.vue';
import ContactComponent from '~/components/Contact.vue';
import FooterComponent from '~/components/Footer.vue';
</script>