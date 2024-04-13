<template>
    <!-- Hero section -->
    <section id="me" class="grid w-full bg-cover min-h-screen dark:bg-white bg-d_black">
        <content class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 flex justify-around gap-10 flex-col lg:flex-row-reverse w-full">
            <img :src="publicConfig.baseURL + '/img/profile/testing.png'"
                class="right-40 max-w-sm object-cover rounded-lg h-150" />
            <div class="flex justify-center flex-col mb-30">
                <h1 class="text-3xl font-semibold">Full stack Laravel developer</h1>
                <div class="text-6xl font-bold mt-5">
                    <p>Hi I'm Amirzan</p>
                    <p class="mt-1 ">Fikri From Indonesia</p>
                </div>
            </div>
        </content>
    </section>
    <!-- end hero section -->
    <!--  About -->
    <section id="about" class="relative left-1/2 -translate-x-1/2 flex justify-evenly mt-20">
        <div class="image h-150 w-100 bg-gray-600 rounded-3xl flex items-end">
            <img :src="publicConfig.baseURL + '/img/profile/testing.png'"
            class="relative left-2/4 -translate-x-2/4 bottom-0 max-w-sm object-cover rounded-lg h-3/4"/>
        </div>
        <div class="content  w-2/3 flex flex-col text-white cursor-default">
            <span class="text-6xl">About Me</span>
            <span class="mt-7 text-2xl">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis, et. Consequatur molestias in ducimus tempore dolore. Molestias earum molestiae nesciunt. Nemo dolore deserunt aperiam sapiente maxime unde ut saepe quaerat.
            </span>
            <ul class="text-2xl mt-5 text-white flex flex-row gap-7">
                <li class="relative before:absolute before:-bottom-2 before:w-0 before:bg-red-500 dark:before:bg-d_pa_1 before:h-0.75 cursor-pointer before:transition-all before:duration-400 ease-in-out hover:before:w-full">Skill</li>
                <li class="relative before:absolute before:-bottom-2 before:w-0 before:bg-red-500 dark:before:bg-d_pa_1 before:h-0.75 cursor-pointer before:transition-all before:duration-400 ease-in-out hover:before:w-full">Experience</li>
                <li class="relative before:absolute before:-bottom-2 before:w-0 before:bg-red-500 dark:before:bg-d_pa_1 before:h-0.75 cursor-pointer before:transition-all before:duration-400 ease-in-out hover:before:w-full">Education</li>
            </ul>
            <div class="content mt-4 w-auto h-100  ">
                <div class="skills">
                    <div class="menu text-2xl text-red-400">Web Development</div>
                    <div class="submenu text-2xl">
                        Building 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about -->
    <!-- service -->
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
    <!-- end service -->
    <!-- project -->
    <section id="project" class="mt-50 bg-purple-400 flex flex-col">
        <div class="flex relative left-1/2 -translate-x-1/2 justify-between items-center" style="width:90%">
            <span class="text-6xl relative">Projects</span>
            <NuxtLink to="/project" class="text-2xl">See all</NuxtLink>
        </div>
        <ul class="relative bg-green-500 left-1/2 -translate-x-1/2 flex mt-5 mb-10 gap-5 flex-wrap" style="width: 90%;">
            <li class="flex-1 bg-red-500 list-none rounded-xl flex">
                <NuxtLink to="/" class="mb-2">
                    <img :src="publicConfig.baseURL + '/img/project/testing/1.jpg'" alt="" class="relative left-1/2 -translate-x-1/2 object-cover rounded-lg mt-3" style="width:90%;">
                    <h3 class="relative left-5 mt-4 text-xl font-semibold">EduAksi</h3>
                    <span class="relative left-5 mt-5 mb-5">Team Project</span>
                </NuxtLink>
                <div class="loadingg absolute">
                    <div/>
                    <h3/>
                    <span/>
                </div>
            </li>
            <li class="flex-1 bg-red-500 list-none rounded-xl flex">
                <NuxtLink to="/" class="mb-2">
                    <img :src="publicConfig.baseURL + '/img/project/testing/2.jpg'" alt="" class="relative left-1/2 -translate-x-1/2 object-cover rounded-lg mt-3" style="width:90%;">
                    <h3 class="relative left-5 mt-4 text-xl font-semibold">File-sharing</h3>
                    <span class="relative left-5 mt-5 mb-5">Self Project</span>
                </NuxtLink>
                <div class="loadingg absolute">
                    <div/>
                    <h3/>
                    <span/>
                </div>
            </li>
            <li class="flex-1 bg-red-500 list-none rounded-xl flex">
                <NuxtLink to="/" class="mb-2">
                    <img :src="publicConfig.baseURL + '/img/project/testing/3.png'" alt="" class="relative left-1/2 -translate-x-1/2 object-cover rounded-lg mt-3" style="width:90%;">
                    <h3 class="relative left-5 mt-4 text-xl font-semibold">Smarttrashku</h3>
                    <span class="relative left-5 mt-5 mb-5">Team Project</span>
                </NuxtLink>
                <div class="loadingg absolute">
                    <div/>
                    <h3/>
                    <span/>
                </div>
            </li>
        </ul>
    </section>
    <!-- end project -->
    <!-- contact -->
    <section id="contact" class="mt-20 bg-purple-400">
        <div class="relative bg-blue-5 w-5/6 left-1/2 -translate-x-1/2">
            <span class="text-3xl font-semibold relative left-1/2 -translate-x-1/2 inline-block mt-5">Contact Me</span>
            <form class="flex gap-1 flex-col mt-5">
                <div class="flex gap-5 justify-around">
                    <div class="flex flex-col flex-1">
                        <label for="" class="relative left-2 text-lg">First Name</label>
                        <input type="text" class="rounded-lg border-3 focus:outline-none pl-1">
                    </div>
                    <div class="flex flex-col flex-1">
                        <label for="" class="relative left-2 text-lg">Last Name</label>
                        <input type="text" class="rounded-lg border-3 focus:outline-none pl-1">
                    </div>
                </div>
                <div class="flex flex-col">
                    <label for="" class="relative left-2 text-lg">Email</label>
                    <input type="text" class="rounded-lg border-3 focus:outline-none pl-1">
                </div>
                <div class="flex flex-col">
                    <label for="" class="relative left-2 text-lg">Message</label>
                    <textarea class="rounded-lg border-3 focus:outline-none pl-1 resize-none h-30"></textarea>
                </div>
                <button class="bg-red-500 w-30 h-10 rounded-lg mt-3 mb-5 ml-auto text-xl font-normal text-white">Send </button>
            </form>
        </div>
    </section>
    <!-- end contact -->
</template>
<style>
    html{
        scroll-behavior: smooth;
        scroll-padding: 10rem;
    }
    @keyframes custom-animation {
    0%, 100% {
        top: 8px;
        height: 64px;
    }
    50% {
        top: 24px;
        height: 32px;
    }
    }

    .custom-animation {
    animation: custom-animation 1.2s cubic-bezier(0, 1, 0.5, 1) infinite;
    }

    .custom-animation-delay-long {
    animation-delay: -0.24s;
    }

    .custom-animation-delay-short {
    animation-delay: -0.12s;
    }
</style>
<script setup>
import axios from 'axios';
const publicConfig = useRuntimeConfig().public;
definePageMeta({
    layout: 'home',
});
useAsyncData(async () => {
    const res = await axios.get(publicConfig.baseURL + '/', {
        headers: {
            'Accept': 'application/json',
        }
    });
    local.fetchedSelfProject = res.data.self_project;
    local.fetchedTeamProject = res.data.team_project;
});
const local = reactive({
    fetchedSelfProject: null,
    fetchedTeamProject: null,
});
watch(() => local.fetchedSelfProject, () => {
}, { immediate:true });
watch(() => local.fetchedTeamProject, () => {
}, { immediate:true });
</script>