<?php 
$tPath = app()->environment('local') ? '' : '/public/';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>My CV | Amirzan Fikri</title>
        <link rel="icon" type="image/x-icon" href="/img/cv/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <link href="/css/cv.css" rel="stylesheet" />
        <style>
            .link-so{
                display: flex;
                gap:10px;
            }
            .link-so-item{
                display: inline-flex;
                align-items: center;
                justify-content: center;
                height: 3.5rem;
                width: 3.5rem;
                background-color: #495057;
                color: #fff;
                border-radius: 100%;
                font-size: 1.5rem;
            }
        </style>
    </head>
    <body id="page-top" style="background-color: #423848;">
        <script>
            var csrfToken = "{{ csrf_token() }}";
        </script>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="sideNav" style="background-color: #fbdf6a; opacity: 1.0;">
            <a class="navbar-brand js-scroll-trigger" href="#page-top" style="color:#2c1312">
                <span class="d-block d-lg-none">Amirzan Fikri</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="/img/cv/profile.png" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about" style="color:#2c1312">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience" style="color:#2c1312">Experience</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education" style="color:#2c1312">Education</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills" style="color:#2c1312">Skills</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests" style="color:#2c1312">Interests</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards" style="color:#2c1312">Awards</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0" style="color: #f5595a;">
                        Amirzan Fikri Prasetyo
                    </h1>
                    <div class="subheading mb-5" style="color: #fbdf6a">
                        JL. Abdurrahman Saleh No 149 Jombang ·
                        <a href="mailto:amirzanfikri@gmail.com" style="color: #fbdf6a">amirzanfikri5@gmail.com</a>
                    </div>
                    <p class="lead mb-5" style="color:#f8f7d4">Hello there i'm web developer on laravel and vue. I offer expertise in website development, responsive design, front end using tailwind css & vue js or back end using laravel. I am committed to delivering high-quality work and collaborating with clients to create effective and functional websites that meet their needs. With a strong attention to detail and a passion for learning and staying up-to-date with industry trends, I am excited to work with you on your web development projects.</p>
                    <div class="link-so">
                        <a class="link-so-item" href="https://www.linkedin.com/in/amirzan-fikri" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a class="link-so-item" href="https://github.com/Amirzan89" target="_blank"><i class="fab fa-github"></i></a>
                        <a class="link-so-item" href="https://www.instagram.com/amirzanfikri1" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a class="link-so-item" href="https://www.upwork.com/freelancers/~012f5a955a10478852?s=1110580755107926016" target="_blank"><img src="/img/cv/upwork.svg" alt="" style="width:25px; height: 25px;"></a>
                        <button class="" onclick="downloadCV()" style="width:230px; height:55px; border-radius:12px; background-color: #495057; font-size: 25px; color:white; display:flex; align-items:center; justify-content:center; gap: 10px; box-shadow: none; border: none;">
                            <i class="fa-solid fa-download"></i>
                            <span>Download CV</span>
                        </button>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5" style="color: #f5595a;">Experience</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0" style="color: #fbdf6a">Eduaksi App</h3>
                            <div class="subheading mb-3" style="color:#f8f7d4">Full stack web Engineer</div>
                            <p style="color:#f8f7d4">Project that create Web app for final assigment semester 4 in Poliktenik Negeri Jember.</p>
                        </div>
                        <div class="flex-shrink-0" style="color:#f8f7d4"><span style="color: #f5595a;">January 2024 - Present</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0" style="color: #fbdf6a">Nganjuk Elok</h3>
                            <div class="subheading mb-3" style="color:#f8f7d4">Back End Engineer</div>
                            <p style="color:#f8f7d4">Project that creating Web Apps in Poliktenik Negeri Jember for Nganjuk Goverment, Me as Back End Engineer also collaborating with other member teams</p>
                        </div>
                        <div class="flex-shrink-0" style="color:#f8f7d4"><span style="color: #f5595a;">September 2023 - December 2023</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0" style="color: #fbdf6a">PKM Smarttrashku</h3>
                            <div class="subheading mb-3" style="color:#f8f7d4">Back End Engineer</div>
                            <p style="color:#f8f7d4">Project that creating Web Apps and IOT for competition PKM in college, Me as Back End Engineer and also create IOT product.</p>
                        </div>
                        <div class="flex-shrink-0" style="color:#f8f7d4"><span style="color: #f5595a;">February 2023 - November 2023</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5" style="color: #f5595a;">Education</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0" style="color: #fbdf6a">SMKN 3 Jombang</h3>
                            <div class="subheading mb-3" style="color:#f8f7d4">High School</div>
                            <div style="color:#f8f7d4">Industrial Electronic engineering</div>
                        </div>
                        <div class="flex-shrink-0"><span style="color: #f5595a;">July 2019 - May 2022</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0" style="color: #fbdf6a">Politeknik Negeri Jember</h3>
                            <div class="subheading mb-3" style="color:#f8f7d4">Informatics Engineering</div>
                            <div style="color:#f8f7d4">Web Development</div>
                        </div>
                        <div class="flex-shrink-0"><span style="color: #f5595a;">August 2022 - Now</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5" style="color: #f5595a;">Skills</h2>
                    <div class="subheading mb-3" style="color: #fbdf6a">Programming Languages & Tools</div>
                    <ul class="list-inline dev-icons" style="color:#f8f7d4">
                        <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                        <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                        <li class="list-inline-item"><i class="fa-brands fa-php"></i></li>
                        <li class="list-inline-item"><i class="fa-brands fa-laravel"></i></li>
                        <li class="list-inline-item"><i class="fa-brands fa-js"></i></li>
                        <li class="list-inline-item"><i class="fa-brands fa-vuejs"></i></li>
                    </ul>
                    <div class="subheading mb-3" style="color: #fbdf6a">Workflow</div>
                    <ul class="fa-ul mb-0" style="color:#f8f7d4">
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Mobile-First, Responsive Design
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Cross Browser Testing & Debugging
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Cross Functional Teams
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Agile Development & Scrum
                        </li>
                    </ul>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5" style="color: #f5595a;">Interests</h2>
                    <p style="color:#f8f7d4">As a beginner web developer currently pursuing a degree, I offer expertise in website development, responsive design, and web programming languages such as HTML, CSS, and JavaScript. I am committed to delivering high-quality work and collaborating with clients to create effective and functional websites that meet their needs. With a strong attention to detail and a passion for learning and staying up-to-date with industry trends, I am excited to work with you on your web development projects.</p>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Awards-->
            <section class="resume-section" id="awards">
                <div class="resume-section-content">
                    <h2 class="mb-5" style="color: #f5595a;">Certifications</h2>
                    <ul class="fa-ul mb-0" style="color:#f8f7d4">
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            Python Course Skilvul Certificate
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            PKM Smarttrashku Certificate
                        </li>
                    </ul>
                </div>
            </section>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="/js/cv.js"></script>
        <script>
            const domain = window.location.protocol + '//' + window.location.hostname + ":" + window.location.port;
            function downloadCV(){
                var xhr = new XMLHttpRequest();
                //open the request
                xhr.open('POST', domain + "/download/cv")
                xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);
                xhr.responseType = 'blob';
                // send the form data
                xhr.send(JSON.stringify({}));
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            if (xhr.responseType === 'blob') {
                                var blob = xhr.response;
                                var contentDisposition = xhr.getResponseHeader('Content-Disposition');
                                var match = contentDisposition.match("filename=(.+\..+?)");
                                if (match) {
                                    var filename = match[1];
                                    var link = document.createElement('a');
                                    link.href = window.URL.createObjectURL(blob);
                                    link.download = filename;
                                    link.click();
                                } else {
                                    console.log('Invalid content-disposition header');
                                }
                            } else {
                                // Assuming JSON response
                                var jsonResponse = JSON.parse(xhr.responseText);
                            }
                        } else {
                            xhr.response.text().then(function (jsonText) {
                                showRedPopup(JSON.parse(jsonText));
                            });
                        }
                    }
                };
            }
        </script>
    </body>
</html>
