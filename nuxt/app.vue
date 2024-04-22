<template>
    <NuxtLayout>
        <NuxtPage></NuxtPage>
    </NuxtLayout>
</template>
<style>
    .items-loading{
        background: linear-gradient(135deg, #b9b9b9 0%, #cdcdcd 52%, #fff 52%, #fff 54%, #cdcdcd 54%, #b9b9b9 100%);
        background-size: 180% 180%; background-position: 100% 100%;
    }
    @keyframes shine {
        to {
            background-position: 0% 0%;
        }
    }
</style>