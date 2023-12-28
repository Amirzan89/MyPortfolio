<?php 
if(app()->environment('local')){
    $tPath = '';
}else{
    $tPath = '/public/';
}
?>
<!DOCTYPE html>
<html lang="en" class="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <style>
        html{
            scroll-behavior: smooth;
            scroll-padding: 10rem;
        }
    </style>
</head>
<body>
    {{-- header --}}
    <header class="navbar dark:bg-l_pa_1 bg-d_black" style="user-select: none;">
        <div class="ml-20 flex-1 mx-4 text-l_pa_1 sm:text-lg md:text-3xl sm:font-thin xl:font-medium hidden md:block cursor-default">
            Amirzan
        </div>
        <nav class="flex-none">
            <ul class="flex flex-column flex-wrap text-l_pa_1 sm:text-sm md:text-lg sm:font-thin xl:font-medium">
                <li class="relative group m-4 cursor-pointer">
                    <a href="#home" class="before:absolute before:block before:-bottom-2 before:w-0 before:bg-red-500 dark:before:bg-d_pa_1 before:h-0.75 before:transition-all before:duration-400 ease-in-out hover:before:w-full">Home</a>
                </li>
                <li class="relative group m-4 cursor-pointer">
                    <a href="#about" class="before:absolute before:block before:-bottom-2 before:w-0 before:bg-red-500 dark:before:bg-d_pa_1 before:h-0.75 before:transition-all before:duration-400 ease-in-out hover:before:w-full">About</a>
                </li>
                <li class="relative group m-4 cursor-pointer">
                    <a href="#service" class="before:absolute before:block before:-bottom-2 before:w-0 before:bg-red-500 dark:before:bg-d_pa_1 before:h-0.75 before:transition-all before:duration-400 ease-in-out hover:before:w-full">Services</a>
                </li>
                <li class="relative group m-4 cursor-pointer">
                    <a href="#project" class="before:absolute before:block before:-bottom-2 before:w-0 before:bg-red-500 dark:before:bg-d_pa_1 before:h-0.75 before:transition-all before:duration-400 ease-in-out hover:before:w-full">Projects</a>
                </li>
                <li class="relative group m-4 cursor-pointer">
                    <a href="#contact" class="before:absolute before:block before:-bottom-2 before:w-0 before:bg-red-500 dark:before:bg-d_pa_1 before:h-0.75 before:transition-all before:duration-400 ease-in-out hover:before:w-full">Contact</a>
                </li>
            </ul>
        </nav>
        <div class="night-mode relative cursor-pointer ml-6 mr-5" onclick="changeMode()">
            <span class="hidden" id="darkIcon">
                <i class="fa-regular fa-moon text-3xl" style="color: #f5efe3;""></i>
            </span>
            <span id="lightIcon">
                <i class="fa-regular fa-sun text-3xl" style="color: #f5efe3;"></i>
            </span>
        </div>
    </header>
    {{-- end header --}}

    {{-- Hero section --}}
    <section class="grid w-full bg-cover min-h-screen dark:bg-white bg-d_black">
        <content class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 flex justify-around gap-10 flex-col lg:flex-row-reverse w-full">
            <img src="{{ asset($tPath.'/img/profile/testing.png') }}"
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
    {{-- end hero section --}}

    {{-- main --}}
    <main class="absolute dark:bg-l_pa_1 bg-black w-auto">
        {{-- About --}}
        <section id="about" class="relative left-1/2 -translate-x-1/2 flex justify-evenly mt-20">
            <div class="image h-150 w-100 bg-gray-600 rounded-3xl flex items-end">
                <img src="{{ asset($tPath.'/img/profile/testing.png') }}"
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
        {{-- end about --}}

        {{-- Services --}}
        <section id="service" class="mt-50 bb-50 text-white">
            <span class="text-6xl relative left-20">My Tech Stack</span>
            <div class="w-auto h-100 flex flex-row justify-around mt-10">
                {{-- <div class="card bg-d_black w-1/4">
                    <img src="{{ asset($tPath.'/img/icon/laravel.png') }}" class=" max-w-sm object-cover rounded-lg w-25 h-25 relative left-2/4 -translate-x-2/4 mt-10" />
                    <span class="text-4xl relative left-5 mt-5 font-bold">Laravel</span>
                    <span class="text-xl relative left-5 mt-5"> Laravel is an elegant and expressive framework that simplifies the development process, allowing for the creation of feature-rich and maintainable applications.</span>
                    <span>I specialize in building robust and scalable web applications using the Laravel PHP framework. Laravel is an elegant and expressive framework that simplifies the development process, allowing for the creation of feature-rich and maintainable applications. With its intuitive syntax, powerful tools, and a vibrant ecosystem, I leverage Laravel to deliver high-performance solutions that meet the unique needs of clients. From backend development to crafting RESTful APIs and integrating modern frontend technologies, I bring Laravel's versatility to create seamless and efficient web experiences.</span>
                    <span class="hover:text-red-500">
                    <a href="https://laravel.com" class="">
                        Learn More</a>
                    </span>
                </div>
                <div class="card bg-d_black w-1/4">
                    <img src="{{ asset($tPath.'/img/icon/tailwind.png') }}" class=" max-w-sm object-cover rounded-lg w-30 h-30 relative left-10 mt-10" />
                    <span>Tainwind CSS</span>
                    <span>Tailwind is a utility-first CSS framework that allows me to build sleek and responsive designs with speed and precision.</span>
                    <span>I specialize in crafting modern and visually appealing user interfaces with Tailwind CSS. Tailwind is a utility-first CSS framework that allows me to build sleek and responsive designs with speed and precision. By leveraging its extensive set of pre-designed utility classes, I create seamless and aesthetically pleasing user interfaces that not only look great but also adhere to best practices in web development. With Tailwind, I bring a fine balance of design and functionality to every project, ensuring a delightful user experience.</span>
                    <span class="hover:text-red-500">
                        <a href="https://tailwindcss.com">Learn more</a>
                    </span>
                </div>
                <div class="card bg-d_black w-1/4">
                    <img src="{{ asset($tPath.'/img/icon/vue.png') }}" class=" max-w-sm object-cover rounded-lg w-30 h-30 relative left-10 mt-10" />
                    <span>Vue JS</span>
                    <span>Vue.js is a progressive JavaScript framework that allows me to create seamless and responsive web applications with ease</span>
                    <span>I specialize in developing dynamic and interactive web applications using Vue.js. Vue.js is a progressive JavaScript framework that allows me to build seamless and responsive user interfaces with ease. With its reactive data binding and component-based architecture, I create modern and engaging front-end experiences. Whether it's building single-page applications or integrating dynamic features into existing projects, Vue.js empowers me to deliver efficient and user-centric solutions. I bring the power of Vue.js to enhance the interactivity and user experience of web applications.</span>
                    <span class="hover:text-red-500">
                        <a href="https://vuejs.org/">Learn more</a>
                    </span>
                </div>
            </div> --}}
            <div class="flex flex-wrap justify-around mt-10">
                <div class="card bg-d_black w-full md:w-1/2 lg:w-1/3 xl:w-1/4 p-6">
                    <div class=" w-50 h-50 mb-4 relative left-2/4 -translate-x-2/4 mt-4">
                        <img src="{{ asset($tPath.'/img/icon/laravel.png') }}" class="max-w-full object-cover rounded-lg" />
                    </div>
                    <div class="flex flex-col">
                        <span class="text-4xl font-bold mb-2">Laravel</span>
                        <span class="text-xl">Laravel is an elegant and expressive framework that simplifies the development process, allowing for the creation of feature-rich and maintainable applications.</span>
                        {{-- <span>I specialize in building robust and scalable web applications using the Laravel PHP framework. Laravel is an elegant and expressive framework that simplifies the development process, allowing for the creation of feature-rich and maintainable applications. With its intuitive syntax, powerful tools, and a vibrant ecosystem, I leverage Laravel to deliver high-performance solutions that meet the unique needs of clients. From backend development to crafting RESTful APIs and integrating modern frontend technologies, I bring Laravel's versatility to create seamless and efficient web experiences.</span> --}}
                        <span class="hover:text-red-500 block mt-4">
                            <a href="https://laravel.com">Learn More</a>
                        </span>
                    </div>
                </div>
                <div class="card bg-d_black w-full md:w-1/2 lg:w-1/3 xl:w-1/4 p-6">
                    <div class=" w-50 h-50 mb-4 relative left-2/4 -translate-x-2/4 mt-4">
                        <img src="{{ asset($tPath.'/img/icon/tailwind.svg') }}" class="max-w-full object-cover rounded-lg" />
                    </div>
                    <div class="flex flex-col">
                        <span class="text-4xl font-bold mb-2">Tailwind CSS</span>
                        <span class="text-xl">Tailwind is a utility-first CSS framework that allows me to build sleek and responsive designs with speed and precision.</span>
                        {{-- <span>I specialize in developing dynamic and interactive web applications using Vue.js. Vue.js is a progressive JavaScript framework that allows me to build seamless and responsive user interfaces with ease. With its reactive data binding and component-based architecture, I create modern and engaging front-end experiences. Whether it's building single-page applications or integrating dynamic features into existing projects, Vue.js empowers me to deliver efficient and user-centric solutions. I bring the power of Vue.js to enhance the interactivity and user experience of web applications.</span> --}}
                        <span class="hover:text-red-500 block mt-4">
                            <a href="https://tailwindcss.com">Learn More</a>
                        </span>
                    </div>
                </div>
                <div class="card bg-d_black w-full md:w-1/2 lg:w-1/3 xl:w-1/4 p-6">
                    <div class=" w-50 h-50 mb-4 relative left-2/4 -translate-x-2/4 mt-4">
                        <img src="{{ asset($tPath.'/img/icon/vue.png') }}" class="max-w-full object-cover rounded-lg" />
                    </div>
                    <div class="flex flex-col">
                        <span class="text-4xl font-bold mb-2">Vue JS</span>
                        <span class="text-xl">Vue.js is a progressive JavaScript framework that allows me to create seamless and responsive web applications with ease.</span>
                        {{-- <span>I specialize in developing dynamic and interactive web applications using Vue.js. Vue.js is a progressive JavaScript framework that allows me to build seamless and responsive user interfaces with ease. With its reactive data binding and component-based architecture, I create modern and engaging front-end experiences. Whether it's building single-page applications or integrating dynamic features into existing projects, Vue.js empowers me to deliver efficient and user-centric solutions. I bring the power of Vue.js to enhance the interactivity and user experience of web applications.</span> --}}
                        <span class="hover:text-red-500 block mt-4">
                            <a href="https://vuejs.org/">Learn More</a>
                        </span>
                    </div>
                </div>
            </div>
        </section>
        {{-- end services --}}

        {{-- Projects --}}
        <section id="project" class="mt-50">
            <span class="text-6xl relative left-20">Project</span>
            {{-- my project --}}
            <div class="w-auto min-h-200 flex flex-col mt-10 bg-yellow-400">
                <span class="text-black font-semibold text-4xl ml-20 mt-5">My project</span>
                <div class="flex flex-wrap justify-around mt-10">
                    <div class="card bg-d_black w-full md:w-1/2 lg:w-1/3 xl:w-1/4 p-6 mb-10">
                        <div class=" w-50 h-50 mb-4 relative left-2/4 -translate-x-2/4">
                            <img src="{{ asset($tPath.'/img/icon/laravel.png') }}" class="max-w-full object-cover rounded-lg" />
                        </div>
                        <div class="flex flex-col">
                            <span class="text-4xl font-bold mb-2">Laravel</span>
                            <span class="text-xl">Laravel is an elegant and expressive framework that simplifies the development process, allowing for the creation of feature-rich and maintainable applications.</span>
                            <span class="hover:text-red-500 block mt-4">
                                <a href="https://laravel.com">Learn More</a>
                            </span>
                        </div>
                    </div>
                    <div class="card bg-d_black w-full md:w-1/2 lg:w-1/3 xl:w-1/4 p-6 mb-10">
                        <div class=" w-50 h-50 mb-4 relative left-2/4 -translate-x-2/4">
                            <img src="{{ asset($tPath.'/img/icon/tailwind.svg') }}" class="max-w-full object-cover rounded-lg" />
                        </div>
                        <div class="flex flex-col">
                            <span class="text-4xl font-bold mb-2">Tailwind CSS</span>
                            <span class="text-xl">Tailwind is a utility-first CSS framework that allows me to build sleek and responsive designs with speed and precision.</span>
                            <span class="hover:text-red-500 block mt-4">
                                <a href="https://tailwindcss.com">Learn More</a>
                            </span>
                        </div>
                    </div>
                    <div class="card bg-d_black w-full md:w-1/2 lg:w-1/3 xl:w-1/4 p-6 mb-10">
                        <div class=" w-50 h-50 mb-4 relative left-2/4 -translate-x-2/4">
                            <img src="{{ asset($tPath.'/img/icon/vue.png') }}" class="max-w-full object-cover rounded-lg" />
                        </div>
                        <div class="flex flex-col">
                            <span class="text-4xl font-bold mb-2">Vue JS</span>
                            <span class="text-xl">Vue.js is a progressive JavaScript framework that allows me to create seamless and responsive web applications with ease.</span>
                            <span class="hover:text-red-500 block mt-4">
                                <a href="https://vuejs.org/">Learn More</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end project --}}
            {{-- team project --}}
            <div class="w-auto min-h-200 flex flex-col mt-10 bg-yellow-400">
                <span class="text-black font-semibold text-4xl ml-20 mt-5">My project</span>
                <div class="flex flex-wrap justify-around mt-10">
                    <div class="card bg-d_black w-full md:w-1/2 lg:w-1/3 xl:w-1/4 p-6 mb-10">
                        <div class=" w-50 h-50 mb-4 relative left-2/4 -translate-x-2/4">
                            <img src="{{ asset($tPath.'/img/icon/laravel.png') }}" class="max-w-full object-cover rounded-lg" />
                        </div>
                        <div class="flex flex-col">
                            <span class="text-4xl font-bold mb-2">Laravel</span>
                            <span class="text-xl">Laravel is an elegant and expressive framework that simplifies the development process, allowing for the creation of feature-rich and maintainable applications.</span>
                            <span class="hover:text-red-500 block mt-4">
                                <a href="https://laravel.com">Learn More</a>
                            </span>
                        </div>
                    </div>
                    <div class="card bg-d_black w-full md:w-1/2 lg:w-1/3 xl:w-1/4 p-6 mb-10">
                        <div class=" w-50 h-50 mb-4 relative left-2/4 -translate-x-2/4">
                            <img src="{{ asset($tPath.'/img/icon/tailwind.svg') }}" class="max-w-full object-cover rounded-lg" />
                        </div>
                        <div class="flex flex-col">
                            <span class="text-4xl font-bold mb-2">Tailwind CSS</span>
                            <span class="text-xl">Tailwind is a utility-first CSS framework that allows me to build sleek and responsive designs with speed and precision.</span>
                            <span class="hover:text-red-500 block mt-4">
                                <a href="https://tailwindcss.com">Learn More</a>
                            </span>
                        </div>
                    </div>
                    <div class="card bg-d_black w-full md:w-1/2 lg:w-1/3 xl:w-1/4 p-6 mb-10">
                        <div class=" w-50 h-50 mb-4 relative left-2/4 -translate-x-2/4">
                            <img src="{{ asset($tPath.'/img/icon/vue.png') }}" class="max-w-full object-cover rounded-lg" />
                        </div>
                        <div class="flex flex-col">
                            <span class="text-4xl font-bold mb-2">Vue JS</span>
                            <span class="text-xl">Vue.js is a progressive JavaScript framework that allows me to create seamless and responsive web applications with ease.</span>
                            <span class="hover:text-red-500 block mt-4">
                                <a href="https://vuejs.org/">Learn More</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end team project --}}
        </section>
        {{-- end projects --}}

        {{-- Contact --}}
        <section class="mt-50  w-full h-400 bg-d_black">
            <div id="contact" class="w-200 relative top-2/4 -translate-y-2/4 left-2/4 -translate-x-2/4 p-8 bg-white bg-opacity-30 backdrop-filter backdrop-blur-lg rounded-md"/>
        </section>
        {{-- end Contact --}}
    </main>
    {{-- end main --}}

    {{-- footer --}}
    <footer class="footer items-center p-4 bg-neutral text-neutral-content mt-100">
        <aside class="items-center grid-flow-col">
          <svg width="36" height="36" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" class="fill-current"><path d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z"></path></svg> 
          <p>Copyright © 2023 - All right reserved</p>
        </aside> 
        <nav class="grid-flow-col gap-4 md:place-self-center md:justify-self-end">
          <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg>
          </a>
          <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg></a>
          <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a>
        </nav>
      </footer>
    {{-- <footer class="footer p-10 bg-base-300 text-base-content">
        <nav>
            <header class="footer-title">Services</header>
            <a class="link link-hover">Branding</a>
            <a class="link link-hover">Design</a>
            <a class="link link-hover">Marketing</a>
            <a class="link link-hover">Advertisement</a>
        </nav>
        <nav>
            <header class="footer-title">Company</header>
            <a class="link link-hover">About us</a>
            <a class="link link-hover">Contact</a>
            <a class="link link-hover">Jobs</a>
            <a class="link link-hover">Press kit</a>
        </nav>
        <nav>
            <header class="footer-title">Social</header>
            <div class="grid grid-flow-col gap-4">
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z">
                        </path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z">
                        </path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z">
                        </path>
                    </svg></a>
            </div>
        </nav>
    </footer> --}}
    {{-- end footer --}}
    {{-- <script src="{{ asset($tPath.'/js/home.js') }}"></script> --}}
    {{-- <script src="{{ asset($tPath.'/js/darkMode.js') }}"></script> --}}
    {{-- <script src="https://unpkg.com/vue@next"></script> --}}
    {{-- <script>
        const app = Vue.createApp({});
        app.mount('#contact');
    </script> --}}
    @vite('resources/js/app.js')
</body>
</html>