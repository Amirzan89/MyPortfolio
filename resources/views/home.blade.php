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
        <section class="mt-50  w-full h-400 bg-black">
            <form class="relative bg--500 w-150 mx-auto h-2/4 top-2/4 -translate-y-2/4 flex flex-col gap-6 align-center" action="#" method="POST" id="contact">
                <span class="text-white text-5xl mx-auto">Contact Me !</span>
                <div class="mx-auto mt-3 w-full">
                    <input type="text" placeholder="Email Address" name="email" class="w-full h-14 rounded-xl pl-5 text-2xl input border-2 hover:border-blue-600 focus:outline-none focus:border-4 focus:border-blue-600">
                    <span style="display: " class="ml-3 mt-1">Email cannot be blank</span>
                </div>
                <div class="mx-auto w-full h-18 flex flex-row gap-5">
                    <div class="h-full">
                        <input type="text" placeholder="Full Name" name="name" class="w-full h-3/4 rounded-xl pl-4 input border-2 hover:border-blue-600 focus:outline-none focus:border-4 focus:border-blue-600">
                        <span style="display: inline-block" class="ml-3 mt-1">Email cannot be blank</span>
                    </div>
                    <div class="h-full">
                        <input type="text" placeholder="Subject" name="subject" class="w-full h-3/4 rounded-xl pl-4 input border-2 hover:border-blue-600 focus:outline-none focus:border-4 focus:border-blue-600">
                        <span style="display: inline-block" class="ml-3 mt-1">Email cannot be blank</span>
                    </div>
                </div>
                <div class="mx-auto w-full h-50">
                    <textarea name="message" cols="" rows="" class="w-full h-full pl-4 rounded-xl pt-3 input border-2 hover:border-blue-600 focus:outline-none focus:border-4 focus:border-blue-600" style="resize: none" placeholder="Your Message"></textarea>
                    <span class="be">Message cannot be blank</span>
                </div>
                <div class="mx-auto w-full mt-10">
                    <input type="submit" value="Send Message" class="w-1/3 h-10 bg-red-500 rounded-full relative left-2/4 -translate-x-2/4">
                </div>
            </form>
            
        </section>
        {{-- end Contact --}}
    </main>
    {{-- end main --}}

    {{-- footer --}}
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
    <script src="{{ asset($tPath.'/js/darkMode.js') }}"></script>
    <script>
        var about1 = document.getElementById('');
        var about2 = document.getElementById('');
        var about3 = document.getElementById('');
        var about4 = document.getElementById('');
    </script>
</body>
</html>