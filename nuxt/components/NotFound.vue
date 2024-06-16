<template>
    <div>
        <p>gk enek data </p>
        <h1>{{ useNotFoundStore().messageNotFound }}</h1>
        <button @click="backPage()">balikkk</button>
    </div>
</template>
<script setup>
import { useNotFoundStore } from '~/store/NotFound';
const backPage = () => {
    useNotFoundStore().setIsNotFound(false);
    navigateTo(useNotFoundStore().linkBack);
}
</script>