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
            {{--  --}}
        </section>
        {{-- end about --}}

        {{-- Services --}}
        <section id="service" class="mt-50">
            <span class="text-6xl text-white relative left-20">My Tech Stack</span>
            <div class="w-auto h-100 bg-yellow-300 flex flex-row justify-around mt-10">
                <div class="card bg-red-400 w-1/4">
                </div>
                <div class="card bg-red-400 w-1/4"></div>
                <div class="card bg-red-400 w-1/4"></div>
            </div>
            {{--  --}}
        </section>
        {{-- end services --}}

        {{-- Projects --}}
        <section id="project" class="mt-30">
            <div class="w-auto h-100 bg-yellow-300"></div>
            {{--  --}}
        </section>
        {{-- end projects --}}

        {{-- Contact --}}
        {{-- <section id="contact">
            <div class="hero min-h-screen bg-base-200">
                <div class="hero-content flex-col lg:flex-row-reverse">
                  <div class="text-center lg:text-left">
                    <h1 class="text-5xl font-bold">Login now!</h1>
                    <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                  </div>
                  <div class="card shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
                    <form class="card-body">
                      <div class="form-control">
                        <label class="label">
                          <span class="label-text">Email</span>
                        </label>
                        <input type="email" placeholder="email" class="input input-bordered" required />
                      </div>
                      <div class="form-control">
                        <label class="label">
                          <span class="label-text">Password</span>
                        </label>
                        <input type="password" placeholder="password" class="input input-bordered" required />
                        <label class="label">
                          <a href="#" class="label-text-alt link link-hover">Forgot password?</a>
                        </label>
                      </div>
                      <div class="form-control mt-6">
                        <button class="btn btn-primary">Login</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div> --}}
            {{--  --}}
        {{-- </section> --}}
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