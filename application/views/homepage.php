<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Navigation -->
<nav class="sidebar text-white" id="sideNav">
    <div class="text-center mb-4">
        <div class="position-relative d-inline-block">
            <div class="rounded-circle border border-4 border-primary mx-auto mb-3" style="width: 140px; height: 140px; overflow: hidden; background: #222;">
                <img src="assets/profile.jpg" alt="Profile Picture" class="img-fluid rounded-circle" onerror="this.src='https://via.placeholder.com/140?text=Profile+Picture'">
            </div>
        </div>
        <h5 class="text-white mb-0 fw-bold">ALFA YULASWARA</h5>
        <small class="text-white">Fullstack Developer</small>
    </div>
    <ul class="nav flex-column mt-2">
        <li class="nav-item"><a class="nav-link active" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
        <li class="nav-item"><a class="nav-link" href="#education">Education</a></li>
        <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
        <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
    </ul>
</nav>

<!-- Page Content -->
<div class="main-content">

    <!-- About Section -->
    <section class="resume-section" id="about">
        <div class="resume-section-content mb-1">
            <div class="badge bg-primary px-3 py-2 mb-3 rounded-pill" style="letter-spacing: 2px;">AVAILABLE FOR HIRE</div>
            <h1 class="mb-0">
                Alfa Nada <span class="text-primary">Yulaswara</span>
            </h1>
            <div class="subheading mb-4 fs-3 opacity-75">
                S.Kom · Informatics Graduate
            </div>
            <p class="lead mb-5"><strong>
                    Informatics graduate with hands-on experience in Fullstack Development and AI integration (GPA: 3.47).
                    Passionate about building scalable applications and leveraging AI technologies. Experienced in server-side logic,
                    responsive UI design, and bridging complex systems with user-friendly interfaces.</strong>
            </p>
            <div class="social-icons mb-5">
                <a class="social-icon" href="https://github.com/alfangopi" target="_blank"><i class="fab fa-github"></i></a>
                <a class="social-icon" href="https://wa.me/6281234567890" target="_blank"><i class="fab fa-whatsapp"></i></a>
                <a class="social-icon" href="mailto:alfayulaswara@gmail.com"><i class="fas fa-envelope"></i></a>
            </div>
            <a href="#projects" class="btn btn-primary btn-custom px-5 py-3 ">View My Work <i class="fas fa-arrow-right ms-2 "></i></a>
        </div>
    </section>

    <hr class="m-0">

    <!-- Experience -->
    <section class="resume-section" id="experience">
        <div class="resume-section-content">
            <h2 class="mb-5">Experience</h2>

            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0 h4">Fullstack Website Developer</h3>
                    <div class="subheading mb-3 fs-5">Local Government (Pemda)</div>
                    <p>Designed database architectures and implemented server-side logic using CodeIgniter. Developed responsive and intuitive User Interfaces to ensure high accessibility for public users.</p>
                </div>
                <div class="flex-shrink-0"><span class="text-primary fw-bold">Dec 2024 - Mar 2025</span></div>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0 h4">Assistant Lecturer of Intro to AI</h3>
                    <div class="subheading mb-3 fs-5">Universitas Atma Jaya Yogyakarta</div>
                    <ul>
                        <li>Teaching basic concepts of Artificial Intelligence and its applications.</li>
                        <li>Guided students in Python-based AI project implementation.</li>
                        <li>Curated curriculum materials to bridge theoretical concepts with practical coding skills.</li>
                    </ul>
                </div>
                <div class="flex-shrink-0"><span class="text-primary fw-bold">Jul 2023 - Dec 2023</span></div>
            </div>
        </div>
    </section>

    <hr class="m-0">

    <!-- Education -->
    <section class="resume-section" id="education">
        <div class="resume-section-content">
            <h2 class="mb-5">Education</h2>
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0 h4">Universitas Atma Jaya Yogyakarta</h3>
                    <div class="subheading mb-2 fs-5">Bachelor of Informatics</div>
                    <p class="mb-0 text-muted">Major in Web Development & AI Implementation</p>
                    <p class="fw-bold">GPA: 3.47 / 4.00</p>
                </div>
                <div class="flex-shrink-0"><span class="text-primary fw-bold">2021 - 2025</span></div>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between">
                <div class="flex-grow-1">
                    <h3 class="mb-0 h4">SMA Negeri 7 Purworejo</h3>
                    <div class="subheading mb-3 fs-5">High School Graduate</div>
                </div>
                <div class="flex-shrink-0"><span class="text-primary fw-bold">2018 - 2021</span></div>
            </div>
        </div>
    </section>

    <hr class="m-0">

    <!-- Projects -->
    <section class="resume-section visible" id="projects">
        <div class="resume-section-content">
            <h2 class="mb-5">Featured Projects</h2>

            <!-- Project Card 1: Thesis -->
            <div class="project-card mb-5">
                <div class="row g-0">
                    <div class="col-12 col-lg-6">
                        <div id="carouselThesis" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/project1/1.png" alt="Thesis Project" class="d-block w-100" >
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/project1/2.png" alt="Thesis Project" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/project1/3.png" alt="Thesis Project" class="d-block w-100" >
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/project1/4.png" alt="Thesis Project" class="d-block w-100" >
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselThesis" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselThesis" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="p-4">
                            <h3 class="h4">AI-Driven Letter Classification</h3>
                            <div class="text-primary fw-bold mb-3">Thesis Project</div>
                            <p>Developed a specialized system to automate official letter code classification using the <strong>OpenAI API</strong>. Built with CodeIgniter, bridged with a Python Flask API, and utilized Zero-Shot Prompting.</p>
                            <div class="d-flex flex-wrap mb-4">
                                <span class="badge-tech">CodeIgniter</span>
                                <span class="badge-tech">Python Flask</span>
                                <span class="badge-tech">OpenAI API</span>
                                <span class="badge-tech">MySQL</span>
                            </div>
                            <a href="https://klasifikasikode.my.id" target="_blank" class="btn btn-sm btn-outline-primary px-4 rounded-pill mb-1"><i class="fas fa-external-link-alt me-1"></i>Visit Link</a>
                            <a href="assets/jurnal.pdf" target="_blank" class="btn btn-sm btn-outline-primary px-4 rounded-pill mb-1"><i class="fas fa-file-alt me-1"></i>Journal</a>
                            <a href="https://github.com/AlfaNgopi/klasifikator" target="_blank" class="btn btn-sm btn-outline-primary px-4 rounded-pill"><i class="fab fa-github me-1"></i>Github Repository</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Project Card 2: E-commerce -->
            <div class="project-card mb-5">
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2">
                        <div id="carouselEcom" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/project2/1.png" alt="E-commerce" class="d-block w-100" >
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/project2/2.png" alt="E-commerce" class="d-block w-100" >
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/project2/3.png" alt="E-commerce" class="d-block w-100" >
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/project2/4.png" alt="E-commerce" class="d-block w-100" >
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselEcom" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselEcom" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-4">
                            <h3 class="h4">Fullstack E-Commerce Platform</h3>
                            <div class="text-primary fw-bold mb-3">Group Project</div>
                            <p>Built a robust online marketplace with product management, secure authentication, and payment gateway simulation. Focused on responsive design and database optimization.</p>
                            <div class="d-flex flex-wrap mb-4">
                                <span class="badge-tech">Laravel</span>
                                <span class="badge-tech">JavaScript</span>
                                <span class="badge-tech">Bootstrap</span>
                                <span class="badge-tech">MySQL</span>
                            </div>
                            <a href="https://p3l-production.up.railway.app/" target="_blank" class="btn btn-sm btn-outline-primary px-4 rounded-pill"><i class="fas fa-external-link-alt me-1"></i>Demo</a>
                            <a href="https://github.com/AlfaNgopi/P3l" target="_blank" class="btn btn-sm btn-outline-primary px-4 rounded-pill"><i class="fab fa-github me-1"></i>Github Repository</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project Card 3: Pemda Web -->
            <div class="project-card mb-5">
                <div class="row g-0">
                    <div class="col-lg-6">
                        <div id="carouselPemda" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/project3/1.png" alt="Pemda Application" class="d-block w-100" >
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/project3/2.png" alt="Pemda Application" class="d-block w-100" >
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/project3/3.png" alt="Pemda Application" class="d-block w-100" >
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/project3/4.png" alt="Pemda Application" class="d-block w-100" >
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselPemda" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselPemda" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-4">
                            <h3 class="h4">Fullstack Web Application</h3>
                            <div class="text-primary fw-bold mb-3">Local Government (Pemda)</div>
                            <p>Developing a comprehensive internal system for the news of regional inspectorate. Focused on UI design, accessibility, and multi-level user access control.</p>
                            <div class="d-flex flex-wrap mb-4">
                                <span class="badge-tech">Code Igniter</span>
                                <span class="badge-tech">API Integration</span>
                                <span class="badge-tech">Bootstrap</span>
                                <span class="badge-tech">PostgreSQL</span>
                            </div>
                            <a href="https://inspektorat.purworejokab.go.id/baru/" target="_blank" class="btn btn-sm btn-outline-primary px-4 rounded-pill"><i class="fas fa-external-link-alt me-1"></i>Visit Link</a>
                            <a href="https://github.com/AlfaNgopi/uiinspektorat" target="_blank" class="btn btn-sm btn-outline-primary px-4 rounded-pill"><i class="fab fa-github me-1"></i>Github Repository</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project Card 4: Mobile App -->
            <div class="project-card mb-5">
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2">
                        <div id="carouselMobile" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/project4/1.png" alt="Mobile Project" class="d-block w-100" >
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/project4/2.png" alt="Mobile Project" class="d-block w-100" >
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/project4/3.png" alt="Mobile Project" class="d-block w-100" >
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/project4/4.png" alt="Mobile Project" class="d-block w-100" >
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselMobile" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselMobile" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-4">
                            <h3 class="h4">Fullstack Mobile App</h3>
                            <div class="text-primary fw-bold mb-3">Independent Project</div>
                            <p>A cross-platform mobile application built to facilitate community services during field study (KKN). Includes real-time data sync and offline capabilities.</p>
                            <div class="d-flex flex-wrap mb-4">
                                <span class="badge-tech">Flutter</span>
                                <span class="badge-tech">Dart</span>
                                <span class="badge-tech">Firebase</span>
                                <span class="badge-tech">NoSQL</span>
                            </div>
                            <a href="https://github.com/AlfaNgopi/appkkn" target="_blank" class="btn btn-sm btn-outline-primary px-4 rounded-pill"><i class="fab fa-github me-1"></i>Github Repository</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <hr class="m-0">

    <!-- Skills -->
    <section class="resume-section" id="skills">
        <div class="resume-section-content">
            <h2 class="mb-5">Skills</h2>
            <div class="subheading mb-3 fs-5">Programming Languages</div>
            <ul class="list-inline mb-5" style="font-size: 3rem;">
                <li class="list-inline-item text-primary" title="PHP"><i class="fab fa-php"></i></li>
                <li class="list-inline-item text-primary" title="Python"><i class="fab fa-python"></i></li>
                <li class="list-inline-item text-primary" title="JavaScript"><i class="fab fa-js-square"></i></li>
                <li class="list-inline-item text-primary" title="Java"><i class="fab fa-java"></i></li>
                <li class="list-inline-item text-primary" title="HTML5"><i class="fab fa-html5"></i></li>
                <li class="list-inline-item text-primary" title="CSS3"><i class="fab fa-css3-alt"></i></li>
            </ul>

            <div class="row">
                <div class="col-md-6">
                    <div class="subheading mb-3 fs-5">Frameworks & Platforms</div>
                    <ul class="fa-ul mb-0">
                        <li><span class="fa-li text-primary"><i class="fas fa-check"></i></span> Laravel & CodeIgniter</li>
                        <li><span class="fa-li text-primary"><i class="fas fa-check"></i></span> Flutter & Dart (Android)</li>
                        <li><span class="fa-li text-primary"><i class="fas fa-check"></i></span> NodeJS & Express</li>
                        <li><span class="fa-li text-primary"><i class="fas fa-check"></i></span> Python Flask</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="subheading mb-3 fs-5">Tools & AI</div>
                    <ul class="fa-ul mb-0">
                        <li><span class="fa-li text-primary"><i class="fas fa-check"></i></span> OpenAI API & Prompt Engineering</li>
                        <li><span class="fa-li text-primary"><i class="fas fa-check"></i></span> Firebase & Cloud Hosting</li>
                        <li><span class="fa-li text-primary"><i class="fas fa-check"></i></span> SQL (MySQL, PostgreSQL)</li>
                        <li><span class="fa-li text-primary"><i class="fas fa-check"></i></span> Git & Version Control</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        // Scroll Progress
        window.addEventListener('scroll', () => {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            document.getElementById("scroll-progress").style.width = scrolled + "%";
        });

        // Intersection Observer for Section Animations
        const sections = document.querySelectorAll("section");
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");

                    // Update Nav Link
                    const id = entry.target.getAttribute("id");
                    document.querySelectorAll(".nav-link").forEach(link => {
                        link.classList.toggle("active", link.getAttribute("href") === `#${id}`);
                    });
                }
            });
        }, {
            threshold: 0.2
        });

        sections.forEach(s => observer.observe(s));
    });
</script>