<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Navigation -->
    <nav class="sidebar bg-dark text-white p-4" id="sideNav">
        <div class="text-center d-none d-lg-block mb-4">
            <div class="rounded-circle border border-4 border-primary mx-auto mb-3" style="width: 160px; height: 160px; background: #444; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-user-astronaut fa-4x text-white-50"></i>
            </div>
            <h4 class="text-white mb-0">Alfa Nada</h4>
        </div>
        <ul class="nav nav-pills flex-column w-100 mt-2">
            <li class="nav-item"><a class="nav-link active" href="#about">About</a></li>
            <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
            <li class="nav-item"><a class="nav-link" href="#education">Education</a></li>
            <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
            <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
        </ul>
    </nav>

    <!-- Page Content -->
    <div class="main-content">
        
        <!-- About -->
        <section class="resume-section" id="about">
            <div class="resume-section-content">
                <h1 class="mb-0">
                    Alfa Nada <span class="text-primary">Yulaswara</span>
                </h1>
                <div class="subheading mb-4 fs-3">
                    S.Kom · Informatics Graduate · Fullstack Developer
                </div>
                <div class="subheading mb-5">
                    Yogyakarta, Indonesia · +6289601469880 ·
                    <a href="mailto:alfayulaswara@gmail.com" class="text-primary">alfayulaswara@gmail.com</a>
                </div>
                <p class="lead mb-5">
                    Informatics graduate with hands-on experience in <strong>Fullstack Development</strong> and <strong>AI integration</strong> (GPA: 3.47). 
                    Passionate about building scalable applications and leveraging AI technologies. Experienced in server-side logic, 
                    responsive UI design, and bridging complex systems with user-friendly interfaces.
                </p>
                <div class="social-icons">
                    <a class="social-icon" href="https://www.alfayulaswara.my.id" target="_blank"><i class="fas fa-globe"></i></a>
                    <a class="social-icon" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="social-icon" href="#"><i class="fab fa-github"></i></a>
                    <a class="social-icon" href="https://wa.me/6289601469880"><i class="fab fa-whatsapp"></i></a>
                </div>
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
        <section class="resume-section" id="projects">
            <div class="resume-section-content">
                <h2 class="mb-5">Featured Projects</h2>

                <!-- Project Card 1: Thesis -->
                <div class="project-card mb-5">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div id="carouselThesis" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?php echo base_url("assets/project1/1.png"); ?>" alt="Thesis Project" class="d-block w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo base_url("assets/project1/2.png"); ?>" alt="Thesis Project" class="d-block w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo base_url("assets/project1/3.png"); ?>" alt="Thesis Project" class="d-block w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo base_url("assets/project1/4.png"); ?>" alt="Thesis Project" class="d-block w-100">
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
                        <div class="col-lg-6">
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
                                <a href="#" class="btn btn-sm btn-primary px-4 rounded-pill">View Case Study</a>
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
                                        <div class="bg-info text-white d-flex align-items-center justify-content-center" style="height: 350px;">
                                            <div class="text-center">
                                                <i class="fas fa-shopping-cart fa-4x mb-3"></i>
                                                <h5>Storefront Interface</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="bg-dark text-white d-flex align-items-center justify-content-center" style="height: 350px;">
                                            <div class="text-center">
                                                <i class="fas fa-chart-line fa-4x mb-3 text-warning"></i>
                                                <h5>Admin Dashboard</h5>
                                            </div>
                                        </div>
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
                                <div class="text-primary fw-bold mb-3">Independent Project</div>
                                <p>Built a robust online marketplace with product management, secure authentication, and payment gateway simulation. Focused on responsive design and database optimization.</p>
                                <div class="d-flex flex-wrap mb-4">
                                    <span class="badge-tech">Laravel</span>
                                    <span class="badge-tech">JavaScript</span>
                                    <span class="badge-tech">Bootstrap</span>
                                    <span class="badge-tech">PostgreSQL</span>
                                </div>
                                <a href="#" class="btn btn-sm btn-outline-primary px-4 rounded-pill">Github Demo</a>
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

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Scrollspy & Active Link Handling
        document.addEventListener("DOMContentLoaded", () => {
            const sections = document.querySelectorAll("section");
            const navLinks = document.querySelectorAll(".nav-link");

            const observerOptions = {
                root: null,
                rootMargin: "0px",
                threshold: 0.4
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        navLinks.forEach(link => link.classList.remove("active"));
                        const id = entry.target.getAttribute("id");
                        const activeLink = document.querySelector(`.nav-link[href="#${id}"]`);
                        if (activeLink) {
                            activeLink.classList.add("active");
                        }
                    }
                });
            }, observerOptions);

            sections.forEach(section => observer.observe(section));

            // Smooth Scrolling for navigation
            navLinks.forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    const targetId = link.getAttribute('href');
                    document.querySelector(targetId).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        });
    </script>