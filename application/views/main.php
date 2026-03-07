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
            --primary-color: #0d6efd;
            --sidebar-bg: #212529;
            --section-padding: 5rem 2rem;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: #495057;
            overflow-x: hidden;
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
            font-size: 5rem;
            line-height: 1;
        }

        h2 {
            font-size: 3.5rem;
            color: #343a40;
        }

        .text-primary {
            color: var(--primary-color) !important;
        }

        /* Sidebar Navigation */
        .sidebar {
            width: 17rem;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1030;
            transition: all 0.3s;
            overflow-y: auto;
        }

        .main-content {
            margin-left: 17rem;
            width: calc(100% - 17rem);
        }

        .nav-link {
            font-weight: 800;
            letter-spacing: 0.05rem;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.5) !important;
            padding: 0.75rem 1rem;
        }

        .nav-link.active {
            color: #fff !important;
            background-color: var(--primary-color) !important;
        }

        /* Sections */
        section.resume-section {
            padding: var(--section-padding);
            border-bottom: 1px solid #dee2e6;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .resume-section-content {
            width: 100%;
        }

        /* Social Icons */
        .social-icons .social-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            height: 3.5rem;
            width: 3.5rem;
            background-color: #495057;
            color: #fff;
            border-radius: 100%;
            font-size: 1.5rem;
            margin-right: 1rem;
            text-decoration: none;
            transition: background-color 0.2s;
        }

        .social-icons .social-icon:hover {
            background-color: var(--primary-color);
        }

        /* Project Cards & Carousels */
        .project-card {
            border: none;
            border-radius: 1rem;
            overflow: hidden;
            background: #fff;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .project-card:hover {
            transform: translateY(-5px);
        }

        .carousel-item img {
            height: 350px;
            object-fit: cover;
        }

        .badge-tech {
            background-color: #e9ecef;
            color: #495057;
            font-weight: 600;
            padding: 0.5rem 0.8rem;
            border-radius: 0.5rem;
            margin-right: 0.5rem;
            margin-bottom: 0.5rem;
            font-size: 0.8rem;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .main-content {
                margin-left: 0;
                width: 100%;
            }

            h1 {
                font-size: 3.5rem;
            }

            h2 {
                font-size: 2.5rem;
            }
        }
    </style>

</head>


<body>
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

</html>