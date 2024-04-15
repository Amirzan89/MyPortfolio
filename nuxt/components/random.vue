<template>
    <section id="service" class="mt-50 mb-50 text-white">
        <span class="text-6xl relative left-20">Services</span>
        <div class="flex flex-wrap justify-around mt-10">
            <div class="card bg-d_black w-full md:w-1/2 lg:w-1/3 xl:w-1/4 p-6">
                <div class=" w-50 h-50 mb-4 relative left-2/4 -translate-x-2/4 mt-4">
                    <img :src="publicConfig.baseURL + '/img/icon/laravel.png'" class="max-w-full object-cover rounded-lg" />
                </div>
                <div class="flex flex-col">
                    <span class="text-4xl font-bold mb-2">Laravel</span>
                    <span class="text-xl">Laravel is an elegant and expressive framework that simplifies the development process, allowing for the creation of feature-rich and maintainable applications.</span>
                    <!-- <span>I specialize in building robust and scalable web applications using the Laravel PHP framework. Laravel is an elegant and expressive framework that simplifies the development process, allowing for the creation of feature-rich and maintainable applications. With its intuitive syntax, powerful tools, and a vibrant ecosystem, I leverage Laravel to deliver high-performance solutions that meet the unique needs of clients. From backend development to crafting RESTful APIs and integrating modern frontend technologies, I bring Laravel's versatility to create seamless and efficient web experiences.</span> -->
                    <span class="hover:text-red-500 block mt-4">
                        <a href="https://laravel.com">Learn More</a>
                    </span>
                </div>
            </div>
            <div class="card bg-d_black w-full md:w-1/2 lg:w-1/3 xl:w-1/4 p-6">
                <div class=" w-50 h-50 mb-4 relative left-2/4 -translate-x-2/4 mt-4">
                    <img :src="publicConfig.baseURL + '/img/icon/tailwind.svg'" class="max-w-full object-cover rounded-lg" />
                </div>
                <div class="flex flex-col">
                    <span class="text-4xl font-bold mb-2">Tailwind CSS</span>
                    <span class="text-xl">Tailwind is a utility-first CSS framework that allows me to build sleek and responsive designs with speed and precision.</span>
                    // <span>I specialize in developing dynamic and interactive web applications using Vue.js. Vue.js is a progressive JavaScript framework that allows me to build seamless and responsive user interfaces with ease. With its reactive data binding and component-based architecture, I create modern and engaging front-end experiences. Whether it's building single-page applications or integrating dynamic features into existing projects, Vue.js empowers me to deliver efficient and user-centric solutions. I bring the power of Vue.js to enhance the interactivity and user experience of web applications.</span>
                    <span class="hover:text-red-500 block mt-4">
                        <a href="https://tailwindcss.com">Learn More</a>
                    </span>
                </div>
            </div>
            <div class="card bg-d_black w-full md:w-1/2 lg:w-1/3 xl:w-1/4 p-6">
                <div class=" w-50 h-50 mb-4 relative left-2/4 -translate-x-2/4 mt-4">
                    <img :src="publicConfig.baseURL + '/img/icon/vue.png'" class="max-w-full object-cover rounded-lg" />
                </div>
                <div class="flex flex-col">
                    <span class="text-4xl font-bold mb-2">Vue JS</span>
                    <span class="text-xl">Vue.js is a progressive JavaScript framework that allows me to create seamless and responsive web applications with ease.</span>
                    <span>I specialize in developing dynamic and interactive web applications using Vue.js. Vue.js is a progressive JavaScript framework that allows me to build seamless and responsive user interfaces with ease. With its reactive data binding and component-based architecture, I create modern and engaging front-end experiences. Whether it's building single-page applications or integrating dynamic features into existing projects, Vue.js empowers me to deliver efficient and user-centric solutions. I bring the power of Vue.js to enhance the interactivity and user experience of web applications.</span>
                    <span class="hover:text-red-500 block mt-4">
                        <a href="https://vuejs.org/">Learn More</a>
                    </span>
                </div>
            </div>
        </div>
    </section>
</template>
<script setup>
const publicConfig = useRuntimeConfig().public;
</script>