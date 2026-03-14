<!DOCTYPE html>
<html lang="id">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Resume - Start Bootstrap Theme</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Saira+Extra+Condensed:wght@500;700&display=swap" rel="stylesheet">

    <!-- Core theme CSS (includes Bootstrap)-->

    <!-- handle sidebar styling -->
    <style>
        /* Custom CSS to define the width and behavior */
        .sidebar {
            height: 100vh;
            width: 280px;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100;
            overflow-y: auto;
        }

        .main-content {
            margin-left: 280px;
            /* Must match the sidebar width */
            padding: 20px;
        }

        /* Mobile Responsive: Stack them on small screens */
        @media (max-width: 768px) {
            .sidebar {
                position: relative;
                width: 100%;
                height: auto;
            }

            .main-content {
                margin-left: 0;
            }
        }
    </style>

    <!-- Custom CSS -->
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #0d6efd 0%, #0043a8 100%);
            --accent-color: #0d6efd;
            --sidebar-bg: #1a1d20;
            --section-padding: 6rem 2rem;
            --card-radius: 1.25rem;

        }
        /* for mobile devices */
        @media (max-width: 768px) {
            :root {
                --section-padding: 0;
                /* Or a smaller value like 10px */
            }
        }

        body {
            /* Layer 1: The Texture Image | Layer 2: The Color Gradient */
            background-color: #e4e4e4;
            /* background-color: #fffcfc; */
            background-image: url("https://www.transparenttextures.com/patterns/always-grey.png");
            background-repeat: repeat;
            /* Centering the background and allowing it to "overhang" the edges */
            background-position: calc(50% + var(--move-x)) calc(50% + var(--move-y));
            transition: background-position 0.2s cubic-bezier(0.23, 1, 0.32, 1);
        }

        /* Animated Ambient background glow */




        /* Scroll Progress Bar */
        #scroll-progress {
            position: fixed;
            top: 0;
            left: 0;
            height: 4px;
            background: var(--primary-gradient);
            z-index: 2000;
            width: 0%;
            transition: width 0.1s ease-out;
        }

        h1,
        h2,
        h3,
        .subheading {
            font-family: 'Saira Extra Condensed', serif;
            text-transform: uppercase;
            font-weight: 700;
        }

        h1 {
            font-size: calc(2.5rem + 3vw);
            line-height: 0.9;
            margin-bottom: 1.5rem;
        }

        h2 {
            font-size: 3.5rem;
            color: #222;
            margin-bottom: 3rem;
            position: relative;
        }

        h2::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background: var(--primary-gradient);
            border-radius: 2px;
        }

        .text-primary {
            color: var(--accent-color) !important;
        }

        /* Modern Sidebar */
        .sidebar {
            width: 17rem;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1030;
            background-color: #000000;
            background-image: url("https://www.transparenttextures.com/patterns/45-degree-fabric-light.png");
            border-right: 1px solid rgba(255, 255, 255, 0.05);
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .main-content {
            left: 0;

        }

        .nav-link {
            font-weight: 700;
            letter-spacing: 0.1rem;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.4) !important;
            padding: 1rem 2rem;
            transition: 0.3s all;
            border-left: 4px solid transparent;
        }

        .nav-link:hover {
            color: #fff !important;
            padding-left: 2.5rem;
        }

        .nav-link.active {
            color: #fff !important;
            background: rgba(13, 110, 253, 0.1);
            border-left: 4px solid var(--accent-color);
        }

        /* Section Layouts */
        section.resume-section {
            padding: var(--section-padding);
            min-height: 100vh;
            display: flex;
            align-items: center;
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }

        section.resume-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Project Cards - Hover Magic */
        .project-card {
            border: none;
            border-radius: var(--card-radius);
            overflow: hidden;
            background: #fff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
            transition: all 0.5s cubic-bezier(0.165, 0.84, 0.44, 1);
            position: relative;
        }

        .project-card:hover {
            transform: translateY(-12px) scale(1.01);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
        }

        .carousel-item img {
            height: 400px;
            object-fit: contain;
            transition: transform 0.5s ease;

        }

        .project-card:hover .carousel-item img {
            transform: scale(1.05);
        }

        /* Badge Styling */
        .badge-tech {
            background-color: #f1f3f5;
            color: #495057;
            font-weight: 600;
            padding: 0.4rem 0.9rem;
            border-radius: 2rem;
            margin-right: 0.5rem;
            margin-bottom: 0.5rem;
            font-size: 0.75rem;
            border: 1px solid transparent;
            transition: 0.3s all;
            display: inline-block;
        }

        .project-card:hover .badge-tech {
            border-color: rgba(13, 110, 253, 0.2);
            background-color: #fff;
            color: var(--accent-color);
        }

        /* Social Icons */
        .social-icons .social-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            height: 3.5rem;
            width: 3.5rem;
            background-color: #f8f9fa;
            color: #333;
            border-radius: 12px;
            font-size: 1.4rem;
            margin-right: 1rem;
            text-decoration: none;
            transition: all 0.3s;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        .social-icons .social-icon:hover {
            background: var(--primary-gradient);
            color: #fff;
            transform: rotate(-8deg) translateY(-5px);
        }

        /* Buttons */
        .btn-custom {
            padding: 0.6rem 1.5rem;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 1px;
        }

        /* Skills Icon Grid */
        .skill-item {
            text-align: center;
            padding: 1.5rem;
            border-radius: 15px;
            transition: 0.3s all;
        }

        .skill-item:hover {
            background: #fff;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
        }

        .skill-item i {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            display: block;
        }

        @media (max-width: 992px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                padding: 2rem 0;
            }

            .main-content {
                margin-left: 0;
                width: 100%;
            }

            .sidebar .d-lg-block {
                display: block !important;
            }

            .nav {
                flex-direction: row !important;
                justify-content: center;
                flex-wrap: wrap;
            }

            .nav-link {
                padding: 0.5rem 1rem;
                border-left: none;
                border-bottom: 3px solid transparent;
            }

            .nav-link.active {
                border-left: none;
                border-bottom: 3px solid var(--accent-color);
            }
        }
    </style>

</head>


<body>
    <div id="scroll-progress"></div>
    <?php if (isset($content)) echo $content; ?>


</body>


<script>
    window.addEventListener('DOMContentLoaded', event => {

        // Activate Bootstrap scrollspy on the main nav element
        const sideNav = document.body.querySelector('#sideNav');
        if (sideNav) {
            new bootstrap.ScrollSpy(document.body, {
                target: '#sideNav',
                rootMargin: '0px 0px -40%',
            });
        };

        // Collapse responsive navbar when toggler is visible
        const navbarToggler = document.body.querySelector('.navbar-toggler');
        const responsiveNavItems = [].slice.call(
            document.querySelectorAll('#navbarResponsive .nav-link')
        );
        responsiveNavItems.map(function(responsiveNavItem) {
            responsiveNavItem.addEventListener('click', () => {
                if (window.getComputedStyle(navbarToggler).display !== 'none') {
                    navbarToggler.click();
                }
            });
        });

    });
</script>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->

<script>
    window.addEventListener('mousemove', (e) => {
        // Calculate how far the mouse is from the center of the screen
        const x = (window.innerWidth / 2 - e.clientX) / 50;
        const y = (window.innerHeight / 2 - e.clientY) / 50;

        document.body.style.setProperty('--move-x', x + 'px');
        document.body.style.setProperty('--move-y', y + 'px');
    });
</script>

</html>