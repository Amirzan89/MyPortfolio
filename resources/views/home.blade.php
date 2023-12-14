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
    <header class="navbar dark:bg-l_nav bg-d_nav" style="user-select: none;">
        <span class="flex-1 mx-4 text-l_pa_1 sm:text-lg md:text-2xl sm:font-thin xl:font-medium hidden md:block cursor-default">
            Portfolio
        </span>
        <nav class="flex-none">
            <ul class="flex flex-column flex-wrap text-l_pa_1 sm:text-base md:text-xl sm:font-thin xl:font-medium">
                <li class="relative group m-4 cursor-pointer">
                    <a href="#home" class="before:absolute hover:before:block before:hidden before:-bottom-2 before:w-full before:bg-red-500 dark:before:bg-d_pa_1 before:h-0.75">Home</a>
                </li>
                <li class="relative group m-4 cursor-pointer">
                    <a href="#About" class="before:absolute hover:before:block before:hidden before:-bottom-2 before:w-full before:bg-red-500 dark:before:bg-d_pa_1 before:h-0.75">About</a>
                </li>
                <li class="relative group m-4 cursor-pointer">
                    <a href="#Project" class="before:absolute hover:before:block before:hidden before:-bottom-2 before:w-full before:bg-red-500 dark:before:bg-d_pa_1 before:h-0.75">Projects</a>
                </li>
                <li class="relative group m-4 cursor-pointer">
                    <a href="#Contact" class="before:absolute hover:before:block before:hidden before:-bottom-2 before:w-full before:bg-red-500 dark:before:bg-d_pa_1 before:h-0.75">Contact</a>
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
    <section class="hero min-h-screen dark:bg-l_pa_1 bg-d_pa_1">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <img src="{{ asset($tPath.'/js/darkMode.js') }}"
                class="absolute max-w-sm object-cover rounded-lg shadow-2xl w-100 h-100" />
            <div>
                <h1 class="text-5xl font-bold">Full stack Laravel developer</h1>
                <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi
                    exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                <button class="btn btn-primary">Get Started</button>
            </div>
        </div>
    </section>
    {{-- end hero section --}}

    {{-- main --}}
    <main class="absolute bg-">
        <section>
            {{--  --}}
        </section>
    </main>
    {{-- end main --}}
    <footer class="footer p-10 bg-base-300 text-base-content">
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
    </footer>
    <script src="{{ asset($tPath.'/js/darkMode.js') }}"></script>
</body>
</html>